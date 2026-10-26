
<?php
 ob_start();
session_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$u_id= $_SESSION["guest_uid"];
//print_r($u_id);exit;
$cart = new Cart();
$record = $cart-> listCart($u_id);
//print_r($record);exit;
//$record_img = $product-> listProductsimg($g_id);
//$record_sizechart= $product-> Products_size($g_id);
//$total_record = count($record_sizechart);

$total_record = count($record);
?>

<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Cart Box/ Essar Engineers</title>
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

          <?php include('header.php'); ?>
            <div class="b-page-content ">
                       <div class="b-helper-wrapper">
                   
                        
                     <div class="container">
					<form id="contact-form" class="b-form " method="POST" action="PHPMailer/cartproductbooking.php">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
									<?php
											for($i=0;$i<$total_record;$i++)
											{
												
									?>
											<div class="row">
											<div class="col-sm-4">
											<img src="images/head.jpg" width="150px"></img>
											</div>
											<div class="col-sm-8">
											<h3><b><?php echo $record[$i]['cart_prod_name']; ?></b></h3>
											<p> <?php echo $record[$i]['cart_extra_details']; ?></p>
											<a href="remove_cart.php?g_id=<?php echo $record[$i]['cart_id']; ?>"><b>REMOVE</b></a>
											</div>
											</div>
											<div style="border-bottom:1px solid gray"> &nbsp;</div>
											<?php } ?>
                                         	
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
								</div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-lg-offset-1">
                                    <div class="b-aside wow slideInRight">
                                      
                            
                                        <div class="b-aside-item ">
                                            <div class="aside-categories">
                                                <h5 class="aside-title">
                                                    Booking
                                                  
                                                </h5>
                                                 
                                        <div class="form-group">
                                            <div class="row">
											     <div class="col-xs-12 col-sm-12 ">
                                                    <a href="product.php" type="submit" class="btn btn-submit text-uppercase" style="background-color:gray"> Continue Shopping</a>
													</div><br><br><br>
                                                <div class="col-xs-12 col-sm-12 ">
										
											
												<input type="hidden"  class=" form-control"  name="name" required placeholder="Your Name" value="<?php echo $record[0]['u_name']; ?>">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
											
                                                   <input type="hidden" class=" form-control"  name="email" placeholder="Your Email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" value="<?php echo $record[0]['u_email']; ?>">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
												
                                                  <input type="hidden"class=" form-control"  name="mobile" placeholder="Contact No" required pattern="[7-9]{1}[0-9]{9}"  min="10" value="<?php echo $record[0]['u_contact']; ?>">
                                                </div>
																	
                                                  <input type="hidden"class=" form-control"  name="u_id" placeholder="Contact No"  min="10" value="<?php echo $u_id; ?>">	                            
															  <div class="col-xs-12 col-sm-12">
                                                  
                                                    <input type="submit" class="btn btn-submit text-uppercase" name="submit" value="Book Now" >
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