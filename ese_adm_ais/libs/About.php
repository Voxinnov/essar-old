<?php	 	

	class About extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
			function editAbout($inputs){
					$insert	=	array('abt_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'abt_captn'=>$inputs['caption'],
										'abt_descri'=>$inputs['descrip'],
										'abt_img'=>$inputs['photo'],
										'abt_stastus'=>$inputs['status'],
										'abt_id'=>$inputs['id']
							);
							//print_r($insert);exit;
				$this->update($insert,"ese_abt",'`abt_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('abt_img'=>$image),'ese_abt','`abt_id`='.$id);
	}
	 function getAbout(){
		$query	=	"SELECT * FROM `ese_abt`";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
}
?>