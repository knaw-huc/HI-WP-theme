// Carousel
$('.page-intro__carousel').owlCarousel({
  'items': 3,
  'loop': true,
  'margin': 32,
  'autoWidth': true,
  'center': true,
  'dots': false,
});

// Homepage carousel
$('.homepage-carousel').owlCarousel({
  'items': 1,
  'loop': true,
  // 'margin': 32,
  // 'autoWidth': true,
  // 'center': true,
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