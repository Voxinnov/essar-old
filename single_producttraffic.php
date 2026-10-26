<?php
ob_start();
session_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$g_id = isset($_GET['g_id']) ? (int)$_GET['g_id'] : 0;
$product = new Trafficproduct();
$record = $product->gettrafficproduct($g_id);

?>

<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Single Product/ Essar Engineers</title>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="telephone=no" name="format-detection"/>
        <meta name="HandheldFriendly" content="true"/>
        <link rel="stylesheet" href="assets/css/master.css"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
<style>
#myDIV {
    width: 100%;
    padding: 10px 0;
    text-align: center;
    background-color: #fff;
	border: 2px solid black;
    margin-top: 20px;
}
</style>
    </head>
    <body>
        <div class="b-page-wrap">

          <?php include('traffic_header.php'); ?>
            <div class="b-page-content ">
                       <div class="b-helper-wrapper">
                            <!-- Block with shape and page background -->
                            <div class="layer-bg-mod page-layer-bg4">
                                <div class="b-add-info-holder">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                                <h2 class="inherit-title">
                                                 <?php echo $record[0]['tff_prod_title']; ?>
                                                </h2>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-12">
                                                       
                                                        <div class="add-info-content">
                                                        <div class="">
                                                
                                                <a href="#">
                                                    <img src="ese_adm_ais/upload/medicalproduct/<?php echo $record[0]['tff_prod_img']; ?>" class="img-responsive" alt="/">
                                                </a>
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
                        
                     <div class="container">
					 <form id="contact-form" class="b-form " method="POST" action="trafproductbooking.php">
                            <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
											<h3>  <?php echo $record[0]['tff_prod_name']; ?> </h3>
										<input type="hidden" value="<?php echo $record[0]['tff_prod_title'].'-'.$record[0]['tff_prod_name']; ?>" name="productname">
										   <p class="item-description"><br>
                                                  <?php echo $record[0]['tff_prod_descrip']; ?>
												  
												  </p>
															  </div> 
															   
														
                                             
												  
                                            </div>
                                         
                                          </div>
                                         
                                    </div>
									      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-lg-offset-1">
                                    <div class="b-aside wow slideInRight">
                                      
                            
                                        <div class="b-aside-item ">
                                            <div class="aside-categories">
                                                <h5 class="aside-title">
                                                    Booking
                                                  
                                                </h5>
                                                 
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
                                                    <textarea  class="  form-control" name="msg" rows="6"  placeholder="Message"></textarea>
                                                </div>
														                            
															  <div class="col-xs-12 col-sm-12">
                                                  
                                                    <input type="submit" class="btn btn-submit text-uppercase" name="submit" value="Send Now" >
                                                </div>
                                            </div>
                                        </div>
                                  
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                </div>
								</form>
                        
                            </div>
                        </div>
                        </div>

            </div>
        </div>
								
<?php include('footer.php')?>
<script>


function run1() {
    document.getElementById("sizechart1").value =  document.getElementById("position1").value+'-'+document.getElementById("size1").value ;
	 document.getElementById("p_sizechart1").value =  document.getElementById("position1").value+'-'+document.getElementById("size1").value ;

	
	
}
function run2() {
    document.getElementById("sizechart2").value =  document.getElementById("position2").value+'-'+document.getElementById("size2").value ;
	 document.getElementById("p_sizechart2").value =  document.getElementById("position2").value+'-'+document.getElementById("size2").value ;
}
</script>

		
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>


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