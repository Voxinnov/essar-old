<?php
ob_start();
include("autoload.php");
$db		=	new MySql();
$db->connect();
session_start();

if(isset($_POST["feedback"]))
{

 	$sendbyname	=	trim($_POST["sendbyname"])	;		
 	$rating	=	trim($_POST["rating"])	;	
		
 	$pro_id	=	trim($_POST["pro_id"])	;	
	$comments	=	trim($_POST["feed"])	;		
 	$date	=	date('d-m-Y');	
	 if(empty($sendbyname)){
	   	header("location:product.php?g_id=$pro_id");
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
									  'status'=>0
									  );
				//print_r($inputs);exit;
			
				if($cat->addMedicalfeedback($inputs)){
				
					
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					header("location:product.php?g_id=$pro_id");
					exit;
							
					
				}else{
					
					$message	=	new Message('Unknown error','error');
					$message->setMessage();
				}
				
		
	   }
	  
	
	
}
			
?>

