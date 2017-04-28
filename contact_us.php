<?php
$file_base = "";
include $file_base."template_files/header.php";
$title = "Contact Us";
$desc = "Contact EWG";
?>
    
    <!-- Header -->
    <!--<a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8" data-aos="fade-right" data-aos-once="true">
                    <div class="intro-message text-left">
                       <h2>Welcome To</h2>
                       <h1>Event Workforce Group</h1>
                         <h1>Technology</h1>
                        
                            <div class="rw-wrapper">
                                  
                                    <span>we simplify</span>
                                    <div class="rw-words rw-words-1">
                                       <span>Running Events</span>
                                        <span>Management</span>
                                        <span>Rostering</span>
                                        <span>Accreditation</span>
                                        <span>Event Training</span>
                                    </div>
                            </div>
                          
                        
                        <div class="button">
                           <a href="#whatwedo" class="btn btn-primary btn-outline hvr-fade">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- /.container -->

    <!-- </div>/.intro-header -->   
    
    <!-- Page Content -->
    
  <div class="content-section-a white-top">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-7">
          <h2>Contact Us</h2>
              <p>Here at Event Workforce Group we are happy to answer any questions that you may have in relation to your upcoming event.</p> 
              <p>Please feel free to use the form below or contact us <a href="mailto:hello@rosterfy.co" target="_blank"><span class="mail-link">here</span></a> for anything we can help with.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/ewg_team.jpg" alt="Generic placeholder image">
        </div>
      </div>
    </div>
  </div>   
    
    <!--CONTACT FORM-->
    <div class="content-section-b">
        <div class="container">
            <div class="row">
               <div id= "loading_div" style= "display:none">LOADING</div>
               <div id= "submitted_div" style= "display:none">Submitted</div>
                <div class="col-md-6" data-aos="fade-right" data-aos-once="true">
                   <!--FORM-->
                   <div class="form-container">
                       <h2>Get In Touch</h2>
                    <form id="contact-form" method="post" role="form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" data-toggle="validator" role="form">
                                            <label for="form_name">Name*</label>
                                            <input id="contact_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email*</label>
                                            <input id="contact_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div> 
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone">Phone*</label>
                                            <input id="contact_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your number" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    </div>
                                    <input type="hidden" id="tech_contact" value="contact_us">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message*</label>
                                            <textarea id="contact_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="row">    
                                        <div class="col-md-6">
                                            <a class="btn btn-success btn-send" id="submitButton">Send Message</a>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div><!-- END CONTACT FORM-->

                <!--IMAGE-->    
                    <div class="col-md-6" data-aos="fade-left" data-aos-once="true">
                        <img src="assets/images/iphone_photo.png" class="iphone-photo">
                   </div>                      
                </div>      
        </div>
    </div>
<?php include $file_base."template_files/footer.php"; ?>