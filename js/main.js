// Carousel
$('.page-intro__carousel').owlCarousel({
  'items': 3,
  'loop': true,
  'margin': 32,
  'autoWidth': true,
  'center': true,
  'dots': false,
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