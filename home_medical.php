
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
$sldr = new Slider();
$sldr_record = $sldr-> getAllSliderDetails();
//print_r($record);exit;
$total_sldr_record = count ($sldr_record);

?><!DOCTYPE html>
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Essar Engineers Medical</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="mainpage/assets/images/favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="mainpage/assets/images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="mainpage/assets/images/apple-touch-icon-72x72-precomposed.html">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="mainpage/assets/images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="mainpage/assets/revolution/css/settings.css">
	
	<link rel="stylesheet" type="text/css" href="mainpage/assets/revolution/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="mainpage/assets/revolution/fonts/font-awesome/css/font-awesome.min.css">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="mainpage/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="mainpage/assets/revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link href="mainpage/assets/css/lib.css" rel="stylesheet">
	<link href="mainpage/assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link href="mainpage/assets/css/plugins.css" rel="stylesheet">
	<link href="mainpage/assets/css/elements.css" rel="stylesheet">
	<link href="mainpage/assets/css/rtl.css" rel="stylesheet">
	<link id="color" href="mainpage/assets/css/color-schemes/red.css" rel="stylesheet"/>
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="mainpage/style.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
				<div class="line-scale">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	

	<!-- Header2 -->
	<header class="header_s header_s2">
		<!-- SidePanel -->
		<div id="slidepanel">
			<!-- Top Header -->
			<div class="top-header container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="call-info">
						<p><a href="mailto:info@essarengineers.co.in" title="info@essarengineers.co.in"><i class="fa fa-envelope-o"></i>info@essarengineers.co.in</a></p>
						<p><a href="tel:+919072200893" title="+91 90 72 20 08 93"><i class="fa fa-phone"></i>+91 90 72 20 08 93</a></p>
					</div>
					<div class="support-bar">
				
						<div class="support-link">
							<ul class="header-social">
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						
						
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
		</div><!-- SidePanel /- -->
		
		<!-- Ownavigation -->
		<nav class="navbar ownavigation">
			<!-- Container -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo" style="background:#fff">
						<a class="navbar-brand" href="index.html"><img src="mainpage/assets/images/red-logo.png" style="width:160px;height:auto"></a>
					</div>
				</div>
				<div class="navbar-collapse collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class=" active">
							<a aria-expanded="false" aria-haspopup="true" role="button" title="Home" href="index.html"><i class="fa fa-home"></i> Home</a>
							
						
						</li>
						<li><a title="About Us" href="#">About </a></li>
						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Treatments" href="#">Products</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a title="Treatments 3 Column" href="#">Compression</a></li>
								<li><a title="Treatments 4 Column" href="#">Dermal Filters</a></li>
								<li><a title="Treatments Details" href="#">Botox</a></li>
								<li><a title="Treatments Full Width" href="#">Facial Implants</a></li>
								<li><a title="Treatments 3 Column" href="#">Nasal Implants</a></li>
								<li><a title="Treatments 4 Column" href="#">Silicone sheet and gel</a></li>
								<li><a title="Treatments Details" href="#">Ear Clips for keloids</a></li>
								<li><a title="Treatments Full Width" href="#">Nostril Retainers</a></li>
							</ul>
						</li>
						
						<li><a title="Contact Us" href="#">Contact</a></li>
						<li>
						<iframe src="searcform.php" width="100%" height="40px" style="margin-bottom: 15px; margin-top: 18px;" frameborder="0" scrolling="no" overflow="hidden"> </iframe>
										
						</li>
					</ul>
				</div>
				<div id="loginpanel" class="desktop-hide">
					<div class="right" id="toggle">
						<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
						<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
					</div>
				</div>
			</div><!-- Container /- -->
		</nav><!-- Ownavigation /- -->
	</header><!-- Header2 -->
	
	<div class="main-container">
		<main>
			<!-- Slider Section2 -->
			<div id="home-revslider" class="slider-section slider-section2 container-fluid no-padding">
				<!-- START REVOLUTION SLIDER 5.0 -->
				<div class="rev_slider_wrapper">
					<div id="home-slider2" class="rev_slider" data-version="5.0">
						<ul>
						    <?php 
						    for($i=0;$i<$total_sldr_record;$i++)
						    {
						        
						   
						    ?>
							<li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
								<img src="ese_adm_ais/upload/slider/<?php echo $sldr_record[$i]['med_slider_img'];  ?>" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper slider-bg-hover2" id="slide-layer-<?php echo $i; ?>"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="['327','327','200','150']" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-<?php echo $i+1; ?>" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['295','270','220','165']" 
									data-fontsize="['52','40','35','20']"
									data-lineheight="['75','75','75','75']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.56px; color:#000; font-weight: 600; font-family: 'Open Sans', sans-serif; text-transform: uppercase;"><?php echo $sldr_record[$i]['med_slider_title']; ?>
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-<?php echo $i+2; ?>" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['375','320','270','195']" 
									data-fontsize="['66','56','46','30']"
									data-lineheight="['90','90','90','90']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.98px; color:#fff; font-weight: 700; font-family: 'Open Sans', sans-serif; text-transform: uppercase;"><?php echo $sldr_record[$i]['med_slider_captn']; ?>
								</div>
							</li>
							<?php  } ?>
						<!--	<li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
								<img src="mainpage/assets/images/slider-22.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper slider-bg-hover2" id="slide-layer-3"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="['327','327','200','150']" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-4" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['295','270','220','165']" 
									data-fontsize="['52','40','35','20']"
									data-lineheight="['75','75','75','75']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.56px; color:#000; font-weight: 600; font-family: 'Open Sans', sans-serif; text-transform: uppercase;">We Took Our Profession 
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-5" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['375','320','270','195']" 
									data-fontsize="['66','56','46','30']"
									data-lineheight="['90','90','90','90']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.98px; color:#fff; font-weight: 700; font-family: 'Open Sans', sans-serif; text-transform: uppercase;">as Our Passion
								</div>
							</li>
							<li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
								<img src="mainpage/assets/images/slider-23.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper slider-bg-hover2" id="slide-layer-6"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="['327','327','200','150']" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-7" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['295','270','220','165']" 
									data-fontsize="['52','40','35','20']"
									data-lineheight="['75','75','75','75']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.56px; color:#000; font-weight: 600; font-family: 'Open Sans', sans-serif; text-transform: uppercase;">We Took Our Profession 
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-8" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['top','top','top','top']" data-voffset="['375','320','270','195']" 
									data-fontsize="['66','56','46','30']"
									data-lineheight="['90','90','90','90']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.98px; color:#fff; font-weight: 700; font-family: 'Open Sans', sans-serif; text-transform: uppercase;">as Our Passion
								</div>
							</li>-->
						</ul>
					</div>
				</div><!-- END OF SLIDER WRAPPER -->
			</div><!-- Slider Section2 /- -->
			
			<!-- Services Section -->
			<div class="service-section container-fluid no-left-padding no-right-padding">
				<div class="container">
					<!-- Section Header -->
					<div class="section-header2">
						<h3><?php echo $get[0]['abt_title'];?> </h3>
						<p><?php echo $get[0]['abt_descri'];?> </p>
					</div><!-- Section Header /- -->
				</div>
			</div><!-- Services Section /- -->
			
			<!-- Department Section -->
			<div class="department-section container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Section Header -->
						<div class="section-header2">
							<h3> <span>Products</span></h3>
							<p>Our Product Categories</p>
						</div><!-- Section Header /- -->
						<div class="department-carousel">
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-1.jpg" alt="department" />
									<h3>Compression</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-3.jpg" alt="department" />
									<h3>Dermal Filters</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-6.jpg" alt="department" />
									<h3>Botox</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-5.jpg" alt="department" />
									<h3>Facial Implants</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-2.jpg" alt="department" />
									<h3>Nasal Implants</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-7.jpg" alt="department" />
									<h3>Silicone sheet and gel</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-4.jpg" alt="department" />
									<h3>Ear Clips for keloids</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="department-block">
									<img src="mainpage/assets/images/department-8.jpg" alt="department" />
									<h3>Nostril Retainers</h3>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Department Section -->
			
			<!-- Features Section -->
			<div class="features-section container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Section Header -->
						<div class="section-header2">
							<h3>Our Special <span>Features</span></h3>
							<p>Just two good old boys never meaning no harm beats all you have ever saw been in trouble with the law since the day they was born so the most of day this is the tale of our castaways they're here for a long long time</p>
						</div><!-- Section Header /- -->
						<div class="features-details-tab">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="#equipments" role="tab" data-toggle="tab"><i class="fa fa-cogs"></i>Best Equipments</a></li>
									<li role="presentation" class="active"><a href="#doctors" role="tab" data-toggle="tab"><i class="fa fa-users"></i>Certifications</a></li>
									<li role="presentation"><a href="#network" role="tab" data-toggle="tab"><i class="fa fa-globe"></i>Strong Network</a></li>
									<li role="presentation"><a href="#medicine" role="tab" data-toggle="tab"><i class="fa fa-medkit"></i>Quality Medicine</a></li>
									<li role="presentation"><a href="#support" role="tab" data-toggle="tab"><i class="fa fa-life-ring"></i>Client Support</a></li>
								</ul><!-- Nav tabs /- -->
							</div>
							<div class="col-md-8 col-sm-12 col-xs-12">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane" id="equipments">
										<p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend? Moving on up to the east side. <span>We finally got a piece of the pie!</span> Why do we always come here, I <i>guess well never know</i> you have a problem if no one else can help.</p>
										<div class="col-md-5 col-sm-6 col-xs-6 no-left-padding">
											<ul>
												<li>Just sit right back and you'll hear</li>
												<li>The card attached will say thanks</li>
												<li>A museum where people come</li>
											</ul>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-6">
											<div class="video-work">
												<img src="mainpage/assets/images/features.jpg" alt="features" />
												<div class="video-section">
													<a class="popup-vimeo" href="https://vimeo.com/139358538"><i class="fa fa-play"></i></a>
													<span>How we work</span>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane active" id="doctors">
										<p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend? Moving on up to the east side. <span>We finally got a piece of the pie!</span> Why do we always come here, I <i>guess well never know</i> you have a problem if no one else can help.</p>
										<div class="col-md-5 col-sm-6 col-xs-6 no-left-padding">
											<ul>
												<li>Just sit right back and you'll hear</li>
												<li>The card attached will say thanks</li>
												<li>A museum where people come</li>
												<li>You would see the biggest gift</li>
												<li>Just sit right back and you'll hear</li>
												<li>We finally got a piece of the pie</li>
											</ul>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-6">
											<div class="video-work">
												<img src="mainpage/assets/images/features.jpg" alt="features" />
												<div class="video-section">
													<a class="popup-vimeo" href="https://vimeo.com/139358538"><i class="fa fa-play"></i></a>
													<span>How we work</span>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="network">
										<p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend? Moving on up to the east side. <span>We finally got a piece of the pie!</span> Why do we always come here, I <i>guess well never know</i> you have a problem if no one else can help.</p>
										<div class="col-md-5 col-sm-6 col-xs-6 no-left-padding">
											<ul>
												<li>Just sit right back and you'll hear</li>
												<li>The card attached will say thanks</li>
												<li>A museum where people come</li>
											</ul>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-6">
											<div class="video-work">
												<img src="mainpage/assets/images/features.jpg" alt="features" />
												<div class="video-section">
													<a class="popup-vimeo" href="https://vimeo.com/139358538"><i class="fa fa-play"></i></a>
													<span>How we work</span>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="medicine">
										<p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend? Moving on up to the east side. <span>We finally got a piece of the pie!</span> Why do we always come here, I <i>guess well never know</i> you have a problem if no one else can help.</p>
										<div class="col-md-5 col-sm-6 col-xs-6 no-left-padding">
											<ul>
												<li>Just sit right back and you'll hear</li>
												<li>The card attached will say thanks</li>
												<li>A museum where people come</li>
												<li>You would see the biggest gift</li>
												<li>Just sit right back and you'll hear</li>
												<li>We finally got a piece of the pie</li>
											</ul>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-6">
											<div class="video-work">
												<img src="mainpage/assets/images/features.jpg" alt="features" />
												<div class="video-section">
													<a class="popup-vimeo" href="https://vimeo.com/139358538"><i class="fa fa-play"></i></a>
													<span>How we work</span>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="support">
										<p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend? Moving on up to the east side. <span>We finally got a piece of the pie!</span> Why do we always come here, I <i>guess well never know</i> you have a problem if no one else can help.</p>
										<div class="col-md-5 col-sm-6 col-xs-6 no-left-padding">
											<ul>
												<li>Just sit right back and you'll hear</li>
												<li>The card attached will say thanks</li>
												<li>A museum where people come</li>
											</ul>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-6">
											<div class="video-work">
												<img src="mainpage/assets/images/features.jpg" alt="features" />
												<div class="video-section">
													<a class="popup-vimeo" href="https://vimeo.com/139358538"><i class="fa fa-play"></i></a>
													<span>How we work</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Features Section -->

		
		</main>
	</div>
	
	<!-- Footer Main2 -->
	<footer id="footer-main" class="footer-main footer-main2 container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Widget Information -->
				<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_information">
						
						<div class="information-block">
							<i class="icon icon-Pointer"></i>
							<p>23/466-D1, PADMAKUMARAN Blg, THRIPUNITHURA, ERNAKULAM,
