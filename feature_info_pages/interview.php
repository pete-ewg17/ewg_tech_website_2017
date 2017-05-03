<?php
$file_base = "../";
$title = "Interview Platform";
$desc = "Conduct interviews using our interactive interview platform to record users responses.";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Interview Platform</h2>
          <p>Conduct interviews using our interactive interview platform to record users responses.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Setup</h2>
            <p class="tech-lead">Customize the height and width of your certificate and upload a background for the certificate. </p>
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
              <h2>Preview</h2>
              <p>Preview your interview page which includes your script and questions. </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Completed</h2>
            <p class="tech-lead">View a list of users who have completed their interview. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
          
          <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Daily Paraphrases</h2>
              <p>Use daily paraphrases...</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
     

      <!-- /END THE FEATURETTES -->
  <?php 
 include $file_base."template_files/footer.php";
 ?>