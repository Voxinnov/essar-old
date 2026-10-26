
<?php
 ob_start();
session_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$g_id= $_GET['g_id'];
$product = new Medicalproduct();
$record = $product-> getmedicalproduct($g_id);
//$record_img = $product-> listProductsimg($g_id);
//$record_sizechart= $product-> Products_size($g_id);
//$total_record = count($record_sizechart);
$p_title = $record[0]['med_prod_img'];
$size = new Sizechart();
$record_sizechart =$size->ListSizechart($g_id);
$total_record = count($record_sizechart);
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
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/jquery-rating.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery-rating.css">
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
                            <!-- Block with shape and page background -->
                            <div class="layer-bg-mod page-layer-bg4">
                                <div class="b-add-info-holder">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                                <h2 class="inherit-title">
                                                 <?php echo $record[0]['med_prod_title']; ?>
                                                </h2>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-12">
                                                       
                                                        <div class="add-info-content">
                                                        <div class="">
                                                
                                                <a href="#">
                                                    <img src="ese_adm_ais/upload/medicalproduct/<?php echo $record[0]['med_prod_img']; ?>" class="img-responsive" alt="/">
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
					<form id="contact-form" class="b-form " method="POST" action="PHPMailer/productbooking.php">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
											<h3>  <?php echo $record[0]['med_prod_name']; ?> </h3>
											<input type="hidden" value="<?php echo $record[0]['med_prod_name']; ?>" name="productname">
											<input type="hidden" value="<?php echo $g_id;?>" name="id">
											 <?php for($i=0;$i<$total_record;$i++)
																 {
																	 ?>
                                               <div class="col-xs-4 col-sm-4 ">  
																<label><?php echo $record_sizechart[$i]['size_chart_position']; ?></label>	
												<input type="hidden" value="<?php echo $record_sizechart[$i]['size_chart_position']; ?>" name="position<?php echo $i+1;?>" id="position<?php echo $i+1;?>">																
																<select class=" form-control" name="size<?php echo $i+1;?>" id="size<?php echo $i+1;?>" onchange="run<?php echo $i+1;?>()">
																 <option value="0">--Select--</option>
																
												 <?php if($record_sizechart[$i]['size_chart_2XS'] != ''){?> <option value="<?php echo $record_sizechart[$i]['size_chart_2XS'] ?>"> 2XS - <?php echo $record_sizechart[$i]['size_chart_2XS'] ?></option><?php } ?>
												 	 <?php if($record_sizechart[$i]['size_chart_XS'] != ''){?><option value="<?php echo $record_sizechart[$i]['size_chart_XS'] ?>">XS - <?php echo $record_sizechart[$i]['size_chart_XS'] ?></option>	<?php } ?>		
													 <?php if($record_sizechart[$i]['size_chart_S'] != ''){?><option value="<?php echo $record_sizechart[$i]['size_chart_S'] ?>">S - <?php echo $record_sizechart[$i]['size_chart_S'] ?></option><?php } ?>
													 <?php if($record_sizechart[$i]['size_chart_M'] != ''){?> <option value="<?php echo $record_sizechart[$i]['size_chart_M'] ?>">M - <?php echo $record_sizechart[$i]['size_chart_M'] ?></option>	<?php } ?>		
													 <?php if($record_sizechart[$i]['size_chart_L'] != ''){?><option value="<?php echo $record_sizechart[$i]['size_chart_L'] ?>">L -<?php echo $record_sizechart[$i]['size_chart_L'] ?></option><?php } ?>
													 <?php if($record_sizechart[$i]['size_chart_XL'] != ''){?> <option value="<?php echo $record_sizechart[$i]['size_chart_XL'] ?>">XL -<?php echo $record_sizechart[$i]['size_chart_XL'] ?></option>	<?php } ?>		
													 <?php if($record_sizechart[$i]['size_chart_2XL'] != ''){?><option value="<?php echo $record_sizechart[$i]['size_chart_2XL'] ?>">2XL -<?php echo $record_sizechart[$i]['size_chart_2XL'] ?></option><?php } ?>
													 <?php if($record_sizechart[$i]['size_chart_3XL'] != ''){?> <option value="<?php echo $record_sizechart[$i]['size_chart_3XL'] ?>">3XL -<?php echo $record_sizechart[$i]['size_chart_3XL'] ?></option><?php } ?>			
													 <?php if($record_sizechart[$i]['size_chart_4XL'] != ''){?><option value="<?php echo $record_sizechart[$i]['size_chart_4XL'] ?>">4XL -<?php echo $record_sizechart[$i]['size_chart_4XL'] ?></option><?php } ?>
													
												
												</select> 
															  </div> 
															   <?php }?>
														
															   <!-- <div class="col-xs-8 col-sm-8"> <a style="color:blue" onclick="myFunction()">Size Chart</a><div id="myDIV" style="display:none">
																Testing
																
															</div> </div>-->
															<br>	<br>	<br>
                                                <p class="item-description"><br><br><br>
                                                  <?php echo $record[0]['med_prod_decrip']; ?><br>
												  <br>
												 <h3> Departments</h3>
												  <?php echo $record[0]['med_prod_depart']; ?>
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
									<form method="POST" action="add_cart.php" >
									<input type="hidden" value="<?php echo $g_id;?>" name="p_id" id="p_id" >		
											<input type="hidden" value=" <?php echo $record[0]['med_prod_title']; ?>" name="p_name" id="p_name" >		
										
										<input type="hidden" value="" name="sizechart1" id="sizechart1" >		
									<input type="hidden" value="" name="sizechart2" id="sizechart2" >		
							<div class="col-lg-1"></div><div class="col-lg-7"><?php if(isset($_SESSION["Status"])){?> <input type="submit" value="Add Cart"  class="btn btn-submit text-uppercase" name="addcart" >	<?php } 
							else
								 {?> 	<a href="#openModal1"  class="btn btn-submit text-uppercase"  >Add Cart</a><?php }?> 
							</div>
										</form>
										
										        <div class="container">
					<form id="contact-form" class="b-form " method="POST" action="PHPMailer/cartproductbooking.php">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <div class="b-blog-single-content wow slideInLeft">
                                        <div class="blog-item-content clearfix">
                                            <div class="blog-item-caption">
											<h3>Ratings and Reviews</h3>
									<?php
											for($i=0;$i<$total_record;$i++)
											{
												
									?>
											<div class="row">
											<div class="col-sm-1">
											<div style="width:27px;height:23px;background-color:rgb(146,208,80);margin-top:8px">5*</div>
											</div>
											<div class="col-sm-11">
											<h3><b></b></h3>
											<h3><b></b></h3>
											<p></p>
											
											</div>
											</div>
											<div style="border-bottom:1px solid gray"> &nbsp;</div>
											<?php } ?>
                                         	
                                         
                                          </div>
                                         
                                    </div>
									
                                </div>
								</div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-lg-offset-1">
                                    <div class="b-aside wow slideInRight">
                                      
                            
                                        <div class="b-aside-item ">
                                            <div class="aside-categories">
                                                <h5 class="aside-title">
                                                    Feed back
                                                  
                                                </h5>
                                                 
                                        <div class="form-group">
                                            <div class="row">
											   <div class="col-xs-12 col-sm-12">
													<div class="group1">

		<div   class="jr-ratenode jr-nomal"></div>
		<div   class="jr-ratenode jr-nomal "></div>
		<div   class="jr-ratenode jr-nomal "></div>
		<div   class="jr-ratenode jr-nomal "></div>
		<div   class="jr-ratenode jr-nomal "></div>
	</div>
	<div >
		<p id="info" >0</p>
	</div>

												</div>
												<br>
                                                <div class="col-xs-12 col-sm-12 ">
										
											
												<input type="text"  class=" form-control"  name="name" required placeholder="Your Name" value="">
												<input type="hidden"  class=" form-control" id="rating" name="rating" required placeholder="Your Name" value="">
												
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
                                                    <textarea  class="  form-control" name="comment" rows="6"  placeholder="Message"></textarea>
                                                </div>
												
                                                  
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
											<div id="openModal1" class="modalDialog">
