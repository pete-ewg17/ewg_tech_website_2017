<?php
$file_base = "../";
$title = "FAQ";
$desc = "FAQ Template Description";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>EWG Technology FAQ's</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A praesentium aperiam reiciendis architecto illo porro ratione sint unde minima cum. Ratione pariatur cum, error esse dolore aliquid illum neque accusantium.</p>      
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Lorem Ipsum</h2>
            <p class="tech-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos maxime voluptate repellendus sequi tempora cum, maiores mollitia, inventore, earum atque provident distinctio. Ex aspernatur quia velit dicta vitae molestiae quod.</p>
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
              <h2>Lorem Ipsum</h2>
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
            <h2 class="featurette-heading">Lorem Ipsum</h2>
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
              <h2>Lorem Ipsum</h2>
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