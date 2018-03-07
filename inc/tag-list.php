<?php $posttags = get_the_tags(); ?>

<?php if ($posttags) { ?>

  <div class="tag-list">

    <?php foreach($posttags as $tag) { ?>
      <div class="tag-list__item"><?php echo $tag->name . ' '; ?></div>
    <?php } ?>

  </div>
  <!-- end .tag-list -->

<?php } ?>