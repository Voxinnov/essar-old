<?php
ob_start();
include("autoload.php");
session_start();
$no_visible_elements=true;
$a_id	=	$_GET["g_id"];

?>
<!DOCTYPE html>
<html>

<head>
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
    <!--end page level css-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        
        <div class="panel-body social col-sm-offset-2">
            
           <div class="col-xs-12 col-sm-9" align="center">
		   <div class="panel-header">
		    <?php
			  if($a_id==1)
			  {?>
		  <h5 style="color:red"><?php echo "Invalid Username Or Password"; ?></h5>
		  <?php
			  }
			  ?>
            <h2 class="text-center">
                Log In
                
            </h2>
        </div>
              <img src="img/logo4.png"  style="max-width:250px"></img>
            </div>
          
            <div class="clearfix">
                <div class="col-xs-12 col-sm-9">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">or</span>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6 form_width">
                   <form action = "login.php" method = "post">
                        <div class="form-group">
                            <label for="email" class="sr-only"> E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user text-primary"></i></span>
                                <input type="text" class="form-control  form-control-lg" id="email" name="txtUsername"
                                       placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="txtPassword" placeholder="Password">
                            </div>
                        </div>
                    
                        <div class="form-group">
						<div class="row">
						<div class="col-sm-6">
                            <input type="submit" name="submit" value="Log In" style="margin-top:20px" class="btn btn-primary btn-block"/>
						</div>
						<div class="col-sm-6">
							<a href="register.php" class="btn btn-primary btn-block" style="margin-top:20px">Sign Up</a>
						</div>	
						</div>	
                        </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom_js/login2.js"></script>
<!-- end of page level js -->
</body>

</html>
