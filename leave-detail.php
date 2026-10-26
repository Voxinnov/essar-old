
<?php 
 ob_start();
session_start();
include("autoload.php");
include("session.php");
$pasid	=	$_SESSION["LogUserID"];
$ad_name	=	$_SESSION["Loguser_name"];
$db		=	new MySql();
$db->connect();
$obj	=	new Admin();
$g_id=	$_GET["n_id"];
$data	=	$obj->getAdmin($pasid);


$cat	=	new Leave();

$get	=	$cat->getLeave($g_id);
//print_r($records); 

$totalRecords	=	count($records);
$pageRecords	=	$cat->pageRecords;

?> 









<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/project-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:45:05 GMT -->
<head>
<title>Voxinnov:: Leave Details</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="asset/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="asset/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

    <!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

  <?php include('header.php') ?>

  <?php include('menu.php') ?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>  Leave Detail </h2>
                   
				   
                    </div>            
             
			 
                </div>
            </div>

                  <div class="card col-sm-12">
                        <div class="header">
                            
                        </div>
                        <div class="body">
						
                            
								<div class="input-group mb-3">
                               
								<div class="col-sm-4"align="right">
                                    <label for="Name">Leave category&nbsp;:</label>
                              
								</div>
								<div class="col-sm-8"align="left">
                                <span><?php $st= $get[0]
                                                        ["leave_catogory"];
														
														
									if($st==1) 
													
													 {echo "Casual"; }
													 if($st==2) 
													
													 {echo "Medical"; }
													 	 if($st==3) 
													
													 {echo "Maternity"; }
													 
												?>					
														
														
														
														
														
														
														
														
														</span>
								</div>
                            </div>
							

							
							
							    <div class="input-group mb-3">
                              
								<div class="col-sm-4"align="right">
                                    <label for="Name">leave period&nbsp;:</label>
                                </div>
								
								<div class="col-sm-8"align="left">
                                    <span><?php echo $get[0]
                                                        ["leave_from"];?> TO <?php echo $get[0]
                                                        ["leave_from"];?></span>
                            </div>
                            </div>
							
								      <div class="input-group mb-3">
                              
								<div class="col-sm-4"align="right">
                                    <label for="Name">Reason&nbsp;:</label>
                                </div>
								
								<div class="col-sm-8"align="left">
                                     <span><?php echo $get[0]
                                                        ["leave_dsption"];?> </span>
                            </div>
                            </div>
							
							     <div class="input-group mb-3">
                              
								<div class="col-sm-4"align="right">
                                    <label for="Name">Status&nbsp;:</label>
                                </div>
								
								<div class="col-sm-8"align="left">
								
                                  <span><?php $st= $get[0]["leave_status"];
												if($st==1) 
													
													 {echo "Working"; }
													 if($st==2) 
													
													 {echo "Completed"; }
													 	 if($st==3) 
													
													 {echo "Pending"; }
													 
												?></span>
                            </div>
                            </div>
							
							

                        
                        </div>
                    </div>
            
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="asset/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/project-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 06:45:05 GMT -->
</html>
