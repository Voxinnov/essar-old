<?php	 	

	class TrfMaincategory extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	
	 /* Add Testimonials
			*/			
			function addTrfMaincategory($inputs){
					$insert	=	array('traf_main_cat_title'=>$inputs['title'],
										'traf_main_cat_descrip'=>$inputs['descrip'],
										'traf_main_cat_img'=>$inputs['photo'],
										'traf_main_cat_status'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"ese_traf_main_cat");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
		function editMaincategory($inputs){
					$insert	=	array('traf_main_cat_title'=>$inputs['title'],
										'traf_main_cat_descrip'=>$inputs['decrip'],
										'traf_main_cat_img'=>$inputs['photo'],
										'traf_main_cat_status'=>$inputs['status'],
										'traf_main_cat_id'=>$inputs['id']
							);
							
						//print_r($insert); exit;
				$this->update($insert,"ese_traf_main_cat",'`traf_main_cat_id`='.$inputs['id']);		
				return true;
			}
			
		function updateGalleryImage($id,$image){
		 $this->update(array('traf_main_cat_img'=>$image),'ese_traf_main_cat','`traf_main_cat_id`='.$id);
	}	
function Listcategory(){
		
	

		$query = "SELECT * FROM ese_traf_main_cat";
		
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
		
	

		$query = "SELECT * FROM ese_traf_main_cat WHERE traf_main_cat_id = $id";
		
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