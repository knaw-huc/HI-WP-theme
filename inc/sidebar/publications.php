<?php $posts = get_field('sidebar_related_publications'); ?>

<?php if($posts): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Gerelateerde publicaties</h4>

    <div class="sidebar__item__body">

      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

        <?php setup_postdata($post); ?>

        <?php
        $publicationTitle = get_the_title();
        $publicationURL = get_field('publication_url');

        if(empty($publicationURL) && isset(get_field('pure_publication')[0])) {
          $publicationURL = get_field('publication_url', get_field('pure_publication')[0]);
        }
        ?>

        <a href="<?= $publicationURL; ?>" target="_blank" class="sidebar__item__text-link">
          <?= $publicationTitle; ?>
        </a>
        <!-- end .sidebar__item__text-link -->

      <?php endforeach; ?>

      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>