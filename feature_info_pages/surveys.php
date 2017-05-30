<?php
$file_base = "../";
$title = "Surveys";
$desc = "Want to know what your Workforce are thinking? With our Survey platform you can collect feedback to keep improving your events and looking after your workforce.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Surveys</h2>
          <p>Want to know what your Workforcers are thinking? With our event specific survey platform, you can collect feedback to keep improving your events and be safe having the knowledge at hand to improve your workforcers on your next event.</p>
          
          
          
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"> Build Surveys into your Workflow</h2>
            <p class="tech-lead">Include Surveys into your Workforce Workflow. Whether it be after a training session, or post event, Surveys are a great tool to make your Workoforce feel like their voice is heard. </p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Survey.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Question Types</h2>
              <p>There are 5 different types of questions that can be added to your survey. Whether it be a check box, text field or dropdown, make sure you customise your survey to capture the most relevant data possible. </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Survey_QTypes.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Export Survey Results</h2>
            <p class="tech-lead">Download and analyze your survey results. This can be done via your survey portal or also by exporting responses into spreadsheet format. Store these results to reference in future years to continue improving your workforce experience.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Survey_Results.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      <!-- /END THE FEATURETTES -->
    <?php 
 include $file_base."template_files/footer.php";
 ?>
