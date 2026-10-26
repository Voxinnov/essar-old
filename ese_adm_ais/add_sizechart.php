<?php
 ob_start();
session_start();
include("autoload.php");
include("session.php");
$pasid	=	$_SESSION["LogUserID"];
$ad_name	=	$_SESSION["Loguser_name"];
$db		=	new MySql();
$db->connect();
$objA	=	new Admin();
$data	=	$objA->getAdmin($pasid);
$g_id = $_GET['g_id'];
If(isset($_POST["submit"])){
	   $position	    =	$_POST['position']; 
	   $_2XS    =	$_POST['2SX']; 
	 $_XS    =	$_POST['XS']; 
	 $_S    =	$_POST['S']; 
	 $_M    =	$_POST['M']; 
	 $_L    =	$_POST['L']; 
	 $_XL    =	$_POST['XL']; 
	 $_2XL    =	$_POST['2XL']; 
	 $_3XL    =	$_POST['3XL']; 
	 $_4XL    =	$_POST['4XL']; 
	
	
	   if(empty($position)){
	   	header("location:add_sizechart.php?g_id=$g_id");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		  
	   	
	    $cat	=	new Sizechart();
			     $inputs	=	array('p_id'=>$g_id,
				 'position'=>$position,
				                     '_2XS'=>$_2XS,
									 '_XS'=>$_XS,
									 '_S'=>$_S,
									 '_M'=>$_M,
									 '_L'=>$_L,
									 '_XL'=>$_XL,
									 '_2XL'=>$_2XL,
									  '_3XL'=>$_3XL,
									  '_4XL'=>$_4XL
									  );
				//print_r($inputs);exit;
			
				if($cat->addSizechart($inputs)){
				
					
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
				header("Location:add_sizechart.php?g_id=$g_id");
					exit;
					
				}else{
					
					$message	=	new Message('Unknown error','error');
					$message->setMessage();
				}
				
		
	   }
	  
}
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Main Category | Medical</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
   
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" media="screen" type="text/css" href="vendors/summernote/summernote.css">
    <link href="vendors/trumbowyg/css/trumbowyg.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/form_editors.css">
    <!--end of page level css-->
</head>

<body class="skin-coreplus">
<?php include('header.php') ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
           Product Size Chart
            </h1>
          
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <!-- /.box -->

                   <div class="row">
                                                                     					            <div class="col-md-12">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-tint"></i>  Add Product Size
                            </h3>
                            
                        </div>
                        <div class="panel-body" >
                           
              <form id="form-validation" action="" method="post" class="form-horizontal"  enctype="multipart/form-data">
                      
                        
								           <div class="row ">
                                                    <div class="col-md-6">
                                                       <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Position</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="Position" type="text" name="position">
                                    </div>
                                </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">2SX</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="2SX" type="text" name="2SX">
                                    </div>
                                </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">XS</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="XS" type="text" name="XS">
                                    </div>
                                </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">S</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="S" type="text" name="S">
                                    </div>
                                </div>
                                                    </div>
                                                </div>
												  <div class="row">
												   <div class="col-md-6">
                                                     <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">M</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="M" type="text" name="M">
                                    </div>
                                </div></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">L</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="L" type="text" name="L">
                                    </div>
                                </div>
                                                    </div>
                                                </div>
												  <div class="row ">
												  <div class="col-md-6">
                                                   <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">XL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="XL" type="text" name="XL">
                                    </div>
                                </div></div>
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">2XL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="2XL" type="text" name="2XL">
                                    </div>
                                </div>
                                                    </div>
                                                </div>
												  <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">3XL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="3XL" type="text" name="3XL">
                                    </div>
                                </div>
                                                    </div>
													     <div class="col-md-6">
                                                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">4XL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="4XL" type="text" name="4XL">
                                    </div>
                                </div>
                                                    </div>
                                             
							 
                                                </div>
							
                             	<div class="form-group">
								 <label class="col-sm-2 control-label">
                                      &nbsp;
                                    </label>
								
															<div class="col-sm-10 col-md-3">
                                         <input style="width: 32%;" type="submit" name="submit" value="Save" class="btn btn-primary btn-block"/>
                                      
                                    </div>
                                                   				<div class="col-sm-10 col-md-2">
                                        <a href="medical_product.php" class="btn btn-primary btn-block">Skip</a>
                                      
                                    </div>            </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
				</div>
                
           

           
            <!--main content ends-->
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="vendors/trumbowyg/js/trumbowyg.js" type="text/javascript"></script>
<script type="text/javascript" src="vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="vendors/summernote/summernote.min.js"></script>
<script src="js/custom_js/form_editors.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>


<!-- Mirrored from dev.lorvent.com/core_plus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 10:35:24 GMT -->
</html>
