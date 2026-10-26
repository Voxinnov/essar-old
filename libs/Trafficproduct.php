<?php	 	

class Trafficproduct extends MySql{

	function deleteList($list){
		if(is_array($list)){
			for($i=0; $i<count($list); $i++){
				$this->delete('testimonials', '`t_id`=' . (int)$list[$i]);
			}
		}
	}	
			
	function listTrafficproduct(){
		$query = "SELECT * FROM ese_tff_prod ORDER BY tff_prod_id DESC";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}
	
	function listallTrafficproduct(){
		$query = "SELECT * FROM ese_tff_prod WHERE tff_prod_status=1 ORDER BY tff_prod_id DESC";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function gettrafficproduct($id){
		$safe_id = (int)$id;
		$query = "SELECT * FROM ese_tff_prod WHERE tff_prod_id={$safe_id}";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function addTrafficproduct($inputs){
		$insert = array(
			'tff_prod_title' => isset($inputs['title']) ? $inputs['title'] : '',
			'tff_prod_name' => isset($inputs['name']) ? $inputs['name'] : '',
			'tff_prod_cat_id' => isset($inputs['cate']) ? (int)$inputs['cate'] : 0,
			'tff_prod_descrip' => isset($inputs['descrip']) ? $inputs['descrip'] : '',										
			'tff_prod_img' => isset($inputs['photo']) ? $inputs['photo'] : '',
			'tff_prod_status' => isset($inputs['status']) ? (int)$inputs['status'] : 1
		);
		$this->insert($insert, "ese_tff_prod");	
		return true;
	}

	function getInsert(){
		$query = "SELECT max(tff_prod_id) FROM ese_tff_prod";
		$rec = $this->fetchAll($query);
		return $rec;
	}

	function editTrafficproduct($inputs){
		$safe_id = isset($inputs['id']) ? (int)$inputs['id'] : 0;
		$insert = array(
			'tff_prod_title' => isset($inputs['title']) ? $inputs['title'] : '',
			'tff_prod_name' => isset($inputs['name']) ? $inputs['name'] : '',
			'tff_prod_cat_id' => isset($inputs['cate']) ? (int)$inputs['cate'] : 0,
			'tff_prod_descrip' => isset($inputs['descrip']) ? $inputs['descrip'] : '',										
			'tff_prod_img' => isset($inputs['photo']) ? $inputs['photo'] : '',
			'tff_prod_status' => isset($inputs['status']) ? (int)$inputs['status'] : 1,
			'tff_prod_id' => $safe_id
		);
		$this->update($insert, "ese_tff_prod", "`tff_prod_id`={$safe_id}");		
		return true;
	}

	function updateGalleryImage($id, $image){
		$safe_id = (int)$id;
		$this->update(array('tff_prod_img' => $image), 'ese_tff_prod', "`tff_prod_id`={$safe_id}");
	}

	function gettrafficproductbycat($id){
		$safe_id = (int)$id;
		$query = "SELECT * FROM ese_tff_prod WHERE tff_prod_cat_id={$safe_id}";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}
}
?>