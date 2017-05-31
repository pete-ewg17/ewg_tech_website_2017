<?php
$file_base = "";
$title = "Demo";
$desc = "Cutting edge software to manage your event staff online. Including registration, online training and communication with event staff";
include $file_base."template_files/header.php";

?>  
    <!-- DEMO CONTACT -->
    <div class="content-section-b">
      <div class="container">
           <div class="row">
        <div class="modal-body">
            <div class="col-md-12 col-lg-offset-2">
               
               <div class="row">
                <div class="col-md-8">
                   <h2>Request A Demo</h2>
                   
                   <p class="demo-body">A simplified event isn't far away! Leave your details below and we will get in touch with a customised demonstration.</p>
                  
                  <h2>Want to speak with our sales team?</h2>
                                <p class="demo-body">U.S.A Office: <a href="tel:+14159419842" style="color: #fff;">+1 415 941 9842</a></p>
                                <p class="demo-body">Australian Office: <a href="tel:0415370744" style="color:#fff;">+61 415 370 744</a></p>
               </div>
                </div>    
                <br>
                <form id="demo" method="post" name="demo" class='send_contact' role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group" data-toggle="validator" role="form">
                                    <label for="form_name">Full Name*</label>
                                    <input id="contact_name" type="text" name="name" class="form-control" placeholder="Jane Workforce" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group" data-toggle="validator" role="form">
                                    <label for="org_name"> Organisation Name*</label>
                                    <input id="org_name" type="text" name="org_name" class="form-control" placeholder="Please enter your organisation" required="required" data-error="Organisation is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form_name">Email*</label>
                                    <input id="contact_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form_phone">Phone*</label>
                                    <input id="contact_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="sel1">Type of Event or Organisation?*</label>
                                    <select name='event_type'>
                                        <option value="national">National or State Sporting Body</option>
                                        <option value="sporting">Sporting Commision or City Council</option>
                                        <option value="private">Private Event Organising Company</option>
                                        <option value="charity">Charity or Not for Profit</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="sel2">Within the next 12 months how many events would you like our solution to help you with?</label>
                                    <select name='how_many'>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6+</option>
                                        <option value="7">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Which EWG Tech product are you interested in finding out more about?</label>
                                    <br>
                                    <input type="checkbox" id="checkbox_type1" name="rosterfy">
                                    <label class="checkbox-inline" for="checkbox_type1">Rosterfy </label>
                                    <br>
                                    <input type="checkbox" id="checkbox_type2" name="accreditation">
                                    <label for="checkbox_type2" class="checkbox-inline">Accreditation Platform</label>
                                    <br>
                                    <input type="checkbox" id="checkbox_type3" name="training">
                                    <label for="checkbox_type3" class="checkbox-inline">Training Modules</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form_message">Please provide a more detailed description of your needs, we would be very grateful.</label>
                                    <textarea id="contact_message" name="message" class="form-control" placeholder="Message for me *" rows="6" required="required" data-error="Please, leave us a message."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"> <input type='submit' class="btn btn-success btn-send btn-block" id="submitButton" value="Request Demo"/></div>
                        </div>    
                        
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            <input type="hidden" id="form_type" name="form_type" value="demo_request">
                            <!-- EMAIL TEMPLATE TO USE -->
                            <input type="hidden" name="email_template" id="email_template" value="1">    
                            </div>
                        </div>
                    </div>
                </form><!--END OF FORM-->
            </div>
        </div><!-- /.modal-content -->
              <!--<div class="row">
                <div class="col-md-4">
                   <h2>Drop us a line, we would love to you show how our software can help transform your event.</h2>
                    <img class="img-responsive center-block" src="assets/images/Responsive-Rosterfy_Mockup.png" alt="Generic placeholder image">
                </div>
              </div>-->
            </div><!-- /.end-row -->
        </div>
    </div>
 <?php include $file_base."template_files/footer.php"; ?>
