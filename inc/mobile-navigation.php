<?php
$menuItems = wp_get_nav_menu_items('header-menu');
?>

<ul class="navigation navigation--pages">

  <?php foreach( $menuItems as $menuItem ): ?>

    <?php if($menuItem->menu_item_parent == 0) { ?>

      <li class="navigation__item">

        <?php if($menuItem->title == 'Onderzoeksprojecten') { ?>
          <a href="<?= $menuItem->url; ?>" class="navigation__item__button <?php if(is_post_type_archive('project')) { echo 'is-active'; } ?>"><?= $menuItem->title ?></a>
        <?php } else if($menuItem->title == 'Resources') { ?>
          <a href="<?= $menuItem->url; ?>" class="navigation__item__button <?php if(is_post_type_archive('resource')) { echo 'is-active'; } ?>"><?= $menuItem->title ?></a>
        <?php } else if($menuItem->title == 'Informatie') { ?>
          <a href="<?= $menuItem->url; ?>" class="navigation__item__button navigation__item__button--has-sub <?php if($post->ID == $menuItem->object_id) { echo 'is-active'; } ?>"><?= $menuItem->title ?></a>
        <?php } else { ?>
          <a href="<?= $menuItem->url; ?>" class="navigation__item__button <?php if($post->ID == $menuItem->object_id) { echo 'is-active'; } ?>"><?= $menuItem->title ?></a>
        <?php } ?>

      </li>
      <!-- end .navigation__item -->

    <?php } ?>

  <?php endforeach; ?>

</ul>
<!-- end .navigation -->