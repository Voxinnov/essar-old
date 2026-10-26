<?php	 	

	class Medicalmachine extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
			
	function listMedicalmachine(){
		
	

		$query = "SELECT * FROM ese_machn ORDER BY machn_id DESC";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	

	 /* Add Testimonials
			*/			
			function addMedicalmachine($inputs){
					$insert	=	array('machn_title'=>$inputs['title'],
										'machn_b_descrip'=>$inputs['bdecrip'],
										'machn_m_cat_id'=>$inputs['main_cat'],
										'machn_descrip'=>$inputs['decrip'],										
										'machn_role'=>$inputs['role'],
										'machn_benifits'=>$inputs['benefits'],
										'machn_condtns'=>$inputs['condtn'],
										'machn_status'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_machn");	
				
				return true;
				
				
			}


		function getInsert(){
			$query = "SELECT max(machn_id) FROM ese_machn ";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;
	
	}
		function editMedicalmachine($inputs){
					$insert	=	array('machn_title'=>$inputs['title'],
										'machn_b_descrip'=>$inputs['bdecrip'],
										'machn_m_cat_id'=>$inputs['main_cat'],
										'machn_descrip'=>$inputs['decrip'],										
										'machn_role'=>$inputs['role'],
										'machn_benifits'=>$inputs['benefits'],
										'machn_condtns'=>$inputs['condtn'],
										'machn_status'=>$inputs['status'],
										'machn_id'=>$inputs['id']
							);
							
						//print_r($insert); exit;
				$this->update($insert,"ese_machn",'`machn_id`='.$inputs['id']);		
				return true;
			}
function listcategory(){
		
	

		$query = "SELECT * FROM ese_machn WHERE me_cat_status=1";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
function getmachine($id){
		
	

		$query = "SELECT * FROM ese_machn WHERE machn_id=$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}	 
	
}
?>