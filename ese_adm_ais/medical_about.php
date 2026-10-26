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
$cat = new About();
$get = $cat-> getAbout();
$g_id=1;
If(isset($_POST["submit"])){
	   $title	=	$_POST['title'];
	    $caption	=	$_POST['caption'];
		$descrip	=	$_POST['descrip'];
	   $status		= $_POST['status']; 
	   $photo	    =	$_FILES["upload"]["name"];
	//  print_r($status);exit;
	     $absDirName	=	dirname(__FILE__).'/upload/about'; 
			$relDirName	=	'upload/about'; 
	
		$obj	=	new Uploader($absDirName.'/');
  		 $fileName = $title;
		 $fileName = seoTitle($fileName ); 
  		$obj->setSequence($fileName);
 	 	$obj->setExtensions(array('png','gif','jpg','jpeg'));
 	  	$obj->setMaxSize(20);
	
	   if(empty($title)){
	   	header("location:medical_about.php");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		   if(empty($photo))
		  {
			$image=$_POST['hidding']; 
		  }
		  else{
	   	if($obj->uploadFile("upload")){ 
		         $image	=	$obj->getUploadName();
				 $cat->updateGalleryImage($g_id,$image);	
				 unlink('upload/'.$get[0]['abt_img']);
			    
				 }
		  }
	    $inputs	=array('title'=>$title,
				                      'caption'=>$caption,
									   'descrip'=>$descrip,
									  'photo'=>$image,
									  'status'=>$status,
									  'id'=>$g_id
									  );
									 
				if($cat->editAbout($inputs)){
				
					
					$message	=	new Message('Gallery Image Updated ','message');
					$message->setMessage();
					header("Location:medical_about.php");
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
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
                           
              <form id="form-validation" action="" method="post"
                                  class="form-horizontal" enctype="multipart/form-data">
                      
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="Input text" type="text" name="title" value="<?php echo $get[0]['abt_title'];?> ">
                                    </div>
                                </div>
								  <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Caption</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" placeholder="Input text" type="text" name="caption"  value="<?php echo $get[0]['abt_captn'];?> ">
                                    </div>
                                </div>
									 <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Image</label>
									   														
                                    <div class="col-sm-10">
									<div style="margin-top:10px; margin-bottom:5px;"> <img src="upload/about/<?php echo $get[0]["abt_img"];?>" height=70px width=120px  ></div>
                                     <input type="file" name="upload" class="" id="sminput" >
											<input type="hidden" value="<?php echo $get[0]["abt_img"];?>" name="hidding">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                      Description
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
                         
                                <textarea class="textarea editor-cls" placeholder="Place some text here" name="descrip"> <?php echo $get[0]['abt_descri'];?> </textarea>
                           
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
					
                             	<div class="form-group">
								 <label class="col-sm-2 control-label">
                                      Status
                                    </label>
								<div class="col-sm-10 col-md-4">
															<select name="status" class="form-control select2" style="width: 100%;">
															 
																				<option value="1" <?php if($get[0]["abt_status"]== 1){?> selected="selected"<?php }?> ><?php echo "Publish";?></option>
																				 <option value="2" <?php if($get[0]["abt_status"]== 2){?> selected="selected"<?php }?> ><?php echo "Unpublish";?></option>
																			   
															</select>
															</div>
															<div class="col-sm-10 col-md-4">
                                         <input style="width: 32%;" type="submit" name="submit" value="Save" class="btn btn-primary btn-block"/>
                                      
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
