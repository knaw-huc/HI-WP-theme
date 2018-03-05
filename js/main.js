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
  'smartSpeed': 400,
  'margin': 24,
  'autoWidth': true,
  'center': true,
  'dots': false,
  'nav': true,
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