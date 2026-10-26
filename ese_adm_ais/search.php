<?php
ob_start();
include("autoload.php");
$db = new MySql();
$db->connect();
session_start();

$record = array();
$total_record = 0;

if(isset($_POST["search"]))
{
 	$srch = isset($_POST["srch"]) ? trim($_POST["srch"]) : '';
	$cat = new Medicalproduct();
	$record = $cat->listSearch($srch);
	$total_record = is_array($record) ? count($record) : 0;
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Medical/ Essar Engineers</title>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="telephone=no" name="format-detection"/>
        <meta name="HandheldFriendly" content="true"/>
        <link rel="stylesheet" href="assets/css/master.css"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<style>
		
#exTab1 .tab-content {
  color : #000;
  background-color: #fff;
  padding : 20px 20px;
  text-align: center;
  margin-top:30px;

}
 .ultab {
 
  background-color: #fff;
  padding : 20px 20px;
  text-align: center;
  padding-top:30px;
    margin-left: 38%;
}


/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}




		</style>
		<style>
.mySlides {display:none;}
</style>
	<style>
.mySlides2 {display:none;}
</style>
    </head>
    <body>
        <div class="b-page-wrap">

                       
<?php include('header.php'); ?>
            <div class="b-page-content ">
			        <div class="b-helper-wrapper">
                            <!-- Block with shape and page background -->
                            <div class="layer-bg-mod_home page-layer-bg4">
                                <div class="b-add-info-holder">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                               
												  <h3 class="inherit-title">
                                                 Essar Enfineers
                                                </h3>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-12">
                                                      
                                                        <div class="add-info-content">
                                                            <div class="add-info-content-title">
                                                               About Essar Engineers
                                                            </div>
                                                            <div class="add-info-content-text">
                                                              Lorem ipsum dolor sit amet, consectetuer gravida nibh vel velit auctor aliquet. Curabitur blandit vestibulum luctus. In hac habitasse platea dictumst. Aenean ullamcorper, leo id rutrum convallis, velit mauris porttitor orci, a posuere massa diam eu dui. 
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block with shape -->
                                <div class="shape-bg2"></div>
                            </div>
                            <!-- Absolute container with mac bg -->
                          
                            
                        </div>
								<div id="exTab1" class="" >	
<ul  class="nav nav-pills ultab" align="center
">
			<li class="active">
        <a  href="#1a" data-toggle="tab">Products</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Category</a>
			</li>
			
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
     <div class="b-gallery b-isotope">
						<div class="b-items-gallery-holder">
							<div class="container">
								<div class="row">
									
									<div class="js-zoom-gallery grid clearfix">
										<div class="grid-sizer"></div>
										
										
										<!--<div class="b-gallery-1__item grid-item product">
											<div class="gallery-item-content">
												<div class="gallery-item-img">
													 <img class="mySlides" src="assets/media/components/b-gallery/gallery-1.jpg" style="width:100%">
  <img class="mySlides" src="assets/media/components/b-gallery/gallery-2.jpg" style="width:100%">
  <img class="mySlides" src="assets/media/components/b-gallery/gallery-1.jpg" style="width:100%">

													<div class="gallery-item-hover">
														<a href="assets/media/components/b-gallery/gallery-1.jpg" class="js-zoom-gallery__item">
															<span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
															<img src="assets/media/components/b-gallery/gallery-1.jpg" alt="/" class="img-responsive">
														</a>
														
													</div>
												</div>
												<div class="gallery-item-caption text-center">
													<p class="item-name">
														Compression Garments
													</p>
													<p class="item-category">
														<a href="single_product.php"class="btn btn-default " >Book Now</a>
													</p>
												</div>
											</div>
										</div>-->
										
										
							<?php 
							if($total_record>0)
							{
							for($i=0;$i<$total_record;$i++)
							{
								/*$prod_id = $record[$i]['id'];
								$record_img = $product-> listProductsimg($prod_id);
								$total_record_img = count ($record_img);*/
								
							?>
							
										<div class="b-gallery-1__item grid-item product">
											<div class="gallery-item-content">
												<div class="gallery-item-img">
													<img src="ese_adm_ais/upload/medicalproduct/<?php echo $record[$i]['med_prod_img']; ?>" alt="/" class="img-responsive" style="height:340px">
													<div class="gallery-item-hover">
														<a href="ese_adm_ais/upload/medicalproduct/<?php echo $record[$i]['med_prod_img']; ?>" class="js-zoom-gallery__item">
															<span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
															<img src="ese_adm_ais/upload/medicalproduct/<?php echo $record[$i]['med_prod_img']; ?>" alt="/" class="img-responsive">
														</a>
														
													</div>
												</div>
												<div class="gallery-item-caption text-center">
													<p class="item-name">
														<?php echo $record[$i]['med_prod_title']; ?>
													</p>
													<p class="item-category">
													<a href="single_product.php?g_id=<?php echo $record[$i]['med_prod_id']; ?>"class="btn btn-default " >Book Now</a>
													</p>
												</div>
											</div>
										</div>
							<?php }}
								else
								{
								?>
							<div class="row">
							<div class="col-md-12">
							<h2 align="center">Sorry, no results found!</h2>
							<h4 align="center">	Please check the spelling or try searching for something else</h4>
							</div>
							</div>
			
								<?php }?>									
									</div>
								</div>
							</div>
						</div>
