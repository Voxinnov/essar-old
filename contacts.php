<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Contact/ Essar Engineers</title>
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

                        
<?php
ob_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
 include('header.php'); ?>
            <div class="b-page-content map-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <!-- Breadcrumbs -->
                            <div class="b-breadcrumbs wow slideInDown">
                                <ul class="list-inline">
                                    <li>
                                        <a href="product.php">
                                            home
                                        </a>
                                    </li>
                                    <li class="current">
                                        Contacts
                                    </li>
                                </ul>
                            </div>
                            <h1 class="main-heading">
                                Contact Us
                            </h1>
                            <div class="heading-text">
                                <p>
                                    We are the leading manufacturer of the traffic signal products from last 25 years <br>and Custom and Ready made pressure Garments. 
                                </p>
                            </div>
                        </div>
                        <!-- Info columns -->
                        <div class="b-info-columns-holder col-xs-12 col-sm-12 wow fadeInUp">
                            <div class="row equal">
                                <div class="b-info-column col-xs-6 col-sm-4">
                                    <div class="info-column-icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <h6 class="info-column-title">
                                        Address
                                    </h6>
                                    <div class="info-column-text">
                                        <p>
                                           23/466-D1, PADMAKUMARAN BUILDING,MARKET ROAD,<br>
THEKKUMBHAGOM,THRIPUNITHURA,ERNAKULAM,<br>
KERALA-682301<br>

                                        </p>
                                    </div>
                                </div>
                                <div class="b-info-column col-xs-6 col-sm-4">
                                    <div class="info-column-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <h6 class="info-column-title">
                                        Phone
                                    </h6>
                                    <div class="info-column-text">
                                        <p>
                                          <a data-tracking="mobile" href="tel:+919072200893"><span class="text-orange">+91 90 72 20 08 93</span></a>  
                                           
                                        </p>
                                    </div>
                                </div>
                                <div class="b-info-column col-xs-6 col-sm-4">
                                    <div class="info-column-icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                    <h6 class="info-column-title">
                                        E-mail
                                    </h6>
                                    <div class="info-column-text">
                                        <p>
                                            info@essarengineers.co.in
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

         <div class="b-map-form-holder">
                    <div class="map-form-switcher">
                        <div class="switcher-bg">
                            <span class="switcher-text text-uppercase">Form</span>
                            <span class="switcher-toggle">
                                <span class="icon"></span>
                            </span>
                            <span class="switcher-text text-uppercase">Map</span>
                        </div>
                    </div>
                    <div class="b-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.937646146221!2d77.14624151508387!3d28.691511782394638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03ccab22b091%3A0xbd9703869c3137a4!2sEssar+Engineers!5e0!3m2!1sen!2sin!4v1511161377975" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="b-contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <!-- Modded Form for simple valid check -->
                                    <form id="contact-form" class="b-form " method="POST" action="contact.php">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 ">
                                                    <input type="text"  class=" form-control"  name="name" required placeholder="Your Name">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
                                                    <input type="email" class=" form-control"  name="email" placeholder="Your Email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
                                                </div>
                                                  <div class="col-xs-12 col-sm-12 ">
                                                    <input type="text"class=" form-control"  name="mobile" placeholder="Contact No" required pattern="[7-9]{1}[0-9]{9}"  min="10">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
                                                    <textarea  class="  form-control" name="comment" rows="6"  placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <input type="submit" class="btn btn-submit text-uppercase" name="submit" value="Send Message">
                                                      
                                                    </input>
                                                   
                                                </div>
												<div class="col-xs-12 col-sm-12">
                                                   <!-- <a href="http://sms.xpresssms.in/api/api.php?ver=1&mode=1&action=push_sms&type=1&route=2&login_name=alfine&api_password=1543120d80ab6138ec33&message=Test Message&number=9497332344&sender=ENIFLA" target="_blank">Send SMS</a>
                                                   -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <footer>
            <div class="b-footer-content">
                <div class="container">
                    <div class="row">
                      <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="b-footer-box">
                                <h5 class="footer-box-title">
                                    About Us
                                </h5>
                                <p align="">We are the leading manufactures for Custom and Ready made pressure Garments. Depending on the purpose and treatment, different grades of pressure garments are available. our pressure garments are... <a href="about.php">Read More</a></p>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="b-footer-box">
                                <h5 class="footer-box-title">
                                    Quick Links
                                </h5>
                                <ul class="list-unstyled">
                                       <li><a href="product.php">Home</a></li>
					
                    <li><a href="about.php">About</a></li>
					<li><a href="traffic_product.php">Traffic</a></li>
                   <li><a href="product.php">Medical</a></li>
                   
                    <li><a href="contacts.php">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="b-footer-box">
                                <h5 class="footer-box-title">
                                   Address
								   
                                </h5>
                                   <p>
                                           Regd Office : H Block Market, Shop No 12, Shakurpur, New Delhi - 110034<br>
Office: D.S.I.D.C  Industrial Area,<br> J Block, Shakurpur, Opp Fun Cinemas Netaji Subhash Palace , New Delhi - 11034<br>

                                        </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="b-footer-box">
                                <h5 class="footer-box-title">
                                   Location
                                </h5>
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.937646146221!2d77.14624151508387!3d28.691511782394638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03ccab22b091%3A0xbd9703869c3137a4!2sEssar+Engineers!5e0!3m2!1sen!2sin!4v1511161377975" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="container">
			<div class="row">
			<div class="col-md-6" style="font-size:12px">Copyright &copy;<?php echo date('Y');?> Essar Engineers. All Rights Reserved  </div>
			<div class="col-md-6" style="font-size:12px"align="right">Developed By <a href="http://www.alfinesolutions.com/" target="_blank">ALFiNE IT Solutions </a></div>
			</div>
			</div>
        </footer>
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
		
        <!--Simple check for contact-form-->
       
    </body>


</html>