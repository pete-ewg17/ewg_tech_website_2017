<?php
$file_base = "../";
$title = "Advanced Search";
$desc = "All data within Rosterfy is searchable, including any custom questions that you create in your registration form. There are no limits on the amount of search parameters you can include, allowing your search to be as specific as you desire.";
include $file_base."template_files/header.php";

?>
  <!-- EDIT BELOW THIS LINE -->
  
  
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>Advanced Search</h2>
          <p>All data within Rosterfy is searchable, including any custom questions that you create in your registration form. There are no limits on the amount of search parameters you can include, allowing your search to be as specific as you desire.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Choose The Search</h2>
            <p class="tech-lead">Account, Event and Search Location. You can also choose a past search to re-load.</p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Search_Users.png" alt="Registration Form" style="background-size:cover; background-repeat:none;">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>Search Account</h2>
              <p> Run a search for multiple default and custom fields using search terms and unique logics. </p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Account_Search.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <h2 class="featurette-heading">Search Event</h2>
            <p class="tech-lead"> Search a specific event and filter by catergory and further search fields. </p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="300">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Event_Search.png" alt="Enhanced Communication with Phone">
            </div>
          </div>
        </div>
      </div>
      
      
      <!--EDIT ME-->
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <h2>Search Location &amp; Map Users</h2>
              <p>Searching by location allows you to search for users by their listed postcode.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true" data-aos-offset="400">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Map_Users1.png"" alt="Workforce Portals Platform">
            </div>
          </div>
      </div>
    </div>
     
      <!-- /END THE FEATURETTES -->
     <?php 
 include $file_base."template_files/footer.php";
 ?>