      <?php
      $file_base = "";
      $title = "Latest Updates";
      $desc = "All your workforce needs";
      $header_extra = "<link href='css/pricing.css' rel='stylesheet'/>";
      include $file_base."template_files/header.php";
      ?>

      <div class="content-section-a white-top">
      <div class="container">
        <div class="row featurette">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="">Latest Updates</h2>
          <p>Everytime we make an update, we want you guys to use it. Please have a read below to see what we have been doing to improve Rosterfy lately</p>
          </div>
        </div>
      </div>
      </div>


          <!-- UPDATE TABS -->
          <section class="tabs">
            <div class="container">
              <div class="row">
                 <div class="col-md-12"> <!--required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
              <li><a href="#2017" data-toggle="tab">2017</a></li>
              <li><a href="#2016" data-toggle="tab">2016</a></li>
              <li class="active"><a href="#2015" data-toggle="tab">2015</a></li>
            </ul>
          </div>

          <div class="container">
            <div class="row">

            <!-- Tab panes-->
            <div class="tab-content">
              <br>
              <div class="tab-pane" id="2017">
                <div class="col-md-12">
                <h1 class="my-4">Page Heading
                  <small>First Text</small>
                </h1>
                </div>

                <div class="container ow-section">
        <?php
        $years = mysql_query("SELECT YEAR(created) as y FROM `features_blog` GROUP BY YEAR(created) ORDER BY created DESC");
        while ($year = mysql_fetch_assoc($years)) {
            ?>
            <h3 class="year"><?php echo $year['y']; ?></h3>
            <ul class="timeline">
                <?php
                $blogs = mysql_query("SELECT * FROM features_blog WHERE YEAR(created) = '{$year['y']}' ORDER BY created DESC LIMIT 0,40");
                $i = 1;
                while ($blog = mysql_fetch_assoc($blogs)) {
                    if ($i % 2 == 0) {
                        $side = "timeline-inverted even";
                    } else {
                        $side = "odd";
                    }
                    ?>
                    <li class="<?php echo $side; ?>">
                        <div class="timeline-badge ci"></div>
                        <div class="timeline-panel">
                            <div class='inner_panel_left'><img src="<?php echo $bucket_loc . $blog['thumbnail']; ?>"
                                                               style="max-height:100px"></div>
                            <div class='inner_panel_right'>
                                <div class="timeline-heading">
                                    <h4 class="timeline-title"><?php echo $blog['title']; ?>
                                        <span><?php echo date("j M", strtotime($blog['created'])); ?></span></h4>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $blog['subtitle']; ?></p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <?php
                    $i++;
                }
                ?>

            </ul>
            <?php
        }
        ?>
    </div>


                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>

              <div class="tab-pane" id="2016">
                <div class="col-md-12">
                <h1 class="my-4">Page Heading
                  <small>Third Text</small>
                </h1>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-3">
                  <h4>TEST
                      <small>Date</small>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>


              </div>
              <div class="tab-pane active" id="2015">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                    <h1 class="my-4">Page Heading
                      <small>Secondary Text</small>
                    </h1>
                    </div>
                    <div class="col-md-3">
                      <h4>TEST
                          <small>Date</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="col-md-3">
                      <h4>TEST
                          <small>Date</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="col-md-3">
                      <h4>TEST
                          <small>Date</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="col-md-3">
                      <h4>TEST
                          <small>Date</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>





        </div>
      </div>
    </div>


      </div>
              <!-- 2015 -->

          </section>
      <!-- /Plans -->

      <!-- ADD A ENQUIRE NOW BOX -->

      <!-- <div class="container-fluid grey-box">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 style="color: #0082c2;">Can't see a package to suit?</h2>
              <p>Do your scheduling requirements exceed 101 paid staff on your database or 1,000 volunteers for one event? Contact our friendly sales team below and we will customise a package just for you.  </p>

                <a class="btn btn-lg btn-primary" href="http://eventworkforcegroup.com/technology/demo">Contact Us</a>
                <p></p>
          </div>
        </div>
      </div> -->

      <?php
      $footer_extra = "<script type='text/javascript' src='js/pricing.js'></script>";
      include $file_base."template_files/footer.php"; ?>
