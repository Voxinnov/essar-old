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

$g_id =$_GET['g_id'];
   $cat	=	new Medicalproduct();
$get= $cat->getmedicalproduct($g_id);
$prod_cat = New Medicalcategory();
$reccort_cat = $prod_cat-> listcategory();
//print_r($reccort_cat);exit;
$total_reccort_cat = count($reccort_cat);

 $sizechart	=	new Sizechart();
 $record_size = $sizechart-> ListSizechart($g_id);
 $total_reccord= count($record_size);
 
If(isset($_POST["submit"])){
	
	   $title	    =	$_POST['title']; 
	   $name	    =	$_POST['name']; 
		$cate	= 	$_POST['cate'];
	   $decrip	    =	$_POST['descrp'];
	   $depart	    =	$_POST['depart'];
	     $status	    =	$_POST['status'];
	//print_r( $title);exit;
	$photo	    =	$_FILES["upload"]["name"];
	$photo2	    =	$_FILES["upload2"]["name"];
	     $status	    =	$_POST['status'];
	
	     $absDirName	=	dirname(__FILE__).'/upload/medicalproduct'; 
			$relDirName	=	'upload/medicalproduct'; 
	
		$obj	=	new Uploader($absDirName.'/');
  		 $fileName = $name;
		 $fileName = seoTitle($fileName ); 
  		$obj->setSequence($fileName);
 	 	$obj->setExtensions(array('png','gif','jpg','jpeg'));
 	  	$obj->setMaxSize(20);
	
	    
	   if(empty($title)){
	   	header("location:add_medical_product.php");
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
				 unlink('upload/medicalproduct/'.$get[0]['med_main_cat_img']);
			    
				 }
		  }
	   	 if(empty($photo2))
			{
			$image2=$_POST['hidding2']; 
			}
		
	   	
			else{
			if($obj->uploadFile("upload2")){ 
		         $image2	=	$obj->getUploadName();
				 $cat->updateGalleryImage2($g_id,$image2);	
				 unlink('upload/medicalproduct/'.$get[0]['med_prod_mesrmnt_img']);
			    
				 }
		  }

			     $inputs	=	array('title'=>$title,
				                     'name'=>$name,
									  'cate'=>$cate,
									  'descrip'=>$decrip,
									  'depart'=>$depart,
									  'photo' => $image,
									  'photo2' => $image2,
									  'status'=>$status,
									  'id' =>$g_id
									  );
				//print_r($inputs);exit;
			
				if($cat->editMedicalproduct($inputs)){
				
					
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					
					
					header("Location:medical_product.php");
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
                           
              <form  action="" method="post"  class="form-horizontal" enctype="multipart/form-data">
                      <div class="row">
					  
					  <div class="col-md-6">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" id="input-text" value="<?php echo $get[0]['med_prod_title']?>" type="text">
                                    </div>
                                </div>
								</div>
								 <div class="col-md-6">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-4 control-label"> Category</label>
                                    <div class="col-sm-8">
                                       <select name="cate" class="form-control select2" style="width: 100%;">
															 
																				<option value="0" >--Select--</option>
																				<?php 
																					for($i=0;$i<$total_reccort_cat;$i++)
																					{
																						
																				?>
																					<option value="<?php echo $reccort_cat[$i]['med_cat_id'];?>" <?php if($reccort_cat[$i]['med_cat_id']== $get[0]['med_prod_cat_id']){?> selected="selected"<?php }?> ><?php echo $reccort_cat[$i]['med_cat_title']?></option>
																				
																			   <?php } ?>
															</select>
                                    </div>
                                </div>
								</div>
								</div>
								 <div class="row">
					  <div class="col-md-6">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" name="name" value="<?php echo $get[0]['med_prod_name']?>" type="text">
                                    </div>
                                </div>
								</div>
								 <div class="col-md-3">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Image</label>
									   <div class="col-sm-10">
									   <img src="upload/medicalproduct/<?php echo $get[0]['med_prod_img']; ?>" width="100px" height="100px"></img>
									<input type="hidden" value="<?php echo $get[0]["med_prod_img"];?>" name="hidding">
                                                                           <input  id="input-text" name="upload" type="file">
                                </div>
								</div>
								</div>
								 <div class="col-md-3">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Image</label>
									   <div class="col-sm-10">
									   <img src="upload/medicalproduct/<?php echo $get[0]['med_prod_mesrmnt_img']; ?>" width="100px" height="100px"></img>
									<input type="hidden" value="<?php echo $get[0]["med_prod_mesrmnt_img"];?>" name="hidding2">
                                                                           <input  id="input-text" name="upload2" type="file">
                                </div>
								</div>
								</div></div>
								<div class="row">
								<div class="col-md-6">
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
                           
                                <textarea class="textarea editor-cls" placeholder="Place some text here" name="descrp"> <?php echo $get[0]['med_prod_decrip']?></textarea>
                        
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                       Department
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
                        
                                <textarea class="textarea editor-cls" placeholder="Place some text here" name="depart">  <?php echo $get[0]['med_prod_depart']?></textarea>
                        
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
								</div>
							
								<div class="row">
								
							
								<div class="col-md-8">
                             	<div class="form-group">
								 <label class="col-sm-2 control-label">
                                      Status
                                    </label>
								<div class="col-sm-10 col-md-4">
															<select name="status" class="form-control select2" style="width: 100%;">
															 		 
														<option value="1" <?php if($get[0]["med_prod_status"]== 1){?> selected="selected"<?php }?> ><?php echo "Publish";?></option>
														 <option value="2" <?php if($get[0]["med_prod_status"]== 2){?> selected="selected"<?php }?> ><?php echo "Unpublish";?></option>
														
															</select>
															</div>
															<div class="col-sm-10 col-md-4">
                                         <input style="width: 32%;" type="submit" name="submit" value="Save" class="btn btn-primary btn-block"/>
                                      
                                    </div>
                                                               </div>
															   </div>
															   </div>
                              
                            </form>
							<br>
							<div class="row">
							<div class="col-md-10">
							 <h2 class="panel-title">
                                Sizechart 
                            </h2>
							</div>
							<div class="col-md-2">
							<a href="add_sizechart.php?g_id=<?php echo $g_id ?>" class="btn btn-primary btn-block">Add Size</a>
							</div>
							</div>
							      <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Posision</th>
                                        <th>2XS</th>
										<th>XS</th>
                                        <th>S</th>
										<th>M</th>
										<th>L</th>
                                        <th>XL</th>
										<th>2XL</th>
										<th>3XL</th>
										<th>4XL</th>
                                    
										<th>Edit</th>
										<th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									for($i=0;$i<$total_reccord;$i++)
									{
										
									?>
                                    <tr>
                                        <td><?php $i+1;?></td>
                                        <td><?php echo $record_size[$i]['size_chart_position'];?></td>
										<td><?php echo $record_size[$i]['size_chart_2XS'];?></td>
                                        <td><?php echo $record_size[0]['size_chart_XS'];?></td>
										<td><?php echo $record_size[$i]['size_chart_S'];?></td>
                                        <td><?php echo $record_size[$i]['size_chart_M'];?></td>
										<td><?php echo $record_size[$i]['size_chart_L'];?></td>
										<td><?php echo $record_size[$i]['size_chart_XL'];?></td>
                                        <td><?php echo $record_size[0]['size_chart_2XL'];?></td>
										<td><?php echo $record_size[0]['size_chart_3XL'];?></td>
										<td><?php echo $record_size[0]['size_chart_4XL'];?></td>
                                        <td>
                                            <p>
                                               <a href="edit_sizechart.php?g_id=<?php  echo $record_size[$i]['size_chart_id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal"
                                                         data-placement="top"><span
                                                        class="glyphicon glyphicon-pencil"></span></a>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                 <a href="delete_sizechart.php?a_id=<?php  echo $record_size[$i]['size_chart_id']; ?>&g_id=<?php echo $g_id?>"  class="btn btn-danger btn-xs" data-toggle="modal"
                                                         data-placement="top"><span
                                                        class="glyphicon glyphicon-trash"></span></a>
                                            </p>
                                        </td>
                                    </tr>
									<?php } ?>
                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
						
						    <div id="form_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Size Chart</h4>
                                        </div>
                                                   <form role="form">
                                            <div class="modal-body">
                                                <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class=" control-label"> Size Position  </label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="Size Position" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">           
														<label class=" control-label">2XS  </label>
                                                            <input type="text" name="2XS" id="last-name"
                                                                   placeholder="2XS" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class=" control-label"> XS  </label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="XS" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">           
														<label class=" control-label">S  </label>
                                                            <input type="text" name="2XS" id="last-name"
                                                                   placeholder="S" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                </div>
												  <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class=" control-label"> M </label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="M" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">           
														<label class=" control-label">L  </label>
                                                            <input type="text" name="2XS" id="last-name"
                                                                   placeholder="L" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                </div>
												  <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class=" control-label"> 2XL  </label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="2XL" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">           
														<label class=" control-label">3XL  </label>
                                                            <input type="text" name="2XS" id="last-name"
                                                                   placeholder="3XL" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                </div>
												  <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class=" control-label"> 4XL  </label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="4XL" class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                            <div class="modal-footer">
											 <input style="width: 32%;" type="submit" name="submitsize" value="Save" class="btn btn-primary btn-block"/>
                                              
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
