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
$main_cat = New Maincategory();
$reccort_cat = $main_cat-> mainmachns();
//print_r($reccort_cat);exit;
$total_reccort_cat = count($reccort_cat);
  $cat	=	new Medicalmachine();
  $get = $cat-> getmachine($g_id);
  $img = New Machineimg();
  $record = $img-> ListMachineimg($g_id);
  $total_reccord = count($record);
If(isset($_POST["submit"])){
	
	   $title	    =	$_POST['title']; 
	   $main_cat	    =	$_POST['main_cat']; 
		$bdecrip	= 	$_POST['bdecrip'];
	   $decrip	    =	$_POST['decrip'];
	   $role	    =	$_POST['role'];
	   $benefits	    =	$_POST['benefits'];
	   $condtn	    =	$_POST['condtn'];
	     $status	    =	$_POST['status'];
	//print_r( $title);exit;
	$photo	    =	$_FILES["upload"]["name"];
	     $status	    =	$_POST['status'];
	
	     $absDirName	=	dirname(__FILE__).'/upload/maincategory'; 
			$relDirName	=	'upload/maincategory'; 
	
		$obj	=	new Uploader($absDirName.'/');
  		 $fileName = $name;
		 $fileName = seoTitle($fileName ); 
  		$obj->setSequence($fileName);
 	 	$obj->setExtensions(array('png','gif','jpg','jpeg'));
 	  	$obj->setMaxSize(20);
	
	    
	   if(empty($title)){
	   	header("location:edit_medical_product.php=g_id=$g_id");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		  if($obj->uploadFile("upload")){ 
		         $image	=	$obj->getUploadName();
		
			    
				 }
	   	
	  
			     $inputs	=	array('title'=>$title,
				                     'main_cat'=>$main_cat,
									  'bdecrip'=>$bdecrip,
									  'decrip'=>$decrip,
									  'role'=>$role,
									  'benefits' => $benefits,
									  'condtn' => $condtn,
									  'status'=>$status,
									  'id'=>$g_id
									  );
				//print_r($inputs);exit;
			
				if($cat->editMedicalmachine($inputs)){
				
					
					$last_id = $cat->getInsert();
					//print_r($last_id[0]['max(machn_id)'] );exit;
					$g_id= $last_id[0]['max(machn_id)'];
					//print_r($g_id );exit;
					header("Location:medical_machine.php");
					
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					
					
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
    <title>Add Machine | Medical</title>
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
                           
              <form  action="" method="post"
                                  class="form-horizontal">
                      <div class="row">
					  
					  <div class="col-md-6">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-text" value="<?php echo $get[0]['machn_title'] ?>" type="text" name="title">
                                    </div>
                                </div>
								</div>
								 <div class="col-md-6">
                         <div class="form-group">
                                       <label for="input-text" class="col-sm-4 control-label"> Category</label>
                                    <div class="col-sm-8">
                                       <select name="main_cat" class="form-control select2" style="width: 100%;">
																				<option value="0" >--Select--</option>
																				<?php 
																					for($i=0;$i<$total_reccort_cat;$i++)
																					{
																						
																				?>
																					<option value="<?php echo $reccort_cat[$i]['med_main_cat_id'];?>" <?php if($reccort_cat[$i]['med_main_cat_id']== $get[0]['machn_m_cat_id']){?> selected="selected"<?php }?> ><?php echo $reccort_cat[$i]['med_main_cat_title']?></option>
																				
																			   <?php } ?>
															</select>
                                    </div>
                                </div>
								</div>
								</div>
								
					
								<div class="row">
								<div class="col-md-6">
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                       Banner Description
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
                          
                                <textarea  name="bdecrip"class="textarea editor-cls" ><?php echo $get[0]['machn_b_descrip'] ?></textarea>
                          
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
                      
                                <textarea name="decrip"class="textarea editor-cls" placeholder="Place some text here"><?php echo $get[0]['machn_descrip'] ?></textarea>
                           
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
								</div>
												<div class="row">
								<div class="col-md-6">
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                      Role
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
                        
                                <textarea name="role" class="textarea editor-cls" placeholder="Place some text here"><?php echo $get[0]['machn_role'] ?></textarea>
                          
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
                                     Benefits
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
                       
                                <textarea name="benefits" class="textarea editor-cls" placeholder="Place some text here"><?php echo $get[0]['machn_benifits'] ?></textarea>
                          
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
								</div><br>
											<div class="row">
								<div class="col-md-12">
								<div class="form-group">
                                    <label class="col-sm-1 control-label">
                                      Conditions
                                    </label>
                                    <div class="col-sm-10 col-md-11">
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
                            
                                <textarea name="condtn" class="textarea editor-cls" placeholder="Place some text here"><?php echo $get[0]['machn_condtns'] ?></textarea>
                            
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                                    </div>
                                </div>
								</div>
						
								</div>
						<br>
								<div class="row">
								
									
								<div class="col-md-12">
								
                             	<div class="form-group">
								<div class="col-md-1">
								&nbsp;
								</div>
								
								 <label class="col-sm-2 control-label">
                                      Status
                                    </label>
								<div class="col-sm-10 col-md-4">
															<select name="status" class="form-control select2" style="width: 100%;">
															 		 		 
														<option value="1" <?php if($get[0]["machn_status"]== 1){?> selected="selected"<?php }?> ><?php echo "Publish";?></option>
														 <option value="2" <?php if($get[0]["machn_status"]== 2){?> selected="selected"<?php }?> ><?php echo "Unpublish";?></option>
														
															</select>
															</div>
															<div class="col-sm-10 col-md-3">
                                         <input style="width: 32%;" type="submit" name="submit" value="Save" class="btn btn-primary btn-block"/>
                                      
                                    </div>
                                                               </div>
															   </div>
															   </div>
                              
                            </form>
							<div class="col-md-2">
									<a href="add_medical_mchn_img.php?g_id=<?php echo $g_id ?>"class="btn btn-primary btn-block">Add Images</a>
								</div>
								<br><br>
								             <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Images</th>
                                        <th>Status</th>
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
										 <td><?php echo $record[$i]['machn_img_title'];?></td>
                                        <td><img src="upload/machine/<?php echo $record[$i]['machn_img_img'];?>" width="50px" height="50px"/></td>
										
                                       
										
                                        <td><?php if($record[$i]['machn_img_status']==1){echo 'Published';}else {echo 'Unpublished';}?></td>
                                        <td>
                                            <p>
										
                                           
														  <a href="edit_medical_mchn_img.php?g_id=<?php echo $record[$i]['machn_img_id'] ?>" class="btn btn-primary btn-xs" data-toggle="modal"
                                                         data-placement="top"><span
                                                        class="glyphicon glyphicon-pencil"></span></a>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="delete_mchn_img.php?a_id=<?php echo $record[$i]['machn_img_id'] ?>&g_id=<?php echo $g_id;?>" class="btn btn-danger btn-xs" data-toggle="modal"
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
