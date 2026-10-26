<?php
 ob_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$g_id =$_GET['g_id'];
$product = new Medicalproduct();
 $record= $product->listmedprodectbycategory($g_id);
//$record = $product-> listMedicatgarm();


$total_record = count ($record);
$cat = new Medicalcategory();

$cat_record =$cat->getcategory($g_id);
$main_cat_id = $cat_record[0]['med_cat_main_id'];

$m_cat	=	new Maincategory();
$get_main_cat= $m_cat->getmaincategory($main_cat_id);
//Print_r($cat_record);exit;
//$cat_total = count($cat_record);

?>

<!DOCTYPE html>
<html lang="en">
    

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title>Compression Garments/ Essar Engineers</title>
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
                             <div class="layer-bg-mod_home page-layer-bg4">
                                <div class="b-add-info-holder">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                               
												  <h3 class="inherit-title">
                                                 <?php echo $get_main_cat[0]['med_main_cat_title'] ?>
                                                </h3>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-12">
                                                      
                                                        <div class="add-info-content">
                                                            <div class="add-info-content-title">
                                                               About <?php echo $cat_record[0]['med_cat_title'] ?>
                                                            </div>
                                                            <div class="add-info-content-text">
                                                           <?php echo $cat_record[0]['med_cat_descr']?> </div>
                                                        </div>
                                                    </div>
                                               
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block with shape -->
                                <!--<div class="shape-bg2"></div>-->
                            </div>
                        
                     
                            <!-- Absolute container with mac bg -->
                     
                            
                        </div>
											<div class="b-gallery b-isotope">
					
					<div class="b-items-gallery-holder">
							<div class="container">
								<div class="row">
									
									<div class="js-zoom-gallery grid clearfix" style="margin-top:20px">
										<div class="grid-sizer"></div>
											<?php 
							for($i=0;$i<$total_record;$i++)
							{
								$ftlt=explode(" ",$record[$i]['med_cat_title']);
								
							?>
										<div class="b-gallery-1__item grid-item <?php echo $ftlt[0].$ftlt[1]; ?>">
											<div class="gallery-item-content">
															<a href="single_product.php?g_id=<?php echo $record[$i]['med_prod_id']; ?>"><div class="gallery-item-img">
													<img src="ese_adm_ais/upload/medicalproduct/<?php echo $record[$i]['med_prod_img']; ?>"   alt="/" class="img-responsive" style="height:300px">
													<div class="gallery-item-hover">
														<a href="ese_adm_ais/upload/medicalproduct/<?php echo $record[$i]['med_prod_img']; ?>" class="js-zoom-gallery__item">
															<a href="single_product.php?g_id=<?php echo $record[$i]['med_prod_id']; ?>"><span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
															<!--<img src="ese_adm_ais/upload/medicalproduct/<?php// echo $record[$i]['med_prod_img']; ?>" alt="/" class="img-responsive">-->
														</a>
														
													</div>
												</div></a>
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
							<?php }?>
									
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
		<script src="assets/plugins/contact_me.js"></script>
        <!--Simple check for contact-form-->
        <script src="assets/js/contactformcheck.js"></script>
    </body>


</html>