<?php
$file_base = "../";
include $file_base."template_files/header.php";
$title = "Reports";
$desc = "Reports are a powerful feature of the Rosterfy system. The reporting page provides you with a summary of all key user functionality to quickly assess the progress of rosters, communications, training completion and timesheets";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Reports</h2>
          <p>Reports are a powerful feature of the Rosterfy system. The reporting page provides you with a summary of all key user functionality to quickly assess the progress of rosters, communications, training completion and timesheets.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Multiple Report Types</h2>
            <p class="tech-lead">Generate a wide range of report types with this upgrade. Here you can easily pull a report on database information, event sign ups, shift numbers and training completion. Get creative and toggle on the exact information you would like to pull. THe ultimate custom reports.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Multi_Reports.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Recent Reports &amp; Archive </h2>
              <p>Running a report will save it to your account, enabling your team of admins to access the report at anytime. After each type of report is run, you have the ability to refresh the same report into the future. Saving you time and giving you up to date information quickly.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Recent_Reports.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Request A Custom Report</h2>
            <p class="tech-lead">We are happy to consider specific reports suited to your needs. This can be provided as a feature upgrade. Please contact us to discuss further.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Shift_Import.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
    
        
      
      <!-- /END THE FEATURETTES -->
  <?php 
 include $file_base."template_files/footer.php";
 ?>