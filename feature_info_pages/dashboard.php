<?php
$file_base = "../";
$title = "Workforce Analytics";
$desc = "As a workforce manager, having full visibility over your workforce analytics is the ultimate peace of mind. Within the Premium and Enterprise package, the dashboard offers you valuable graphs and data. Track total users, event and shift applications, upcoming events and incoming SMS messages.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Workforce Analytics</h2>
          <p>As a workforce manager, having full visibility over your workforce analytics is the ultimate peace of mind. Within the Premium and Enterprise package, the dashboard offers you valuable graphs and data. Track total users, event and shift applications, upcoming events and incoming SMS messages.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Workforcer Activity Chart</h2>
            <p class="tech-lead">Track new users, event applications, shift confirmations and rejections within the detailed chart available. Use this to track the response from recruitment email campaigns you send out.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Dashboard_Graph.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Upcoming Events List</h2>
              <p>View a quick snapshot of your upcoming events and staffing levels. You can also run a quick search to focus on spcecific events. This is best used when you are looking to quickly find out how sign up numbers are tracking.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Upcoming_Events.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Recent Email Activity</h2>
            <p class="tech-lead">Use the Google Map integration to view the latest email open activity by geographic area. Let this help you oversee the success of your email campaigns. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Email_History.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>SMS Center</h2>
              <p>Track SMS responses from your users with ease. Make sure you don't miss important messages with this quick view feature.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/SMS_History.png" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>