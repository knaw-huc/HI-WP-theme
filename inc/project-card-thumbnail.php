<a href="<?php the_permalink(); ?>" class="card card--default card--thumbnail">

  <div class="card__visual image-filter image-filter--white">

    <?php echo wp_get_attachment_image(get_field('page_image')['id'], 'card-thumbnail--regular', 0, array('alt' => get_the_title())); ?>

    <div class="card__visual__markers">

      <?php
      $themas = wp_get_post_terms($post, 'thema');

      foreach($themas as $thema) {

        if($thema->slug == 'bestuur-van-nederland') {
          $themaColor = 'orange';
        } else if($thema->slug == 'impact-of-circulation') {
          $themaColor = 'green';
        } else if($thema->slug == 'debatcultuur') {
          $themaColor = 'yellow';
        } else if($thema->slug == 'vernieuwing-editeren') {
          $themaColor = 'blue';
        } else if($thema->slug == 'thema-5') {
          $themaColor = 'purple';
        } else if($thema->slug == 'databeheer') {
          $themaColor = 'brown';
        }

        echo '<div class="card__visual__markers__item card__visual__markers__item--' . $themaColor . '"></div>';

      }
      ?>

    </div>
    <!-- end .card__visual__markers -->

  </div>
  <!-- end .card__visual -->

  <div class="card__info">

    <div class="card__info__section">
      <h6><?php the_title(); ?></h6>
    </div>
    <!-- end .card__info__section -->

    <?php if(get_field('project_description')) { ?>

      <div class="card__info__section">
        <p><?php the_field('project_description'); ?></p>
      </div>
      <!-- end .card__info__section -->

    <?php } ?>

    <div class="card__info__section">

      <?php include('tag-list.php'); ?>

    </div>
    <!-- end .card__info__section -->

  </div>
  <!-- end .card__info -->

</a>
<!-- end .card -->