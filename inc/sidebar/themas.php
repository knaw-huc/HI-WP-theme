<div class="sidebar__item">

  <h4 class="sidebar__item__heading"><?php _e('Afdelingen', 'huygens'); ?></h4>

  <div class="sidebar__item__body">

    <?php
    $themas = wp_get_post_terms($post->ID, 'thema');

    foreach($themas as $thema) {
      include(get_template_directory() . '/inc/get-theme-color.php');
      echo '<a href="' . get_term_link($thema) .'" class="sidebar__item__button sidebar__item__button--' . $themaColor . '">' . $thema->name . '</a>';
    }
    ?>

  </div>
  <!-- end .sidebar__item__body -->

</div>
<!-- end .sidebar__item -->