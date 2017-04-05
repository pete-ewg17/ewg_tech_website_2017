/*===========
  BACK TO TOP 
=============*/
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        }
        else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});


/*=================
  SMOOTH SCROLL
=================*/
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

/*=================
  ANIMATE ON SCROLL
=================*/
    AOS.init({
    duration: 1200
    });
    AOS.init({
    disable: 'mobile'
});

/*===========
  FORM 
=============*/
$(function () {
    $('.send_contact').validator();
    $('.send_contact').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            var f = $(this).serializeArray();
            $("#loading_div").css('display', 'block');
            $.post(url, {
                fields:f
            }, function (result) {
                location.replace("thankyou.html");
            });
            return false;
        }
    });
}); /* @Chris -- DOES IT GO AFTER THIS validation? */

/*===========
  Counter 
=============*/
$(document).ready(function () {
    $('.counter-num').counterUp({
        delay: 10,
        time: 1000
    });
});
