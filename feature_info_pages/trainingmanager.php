<?php
$file_base = "../";
$title = "Training Manager";
$desc = "Create important training content and quizzes to share with your users. Use this platfrom to share important Health and Safety training information. Build these into your User portals so that your workforce are trained and briefed before setting foot on the event site. Make sure your workforce have all the answers and give them adequate training to ensure this is the case. An external training link is also possible for your contractors not yet within Rosterfy.";
include $file_base."template_files/header.php";

?>
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Training Manager</h2>
          <p>Create important training content and quizzes to share with your users. Use this platfrom to share important Health and Safety training information. Build these into your User portals so that your workforce are trained and briefed before setting foot on the event site. Make sure your workforce have all the answers and give them adequate training to ensure this is the case. An external training link is also possible for your contractors not yet within Rosterfy.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Training Module Content</h2>
            <p class="tech-lead">The training modules give you full control on what your users are learning. These can be in text content, downloadable PDF or videos. Provide the content in the format best suited to your end users to make sure they can access and complete the training as easily as possible.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Training_Modules.png" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Training Content Quizzes</h2> 
            <p> Customise quiz questions your Workforce will need to answer once they have viewed your training content. The system provides the opportunity for you to select one of four options to be correct. Make them as easy or as hard as you would like! </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Training _Portal.png" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">External Contractor Training</h2>
            <p class="tech-lead">All events require external contractors. We also know how important it is to have these contractors trained on Health and Safety. Use our external training portal to give access to contractors to view content and complete relavant quiz questions. Contractors can then download a completion certificate for their records.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/External_Training .png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
     
  
      <!-- /END THE FEATURETTES -->
      
    <?php 
    
    include $file_base."template_files/footer.php";
 ?>