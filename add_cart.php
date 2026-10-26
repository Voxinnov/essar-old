<?php
ob_start();
include("autoload.php");
$db		=	new MySql();
$db->connect();
session_start();

if(isset($_POST["addcart"]))
{
$u_id=$_SESSION["UserID"];
 	$pr_id	=	trim($_POST["p_id"])	;	
	$pr_name	=	trim($_POST["p_name"])	;		
 	$p_sizechart1	=	trim($_POST["sizechart1"])	;	
	$p_sizechart2	=	trim($_POST["sizechart2"])	;	
	//print_r($u_id);exit;
	$details = 	$p_sizechart1.'<br>'.$p_sizechart2;
	 if(empty($u_id)){
	   	header("location:single_product.php?g_id=$pr_id");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		  
	   	
	    $cart	=	new Cart();
			     $inputs	=	array('pr_id'=>$pr_id,
									  'pr_name'=>$pr_name,
									  'details'=>$details,
									  'u_id'=>$u_id,
									  'status'=>1
									  );
									//  print_r($inputs);exit;
							if($cart->addCart($inputs)){	

					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					header('Location:cartbox.php');
					exit;
							}else{
					
					$message	=	new Message('Unknown error','error');
					$message->setMessage();
				}
				
		
	   }
	  
	
	
}
			
?>

