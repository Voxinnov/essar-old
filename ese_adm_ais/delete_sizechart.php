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

$a_id	=	$_GET["a_id"];
$g_id	=	$_GET["g_id"];
/*print_r($a_id);
print_r($g_id);exit;*/
$cat	=	new RecordDelete();
$delete	=	$cat->deletemediSizechart($a_id);
header("location:edit_medical_product.php?g_id=$g_id");
$message	=	new Message('Gallery Is Successfully Deleted','success');
$message->setMessage();
exit;
?>