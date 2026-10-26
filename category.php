
<?php
 ob_start();

include("autoload.php");

$db		=	new MySql();
$db->connect();
$product = new Medicalproduct();
$record = $product-> listallmedicalproduct();
//print_r($record);exit;
$total_record = count ($record);
$cat = new About();
$get = $cat-> getAbout();


?>
<!DOCTYPE html>
<html lang="en">
    

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
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
                                                 Essar Engineers
                                                </h3>
                                                <div class="row equal">
                                                    <div class="b-add-info col-xs-6 col-sm-6 col-md-12">
                                                      
                                                        <div class="add-info-content">
                                                            <div class="add-info-content-title">
                                                               About Essar Engineers
                                                            </div>
                                                            <div class="add-info-content-text">
                                                            We are the leading manufactures for Custom and Ready made pressure Garments. Depending on the purpose and treatment, different grades of pressure garments are available. our pressure garments are light weight and made up of breathable fabric due to which the comfort level for the patients is increased after the surgery. 
                                                            </div>
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
								<div id="exTab1" class="" >	
<ul  class="nav nav-pills ultab" align="center
">
		
			<li class="active"><a href="#2a" data-toggle="tab">Category</a>
			</li>
				<li >
        <a  href="product.php" >Products</a>
			</li>
		</ul>

			<div class="tab-content clearfix">

				<div class="tab-pane active" id="2a">
         <div class="b-features-columns-holder">
                                <div class="container">
                                    <div class="row equal">
                                        <div class="wave-bg"></div>
                                        
                                        <?php
                                        
                                        $med_cat = new Medicalcategory();
                                      $medical_cate = $med_cat ->listcategory();
                                       $medical_cate_count = count($medical_cate);
                                        
                                        
                                        for($i=0;$i<$medical_cate_count;$i++)
                                        {
                                            $cat_id = $medical_cate[$i]['med_cat_id'];
                                            //print_r($cat_id);
                                         $cat_img= $product->listmedprodectbycategory($cat_id);
                                          $cat_img_count = count($cat_img);
                                            
                                        ?>
                                        
                                        
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInLeft">
                                            <div class="b-features-column">
                                            <div class="features-column-icon">  
                                            
                                            <img src="ese_adm_ais/upload/medicalproduct/<?php echo $cat_img[0]['med_prod_img']; ?>" style="width:100%">
                                            
                                        
                                            </div>
                                                <h6 class="features-column-title "style="font-size:16px">
                                                  <?php echo $medical_cate[$i]['med_cat_title'] ?>
												  
                                                </h6>
                                              <a href="productlist.php?g_id=<?php echo $cat_id ;?>" class="btn btn-primary">
                                                        View More
                                                    </a>
                                            </div>
                                        </div>
                                      <?php } ?> 
                                        
                                        
                                   <!--     <div class="col-xs-6 col-sm-6 col-md-3 wow slideInLeft">
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
                                                   ESWL Machine
                                                </h6>
                                                <a href="eswlmachine" class="btn btn-primary">
                                                        View More
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 wow slideInRight">
                                            <div class="b-features-column">
                                                <div class="features-column-icon"> <img class="" src="assets/media/components/b-gallery/Silicon_nostril_retainer.jpg" style="width:100%">
                                                </div><h6 class="features-column-title" style="font-size:16px">
                                                    Silicon Products
                                                </h6>
                                               <a href="silicon_products" class="btn btn-primary">
                                                        View More
                                                    </a>
                                            </div>
                                        </div>-->
                                  
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