<?php	 	

	class Product extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listProducts(){
		
	

		$query = "SELECT  * from medical_product WHERE status =1";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
		function listProductsimg($id){
		
	

		$query = "SELECT  * from product_img WHERE prod_id=$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function GetProducts($id){
		
	

		$query = "SELECT  * from medical_product WHERE id =$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function Products_garments(){
		
	

		$query = "SELECT  * from medical_product WHERE medical_product.status=1 and id !=9 and id!=10";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}	
	function Products_category($id){
		
	

		$query = $query = "SELECT  * from medical_product_category WHERE p_id=$id";
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function Products_size($id){
		
	

		$query = $query = "SELECT  * from medical_product_size WHERE product_id=$id";
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
}
?>