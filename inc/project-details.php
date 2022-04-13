<?php if(get_field('project_detail_duration') || get_field('project_detail_subsidy_provider') || get_field('project_detail_subsidy_size') || get_field('project_detail_remarkable') || get_field('project_detail_valorisation')) : ?>

  <table cellpadding="0" cellspacing="0">

    <?php if(get_field('project_detail_duration')) : ?>

      <tr>
        <td><?php _e('Looptijd', 'huygens'); ?>:</td>
        <td><?php the_field('project_detail_duration'); ?></td>
      </tr>

    <?php endif; ?>

    <?php if(get_field('project_detail_subsidy_provider')) : ?>

      <tr>
        <td><?php _e('Subsidieverstrekker', 'huygens'); ?>:</td>
        <td><?php the_field('project_detail_subsidy_provider'); ?></td>
      </tr>

    <?php endif; ?>

    <?php if(get_field('project_detail_subsidy_size')) : ?>

      <tr>
        <td><?php _e('Subsidieomvang', 'huygens'); ?>:</td>
        <td><?php the_field('project_detail_subsidy_size'); ?></td>
      </tr>

    <?php endif; ?>

    <?php if(get_field('project_detail_remarkable')) : ?>

      <tr>
        <td><?php _e('Opvallend', 'huygens'); ?>:</td>
        <td><?php the_field('project_detail_remarkable'); ?></td>
      </tr>

    <?php endif; ?>

    <?php if(get_field('project_detail_valorisation')) : ?>

      <tr>
        <td><?php _e('Valorisatie', 'huygens'); ?>:</td>
        <td><?php the_field('project_detail_valorisation'); ?></td>
      </tr>

    <?php endif; ?>

  </table>

<?php endif; ?>