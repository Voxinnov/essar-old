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

                        
<?php include('header.php'); ?>
            <div class="b-page-content map-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <!-- Breadcrumbs -->
                            <div class="b-breadcrumbs wow slideInDown">
                                <ul class="list-inline">
                                    <li>
                                        <a href="medical_home.html">
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
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus
                                    <br>
                                    vitae condimentum egestas, libero dolor auctor tellus
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
                                           Regd Office : H Block Market, Shop No 12, Shakurpur, New Delhi - 110034<br>
Office: D.S.I.D.C  Industrial Area, J Block, Shakurpur, Opp Fun Cinemas Netaji Subhash Palace , New Delhi - 11034<br>

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
                                            +91 123 456-78-90
                                            <br>
                                              +91 123 456-78-90
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
                                            info@essarengineers.com
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
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.5076911368683!2d76.70498511429146!3d9.891605977606407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07c46d9beb4e0f%3A0x867b061f3d2735ea!2sAlfine+IT+Solutions!5e0!3m2!1sen!2sin!4v1507025976382" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="b-contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <!-- Modded Form for simple valid check -->
                                    <form id="contact-form" class="b-form " method="POST" action="PHPMailer/contact.php">
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


     <?php include('footer.php') ?>

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