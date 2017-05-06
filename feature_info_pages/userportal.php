<?php
$file_base = "../";
$title = "User Portal";
$desc = "The workforce are the life-blood of your event. Why not give them the resources they need. Rosterfy allows you to provide a dedicated portal for your users to access anytime.  It is the hub of all user involvement with your rosters, event information, news stories and personal details. Empower them to view all important information without needing to contact your workforce manager.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>User (Workforce) Portal Page</h2>
          <p> The workforce are the life-blood of your event. Why not give them the resources they need. Rosterfy allows you to provide a dedicated portal for your users to access anytime.  It is the hub of all user involvement with your rosters, event information, news stories and personal details. Empower them to view all important information without needing to contact your workforce manager.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">My Roles</h2>
            <p class="tech-lead">The My Roles section is where users can view, confirm or withdraw from their shifts. Help them easily check their shifts so there is never any confusion.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Roles.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>

      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Edit User Details</h2>
              <p>Users can edit and update their own personal information anytime. This process can save you hours and also helps ensure your database is up to date.</p>
              </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Profile.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>

      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Noticeboard</h2>
            <p class="tech-lead">Training, images and downloadable documents will appear under the noticeboard when set by the administrator. Keep your users in the loop with up to date documentation, feature stories and training links. Leave nothing to chance and give your workforce the resources they need.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Notice.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>Upcoming Events or Roles Section</h2>
              <p class="lead"> This setion is the core of the user portal. The upcoming opportunities section lets your users view opportunities to apply for. No longer do you need to recruit one event at a time, let your workforce apply for your next 12 months of events at once if you so desire. Talk about maximum recruiting power! </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_Event.png" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
     <!--EDIT ME--> 
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <h2 class="featurette-heading">Event History</h2> 
            <p class="tech-lead"> We love this feature! Allow your workforce to track the events they have worked. Whether it be a grandparent showing off to their grandson or a university student showing a potential employer their event experience. This feature keeps track of all events worked for each user and improves workforce retention dramatically. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/User_History.png" alt="Timesheets">
            </div>
          </div>
        </div>
  </div>
      <!-- /END THE FEATURETTES -->
 <?php 
 include $file_base."template_files/footer.php";
 ?>