<?php	 	

	class Slider extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listSlider(){
		
		
		


		$query = "SELECT * FROM `ese_med_slider` c WHERE c.`med_slider_id`!='' ORDER BY `med_slider_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
		function listSliderId(){
		
		
		


		$query = "SELECT * FROM `ese_med_slider` c WHERE c.`med_slider_id`!=''  ORDER BY `med_slider_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	 /* Add Testimonials
			*/			
			function addSlider($inputs){
					$insert	=	array('med_slider_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'med_slider_captn'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'med_slider_img'=>$inputs['photo'],
										'med_slider_status'=>$inputs['status'],
										);
				
				$this->insert($insert,"ese_med_slider");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editSlider($inputs){
					$insert	=	array('med_slider_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'med_slider_captn'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'med_slider_img'=>$inputs['photo'],
										'med_slider_status'=>$inputs['status'],
										'med_slider_id'=>$inputs['id']
							);
					//print_r($insert);exit;
				$this->update($insert,"ese_med_slider",'`med_slider_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('med_slider_img'=>$image),'ese_med_slider','`med_slider_id`='.$id);
	}
	 function getSlider($id){
		$query	=	"SELECT * FROM `ese_med_slider` WHERE `med_slider_id`='$id' ";
		$rec		=	$this->fetchAll($query);
		//print_r($query);exit;
		return $rec;
	}
	function getAllSliderDetails()
	{
		$query = "SELECT * FROM ese_med_slider where  med_slider_status=1 ORDER BY `med_slider_id` DESC";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>