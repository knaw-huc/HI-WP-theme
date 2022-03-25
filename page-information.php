<?php
/**
* Template name: Informatie
 */
?>

<?php get_header(); ?>

  <div class="page-heading">
    <h2><?php the_title(); ?></h2>
  </div>
  <!-- end .page-heading -->

  <div class="main">

    <?php
    $menuItems = wp_get_nav_menu_items('header-menu');
    ?>

    <div class="project-overview">

      <?php foreach( $menuItems as $menuItem ): ?>

        <?php if($menuItem->menu_item_parent != 0) { ?>

          <a href="<?= $menuItem->url; ?>" class="card card--default card--compact">

            <div class="card__visual">
              <?php echo wp_get_attachment_image(get_field('page_image', $menuItem->object_id)['id'], 'card--regular', 0, array('alt' => $menuItem->title)); ?>
            </div>
            <!-- end .card__visual -->

            <div class="card__info">

              <div class="card__info__section">
                <h6><?= $menuItem->title ?></h6>
              </div>
              <!-- end .card__info__section -->

            </div>
            <!-- end .card__info -->

          </a>
          <!-- end .card -->

        <?php } ?>

      <?php endforeach; ?>

    </div>
    <!-- end .project-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>