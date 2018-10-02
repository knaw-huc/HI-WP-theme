<?php
$selected_types = array();
$selected_periods = array();
$selected_tags = array();

if(isset($_GET['rtype'])) {
  $selected_types = explode(' ', $_GET['rtype']);
}

if(isset($_GET['rperiod'])) {
  $selected_periods = explode(' ', $_GET['rperiod']);
}

if(isset($_GET['rtag'])) {
  $selected_tags = explode(' ', $_GET['rtag']);
}
?>

<?php
$available_types = array();
$available_periods = array();
$available_tags = array();

$args = array(
  'post_type' => 'resource',
  'posts_per_page' => '-1',
);

query_posts($args);
?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php
    $types = wp_get_post_terms($post->ID, 'resource_type');

    foreach($types as $type) {
      $available_types[] = $type->term_id;
    }

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

<div class="resource-overview__filter-holder">

  <?php
  $types = get_terms(array(
    'taxonomy' => 'resource_type',
    'hide_empty' => true,
    'include' => $available_types,
  ));
  ?>

  <?php if(is_array($types)) : ?>

    <div class="resource-overview__filter">

      <h4 class="resource-overview__filter__heading"><?php _e('Type', 'huygens'); ?></h4>

      <div class="resource-overview__filter__body">

        <?php foreach($types as $type) : ?>

          <label class="resource-overview__filter__body__item control checkbox">

            <?php if(in_array($type->term_id, $selected_types)) { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rtype" value="<?= $type->term_id; ?>" checked>
            <?php } else { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rtype" value="<?= $type->term_id; ?>">
            <?php } ?>

            <span class="control-indicator"></span>
            <span class="resource-overview__filter__body__item__text"><?= $type->name; ?></span>
          </label>
          <!-- end .resource-overview__filter__body__item -->

        <?php endforeach; ?>

        <?php if(isset($_GET['rtype']) && strlen($selected_types[0]) > 0) { ?>
          <a href="" class="resource-overview__filter__body__button"><?php _e('Wis selectie', 'huygens'); ?></a>
        <?php } ?>

      </div>
      <!-- end .resource-overview__filter__body -->

    </div>
    <!-- end .resource-overview__filter -->

  <?php endif; ?>

  <?php
  $periods = get_terms(array(
    'taxonomy' => 'period',
    'hide_empty' => true,
    'include' => $available_periods,
  ));
  ?>

  <?php if(is_array($periods)) : ?>

    <div class="resource-overview__filter">

      <h4 class="resource-overview__filter__heading"><?php _e('Periode', 'huygens'); ?></h4>

      <div class="resource-overview__filter__body">

        <?php foreach($periods as $period) : ?>

          <label class="resource-overview__filter__body__item control checkbox">

            <?php if(in_array($period->term_id, $selected_periods)) { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rperiod" value="<?= $period->term_id; ?>" checked>
            <?php } else { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rperiod" value="<?= $period->term_id; ?>">
            <?php } ?>

            <span class="control-indicator"></span>
            <span class="resource-overview__filter__body__item__text"><?= $period->name; ?></span>
          </label>
          <!-- end .resource-overview__filter__body__item -->

        <?php endforeach; ?>

        <?php if(isset($_GET['rperiod']) && strlen($selected_periods[0]) > 0) { ?>
          <a href="" class="resource-overview__filter__body__button"><?php _e('Wis selectie', 'huygens'); ?></a>
        <?php } ?>

      </div>
      <!-- end .resource-overview__filter__body -->

    </div>
    <!-- end .resource-overview__filter -->

  <?php endif; ?>

  <?php
  $tags = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => true,
    'include' => $available_tags,
  ));
  ?>

  <?php if(is_array($tags)) : ?>

    <div class="resource-overview__filter">

      <h4 class="resource-overview__filter__heading"><?php _e('Onderwerp', 'huygens'); ?></h4>

      <div class="resource-overview__filter__body">

        <?php foreach($tags as $tag) : ?>

          <label class="resource-overview__filter__body__item control checkbox">

            <?php if(in_array($tag->term_id, $selected_tags)) { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rtag" value="<?= $tag->term_id; ?>" checked>
            <?php } else { ?>
              <input class="resource-overview__filter__body__item__button" type="checkbox" name="rtag" value="<?= $tag->term_id; ?>">
            <?php } ?>

            <span class="control-indicator"></span>
            <span class="resource-overview__filter__body__item__text"><?= $tag->name; ?></span>
          </label>
          <!-- end .resource-overview__filter__body__item -->

        <?php endforeach; ?>

        <?php if(isset($_GET['rtag']) && strlen($selected_tags[0]) > 0) { ?>
          <a href="" class="resource-overview__filter__body__button"><?php _e('Wis selectie', 'huygens'); ?></a>
        <?php } ?>

      </div>
      <!-- end .resource-overview__filter__body -->

    </div>
    <!-- end .resource-overview__filter -->

  <?php endif; ?>

</div>
<!-- end .resource-overview__filter -->