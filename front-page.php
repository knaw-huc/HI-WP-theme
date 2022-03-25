<?php get_header(); ?>

  <div class="homepage-intro">

    <div class="homepage-intro__text">
      <?php the_field('intro_text'); ?>
    </div>
    <!-- end .homepage-intro__text -->

    <div class="project-filter">

      <div class="project-filter__button-holder">
        <a class="project-filter__button project-filter__button--yellow" href="<?= get_post_type_archive_link('project'); ?>?thema=debatcultuur"><?php _e('Debatcultuur', 'huygens'); ?></a>
        <a class="project-filter__button project-filter__button--orange" href="<?= get_post_type_archive_link('project'); ?>?thema=bestuur-van-nederland"><?php _e('Bestuur van Nederland', 'huygens'); ?></a>
        <a class="project-filter__button project-filter__button--blue" href="<?= get_post_type_archive_link('project'); ?>?thema=vernieuwing-editeren"><?php _e('Vernieuwing editeren', 'huygens'); ?></a>
        <a class="project-filter__button project-filter__button--green" href="<?= get_post_type_archive_link('project'); ?>?thema=impact-of-circulation"><?php _e('Impact of Circulation', 'huygens'); ?></a>
      </div>
      <!-- end .project-filter__button-holder -->

    </div>
    <!-- end .project-filter -->

  </div>
  <!-- end .homepage-intro -->

  <div class="main">

    <div class="homepage-heading">
      <h4 class="homepage-heading__text"><?php _e('Uitgelicht', 'huygens'); ?></h4>
    </div>
    <!-- end .homepage-heading -->

    <?php include(get_template_directory() . '/inc/homepage-carousel.php'); ?>

  </div>
  <!-- end .main -->

  <?php $posts = get_field('featured_resources'); ?>

  <?php if($posts): ?>

    <div class="main">

      <div class="homepage-heading">
        <h4 class="homepage-heading__text"><?php _e('Resources', 'huygens'); ?></h4>
        <a class="homepage-heading__button" href="<?= get_post_type_archive_link('resource'); ?>"><?php _e('Bekijk alle resources', 'huygens'); ?></a>
      </div>
      <!-- end .homepage-heading -->

      <div class="project-overview">

        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

          <?php setup_postdata($post); ?>

          <?php include(get_template_directory() . '/inc/homepage-resource-card.php'); ?>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

      </div>
      <!-- end .project-overview -->

    </div>
    <!-- end .main -->

  <?php endif; ?>

  <div class="newsletter">

    <h4 class="newsletter__heading"><?php _e('Schrijf je in voor de nieuwsbrief', 'huygens'); ?></h4>

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
      <form action="https://knaw.us5.list-manage.com/subscribe/post?u=a63356907976be035ff6cb4f5&amp;id=060fbba545" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
        <div id="mc_embed_signup_scroll"><input class="required email" id="mce-EMAIL" name="EMAIL" placeholder="Jouw emailadres" type="email" value="" />
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a63356907976be035ff6cb4f5_060fbba545" tabindex="-1" value=""></div>
          <input class="button" id="mc-embedded-subscribe" name="subscribe" type="submit" value="<?php _e('Abonneren', 'huygens'); ?>" /></div>
        </form>
      </div>
      <!--End mc_embed_signup-->

  </div>
  <!-- end .newsletter -->

<?php get_footer(); ?>