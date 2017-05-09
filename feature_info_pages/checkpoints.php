<?php
$file_base = "../";
$title = "Checkpoints";
$desc = "A checkpoint is a data capture point per user. You can add checkpoints to then cross off against users as they complete certain actions. This could include uniform pickup, radio pick up or simply for screending purposes. It's a very flexible, powerful feature to help screen and filter your workforce and can be reported on at any time";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Checkpoint Manager</h2>
          <p>A checkpoint is a data capture point per user. You can add checkpoints to then cross off against users as they complete certain actions. This could include uniform pickup, radio pick up or simply for screending purposes. It's a very flexible, powerful feature to help screen and filter your workforce and can be reported on at any time</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">User Tracking</h2>
            <p class="tech-lead">Checkpoints give you the flexibility to set data capture points for users. The purpose for a checkpoint can be dictated  by your event requirements. Ie. Uniform collection, radio pick up or shortlisting. Track everything you need with the confidence you can run specific tracking reports at a later date.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Tracking1.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Checkpoint Archive</h2>
              <p>As your workforce requirements grow, so to might your need to track certain User information. Each checkpoint you create can be archived and re-used at a later date. Don't waste time re-inventing the wheel!</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Checkpoint_Types1.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Check - In Mode Checkpoints</h2>
            <p class="tech-lead">Rosterfy Check-In Mode is the most efficient way to streamline your workforce on site check in process. The need may arise to distribute certian items to a user at this time. Rest assured we have you covered, with Checkpoints you can toggle on items to keep track of inventory on the event site and keep your workforce accountable </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Checkpoint_Checkin.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
     
      <!-- /END THE FEATURETTES -->
     <?php 
 include $file_base."template_files/footer.php";
 ?>