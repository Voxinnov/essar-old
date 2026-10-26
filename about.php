<?php 
ob_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$cat = new About();
$get = $cat-> getAbout();


	?>
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>About/ Essar Engineers</title>
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

          <?php include('header.php'); ?>
            <div class="b-page-content ">
                       <div class="b-helper-wrapper">
                            <!-- Block with shape and page background -->
                            <div class="layer-bg-mod page-layer-bg4">
                                <div class="b-add-info-holder">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                                <h1 class="inherit-title">
                                                    ABOUT US
                                                </h1>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-8">
                                                        <div class="add-info-number">
                                                            
                                                        </div>
                                                        <div class="add-info-content">
                                                            <div class="add-info-content-title">
                                                            
                                                            </div>
                                                            <div class="add-info-content-text">
                                                           <h2>    <?php echo $get[0]['abt_captn'] ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block with shape -->
                                <div class="shape-bg"></div>
                            </div>
                            <!-- Absolute container with mac bg -->
                            <div class="container-absolute hidden-xs hidden-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="mac-wrapper-mod wow slideInRight">
                                                <div class="mac-mod">
                                                </div>
                                                <a href="#">
                                                    <img src="assets/media/components/b-service/service-gallery-1.jpg" class="img-responsive" alt="/">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- About service additional block -->
                            <div class="b-about-additional">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
                                            <h3 class="b-upper-title text-right">
                                                About Us
                                            </h3>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-5 text-center">
                                            <div class="about-additional-img">
                                                <img src="ese_adm_ais/upload/about/<?php echo $get[0]['abt_img'] ?>" class="img-responsive" alt="/">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1">
                                            <div class="about-additional-content">
                                                <h3 class="inherit-title">
                                                   <?php echo $get[0]['abt_title'] ?>
                                                </h3>
                                                <div class="about-additional-text">
                                                     <?php echo $get[0]['abt_descri'] ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>


<?php include('footer.php')?>
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
        <!-- User map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E"></script>
        <!-- Maps customization-->
        <script src="assets/js/custom-map.js"></script>
        <!--Contact form-->
		<script src="assets/plugins/jqBootstrapValidation.js"></script>
		<script src="assets/plugins/contact_me.js"></script>
        <!--Simple check for contact-form-->
        <script src="assets/js/contactformcheck.js"></script>
    </body>


</html>