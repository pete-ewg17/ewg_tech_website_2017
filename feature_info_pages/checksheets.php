<?php
$file_base = "../";
$title = "Check In Sheets";
$desc = "Check In Sheets are a generated report showing each user for each shift at an event with columns for sign in and sign out.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Check In Sheets</h2>
          <p>Check In Sheets are a generated report showing each user for each shift at an event with columns for sign in and sign out.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Segment &amp; Filter </h2>
            <p class="tech-lead">Segment by event or location and filter further using shift categories.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Fields</h2>
              <p>Simply toggle on user, account, system, event and shift fields to appear in your check in sheet.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Multi_Reports.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Download &amp; Print</h2>
            <p class="tech-lead">Simply dowload your check in sheets from your recent reports list and print ready for event site. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="http://placehold.it/600/500" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>