<?php
ob_start();
include("autoload.php");
$db		=	new MySql();
$db->connect();
session_start();

if(isset($_POST["register"]))
{

 	$c_name	=	trim($_POST["c_name"])	;		
 	$c_email	=	trim($_POST["c_email"])	;	
	$c_mobile	=	trim($_POST["c_mobile"])	;		
 	$pr_id	=	trim($_POST["pr_id"])	;	
	$pr_name	=	trim($_POST["pr_name"])	;		
 	$p_sizechart1	=	trim($_POST["p_sizechart1"])	;	
	$p_sizechart2	=	trim($_POST["p_sizechart2"])	;	
	//print_r($p_sizechart1);exit;
	$details = 	$p_sizechart1.'<br>'.$p_sizechart2;
	 if(empty($c_name)){
	   	header("location:silicon_products.php?g_id=$pr_id");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit;
	   }else{
		  
	   	
	    $cat	=	new Guestuser();
			     $inputs	=	array('c_name'=>$c_name,
				                     
									  'c_email'=>$c_email,
									  'c_mobile'=>$c_mobile
									  );
				//print_r($inputs);exit;
			
				if($cat->addGuestuser($inputs)){
				
					$last_id = $cat->getInsert();
					//print_r($last_id[0]['max(machn_id)'] );exit;
					
					$u_id= $last_id[0]['max(u_id)'];
					 $cart	=	new Cart();
			     $inputs	=	array('pr_id'=>$pr_id,
									  'pr_name'=>$pr_name,
									  'details'=>$details,
									  'u_id'=>$u_id,
									  'status'=>1
									  );
									//  print_r($inputs);exit;
							if($cart->addCart($inputs)){	

							$_SESSION["guest_uid"] = $u_id;
							$_SESSION["Status"] =1;
					$message	=	new Message('New Gallery added ','message');
					$message->setMessage();
					header('Location:cartbox.php');
					exit;
							}
					
				}else{
					
					$message	=	new Message('Unknown error','error');
					$message->setMessage();
				}
				
		
	   }
	  
	
	
}
			
?>

