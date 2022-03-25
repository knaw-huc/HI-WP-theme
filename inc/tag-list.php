<?php $posttags = get_the_tags(); ?>

<?php if ($posttags) { ?>

  <?php $i = 0; ?>

  <object>

    <div class="tag-list">

      <?php foreach($posttags as $tag) { ?>

        <?php if($i < 3) { ?>

          <a href="<?= get_post_type_archive_link('project'); ?>?tag=<?= $tag->slug; ?>" class="tag-list__item"><?php echo $tag->name . ' '; ?></a>

          <?php $i++; ?>

        <?php } ?>

      <?php } ?>

    </div>
    <!-- end .tag-list -->

  </object>

<?php } ?>