<?php $types = get_the_terms($post, 'resource_type'); ?>
<?php $periods = get_the_terms($post, 'period'); ?>
<?php $posttags = get_the_tags(); ?>

<?php if ($types || $periods || $posttags) { ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Kenmerken</h4>

    <div class="sidebar__item__body">

      <div class="sidebar__item__text-holder sidebar__item__text-holder--filter-links">

        <?php if ($types) { ?>

          <p>
            <span>Type</span><br />

            <?php foreach($types as $type) { ?>
              <a href="<?= get_post_type_archive_link('resource'); ?>?rtype=<?php echo $type->term_id; ?>"><?php echo $type->name . ' '; ?></a><br />
            <?php } ?>

          </p>

        <?php } ?>

        <?php if ($periods) { ?>

          <p>
            <span>Periode</span><br />

            <?php foreach($periods as $period) { ?>
              <a href="<?= get_post_type_archive_link('resource'); ?>?rperiod=<?php echo $period->term_id; ?>"><?php echo $period->name . ' '; ?></a><br />
            <?php } ?>

          </p>

        <?php } ?>

        <?php if ($posttags) { ?>

          <p>
            <span>Onderwerp</span><br />

            <?php foreach($posttags as $tag) { ?>
              <a href="<?= get_post_type_archive_link('resource'); ?>?rtag=<?php echo $tag->term_id; ?>"><?php echo $tag->name . ' '; ?></a><br />
            <?php } ?>

          </p>

        <?php } ?>

      </div>
      <!-- end .sidebar__item__text-holder -->

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php } ?>