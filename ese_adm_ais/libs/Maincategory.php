<?php	 	

	class Maincategory extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listIncome($u_id){
		
	

		$query = "SELECT income.id,income.category,income.paidby, income.date, income.amount, income.description,category.title,source.title as sourcetitle FROM `income` INNER JOIN category on income.category = category.id LEFT JOIN source on income.paidby = source.id WHERE income.u_id = '$u_id'";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}

	 /* Add Testimonials
			*/			
			function addMaincategory($inputs){
					$insert	=	array('med_main_cat_title'=>$inputs['title'],
										'med_main_cat_type'=>$inputs['type'],
										'med_main_cat_img'=>$inputs['photo'],
										'med_main_cat_status'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_med_main_cat");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
		function editMaincategory($inputs){
					$insert	=	array('med_main_cat_title'=>$inputs['title'],
										'med_main_cat_type'=>$inputs['type'],
										'med_main_cat_img'=>$inputs['photo'],
										'med_main_cat_status'=>$inputs['status'],
										'med_main_cat_id'=>$inputs['id']
							);
							
						//	print_r($insert); exit;
				$this->update($insert,"ese_med_main_cat",'`med_main_cat_id`='.$inputs['id']);		
				return true;
			}
			
		function updateGalleryImage($id,$image){
		 $this->update(array('med_main_cat_img'=>$image),'ese_med_main_cat','`med_main_cat_id`='.$id);
	}	
function Listmaincategory(){
		
	

		$query = "SELECT * FROM ese_med_main_cat";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	 	function mainproducts(){
		
	

		$query = "SELECT * FROM ese_med_main_cat WHERE med_main_cat_type=2";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function mainmachns(){
		
	

		$query = "SELECT * FROM ese_med_main_cat WHERE med_main_cat_type=1";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function getmaincategory($id){
		
	

		$query = "SELECT * FROM ese_med_main_cat WHERE med_main_cat_id = $id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function Listallmaincategory(){
		
	

		$query = "SELECT * FROM ese_med_main_cat WHERE med_main_cat_status = 1";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
}
?>