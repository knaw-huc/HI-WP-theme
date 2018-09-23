<?php
$available_periods = array();
$available_tags = array();

$args = array(
  'post_type' => 'project',
  'posts_per_page' => '-1',
);

query_posts($args);
?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php
    $periods = wp_get_post_terms($post->ID, 'period');

    foreach($periods as $period) {
      $available_periods[] = $period->term_id;
    }

    $posttags = get_the_tags();

    if ($posttags) {
      foreach($posttags as $tag) {
        $available_tags[] = $tag->term_id;
      }
    }
    ?>

  <?php endwhile; ?>
<?php endif; ?>

<div class="project-filter">

  <h4 class="project-filter__heading"><?php _e('Filter onderzoeksprojecten', 'huygens'); ?></h4>

  <div class="project-filter__button-holder">

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'debatcultuur') { ?>
      <a class="project-filter__button project-filter__button--active" href="?"><?php _e('Debatcultuur', 'huygens'); ?></a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--yellow" href="?thema=debatcultuur"><?php _e('Debatcultuur', 'huygens'); ?></a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'bestuur-van-nederland') { ?>
      <a class="project-filter__button project-filter__button--active" href="?"><?php _e('Bestuur van Nederland', 'huygens'); ?></a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--orange" href="?thema=bestuur-van-nederland"><?php _e('Bestuur van Nederland', 'huygens'); ?></a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'vernieuwing-editeren') { ?>
      <a class="project-filter__button project-filter__button--active" href="?"><?php _e('Vernieuwing editeren', 'huygens'); ?></a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--blue" href="?thema=vernieuwing-editeren"><?php _e('Vernieuwing editeren', 'huygens'); ?></a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'circulation-of-impact') { ?>
      <a class="project-filter__button project-filter__button--active" href="?"><?php _e('Circulation of Impact', 'huygens'); ?></a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--green" href="?thema=circulation-of-impact"><?php _e('Circulation of Impact', 'huygens'); ?></a>
    <?php } ?>

  </div>
  <!-- end .project-filter__button-holder -->

  <?php if(isset($_GET['thema'])) { ?>

    <?php
    $thema = get_term_by('slug', $_GET['thema'], 'thema');
    ?>

    <div class="project-filter__information">
      <?php the_field('thema_short_description', $thema); ?>
      <a href="<?= get_term_link($thema); ?>"><?php _e('Meer over dit thema', 'huygens'); ?></a>
    </div>
    <!-- end .project-filter__information -->

  <?php } ?>

  <div class="project-filter__select-holder">

    <?php
    $periods = get_terms(array(
      'taxonomy' => 'period',
      'hide_empty' => true,
      'include' => $available_periods,
    ));

    if(is_array($periods)) :
    ?>

      <div class="select-wrapper">

        <span></span>

        <select class="period">

          <?php if(isset($_GET['period'])) { ?>
            <option value="" disabled><?php _e('Periode', 'huygens'); ?></option>
          <?php } else { ?>
            <option value="" selected disabled><?php _e('Periode', 'huygens'); ?></option>
          <?php } ?>

          <?php foreach($periods as $period) : ?>

            <?php if(isset($_GET['period']) && $_GET['period'] == $period->slug) { ?>
              <option value="<?= $period->slug; ?>" selected><?= $period->name; ?></option>
            <?php } else { ?>
              <option value="<?= $period->slug; ?>"><?= $period->name; ?></option>
            <?php } ?>

          <?php endforeach; ?>

        </select>

      </div>
      <!-- end .select-wrapper -->

    <?php endif; ?>

    <?php
    $tags = get_terms(array(
      'taxonomy' => 'post_tag',
      'hide_empty' => true,
      'include' => $available_tags,
    ));

    if(is_array($tags)) :
    ?>

      <div class="select-wrapper">

        <span></span>

        <select class="tag">

          <?php if(isset($_GET['tag'])) { ?>
            <option value="" disabled><?php _e('Tag', 'huygens'); ?></option>
          <?php } else { ?>
            <option value="" selected disabled><?php _e('Tag', 'huygens'); ?></option>
          <?php } ?>

          <?php foreach($tags as $tag) : ?>

            <?php if(isset($_GET['tag']) && $_GET['tag'] == $tag->slug) { ?>
              <option value="<?= $tag->slug; ?>" selected><?= $tag->name; ?></option>
            <?php } else { ?>
              <option value="<?= $tag->slug; ?>"><?= $tag->name; ?></option>
            <?php } ?>

          <?php endforeach; ?>

        </select>

      </div>
      <!-- end .select-wrapper -->

    <?php endif; ?>

  </div>
  <!-- end .project-filter__select-holder -->

</div>
<!-- end .project-filter -->