<?php if (is_multisite()) { ?>

  <?php
  $site_id_nl = 1;
  $site_id_en = 5;

  $languageToggleURL = '#';
  $linkedElements = get_linked_elements();

  if(get_current_blog_id() === 1) {

    $locale = 'nl_NL';
    $languageToggleVisualAlign = 'left';

    if(isset($linkedElements[$site_id_en])) {
      $languageToggleURL = get_language_link($site_id_en, $linkedElements[$site_id_en]);
    } else {
      $languageToggleURL = get_home_url($site_id_en) . '?noredirect=' . mlp_get_blog_language($site_id_nl, false);
    }

  } else {

    $locale = 'en_US';
    $languageToggleVisualAlign = 'right';

    if(isset($linkedElements[$site_id_nl])) {
      $languageToggleURL = get_language_link($site_id_nl, $linkedElements[$site_id_nl]);
    } else {
      $languageToggleURL = get_home_url($site_id_nl) . '?noredirect=' . mlp_get_blog_language($site_id_en, false);
    }
  }
  ?>

  <a href="<?= $languageToggleURL; ?>" class="language-toggle">
    <span class="language-toggle__label">NL</span>
    <div class="language-toggle__visual language-toggle__visual--align-<?= $languageToggleVisualAlign; ?>">
      <div class="language-toggle__visual__inner"></div>
    </div>
    <span class="language-toggle__label">EN</span>
  </a>
  <!-- end .language-toggle -->

<?php } ?>