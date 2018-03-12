<?php $types = get_the_terms($post, 'resource_type'); ?>
<?php $posttags = get_the_tags(); ?>

<?php if ($types || $posttags) { ?>

  <object>

    <div class="tag-list">

      <?php if ($types) { ?>

        <?php foreach($types as $type) { ?>
          <!-- TODO: This should link to a pre-filtered resource overview -->
          <div class="tag-list__item tag-list__item--type">Vakliteratuur</div>
        <?php } ?>

      <?php } ?>

      <?php if ($posttags) { ?>

        <?php $i = 0; ?>

        <?php foreach($posttags as $tag) { ?>

          <?php if($i < 2) { ?>
            <!-- TODO: This should link to a pre-filtered resource overview -->
            <div class="tag-list__item"><?php echo $tag->name . ' '; ?></div>
            <?php $i++; ?>
          <?php } ?>

        <?php } ?>

      <?php } ?>

    </div>
    <!-- end .tag-list -->

  </object>

<?php } ?>