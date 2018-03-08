<?php $types = get_the_terms($post, 'resource_type'); ?>
<?php $posttags = get_the_tags(); ?>

<?php if ($types || $posttags) { ?>

  <div class="tag-list">

    <?php if ($types) { ?>

      <?php foreach($types as $type) { ?>
        <!-- TODO: This should link to a pre-filtered resource overview -->
        <div class="tag-list__item tag-list__item--type">Vakliteratuur</div>
      <?php } ?>

    <?php } ?>

    <?php if ($posttags) { ?>

      <?php foreach($posttags as $tag) { ?>
        <!-- TODO: This should link to a pre-filtered resource overview -->
        <div class="tag-list__item"><?php echo $tag->name . ' '; ?></div>
      <?php } ?>

    <?php } ?>

  </div>
  <!-- end .tag-list -->

<?php } ?>