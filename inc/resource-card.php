<a href="<?php the_permalink(); ?>" class="card card--bar">

  <div class="card__visual">
    <?php echo prepare_for_lazyload(wp_get_attachment_image(get_field('page_image')['id'], 'card--regular', 0, array('alt' => get_the_title()))); ?>
  </div>
  <!-- end .card__visual -->

  <div class="card__info">

    <div class="card__info__section">
      <h6><?php the_title(); ?></h6>
    </div>
    <!-- end .card__info__section -->

    <div class="card__info__section">

      <?php include('tag-list-resource.php'); ?>

    </div>
    <!-- end .card__info__section -->

  </div>
  <!-- end .card__info -->

  <?php if(get_field('sidebar_resource_url')): ?>

    <object>
      <a href="<?php the_field('sidebar_resource_url'); ?>" target="_blank" class="card__button">
        <span class="card__button__text">Bekijk resource</span>
        <span class="card__button__icon"></span>
      </a>
    </object>

  <?php endif; ?>

</a>
<!-- end .card -->