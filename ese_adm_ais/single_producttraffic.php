
<?php
 ob_start();
session_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$g_id= $_GET['g_id'];
$product = new Trafficproduct();
$record = $product-> gettrafficproductbycat($g_id);

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
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
											<h3>  <?php echo $record[0]['tff_prod_name']; ?> </h3>
										
										   <p class="item-description"><br>
                                                  <?php echo $record[0]['tff_prod_descrip']; ?>
												  
												  </p>
															  </div> 
															   
														
                                             
												  
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