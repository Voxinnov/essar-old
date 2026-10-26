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
$main_cat = New Medicalproduct();
$reccort_cat = $main_cat-> listallmedicalproduct();
//print_r($reccort_cat);exit;
$total_reccort_cat = count($reccort_cat);
If(isset($_POST["submit"])){
	
	   	$sendbyname	=	trim($_POST["sendbyname"])	;		
 	$rating	=	trim($_POST["rating"])	;	
		
 	$pro_id	=	trim($_POST["pro_id"])	;	
	$comments	=	trim($_POST["feed"])	;	
$status	=	trim($_POST["status"])	;		
 	$date	=	date('d-m-Y');	
	 if(empty($sendbyname)){
	   	header("location:add_feedback.php");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		  
	   	
	    $cat	=	new Medicalfeedback();
			     $inputs	=	array('sendbyname'=>$sendbyname,
				                     
									  'rating'=>$rating,
									  'pro_id'=>$pro_id,
									  'comments'=>$comments,
									  'date'=>$date,
									  'status'=>$status
									  );
				//print_r($inputs);exit;
			
				if($cat->addMedicalfeedback($inputs)){
				
					
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					header("location:feedback.php");
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
    <title>About | Medical</title>
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
              About
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
                                <i class="fa fa-fw fa-tint"></i> About
                            </h3>
                            
                        </div>
                        <div class="panel-body" >
                           
              <form  action="" method="post"
                                  class="form-horizontal">
                      <div class="row">
					  <div class="col-md-4">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Send By</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="Name" name="sendbyname" type="text">
                                    </div>
                                </div>
								</div>
								<div class="col-md-4">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Rating</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="Rating" name="rating" type="text">
                                    </div>
                                </div>
								</div>
								 <div class="col-md-4">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-4 control-label">Product</label>
                                    <div class="col-sm-8">
                                       <select name="pro_id" class="form-control select2" style="width: 100%;">
																				<option value="0" >--Select--</option>
																				<?php 
																					for($i=0;$i<$total_reccort_cat;$i++)
																					{
																						
																				?>
																					<option value="<?php echo $reccort_cat[$i]['med_prod_id'];?>" ><?php echo $reccort_cat[$i]['med_prod_name']?></option>
																				
																			   <?php } ?>
															</select>
                                    </div>
                                </div>
								</div>
								</div>
						
								
								<div class="row">
								<div class="col-md-12">
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                      Comments
                                    </label>
                                    <div class="col-sm-10 col-md-10">
                         <div class="panel-body flip_editing">
                    <!-- /.box -->
                    <div class='box well well-sm'>
                        <div class='box-header'>
                            
                            <!-- tools box -->
                            <div class="pull-right box-tools"></div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class='box-body'>
                         
                                <textarea class="textarea editor-cls" placeholder="Place some text here" name="feed"> </textarea>
                           
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
								</div>
					
								<div class="row">
							
								<div class="col-md-12">
                             	<div class="form-group">
								 <label class="col-sm-2 control-label">
                                      Status
                                    </label>
								<div class="col-sm-10 col-md-4">
															<select name="status" class="form-control select2" style="width: 100%;">
															 
																				<option value="1" >Publish</option>
																				 <option value="0" >Unpublish</option>
																			   
															</select>
															</div>
															<div class="col-sm-10 col-md-4">
                                         <input style="width: 32%;" type="submit" name="submit" value="Save" class="btn btn-primary btn-block"/>
                                      
                                    </div>
                                                               </div>
															   </div>
															   </div>
                              
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