KERALA-682301</p>
						</div>
						<div class="information-block">
							<i class="icon icon-Phone2"></i>
							<p><a href="tel:+919072200893" title="+91 90 72 20 08 93">+91 90 72 20 08 93</a></p>
							<p>&nbsp;</p>
						</div>
						<div class="information-block">
							<i class="icon icon-Mail"></i>
							<p><a href="info@essarengineers.co.in" title="info@essarengineers.co.in">info@essarengineers.co.in </a></p>
							<p></p>
						</div>
					</aside>
				</div><!-- Widget Information /- -->
				<!-- Widget About -->
				<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_about">
						<h3 class="widget-title">About Us</h3>
						<p>We are the leading manufactures for Custom and Ready made pressure Garments. Depending on the purpose and treatment, </p>
						<ul class="footer-social">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</aside>
				</div><!-- Widget About /- -->
				<!-- Widget Links -->
				<div class="col-md-2 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_links">
						<h3 class="widget-title">Useful links</h3>
						<ul>
							<li><a href="#" title="Get An Appointment">HOME</a></li>
							<li><a href="#" title="Old Patient Reports">ABOUT</a></li>
							<li><a href="#" title="Exclusive Treatments">PRODUCTS</a></li>
							<li><a href="#" title="Insurance Claim">CONTACT</a></li>
						</ul>
					</aside>
				</div><!-- Widget Links /- -->
				<!-- Widget Workinghours -->
				<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_workinghours">
						<h3 class="widget-title">Location</h3>
						     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.937646146221!2d77.14624151508387!3d28.691511782394638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03ccab22b091%3A0xbd9703869c3137a4!2sEssar+Engineers!5e0!3m2!1sen!2sin!4v1511161377975" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                           
					</aside>
				</div><!-- Widget Workinghours /- -->
			</div><!-- Row /- -->
		</div><!-- Container /- -->
		<div class="btm-ftr-menu container-fluid no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Ownavigation -->
						<nav class="navbar ownavigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ftr" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>									
							</div>
							<div id="navbar-ftr" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index-2.html" title="Home">Home</a></li>
									<li><a href="about.html" title="About Us">About </a></li>
									<li><a href="#" title="Projects">Products</a></li>
									<li><a href="#" title="Help">Help</a></li>		
									<li><a href="#" title="Contact">Contact</a></li>
								</ul>
							</div>
						</nav><!-- Ownavigation /- -->
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 copyright-section">
						<p>&copy; Copyrights 2020. Essar Engineers All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- Footer Main2 /- -->
	
	<!-- JQuery v1.12.4 -->
	<script src="mainpage/assets/js/jquery.min.js"></script>
	
	<!-- Library - Js -->
	<script src="mainpage/assets/js/lib.js"></script>
	<script src="mainpage/assets/js/bootstrap-datepicker.min.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="mainpage/assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="mainpage/assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="mainpage/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="mainpage/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="mainpage/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="mainpage/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="mainpage/assets/js/functions.js"></script>
	
</body>

<!-- Mirrored from atixscripts.info/demo/html/healthkare/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Nov 2020 06:41:22 GMT -->
</html>