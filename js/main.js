// Lazyload
lazyload();

// Navigation
$('.js-open-search').click(function(e) {
  $('.header').toggleClass('header--search');
  $('.search-form__input').focus();
  e.preventDefault();
});

$('.js-close-search').click(function(e) {
  $('.header').toggleClass('header--search');
  e.preventDefault();
});

// Mobile navigation
$('.js-toggle-mobile-navigation').click(function(e) {
  $('.mobile-navigation').toggleClass('is-active');
  e.preventDefault();
});

// Carousel
$('.page-intro__carousel').owlCarousel({
  'loop': true,
  'smartSpeed': 600,
  'margin': 24,
  'autoWidth': true,
  'center': true,
  'dots': false,
  'nav': true,
  'autoplay': true,
  'autoplayTimeout': 3000,
  'autoplayHoverPause': true,
  'responsive': {
    768: {
      'margin': 32,
    },
  },
});

// Homepage carousel
$('.homepage-carousel').owlCarousel({
  'items': 1,
  'loop': true,
  'dots': true,
});

// Custom select elements
$('.select-wrapper select').each(function() {
  var selectedOptionText = $(this).find('option:selected').text();
  $(this).parent().find('span').text(selectedOptionText);
});

$('.select-wrapper select').change(function() {
  var selectedOptionText = $(this).find('option:selected').text();
  $(this).parent().find('span').text(selectedOptionText);
});

// Publication overview
$('.publication-overview__section__toggle').click(function(e) {

  $(this).prev().addClass('is-open');
  $(this).addClass('is-hidden');

  e.preventDefault();

});

// Sidebar
$('.sidebar__item__heading').click(function(e) {
  $(this).parent().toggleClass('is-active');
  e.preventDefault();
});

// Resource overview filter
$('.resource-overview__filter__heading').click(function(e) {
  $(this).parent().toggleClass('is-active');
  e.preventDefault();
});

// Responsive embeds
$('.text-holder iframe').wrap('<div class="embed"></div>').parent().fitVids({
  customSelector: 'iframe[src*="facebook"]',
});

// Project filter
var currentPage = document.location.protocol + '//' + window.location.hostname + window.location.pathname + '?';
var redirectPage;

$('.project-filter select').change(function() {

  redirectPage = currentPage;

  // Dropdown: Period
  if ($('.project-filter select.period').find('option:selected').val()) {
    redirectPage += 'period=' + $('.project-filter select.period').find('option:selected').val() + '&';
  }

  // Dropdown: Tag
  if ($('.project-filter select.tag').find('option:selected').val()) {
    redirectPage += 'tag=' + $('.project-filter select.tag').find('option:selected').val() + '&';
  }

  window.location.href = redirectPage;

});

// Resource filter
var currentPage = document.location.protocol + '//' + window.location.hostname + window.location.pathname + '?';
var redirectPage;

function updateResourceOverview() {

  redirectPage = currentPage;

  // Checkbox: Type
  redirectPage += 'rtype=';

  $('.resource-overview__filter__body__item__button[name="rtype"]:checked').each(function(index, el) {
    redirectPage += $(el).val() + '+';
  });

  redirectPage += '&';

  // Checkbox: Periode
  redirectPage += 'rperiod=';

  $('.resource-overview__filter__body__item__button[name="rperiod"]:checked').each(function(index, el) {
    redirectPage += $(el).val() + '+';
  });

  redirectPage += '&';

  // Checkbox: Onderwerp
  redirectPage += 'rtag=';

  $('.resource-overview__filter__body__item__button[name="rtag"]:checked').each(function(index, el) {
    redirectPage += $(el).val() + '+';
  });

  redirectPage += '&';

  window.location.href = redirectPage;

}

$('.resource-overview__filter__body__item__button').change(function() {
  updateResourceOverview();
});

// Resource filter reset
$('.resource-overview__filter__body__button').click(function(e) {
  $(this).parent().find('input').attr('checked', false);
  updateResourceOverview();
  e.preventDefault();
});