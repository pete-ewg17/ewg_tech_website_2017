<?php
$file_base = "";
$title = "Pricing";
$desc = "All your workforce needs";
include $file_base."template_files/header.php";
?>

<div class="content-section-a white-top">
<div class="container">
  <div class="row featurette">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h2 class="header">Pricing</h2>
    <p>Our pricing packages do not restrict the number of volunteers you recruit or events you post. All packages offer online support from our team of workforce management experts.</p>
    <p><small>*No set up fees apply.</small></p>

    <div class="pricing-box">
        <h4>Choose Your Currency<small>*</small></h4>
        <div class="radio-inline">
          <label><input id="audPrice" data-exratlocale='-1' type="radio" name='chooseprice' class="chooseprice"> AUD</label>
        </div>
        <div class="radio-inline">
          <label><input id="usdPrice" data-exrate='1' type="radio" name='chooseprice' class="chooseprice" checked>USD</label>
        </div>

          <p><small>*NB that AUD prices are subject to change with the USD exchange rate</small></p>

      </div>
    </div>
  </div>
</div>
</div>
<br>

<!-- Plans -->
<section id="plans">
  <div class="container">
    <div class="row">

      <!-- item -->
      <div class="col-md-3 text-center">
       <div class="box">
        <div class="panel panel-pricing">
          <div class="panel-heading">
            <i class="fa fa-users icon"></i>
            <h3>Starter</h3>
          </div>
          <div class="panel-body text-center">
            <p class="tag-text"><strong>Free</strong></p>
          </div>
          <div class="panel-footer">
            <a class="btn btn-lg btn-block btn-primary pricing_button" data-plan="free" href="https://rosterfy.co/onboard_simple">Get Started</a>
          </div>
          <div class="panel-body-a text-center">
            <p class="lead text-muted small" style="padding-top: 12px; color: #555; font-size: 12px;">Build your workforce database before launching your first event.</p>
                                    <br>

          </div>
          <ul class="list-group text-center">
            <li class="list-group-item"><i class="fa fa-check"></i> 1 Admin</li>
            <li class="list-group-item"><a href="feature_info_pages/support.php" target="_blank"> <i class="fa fa-check"></i>Online Support </a></li>
            <li class="list-group-item"><a href="feature_info_pages/customregistration.php" target="_blank"> <i class="fa fa-check"></i>Custom Registration Form </a></li>
            <li class="list-group-item"><a href="feature_info_pages/emails.php" target="_blank"><i class="fa fa-check"></i> Email Communications</a></li>
            <li class="list-group-item"><a href="feature_info_pages/accountbranding.php" target="_blank"> <i class="fa fa-check"></i>Custom Account Branding</a></li>
            <li class="list-group-item"><a href="feature_info_pages/search.php" target="_blank"> <i class="fa fa-check"></i>Search Workforce Database</a></li>
            <li class="list-group-item"><a href="feature_info_pages/userportal.php" target="_blank"><i class="fa fa-check"></i> Workforce Portals</a></li>
          </ul>
          <div class="border-bottom"></div>
        </div>
        </div>
      </div>
      <!-- /item -->

      <!-- item -->
      <div class="col-md-3 text-center">
        <div class="box">
        <div class="panel panel-pricing box">
          <div class="panel-heading">
            <i class="fa fa-cloud icon"></i>
            <h3>Base</h3>
          </div>
          <div class="panel-body text-center">
            <p><strong>$<span class="cost" data-orig='99'>99</span> <br>Per Month</strong></p>
          </div>
          <div class="panel-footer">
            <a class="btn btn-lg btn-block btn-primary pricing_button" data-plan="base" href="https://rosterfy.co/onboard_simple" target="_blank">Get Started</a>
          </div>
          <div class="panel-body-a text-center">
            <p class="lead text-muted small" style="padding-top: 11px; color: #555; font-size: 12px;">It's go time! Advertise your first event &amp; start filling your shifts. </p><br />

          </div>
          <ul class="list-group text-center">
            <li class="list-group-item first-item"><i class="fa fa-check"></i> Starter Features + </li>
            <li class="list-group-item"><a href="feature_info_pages/event.php" target="_blank"><i class="fa fa-check"></i> Advertise Your Events </a></li>
            <li class="list-group-item"><a href="feature_info_pages/reports.php" target="_blank"><i class="fa fa-check"></i> Powerful Workforce Reporting </a></li>
            <li class="list-group-item"><a href="feature_info_pages/pagesphrases.php" target="_blank"><i class="fa fa-check"></i> Custom Phrases</a></li>
            <li class="list-group-item"><a href="feature_info_pages/checksheets.php" target="_blank"><i class="fa fa-check"></i> Check In Sheets</a></li>
            <li class="list-group-item"><a href="feature_info_pages/filemanager.php" target="_blank"><i class="fa fa-check"></i> File Manager</a></li>
            <li class="list-group-item"><a href="feature_info_pages/certificates.php" target="_blank"><i class="fa fa-check"></i> Post Event Certificates</a></li>
          </ul>
           <div class="border-bottom"></div>
        </div>
        </div>
      </div>
      <!-- /item -->

      <!-- item -->
      <div class="col-md-3 text-center">
        <div class="box">
        <div class="panel panel-pricing box">
          <div class="panel-heading">
            <i class="fa fa-star icon"></i>
            <h3>Premium</h3>
          </div>
          <div class="panel-body text-center">

            <p><strong>$<span class="cost" data-orig='499'>499</span> <br>Per Month</strong></p>

          </div>
          <div class="panel-footer">
            <a class="btn btn-lg btn-block btn-primary pricing_button" data-plan="premium" href="https://rosterfy.co/onboard_simple">Get Started</a>
          </div>
          <div class="panel-body-a text-center">
            <p class="lead text-muted small" style="color: #555; font-size: 12px;">Unlock our core workforce management features to maximise your recruitment reach and retention.</p>
          </div>
          <ul class="list-group text-center">
            <li class="list-group-item first-item"><i class="fa fa-check"></i> Up to 49 Paid Staff Database </li>
            <li class="list-group-item"><a href="" target="_blank"><i class="fa fa-check"></i> Base Features +</a></li>
            <li class="list-group-item"><a href="feature_info_pages/dashboard.php" target="_blank"><i class="fa fa-check"></i> Up to 10 Admins </a></li>
            <li class="list-group-item"><a href="feature_info_pages/dashboard.php" target="_blank"><i class="fa fa-check"></i>Admin Dashboard Page </a></li>
            <li class="list-group-item"><a href="feature_info_pages/groupmanager.php" target="_blank"><i class="fa fa-check"></i> Workforce Group Manager</a></li>
            <li class="list-group-item"><a href="feature_info_pages/checkmode.php" target="_blank"><i class="fa fa-check"></i> Check In/Check Out Mode</a></li>
            <li class="list-group-item"><a href="feature_info_pages/newsletters.php" target="_blank"><i class="fa fa-check"></i> Campaign Emails (Newsletters)*</a></li>
            <li class="list-group-item"><a href="feature_info_pages/sms.php"><i class="fa fa-check"></i>SMS Communications<small>*</small></a></li>
          </ul>
           <div class="border-bottom"></div>
        </div>
         </div>
      </div>
      <!-- /item -->

      <!-- item -->
      <div class="col-md-3 text-center">
        <div class="box">
        <div class="panel panel-pricing box">
          <div class="panel-heading">
            <i class="fa fa-globe icon"></i>
            <h3>Enterprise</h3>
          </div>
          <div class="panel-body text-center">
            <p><strong>$<span class="cost" data-orig='499'>999</span> <br>Per Month</strong></p>
          </div>
          <div class="panel-footer">
            <a class="btn btn-lg btn-block btn-primary pricing_button" data-plan="enterprise" href="https://rosterfy.co/onboard_simple">Get Started</a>
          </div>
          <div class="panel-body-a text-center">
            <p class="lead text-muted small"style="padding-bottom: 12px; font-size: 12px;" >Streamline your entire workforce process with our full suite of industry leading features.</p>

          </div>
          <ul class="list-group text-center">
            <li class="list-group-item first-item"><i class="fa fa-check"></i> 51 to 100 Paid Staff Database</li>
            <li class="list-group-item first-item"><i class="fa fa-check"></i> Premium Features +</li>
            <li class="list-group-item"><a href="feature_info_pages/support.php" target="_blank"><i class="fa fa-check"></i> Unlimited Admins</a></li>
            <li class="list-group-item"><a href="feature_info_pages/trainingmanager.php" target="_blank"><i class="fa fa-check"></i>Training Modules</a></li>
            <li class="list-group-item"><a href="feature_info_pages/eventseries.php" target="_blank"><i class="fa   fa-check"></i>Event Series Branding</a></li>
            <li class="list-group-item"><a href="feature_info_pages/surveys.php" target="_blank"><i class="fafa-check"></i>Survey Manager</a></li>
            <li class="list-group-item"><a href="feature_info_pages/interview.php" target="_blank"><i class="fa fa-check"></i>Interview Platform</a></li>
            <li class="list-group-item"><a href="feature_info_pages/notif.php" target="_blank"><i class="fa fa-check"></i> Workforce Notifications</a></li>
          </ul>
           <div class="border-bottom"></div>
        </div>
       </div>
      </div>
      <!-- /item -->

    </div>
  </div>
</section>
<!-- /Plans -->

<!-- ADD A ENQUIRE NOW BOX -->

<div class="container-fluid grey-box">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h2 style="color: #0082c2;">Can't see a package to suit?</h2>
        <p>Submit a request and we will be in touch</p>
      <p class="text-muted lead">*Additional Fees apply based on usage.</p>
          <a class="btn btn-lg btn-primary" href="http://eventworkforcegroup.com/technology/demo">Contact Us</a>
    </div>
  </div>
</div>

<?php
$footer_extra = "<script type='text/javascript' src='js/pricing.js'></script>";
include $file_base."template_files/footer.php"; ?>
