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
$main_cat = New Medicalcategory();
$record = $main_cat-> listallcategory();
//print_r($reccort_cat);exit;
$total_reccord = count($record);
$mcat = new Maincategory()

?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Category / Medical </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
 
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- end of global css -->
</head>

<body class="skin-coreplus">

<?php include('header.php') ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Category</h1>
         
			            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-list-alt"></i>  Category
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Main Category</th>
                                     
                                        <th>Status</th>
										<th>Edit</th>
										<th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php
									for($i=0;$i<$total_reccord;$i++)
									{
										$get_cat = $mcat->getmaincategory( $record[$i]['med_cat_main_id']);
									?>
                                    <tr>
                                        <td><?php $i+1;?></td>
                                        <td><?php echo $record[$i]['med_cat_title'];?></td>
                                        <td><?php echo $get_cat[0]['med_main_cat_title'];?></td>
									
                                        <td><?php if($record[$i]['me_cat_status']==1){echo 'Published';}else {echo 'Unpublished';}?></td>
                                        <td>
                                            <p>
                                                <a href="edit_medical_cat.php?g_id=<?php  echo $record[$i]['med_cat_id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal"
                                                         data-placement="top"><span
                                                        class="glyphicon glyphicon-pencil"></span></a>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="delete_medical_category.php?g_id=<?php  echo $record[$i]['med_cat_id']; ?>"class="btn btn-danger btn-xs" data-toggle="modal"
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
        </section>
        <!-- Main content -->

        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>


<!-- Mirrored from dev.lorvent.com/core_plus/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 10:45:41 GMT -->
</html>
