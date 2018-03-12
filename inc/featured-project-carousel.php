<?php
$posts = get_field('featured_projects', 'options');

$carousel_items_mobile = array();
$carousel_items_desktop = array();
?>

<?php if( $posts ): ?>

  <?php $i = 0; ?>
  <?php $j = 0; ?>

  <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

    <?php
    $carousel_items_mobile[] = $p->ID;
    $carousel_items_desktop[$i][$j] = $p->ID;

    if($j < 1) {
      $j++;
    } else {
      $i++;
      $j = 0;
    }
    ?>

  <?php endforeach; ?>

<?php endif; ?>

<div class="page-intro__carousel page-intro__carousel--desktop owl-carousel">

  <?php if($carousel_items_desktop): ?>

    <?php foreach( $carousel_items_desktop as $carousel_items_desktop_item): ?>

      <div class="page-intro__carousel__item">

        <?php foreach( $carousel_items_desktop_item as $post): // variable must be called $post (IMPORTANT) ?>

          <?php setup_postdata($post); ?>

          <?php include(get_template_directory() . '/inc/project-card-thumbnail.php'); ?>

        <?php endforeach; ?>

      </div>
      <!-- end .page-intro__carousel__item -->

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

  <?php endif; ?>

</div>
<!-- end .page-intro__carousel -->

<div class="page-intro__carousel page-intro__carousel--mobile owl-carousel">

  <?php if($carousel_items_mobile): ?>

    <?php foreach( $carousel_items_mobile as $post): // variable must be called $post (IMPORTANT) ?>

      <?php setup_postdata($post); ?>

      <div class="page-intro__carousel__item">

        <?php include(get_template_directory() . '/inc/project-card-thumbnail.php'); ?>

      </div>
      <!-- end .page-intro__carousel__item -->

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

  <?php endif; ?>

</div>
<!-- end .page-intro__carousel -->