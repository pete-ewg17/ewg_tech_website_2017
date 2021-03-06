<?php
$file_base = "../";
$title = "SMS";
$desc = "Sending SMS is the most effective way to communicate with your workforce. You can send and track shift confirmations, important reminders and safety alerts during your event for the ultimate peace of mind.";
include $file_base."template_files/header.php";

?>
   
   <!--HEADER EDIT ME-->
  <div class="content-section-a white-top"  <?php if(isset($_GET['admin'])) { echo "style='padding-top:5em;'"; } ?>>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-12 text-center" data-aos="fade-left" data-aos-once="true">
          <h2>SMS</h2>
          <p>Sending SMS is the most effective way to communicate with your workforce. You can send and track shift confirmations, important reminders and safety alerts during your event for the ultimate peace of mind. </p>  
          * Fee per sent SMS applies based on location.    
        </div>
      </div>
    </div>
  </div>
      
      <!--EDIT ME-->
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div data-aos="fade-right" data-aos-once="true" class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">SMS History</h2>
            <p class="tech-lead">View your sent SMS history including delivery status, time, date and more. Keep track of who and when your workforce recieve SMS to have confidence your workforce are well informed. </p>
          </div>
            <div data-aos="fade-right" data-aos-once="true" class="col-md-5 col-md-pull-7">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/SMS_History.png" alt="Registration Form">
            </div>
          </div>
        </div>
      </div>
      
      <!--EDIT ME-->    
      <div class="content-section-a white">
        <div class="container">
          <div class="row featurette">
            <div class="col-md-7" data-aos="fade-left" data-aos-once="true">
              <h2>SMS Templates</h2>
              <p>Forget the days of re-typing the same message, now you can create a template, include merge tags and send the SMS to one or several hundred individuals at the click of a button.</p>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-once="true">
              <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/SMS_Templates.png" alt="Scheduling and Group Management">
            </div>
          </div>
      </div>
    </div>
      
     
     <!--EDIT ME--> 
      <div class="content-section-b blue">
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-push-5" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <h2 class="featurette-heading">Schedule SMS</h2> 
            <p class="tech-lead">Going to be onsite, or need to send an SMS while you are out of the office? Why not schedule an SMS to send when it is most convenient for your workforce to read and respond.</p>
          </div>
            <div class="col-md-5 col-md-pull-7" data-aos="fade-right" data-aos-once="true" data-aos-offset="500">
            <img class="featurette-image no-shadow img-responsive img-rounded" src="../assets/feature_info_images/Schedule_SMS2.png" alt="Timesheets">
            </div>
          </div>
        </div>
  </div>
      <!-- /END THE FEATURETTES -->
      
<?php
include $file_base."template_files/footer.php";
?>