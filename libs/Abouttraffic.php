<?php	 	

	class Abouttraffic extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
			function editAbout($inputs){
					$insert	=	array('traf_abt_title '=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'traf_abt_caption'=>$inputs['caption'],
										'traf_abt_decrip'=>$inputs['descrip'],
										'traf_abt_img'=>$inputs['photo'],
										'traf_abt_status'=>$inputs['status'],
										'traf_abt_id'=>$inputs['id']
							);
							//print_r($insert);exit;
				$this->update($insert,"ese_traf_abt",'`traf_abt_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('traf_abt_img'=>$image),'ese_traf_abt','`traf_abt_id`='.$id);
	}
	 function getAbout(){
		$query	=	"SELECT * FROM `ese_traf_abt`";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
}
?>