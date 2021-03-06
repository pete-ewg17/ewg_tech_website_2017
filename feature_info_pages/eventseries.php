<?php
$file_base = "../";
$title = "Event Series";
$desc = "Event series is a powerful tool allowing you to segment your event types to remain on brand with their look and feel and communications to your workforce";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Event Series</h2>
          <p>Event series is a powerful tool allowing you to segment your event types to remain on brand with their look and feel and communications to your workforce.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Custom Look and Feel</h2>
            <p class="tech-lead">You control the branding images, colour schemes and email templates. This feature lets you publicly advertise event pages consistent with the branding requirements.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Event_Series2.png" alt="Scheduling and Group Management">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Email Templates</h2>
              <p> Create specific emails to be sent for multiple event series. Update the the content, header and footer graphics to reflect the branding of the event series.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Email_Template.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Training Modules</h2>
            <p class="tech-lead"> Training Modules often need to be specific to an event type. This custom feature provides you with the ability to generate training material specific to any event series within your account.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Training _Portal.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>Registration Settings </h2>
              <p class="lead"> Setup a unique registration page and gather data from users registering based on a specific brand or event series. Recruit for multiple event types at the one time while keeping each event series independent when your workforce register.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Preview_Rego.png" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
     <!--EDIT ME--> 
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <h2 class="featurette-heading">Certificate Setup</h2> 
            <p class="tech-lead"> Customize your post event certificates to be branded for each event series. We know how much your workforcers will love their branded certificates! Helping to encourage them to come back for the next event.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Certificate_Designer.png" alt="Timesheets">
            </div>
          </div>
        </div>
  </div>
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>
