<?php
$file_base = "../";
$title = "Post Event Certificates";
$desc = "It's always nice to be thanked for a job well done! The certificate builder allows you to customize and send personalized certificates direct to your users.";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Post Event Certificates</h2>
          <p> It's always nice to be thanked for a job well done! The certificate builder allows you to customize and send personalized certificates direct to your users.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Customize &amp; Design</h2>
            <p class="tech-lead">Customize the height and width of your certificate. Upload a background image to stay on brand and get creative.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Certificate_Designer.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Add Elements</h2>
              <p>Add, edit and arrange images and text to sit on your certificate. This allows you to include sponsor logo's to help increase exposure for your partners.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Certificate_Elements.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Preview Certificate</h2>
            <p class="tech-lead">Preview the current layout or download the PDF version. This will give you peace of mind as well as the ability to individually email certificates externally in the future if needed.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Certificate_Preview.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
     
     <!-- /END THE FEATURETTES -->
  <?php 
 include $file_base."template_files/footer.php";
 ?>