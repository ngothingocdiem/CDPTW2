// slider range
$(function () {
  
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 500000, format:'C2',
    values: [0, 500000],
    slide: function (event, ui) {
      $("#amount").val(
        "($)." + ui.values[0] + "($)." + ui.values[1]
      );
    },
  });
  $("#amount").val(
    "($)." +
      $("#slider-range").slider("values", 0) +
      "                 ($)." +
      $("#slider-range").slider("values", 1)
  );
  
  
});

// multi select
$(document).ready(function() {
  $('.js-example-basic-multiple').select2({
    placeholder: "Type or select some options",
    // allowClear: true // nút x để tắt placeholder
  });
 
});