<a href="<?php the_permalink(); ?>" class="card card--default">

  <div class="card__visual">
    <?php echo wp_get_attachment_image(get_field('page_image')['id'], 'card--regular', 0, array('alt' => get_the_title())); ?>
  </div>
  <!-- end .card__visual -->

  <div class="card__info">

    <div class="card__info__section">
      <span><?php the_time('d-m-Y'); ?></span>
      <h6><?php the_title(); ?></h6>
    </div>
    <!-- end .card__info__section -->

    <div class="card__info__section">

      <?php include('tag-list.php'); ?>

    </div>
    <!-- end .card__info__section -->

  </div>
  <!-- end .card__info -->

</a>
<!-- end .card -->