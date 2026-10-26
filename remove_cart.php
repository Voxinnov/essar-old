<?php
ob_start();
session_start();
include("autoload.php");
$db		=	new MySql();
$db->connect();
$objA	=	new Admin();
$data	=	$objA->getAdmin($pasid);

$a_id	=	$_GET["g_id"];
$cat	=	new RecordDelete();
$delete	=	$cat->removecart($a_id);
header("location:cartbox.php");
$message	=	new Message('Gallery Is Successfully Deleted','success');
$message->setMessage();
exit;
?>