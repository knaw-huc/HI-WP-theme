<ul class="publication-overview__section__list">

  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

    <?php setup_postdata($post); ?>

    <?php $i++; ?>

    <?php
    $publicationTitle = get_the_title();
    $publicationURL = get_field('publication_url');

    if(empty($publicationURL) && isset(get_field('pure_publication')[0])) {
      $publicationURL = get_field('publication_url', get_field('pure_publication')[0]);
    }
    ?>

    <li class="publication-overview__section__list__item">
      <a href="<?= $publicationURL; ?>" target="_blank"><?= $publicationTitle; ?></a>
    </li>

  <?php endforeach; ?>

  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

</ul>

<?php if($i > 5) { ?>
  <a href="#" class="publication-overview__section__toggle"><?php _e('Bekijk meer', 'huygens'); ?></a>
<?php } ?>