<?php	 	

	class Machineimg extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	

	 /* Add Testimonials
			*/			
			function addMachineimg($inputs){
					$insert	=	array('machn_img_title'=>$inputs['title'],
										'machn_img_m_id'=>$inputs['machn_id'],
										'machn_img_img'=>$inputs['photo'],
										'machn_img_status'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_machn_img");	
				
				return true;
				
				
			}


	
		function editMachineimg($inputs){
					$insert	=	array('machn_img_title'=>$inputs['title'],
										'machn_img_m_id'=>$inputs['type'],
										'machn_img_img'=>$inputs['photo'],
										'machn_img_status'=>$inputs['status'],
										'machn_img_id'=>$inputs['id']
							);
							
						//	print_r($insert); exit;
				$this->update($insert,"ese_machn_img",'`machn_img_id`='.$inputs['id']);		
				return true;
			}
			function updateGalleryImage($id,$image){
		 $this->update(array('machn_img_img'=>$image),'ese_machn_img','`machn_img_id`='.$id);
	}
function ListMachineimg($id){
		
	

		$query = "SELECT * FROM ese_machn_img WHERE machn_img_m_id=$id";
		
		$rec	=	$this->fetchAll($query);
		
		//print_r($rec);exit;
		return $rec;		
		
		
	}

	function getMachineimg($id){
		
	

		$query = "SELECT * FROM ese_machn_img WHERE machn_img_id = $id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	
}
?>