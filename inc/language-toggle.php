<?php if (function_exists('pll_the_languages')) : ?>
  <ul class="language-toggle"><?php pll_the_languages();?></ul>
<?php else : ?>
  <ul class="language-toggle">
    <li class="lang-item lang-item-12 lang-item-nl current-lang lang-item-first">
      <a  lang="nl-NL" hreflang="nl-NL" href="#">NL</a>
    </li>
    <li class="lang-item lang-item-10 lang-item-en">
      <a  lang="en-US" hreflang="en-US" href="#">EN</a>
    </li>
  </ul>
<?php endif; ?>