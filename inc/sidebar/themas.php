<div class="sidebar__item">

  <h4 class="sidebar__item__heading">Gerelateerde thema’s</h4>

  <div class="sidebar__item__body">

    <?php
    $themas = wp_get_post_terms($post->ID, 'thema');

    foreach($themas as $thema) {

      if($thema->slug == 'bestuur-van-nederland') {
        $themaColor = 'orange';
      } else if($thema->slug == 'circulation-of-impact') {
        $themaColor = 'green';
      } else if($thema->slug == 'debatcultuur') {
        $themaColor = 'yellow';
      } else if($thema->slug == 'vernieuwing-editeren') {
        $themaColor = 'blue';
      }

      echo '<a href="' . get_term_link($thema) .'" class="sidebar__item__button sidebar__item__button--' . $themaColor . '">' . $thema->name . '</a>';

    }
    ?>

  </div>
  <!-- end .sidebar__item__body -->

</div>
<!-- end .sidebar__item -->