<?php
$file_base = "../";
$title = "Why Upgrade?";
$desc = "Your Starter account allows you to recruit your workforce and build your database. Soon enough, you will want to begin scheduling these individuals for events. By upgrading to our Base, Premium or Enterprise packages you will unlock a range of powerful features to streamline the event application process.";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top" <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Why Upgrade?</h2>
          <p>Your Starter account allows you to recruit your workforce and build your database. Soon enough, you will want to begin scheduling these individuals for events. By upgrading to our Base, Premium or Enterprise packages you will unlock a range of powerful features to streamline the event application process.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Base Package</h2>
            <p class="tech-lead"> Base Model offers the core functions necassary to add events, schedule your workforce and keep them engaged. A giant step up from Excel Spreadsheets with the ability to use your branding more professionally.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
             <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Training _Portal.png" alt="Scheduling and Group Management">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Premium Package</h2>
              <p> In additon to Base package features, our Premium package unlocks many of Rosterfy's most impactful functionality. We know  60% of any workforce managers time is spent communicating to staff and volunteers. Premium features give you access to the full suite of email and SMS communications. Group Manager also allows you to recruit on mass to save hours or recruiting effort. </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Schedule_SMS2.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
          
  </div>

<!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Enterprise Package</h2>
            <p class="tech-lead"> In addition to Premium Package features, the enterprise package offers the full suite of Rosterfy's industry leading functions. Our unique workforce workflow model means each feature plays a core role in delivering the ultimate workforce management program. The Super Bowl and World Masters Games have revolutionised their workforce programs with our Enterprise package features. Ask us how!</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
             <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/images/rosterfy/rosterfy_login_2.png" alt="Scheduling and Group Management">
            </div>
          </div>
        </div>
      </div>



      <!-- /END THE FEATURETTES -->
    <?php include $file_base."template_files/footer.php"; ?>
