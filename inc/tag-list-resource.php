<?php $types = get_the_terms($post, 'resource_type'); ?>
<?php $posttags = get_the_tags(); ?>

<?php if ($types || $posttags) { ?>

  <object>

    <div class="tag-list">

      <?php if ($types) { ?>

        <?php foreach($types as $type) { ?>
          <a href="<?= get_post_type_archive_link('resource'); ?>?rtype=<?php echo $type->term_id; ?>" class="tag-list__item tag-list__item--type"><?php echo $type->name . ' '; ?></a>
        <?php } ?>

      <?php } ?>

      <?php if ($posttags) { ?>

        <?php $i = 0; ?>

        <?php foreach($posttags as $tag) { ?>

          <?php if($i < 2) { ?>
            <a href="<?= get_post_type_archive_link('resource'); ?>?rtag=<?php echo $tag->term_id; ?>" class="tag-list__item"><?php echo $tag->name . ' '; ?></a>
            <?php $i++; ?>
          <?php } ?>

        <?php } ?>

      <?php } ?>

    </div>
    <!-- end .tag-list -->

  </object>

<?php } ?>