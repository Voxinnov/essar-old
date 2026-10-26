<?php	 	

	class Medicalcategory extends MySql{
	
	
	
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
			function addMedicalcategory($inputs){
					$insert	=	array('med_cat_title'=>$inputs['title'],
										'med_cat_main_id'=>$inputs['main_cat'],
										'med_cat_descr'=>$inputs['decrip'],
										'me_cat_status'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_med_cat");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
		function editMedicalcategory($inputs){
					$insert	=	array('med_cat_title'=>$inputs['title'],
										'med_cat_main_id'=>$inputs['main_cat'],
										'med_cat_descr'=>$inputs['decrip'],
										'me_cat_status'=>$inputs['status'],
										'med_cat_id'=>$inputs['id']
							);
							
					//	print_r($insert); exit;
				$this->update($insert,"ese_med_cat",'`med_cat_id`='.$inputs['id']);		
				return true;
			}
function listcategory(){
		
	

		$query = "SELECT * FROM ese_med_cat WHERE me_cat_status=1";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	 
	function listallcategory(){
		
	

		$query = "SELECT * FROM ese_med_cat ";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
		function listallmaincategory(){
		
	

		$query = "SELECT * FROM ese_med_cat WHERE  med_cat_main_id=2";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function listallmaincategorysilicon(){
		
	

		$query = "SELECT * FROM ese_med_cat WHERE  med_cat_main_id=5";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
		function listallmaincategorysurgical(){
		
	

		$query = "SELECT * FROM ese_med_cat WHERE  med_cat_main_id=7";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	function getcategory($id){
		
	

		$query = "SELECT * FROM ese_med_cat WHERE  med_cat_id=$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
}
?>