<?php
$file_base = "../";
$title = "File Manager";
$desc = "Whether it be a Word, Excel or PDF file, this feature allows you to upload a file for storage in Rosterfy. This file depository then allows you to attach files to emails, events and user portals to streamline all communications and keep files organised.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>File Manager</h2>
          <p> File manager is your file repository. Typically you would need to attach seperate files to emails, but this feature now allows you to hyperlink files to emails, events and user portals to streamline all communications and keep files organised. </p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">File Types</h2>
            <p class="tech-lead"> We have seen it all before and therefore cater for a wide range of file types. Files can be any of the following: doc, docx, xls, xlsx, pdf, ppt, jpg, JPG, jpeg, png, gif, up to 4MB.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/FIle_Manager4.png" style="background-size:cover;">
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
              <p>Images are a great way to bring your account to life. The image library lets you upload images to your account so you can later add these to emails, news stories and event pages.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow fixed-size img-responsive img-rounded" src="../assets/feature_info_images/File_Image.png" style="margin-top: 30px" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Display files in User Portals</h2>
            <p class="tech-lead">Keeping your workforce informed is an integral step to a successful event. When adding a new file (map, briefing doc etc) you can opt to have the file appear within the user portal. These can be seperated by user groups to control what users can and cannot see.</p>
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