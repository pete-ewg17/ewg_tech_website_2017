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
    $('#back-to-top').tooltip('show');
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
, });
    AOS.init({
    disable: 'mobile'
});

/*===========
  FORM 
=============*/
$(function () {
    $('#contact-form').validator();
    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            var name = $("#contact_name").val();
            var phone = $("#contact_phone").val();
            var message = $("#contact_message").val();
            var email = $("#contact_email").val();
            $("#loading_div").css('display', 'block');
            $.post('contact.php', {
                n: name
                , p: phone
                , m: message
                , e: email
            }, function (result) {
                console.log(result);
                var j = $.parseJSON(result);
                if (j.result) {
                    $('#loading_div').css('display','none');
                    $('#submitButton').css('display','none');
                    var messageAlert = 'alert-' + j.type;
                    var messageText = j.message;
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
}); /* @Chris -- DOES IT GO AFTER THIS validation? */
/*===========
  Counter 
=============*/
$(document).ready(function () {
    $('.counter-num').counterUp({
        delay: 10
        , time: 1000
    });
});