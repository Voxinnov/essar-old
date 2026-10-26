<?php	 	

	class Medicalfeedback extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	function listMedicalfeedback(){
		
	

		$query = "SELECT fb_id,fb_date,fb_message,fb_sendby,fb_rating,fb_pr_id,fb_status,med_prod_name FROM ese_feedback INNER JOIN ese_med_prod ON ese_feedback.fb_pr_id =ese_med_prod.med_prod_id  ORDER BY fb_id DESC";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	
	function listallMedicalfeedback($id){
		
	

		$query = "SELECT * FROM ese_feedback WHERE fb_status=1 and fb_pr_id=$id  ORDER BY fb_id DESC";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addMedicalfeedback($inputs){
					$insert	=	array('fb_date'=>$inputs['date'],
										'fb_message'=>$inputs['comments'],
										'fb_rating'=>$inputs['rating'],
										'fb_sendby'=>$inputs['sendbyname'],										
										
										'fb_status'=>$inputs['status'],
										'fb_pr_id'=>$inputs['pro_id']
										);
				 //print_r($insert);exit;
				$this->insert($insert,"ese_feedback");	
				
				return true;
				
				
			}


	
		function getInsert(){
			$query = "SELECT max(med_prod_id) FROM ese_tff_prod ";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;
	
	}
		function editMedicalfeedback($inputs){
					$insert	=	array(
										'fb_message'=>$inputs['comments'],
										'fb_rating'=>$inputs['rating'],
										'fb_sendby'=>$inputs['sendbyname'],										
										
										'fb_status'=>$inputs['status'],
										'fb_pr_id'=>$inputs['pro_id'],
										'fb_id'=>$inputs['id']
							);
							
					//print_r($insert); exit;
				$this->update($insert,"ese_feedback",'`fb_id`='.$inputs['id']);		
				return true;
			}
function getMedicalfeedback($id){
		
	

		$query = "SELECT * FROM ese_feedback WHERE fb_id=$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}

}
?>