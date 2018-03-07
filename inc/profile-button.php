<a href="<?php the_permalink(); ?>" class="profile-button">

  <div class="profile-button__portrait image-filter">
    <?php echo wp_get_attachment_image(get_field('profile_image')['id'], 'profile-button--regular', 0, array('alt' => get_the_title())); ?>
  </div>
  <!-- end .profile-button__portrait -->

  <div class="profile-button__text">
    <span class="profile-button__text__title"><?php the_field('profile_title'); ?></span>
    <span class="profile-button__text__name"><?php the_title(); ?></span>
    <span class="profile-button__text__function"><?php the_field('profile_function'); ?></span>
  </div>
  <!-- end .profile-button__text -->

</a>
<!-- end .profile-button -->