<?php
$file_base = "../";
$title = "Interview Platform";
$desc = "For the ultimate in workforce screening, you can utilise the Rosterfy interview platform. This is set up to allow individuals to record question responses in face to face interviews via multiple device types. These answers will then appear in a users profile, providing your workforce manager with all the information to accurately screen and select your best users.";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Interview Platform</h2>
          <p>For the ultimate in workforce screening, you can utilise the Rosterfy interview platform. This is set up to allow individuals to record question responses in face to face interviews via multiple device types. These answers will then appear in a users profile, providing your workforce manager with all the information to accurately screen and select your best users.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Interviewer Script</h2>
            <p class="tech-lead">Customize your interview questions and welcome script. This gives you the control over what you would like your interviewer to speak about in the face to face interview.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Interview_Script.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Preview Page</h2>
              <p>Before publishing the interview portal, you have the option to preview the page and edit any information. The portal will also be branded to your look and feel.   </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Interview_Preview.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Summary Page</h2>
            <p class="tech-lead">Automatically collate a list of users who have completed their interview and view their responses. This overview page easily lets you track responses and feedback. Use this to streamline the screening process based on your requirements. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Interview_Complete.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
          
  
     

      <!-- /END THE FEATURETTES -->
  <?php 
 include $file_base."template_files/footer.php";
 ?>