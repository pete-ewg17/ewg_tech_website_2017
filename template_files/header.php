<?php
if(!isset($file_base)) {
	$file_base = "";
}
if(!isset($title)) {
	$title = "";
}
if(!isset($desc)) {
	$desc = "";
}
if(!isset($header_extra)) {
	$header_extra = "";
}
	$url = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="author" content="Event Workforce Group">
    <meta property="og:site_name" content="Event Workforce Group | <?php echo $title; ?>" />
    <meta property="og:title" content="Event Workforce Group Technology" />
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:image" content="http://eventworkforcegroup.com/blog/wp-content/uploads/2016/11/EWG-Tech-Logo-FA-e1480399605987.png">
    <meta property="og:url" content="http://eventworkforcegroup.com<?php echo $url; ?>">
    <title><?php echo $title; ?> | Event Workforce Group</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $file_base; ?>css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $file_base; ?>css/landing-page.css" rel="stylesheet">
    <link href="<?php echo $file_base; ?>css/hover.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <?php
    echo $header_extra;
    ?>
    <!-- Custom Fonts -->
    <link href="<?php echo $file_base; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--FAVICONS-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $file_base; ?>assets/ewg_favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $file_base; ?>assets/ewg_favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $file_base; ?>assets/ewg_favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-96562946-1', 'auto');
 ga('send', 'pageview');

</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '114806989013061'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=114806989013061&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>

<body>
<?php  if(!isset($_GET['admin'])) { ?>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav animated fadeInDown" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                <a class="navbar-brand topnav" href="<?php echo $file_base; ?>index"><img class="logo" src="<?php echo $file_base; ?>assets/ewg_tech_Logo.svg" alt="EWG Tech Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>

                           <ul class="dropdown-menu">
                             <li><a href="<?php echo $file_base; ?>index">Home</a></li>
                            <li><a href="https://eventworkforcegroup.com/">EWG Group</a></li>
            </ul>


                       <!--DROP DOWN NAV-->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">What We Do<span class="caret"></span></a>

                           <ul class="dropdown-menu">
                            <li><a href="<?php echo $file_base; ?>rosterfy">Rosterfy</a></li>
                            <li><a href="<?php echo $file_base; ?>accreditation">Accreditation</a></li>
                            <li><a href="<?php echo $file_base; ?>training">Training</a></li>
                            </ul>
                        </li>
                    <li><a href="<?php echo $file_base; ?>pricing">Pricing</a></li>
										<li><a href="<?php echo $file_base; ?>demo">Contact Us</a></li>
		    <li><a href="https://rosterfy.co/onboard_simple"><span class="text-info">Request Demo</span></a></li>
                    </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /End Nav -->
    <?php } ?>
