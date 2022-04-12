<?php
$profileTitle = get_the_title();
$profileURL = get_the_permalink();
$profileProfileType = get_field('profile_type');
$profileProfileImage = get_field('profile_image');
$profileProfileTitle = get_field('profile_title');
$profileProfileFunction = get_field('profile_function');
$profileProfileEmployer = get_field('profile_employer');
$profileProfileURL = get_field('profile_url');

if(empty($profileProfileType) && isset(get_field('pure_profile')[0])) {
  $profileProfileType = get_field('profile_type', get_field('pure_profile')[0]);
}

if(empty($profileProfileImage) && isset(get_field('pure_profile')[0])) {
  $profileProfileImage = get_field('profile_image', get_field('pure_profile')[0]);
}

if(empty($profileProfileTitle) && isset(get_field('pure_profile')[0])) {
  $profileProfileTitle = get_field('profile_title', get_field('pure_profile')[0]);
}

if(empty($profileProfileFunction) && isset(get_field('pure_profile')[0])) {
  $profileProfileFunction = get_field('profile_function', get_field('pure_profile')[0]);
}

if(empty($profileProfileEmployer) && isset(get_field('pure_profile')[0])) {
  $profileProfileEmployer = get_field('profile_employer', get_field('pure_profile')[0]);
}

if(empty($profileProfileURL) && isset(get_field('pure_profile')[0])) {
  $profileProfileURL = get_field('profile_url', get_field('pure_profile')[0]);
}
?>

<?php if($profileProfileType == 'internal' || empty($profileProfileType)) : ?>
  <a href="<?= $profileURL; ?>" class="profile-button">
<?php elseif($profileProfileType == 'external' && !empty($profileProfileURL)) : ?>
  <a href="<?= $profileProfileURL; ?>" target="_blank" class="profile-button">
<?php else : ?>
  <span class="profile-button">
<?php endif; ?>

  <div class="profile-button__portrait image-filter">

    <?php if($profileProfileImage) { ?>
      <?php echo wp_get_attachment_image($profileProfileImage['id'], 'profile-button--regular', 0, array('alt' => $profileTitle)); ?>
    <?php } else { ?>
        <img width="160" height="160" src="<?php bloginfo('template_url'); ?>/img/profile-anonymous.png" class="attachment-profile-button--regular size-profile-button--regular" alt="<?= $profileTitle; ?>" />
    <?php } ?>

  </div>
  <!-- end .profile-button__portrait -->

  <div class="profile-button__text">

    <span class="profile-button__text__title"><?= $profileProfileTitle; ?></span>

    <?php if(is_singular('profile')) : ?>
      <h1 class="profile-button__text__name"><?= $profileTitle; ?></h1>
    <?php else : ?>
      <span class="profile-button__text__name"><?= $profileTitle; ?></span>
    <?php endif; ?>

    <?php if($profileProfileType == 'external' && !empty($profileProfileEmployer)) : ?>
      <span class="profile-button__text__function"><?= $profileProfileFunction; ?> <?php _e('bij', 'huygens'); ?> <?= $profileProfileEmployer; ?></span>
    <?php else : ?>
      <span class="profile-button__text__function"><?= $profileProfileFunction; ?></span>
    <?php endif; ?>

  </div>
  <!-- end .profile-button__text -->

<?php if($profileProfileType == 'internal' || empty($profileProfileType)) : ?>
  </a>
  <!-- end .profile-button -->
<?php elseif($profileProfileType == 'external' && !empty($profileProfileURL)) : ?>
  </a>
  <!-- end .profile-button -->
<?php else : ?>
  </span>
  <!-- end .profile-button -->
<?php endif; ?>