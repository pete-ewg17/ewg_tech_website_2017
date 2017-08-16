/*=================
  CURRENCY CONVERTER
==================*/


// $(".chooseprice").change(function() {
// 	var currency = $(this).data('currency');
// });


//var prices
var price1 = 99;
var price2 = 499;

// ajax request
$.ajax({
  type: "GET",
  url: "https://api.fixer.io/latest?base=USD&symbols=AUD",
  data: {},
  success: function(data) {
      var currency = data;
      console.log(currency.rates.AUD);
      var aud_one = $(".price1").html("$" + ( currency.rates.AUD * price1).toFixed(2.5));
      var aud_two = $(".price2").html("$" + ( currency.rates.AUD * price2).toFixed(2.5));

  },
  error: function(x, e) { console.log(e); }
});

$("#usdPrice").change(function(){
  $(".price1").html("$99");
  $(".price2").html("$499")
});
