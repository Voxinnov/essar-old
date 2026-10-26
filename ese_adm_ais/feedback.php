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
$main_cat = New Medicalfeedback();
$record = $main_cat-> listMedicalfeedback();
//print_r($reccort_cat);exit;
$total_reccord = count($record);
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Feedback | Medical </title>
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
            <h1>Feed Back</h1>
         
			            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-list-alt"></i> Feed back
                            </h3>
                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Rating</th>
                                        <th>Send By</th>
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
                                        <td><?php echo $i+1;?></td>
                                        <td><?php echo $record[$i]['fb_date'];?></td>
                                        <td><?php echo $record[$i]['med_prod_name'];?></td>
										<td><?php echo $record[$i]['fb_rating'];?></td>
                                        <td><?php echo $record[$i]['fb_sendby'];
										?></td>
                                        <td>
                                            <p>
                                                <a href="edit_feedback.php?g_id=<?php  echo $record[$i]['fb_id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal"
                                                         data-placement="top"><span
                                                        class="glyphicon glyphicon-pencil"></span></a>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="delete_feedback.php?a_id=<?php echo $record[$i]['fb_id']; ?>"class="btn btn-danger btn-xs" data-toggle="modal"
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
