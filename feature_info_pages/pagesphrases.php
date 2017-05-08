<?php
$file_base = "../";
$title = "Phrases";
$desc = "Create unique content within pages and phrases to appear differently to users of your system";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Pages, Phrases &amp; More</h2>
          <p>This is the ultimate in system flexibility. Now you can adjust all content that appears on external facing pages. You can also edit phrases to make the portal fully reflect your tone of messaging and culture.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Phrases</h2>
            <p class="tech-lead">Customize variable wording (phrases) to appear differently within your portal. Over 40 phrases can be changed throughout the system to keep the wording consistent for your admin team.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Phrases.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Menus</h2>
              <p> Add additional menu items to your user portal navigation menu. As your workforce grows you may want to offer additional pages to share information, utilise this feature to make this possible.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/TM_Menus1.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>

     <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Footer Settings</h2>
            <p class="tech-lead">The footer is the section at the bottom of the portal page. With the correct set up, you can utilise the footer to share social media icons, support instructions and multiple link types.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Footer_Settings.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
     

      <!-- /END THE FEATURETTES -->
    <?php 
 include $file_base."template_files/footer.php";
 ?>