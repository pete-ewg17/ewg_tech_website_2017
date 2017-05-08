<?php
$file_base = "../";
$title = "Shift or Team Leader Management";
$desc = "Sharing the responsibility for workforce management is a key part of a successful event. Within this feature, you can set both event wide or shift only leaders. With slightly different login permissions they can communicate, check in users and complete post event reports.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Team &amp; Shift Leader Management</h2>
          <p>Sharing the responsibility for workforce management is a key part of a successful event. Within this feature, you can set both event wide or shift only leaders. With slightly different login permissions they can communicate, check in users and complete post event reports.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Event Team Leaders</h2>
            <p class="tech-lead">When allocating users to an event, you can select a team leader. The team leader can then view all registered users and check them in onsite. Post event, the team leader can also send out a post event report and upload images for users to keep in their portal. </p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Checkin_Event.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Shift Leaders</h2>
              <p>Many events require the workforce to be spread across multiple locations without having to meet and check in at one location. Shift leader functionality allows you to allocate a leader to check in users within their shift no matter where they are located. This then provide the lead workforce management with visibility of shift check in numbers across the event. </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Shift_Leader.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Post Event Report</h2>
            <p class="tech-lead">After each event, the team leader has the ability to confirm attendance, submit a paragraph thank you their workforce and also upload images. This feature is a great way to send your thanks and also allows users to accumulate a list of event reports overtime.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Leader_Feedback.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>Certificates</h2>
              <p>The workforce manager will still have the final approval of post event reports submitted by team leaders. Once sent, the post event certificate will automatically appear in the 'Completed Events' section of a Users portal to download to PDF format. Forget the days of sending individual certificates to users post event! </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Certificate_Preview.png" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
     
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>