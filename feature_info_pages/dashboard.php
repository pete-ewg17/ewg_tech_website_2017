<?php
$file_base = "../";
$title = "Workforce Analytics";
$desc = "The Dashboard is your central hub of user activity. Track total users, event and shift applications, upcoming events and incoming SMS messages.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Workforce Analytics</h2>
          <p>The Dashboard is your central hub of user activity. Track total users, event and shift applications, upcoming events and incoming SMS messages.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Workforcer Activity</h2>
            <p class="tech-lead">Track new users, applpications, confirms and rejections in the last month in the detailed chart. </p>
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
              <h2>Upcoming Events</h2>
              <p>View a quick snapshot of your upcoming events and staff levels. You can also run a quick search. </p>
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
            <p class="tech-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laboriosam saepe doloribus nisi delectus quibusdam nulla iste repellendus aut fuga laudantium minima voluptate labore ipsam eveniet, enim ipsum pariatur, sint!</p>
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
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>SMS Center</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat impedit, perferendis dolorum at maxime! Doloremque dignissimos facilis voluptates fugiat repellat ea placeat voluptate laboriosam, id nisi, eveniet consectetur distinctio debitis!</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
     <!--EDIT ME--> 
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <h2 class="featurette-heading">Lorem Ipsum</h2> 
            <p class="tech-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem tempore exercitationem nesciunt harum maxime vel aspernatur ex, recusandae laboriosam est blanditiis aut, aliquid molestiae molestias consectetur ut nisi iste reprehenderit.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <img class="featurette-image img-responsive img-rounded" src="http://placehold.it/600/500" alt="Timesheets">
            </div>
          </div>
        </div>
  </div>
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>