</div>
				</div>
				<div class="tab-pane" id="2a">
         <div class="b-features-columns-holder">
                                <div class="container">
                                    <div class="row equal">
                                        <div class="wave-bg"></div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInLeft">
                                            <div class="b-features-column">
                                            <div class="features-column-icon">  <img class="mySlides2" src="assets/media/components/b-gallery/gallery-1.jpg" style="width:100%">
  <img class="mySlides2" src="assets/media/components/b-gallery/gallery-2.jpg" style="width:100%">
  <img class="mySlides2" src="assets/media/components/b-gallery/gallery-1.jpg" style="width:100%"></div>
                                                <h6 class="features-column-title "style="font-size:16px">
                                                  Garments
												  
                                                </h6>
                                              <a href="compression_garments.php" class="btn btn-primary">
                                                        View More
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInLeft">
                                            <div class="b-features-column">
                                                <div class="features-column-icon"> <img class="" src="assets/media/components/b-gallery/hobt.jpg" style="width:100%">
														</div>
											   <h6 class="features-column-title" style="font-size:16px">
                                                 
												   Hyperbaric Oxygen chambers
                                                </h6>
                                              <a href="hyperbaric_oxygen.php" class="btn btn-primary">
                                                        View More
                                                    </a>
                                             
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInLeft">
                                            <div class="b-features-column">
                                                  <div class="features-column-icon"><img class="" src="assets/media/components/b-gallery/462993455_438.jpg" style="width:100%">
                                                </div><h6 class="features-column-title"style="font-size:16px">
                                                   Robotic Lithotripsy Machine
                                                </h6>
                                                <a href="robotic_lithotripsy" class="btn btn-primary">
                                                        View More
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInRight">
                                            <div class="b-features-column">
                                                <div class="features-column-icon"> <img class="" src="assets/media/components/b-gallery/Silicon_nostril_retainer.jpg" style="width:100%">
                                                </div><h6 class="features-column-title" style="font-size:16px">
                                                    Other medical Products
                                                </h6>
                                               <a href="#" class="btn btn-primary">
                                                        View More
                                                    </a>
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

<?php include('footer.php') ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script>
var myIndex2 = 0;
carousel();

function carousel() {
    var j;
    var x = document.getElementsByClassName("mySlides2");
    for (j = 0; j < x.length; j++) {
       x[j].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > x.length) {myIndex2 = 1}    
    x[myIndex2-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
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
		<script src="assets/plugins/contact_me.js"></script>
        <!--Simple check for contact-form-->
        <script src="assets/js/contactformcheck.js"></script>
    </body>


</html>