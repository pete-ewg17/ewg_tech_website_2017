<?php
$file_base = "../";
$title = "Checkpoints";
$desc = "A checkpoint is an admin side user information point. You can add checkpoints to then cross off against users as they do certain actions";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Checkpoint Manager</h2>
          <p>A checkpoint is an admin side user information point. You can add checkpoints to then cross off against users as they do certain actions.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">User Tracking</h2>
            <p class="tech-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos maxime voluptate repellendus sequi tempora cum, maiores mollitia, inventore, earum atque provident distinctio. Ex aspernatur quia velit dicta vitae molestiae quod.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Tracking.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Automated Checkpoints</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere aperiam veritatis odio voluptate cum, excepturi blanditiis, quam amet ea laudantium est consectetur incidunt enim nihil maiores officia fugiat totam facilis?</p>
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
            <h2 class="featurette-heading">Check Point Types</h2>
            <p class="tech-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laboriosam saepe doloribus nisi delectus quibusdam nulla iste repellendus aut fuga laudantium minima voluptate labore ipsam eveniet, enim ipsum pariatur, sint!</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
     
      <!-- /END THE FEATURETTES -->
     <?php 
 include $file_base."template_files/footer.php";
 ?>