/*=================

  CURRENCY CONVERTER

==================*/

$('#audPrice').click(function(){
    alert("Im aussie")
});


$(".chooseprice").change(function() {
	var currency = $(this).data('currency');
});

$.ajax({
  type: "GET",
  url: "https://api.fixer.io/latest?base=USD&symbols=AUD",
  data: {},
  success: function(result) {
    console.log(result)
    $('pre').text(JSON.stringify(result, 0, 2));
    var j = $.parseJSON(result);
  },
  error: function(x, e) { console.log(e); }
});
