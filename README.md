# ewg_tech_website_2017

Form Values 

Contact Form - EWG Tech 

General contact form no check boxes or select options are included. 



Request A Demo Form - EWG Tech 

<form id="demo" method="post" action="contact.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group" data-toggle="validator" role="form">
                                    <label for="form_name">Full Name*</label>
                                    <input id="contact_name" type="text" name="name" class="form-control" placeholder="Please enter your full name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group" data-toggle="validator" role="form">
                                    <label for="org_name"> Organisation Name*</label>
                                    <input id="org_name" type="text" name="org_name" class="form-control" placeholder="Please enter your organiation" required="required" data-error="Organisation is required.">
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
                                    <select>
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
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6+</option>
                                        <option vales="7">Other</option>
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
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="form_message">Please provide a more detailed description of your needs, we would be very grateful.</label>
                                <textarea id="contact_message" name="message" class="form-control" placeholder="Message for me *" rows="6" required="required" data-error="Please, leave us a message."></textarea>
                            </div>
                        </div>
                        <div class="col-md-8"> <a class="btn btn-success btn-send" id="submitButton" href="thankyou.html">Request Demo</a> </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-demo"><strong>*</strong> These fields are required.</p>
                            <input type="hidden" id="demo_request" value="contact_us">
                            </div>
                        </div>
                    </div>
                </form><!--END OF FORM-->
