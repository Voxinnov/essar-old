<?php	 	

	class Cart extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listCart($u_id){
		
	

		$query = "SELECT cart_id,cart_prod_id ,cart_prod_name,cart_extra_details,cart_status,cart_prod_id_uid,u_name,u_email,u_contact,med_prod_img  FROM  ese_cart INNER JOIN ese_user ON ese_cart.cart_prod_id_uid= ese_user.u_id INNER JOIN ese_med_prod ON ese_cart.cart_prod_id= ese_med_prod.med_prod_id WHERE cart_prod_id_uid= $u_id and cart_status=1";
		
		$rec	=	$this->fetchAll($query);
		//print_r($rec);exit;
		
		return $rec;		
		
		
	}

	 /* Add Testimonials
			*/			
			function addCart($inputs){
					$insert	=	array('cart_prod_id'=>$inputs['pr_id'],
										'cart_prod_name'=>$inputs['pr_name'],
										'cart_extra_details'=>$inputs['details'],
										'cart_status'=>$inputs['status'],
										'cart_prod_id_uid'=>$inputs['u_id']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_cart");	
				
				return true;
				
				
			}

function getInsert(){
			$query = "SELECT max(u_id) FROM ese_cart ";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;
	
	}
		
}
?>