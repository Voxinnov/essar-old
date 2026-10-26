<?php
ob_start();
session_start();
include("autoload.php");
$db		=	new MySql();
$db->connect();
if($_SESSION["UserID"]=='')
{
	$cat = new Loginsession();
$get = $cat-> ListLoginsession();
$count = count($get);
if($count==0)
{$sessn=1050;
	$val = 'eseais'.$sessn;
}
else
{
	$sessn = $get[$count-1]['session_value'];
	$sessn++;
	$val = 'eseais'.$sessn;
}

 $inputs	=	array('title'=>$sessn
								  );
							//	  print_r($inputs);	exit;
	$cat->addLoginsession($inputs);
	$_SESSION["UserID"]=$val;
}
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Essar Engineers</title>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="assets/css/master.css"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
</head>
    <body>
        <div class="b-page-wrap">

            
            <div class="b-page-content with-layer-bg">
                <!-- ==========================-->
                <!-- PAGES BACKGROUND -->
                <!-- ==========================-->
                <div class="b-layer-big1">
                    <div class="layer-big-bg page-layer-big-bg">
                        <div class="layer-content-big">
                            <!-- Home slider -->
                            <div class="b-home-slider-holder wow slideInUp">
                                <div class="b-home-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "speed": 1000, "autoplay": true}'>
                                    <!-- Home slide 1 -->
                                   
                                    <!-- Home slide 2 -->
                                  
                                </div>
                                <div class="b-slick-arrows">
                                    <div class="custom-slideshow-controls">
                                        <span id="home-slider-prev" class="slick-arrows-prev arrow-transparent"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                        <span id="home-slider-next" class="slick-arrows-next arrow-transparent"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END Home slider -->
                        </div>
                    </div>
                </div>
                <div class="b-homepage-content-mod">
                    <div class="b-layer-main">
                        <!-- Home Features -->
                        <div class="b-home-features">
                            <div class="b-features-columns-holder">
                                <div class="container">
                                    <div class="row equal">
                                        <div class="col-xs-12 col-sm-4 col-md-4 wow slideInRight">
                                          <a href="category.php">  <div class="b-features-column">
                                                <div class="features-column-icon">
                                                    <img src="assets/medical.png" style="max-width:100px;"></img>
                                                </div>
                                                <h6 class="features-column-title">
                                                  MEDICAL PRODUCTS  
                                                </h6>
                                                <div class="features-column-text">
                                                   &nbsp;
                                                </div>
                                            </div></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp">
                                            <div class="b-features-column even-features-column">
                                                <div class="features-column-icon" style="">
                                                   <img src="assets/logo.png" style="max-width:200px;border:2px solid #a70d06"></img>
                                                </div>
                                                <div class="features-column-text">
                                                   &nbsp;
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 wow slideInLeft">
                                           <a href="traffic_product.php">    <div class="b-features-column">
                                                <div class="features-column-icon">
                                                    <img src="assets/traffic.png" style="max-width:100px;"></img>
                                                </div>
                                                <h6 class="features-column-title">
                                                   TRAFFIC SIGNALS
                                                </h6>
                                                <div class="features-column-text">
                                                   &nbsp;
                                                </div>
                                            </div></a>
                                        </div>
		
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery isotope -->
                      
                       
            

        <!-- MAIN SCRIPTS-->
        <script src="assets/libs/jquery-1.12.4.min.js"></script>
        <script src="assets/libs/jquery-migrate-1.2.1.js"></script>
        <!-- Bootstrap-->
        <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
        <!-- Adaptive big text -->
        <script src="assets/plugins/slabText/js/jquery.slabtext.min.js"></script>
        <!-- Sliders -->
        <!-- Owl slider -->
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Slick slider -->
        <script src="assets/plugins/slick/slick.min.js"></script>
        <!-- Sly slider -->
        <script src="assets/plugins/slyslider/sly.min.js"></script>
        <!-- Bx slider -->
        <script src="assets/plugins/bxslider/vendor/jquery.easing.1.3.js"></script>
        <script src="assets/plugins/bxslider/vendor/jquery.fitvids.js"></script>
        <script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
        <!-- Pop-up window-->
        <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Headers scripts-->
        <script src="assets/plugins/headers/slidebar.js"></script>
        <script src="assets/plugins/headers/header.js"></script>
        <!-- Filter and sorting images-->
        <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/plugins/isotope/imagesLoaded.js"></script>
        <!-- Progress numbers-->
        <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
        <!-- Entry Animations -->
        <script src="assets/plugins/wow.min.js"></script>
        <!-- Calendar plugin -->
        <script src="assets/plugins/pickmeup/pickmeup.js"></script>
        <!-- User customization-->
        <script src="assets/js/custom.js"></script>
    </body>

</html>