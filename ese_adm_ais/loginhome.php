<?php
 ob_start();
session_start();
include("autoload.php");
include("session.php");
$pasid	=	$_SESSION["LogUserID"];
$ad_name	=	$_SESSION["Loguser_name"];
//print_r($pasid);exit;
$db		=	new MySql();
$db->connect();
$objA	=	new Admin();

$data	=	$objA->getAdmin($pasid);
?>
<!DOCTYPE html>
<html lang="en">
    

<head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Essae Engineers</title> 
        <link href="home/img/assets/favicon.png" rel="icon" type="image/png"> 
        <link href="home/css/plugins.css" rel="stylesheet" type="text/css">   
        <link href="home/css/theme.css" rel="stylesheet" type="text/css">   
        <link href="home/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="home/css/et-line-icons.css" rel="stylesheet" type="text/css">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css"> 
        <link href="home/fonts/lovelo/stylesheet.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>
        <link href="home/css/custom.css" rel="stylesheet" type="text/css"> 
        <link href="home/css/colors/blue.css" id="color-scheme" rel="stylesheet" type="text/css">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../www.google-analytics.com/analytics.js','ga');ga('create', 'UA-77054149-1', 'auto');ga('send', 'pageview');
        </script>
    </head>
    <body> 
        
    
        <!-- End Header -->
        
        
		<div class="row langingrow" >
					  <div class="col-sm-6  landing_col1 " >   
                        
                        <h2 class="" style="">MEDICAL SECTION</h2>     
                       
                        <a href="dashboard.php" class="btn btn-lg btn-landing1 mt40">View</a>  
                    </div>
					  <div class="col-sm-6  landing_col2  " >   
                       
                        <h2 class="">TRAFFIC SECTION</h2>     
                       
                        <a href="traffic_dashboard.php" class="btn btn-lg btn-landing1 mt40">View</a>  
                    </div>
					<div class="landing_logo"><img src="home/img/logo.png" ></img></div>
					</div>
       
        <script src="home/js/jquery.min.js"></script>
        <script src="home/js/plugins.js"></script>
        <script src="home/js/scripts.js"></script>

    </body>


</html>