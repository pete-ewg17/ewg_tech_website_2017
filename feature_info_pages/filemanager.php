<?php
$file_base = "../";
$title = "File Manager";
$desc = "File Manager allows you to upload a file for storage on our system. This then allows you to attach these files to emails, events and user portals.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>File Manager</h2>
          <p>File Manager allows you to upload a file for storage on our system. This then allows you to attach these files to emails, events and user portals. </p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Types of Files</h2>
            <p class="tech-lead">Files can be any of the following: doc, docx, xls, xlsx, pdf, ppt, jpg, JPG, jpeg, png, gif, up to 4MB.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/File_Manager4.png" style="background-size:cover;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Upload Images</h2>
              <p>You can also upload images here to appear in the image library which allows you to add images to emails, news stories and event pages.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/File_Image.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Show in Portal</h2>
            <p class="tech-lead">When adding a new file, you can opt to have the file appear sit on the portal. This can be found under the Noticeboard section of the portal. You also limit files to groups.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Upload_Noticeboard.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
        
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>