<div>
    <a href="#close" title="Close" class="close">X</a>
                    <form id="contact-form" class="b-form " method="POST" action="user_register.php">
                                        <div class="form-group">
                                            <div class="row">
                                                   
                                                <div class="col-xs-12 col-sm-12 ">
										
											
												<input type="text"  class=" form-control"  name="c_name" required placeholder="Your Name">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
											
                                                   <input type="email" class=" form-control"  name="c_email" placeholder="Your Email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 ">
												
                                                  <input type="text"class=" form-control"  name="c_mobile" placeholder="Contact No" required pattern="[7-9]{1}[0-9]{9}"  min="10">
                                                </div>
												<input type="hidden" value="<?php echo $g_id;?>" name="pr_id" id="pr_id" >
														<input type="hidden" value=" <?php echo $record[0]['med_prod_title']; ?>" name="pr_name" id="pr_name" >		
										
										<input type="hidden" value="" name="p_sizechart1" id="p_sizechart1" >		
									<input type="hidden" value="" name="p_sizechart2" id="p_sizechart2" >				                            
															  <div class="col-xs-12 col-sm-12">
                                                  
                                                    <input type="submit" class="btn btn-submit text-uppercase" name="register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
										</form >
									
										
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
<script type="text/javascript">
	$('.group1').start(function(cur){
		console.log(cur);
		 $('#info').text(cur);
		  document.getElementById("rating").value = cur  ;
	
	});

	

	$("#see").on('click',function(){
		alert($('.group1').getCurrentRating());
	});

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