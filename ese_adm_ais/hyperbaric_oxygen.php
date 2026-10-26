<?php 
ob_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$cat = new Medicalmachine();
$id=3;
$get = $cat->getmachine($id);
//print_r($get);exit;
$img = new Machineimg();
$rec_img = $img-> ListMachineimg($id);
$total_rec_img = count($rec_img);

	?>
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Hyperbaric Oxygen Chambers/ Essar Engineers</title>
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
                                               
										<?php echo $get[0]['machn_b_descrip']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block with shape -->
                               
                            </div>
                            <!-- Absolute container with mac bg -->
                            <div class="container-absolute hidden-xs hidden-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="mac-wrapper-mod wow slideInRight">
                                                
                                                <a href="#">
                                                    <img src="assets/media/components/b-service/hbot.jpg" class="img-responsive" alt="/">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
										<div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                   <?php echo $get[0]['machn_role']; ?>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
                             <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                               <?php echo $get[0]['machn_benifits']; ?>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
                        </div>	
    <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                                <h3>HBOT Conditions</h3>
                                                <?php echo $get[0]['machn_condtns']; ?>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                               
                                                <p class="item-description">
												<img src="ese_adm_ais/upload/machine/<?php echo $rec_img[0]['machn_img_img']?>" width="100%"></img>
                                                   </p>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									<div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                               
                                                <p class="item-description">
												<img src="ese_adm_ais/upload/machine/<?php echo $rec_img[1]['machn_img_img']?>" width="100%"></img>
                                                   </p>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
                                </div>
                             
                        </div>							
				
          <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
                                                
                                                <p class="item-description">
                                                 <img src="ese_adm_ais/upload/machine/<?php echo $rec_img[2]['machn_img_img']?>" width="100%"></img></p>
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3 col-lg-offset-1">
                                    <div class="b-aside wow slideInRight">
                                      
                            
                                        <div class="b-aside-item ">
                                            <div class="aside-categories">
                                                <h5 class="aside-title">
                                                    Booking
                                                  
                                                </h5>
                                                  <form id="contact-form" style="padding-top:0px"class="b-form " method="POST" action="PHPMailer/contact_hboc.php">
                                        <div class="form-group">
                                            <div class="row">
                                                   
                                                <div class="col-xs-12 col-sm-12 ">
											
												 <input type="text" class=" form-control" placeholder="Your Name" name="name"style=" background: #7b1f1fb3;">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
											
                                                    <input type="email"  class=" mailfield form-control"  placeholder="Your Email"name="email" style="background: #7b1f1fb3;" >
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
												
                                                    <input type="text"  class=" form-control"  placeholder="Contact No" name="contact" style=" background: #7b1f1fb3;" >
                                                </div>
															                               
															  <div class="col-xs-12 col-sm-12">
                                                  
                                                   <input type="submit"  class="btn btn-submit text-uppercase"  value="Book Now">
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

    </body>


</html>