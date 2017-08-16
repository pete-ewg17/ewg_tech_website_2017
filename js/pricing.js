/*=================
  CURRENCY CONVERTER
==================*/

// AJAX request
$.ajax({
  type: "GET",
  url: "https://api.fixer.io/latest?base=USD&symbols=AUD",
  data: {},
  success: function(data) {
      var currency = data;
      $("#audPrice").data('exrate',currency.rates.AUD);
  },
  error: function(x, e) { console.log(e); }
});

//listen for change of radio button
$(".chooseprice").change(function() {
	//as they will technically both change, one to on, one to off, this function is called for both. therefore we need to check for...check
	 if($(this).is(":checked"))
        {
        //get the exchange rate stored in the data attr
        var exchange_rate = $(this).data('exrate');
        	//make sure not -1 (ie api hasnt loaded yet)
       		if(exchange_rate != "-1") {
       			//go to each cost field and update rate*original value
        		$(".cost").each(function() {
        			$(this).html(Math.round(exchange_rate*$(this).data('orig')));
        		});
        	}
        }
});