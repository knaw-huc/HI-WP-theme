<?php
/*
Plugin Name: Huygen Pure sync
Description: This plug-in syncs profile & publication data
Version: 1.0.0
*/

namespace Plugin\Vruchtvlees\HuygensPure;

class Plugin
{
    const VERSION = '1.0.0';

    private $endpoint = 'https://pure.knaw.nl/ws/rest/';
    private $organisation_uuids = [
        'f4c1fa82-9617-49a2-b5e2-9fe61b5314b0', // Huygens ING
        '47084c68-64d1-4ae1-8df6-b15220b6430d', // Letterkunde (HI)
        '42837887-92ea-4111-802d-7d6635b869dd', // Wetenschapsgeschiedenis (HI)
        '865436cb-754f-4ce3-a6b0-b44d02d9f523', // Geschiedenis (HI)
        'f0d551fc-a6ef-4749-b85c-9659250effd5', // Digital Data Management (HI)
        '699f94be-20a1-4e7a-8ddd-34f9c1dc0192', // ICT (HI)
    ];
    private $namespace = [
        'core' => 'http://atira.dk/schemas/pure4/model/core/stable',
        'person' => 'http://atira.dk/schemas/pure4/model/template/abstractperson/stable',
        'publication' => 'http://atira.dk/schemas/pure4/model/template/abstractpublication/stable',
    ];

    public function __construct()
    {
        add_action('huygens_pure_sync_all', [$this, 'syncAll']);
        add_action('wp_loaded', [$this, 'scheduleSync'], PHP_INT_MAX, 1);
    }

    public static function getInstance()
    {
        static $instance;

        if ($instance === null) {
            $instance = new Plugin();
        }

        return $instance;
    }

    public function scheduleSync()
    {
        if(!wp_next_scheduled('huygens_pure_sync_all')) {
            wp_schedule_event(current_time('timestamp'), 'hourly', 'huygens_pure_sync_all');
        }
    }

    public function syncAll()
    {
        $this->syncPersons();
        $this->syncPublications();
    }

    private function build_query($queryData)
    {
        return preg_replace('/%5B(?:[0-9]|[1-9][0-9]+)%5D=/', '=', http_build_query($queryData));
    }

    public function syncPersons()
    {
        $queryData = [
            'associatedOrganisationUuids.uuid' => $this->organisation_uuids,
            'window.size' => 99999,
            'state' => 'active'
        ];

        $persons = simplexml_load_file(
            $this->endpoint.'person?'.$this->build_query($queryData),
            'SimpleXMLElement',
            0,
            $this->namespace['core']
        );

        foreach($persons->result->content as $content)
        {
            $person = $content->children($this->namespace['person']);
            $personName = $person->name->children($this->namespace['core']);

            $pureProfileQuery = new \WP_Query([
                'post_type' => 'profile_pure',
                'meta_query' => [
                    [
                        'key' => 'uuid',
                        'value' => (string) $content->attributes()->uuid
                    ]
                ]
            ]);

            $postId = null;

            if($pureProfileQuery->have_posts())
            {
                $pureProfileQuery->the_post();
                $post = get_post();
                $postId = $post->ID;
            }

            wp_insert_post([
                'ID' => $postId ?: 0,
                'post_title' => (string) $personName->firstName.' '.(string) $personName->lastName,
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'profile_pure',
                'meta_input' => [
                    'uuid' => (string) $content->attributes()->uuid
                ]
            ]);
        }
    }

    public function syncPublications()
    {
        $queryData = [
            'associatedOrganisationUuids.uuid' => $this->organisation_uuids,
            'window.size' => 99999,
            'state' => 'active'
        ];

        $publications = simplexml_load_file(
            $this->endpoint.'publication?'.$this->build_query($queryData),
            'SimpleXMLElement',
            0,
            $this->namespace['core']
        );

        foreach($publications->result->content as $content)
        {
            $publication = $content->children($this->namespace['publication']);

            $purePublicationQuery = new \WP_Query([
                'post_type' => 'publication_pure',
                'meta_query' => [
                    [
                        'key' => 'uuid',
                        'value' => (string) $content->attributes()->uuid
                    ]
                ]
            ]);

            $postId = null;

            if($purePublicationQuery->have_posts())
            {
                $purePublicationQuery->the_post();
                $post = get_post();
                $postId = $post->ID;
            }

            $profile_uuids = [];

            foreach($publication->persons->children($this->namespace['person']) as $person) {
                $profile_uuids[] = (string) $person->person->attributes()->uuid;
            }

            wp_insert_post([
                'ID' => $postId ?: 0,
                'post_title' => (string) $publication->title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'publication_pure',
                'meta_input' => [
                    'uuid' => (string) $content->attributes()->uuid,
                    'profile_uuid' => implode(',', $profile_uuids),
                    'publication_url' => (string) $content->portalUrl
                ]
            ]);
        }
    }
}

Plugin::getInstance();
