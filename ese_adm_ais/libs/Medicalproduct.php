<?php	 	

class Medicalproduct extends MySql{

	function deleteList($list){
		if(is_array($list)){
			for($i=0; $i<count($list); $i++){
				$this->delete('testimonials', '`t_id`=' . (int)$list[$i]);
			}
		}
	}	
			
	function listmedicalproduct(){
		$query = "SELECT * FROM ese_med_prod ORDER BY med_prod_id DESC";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}
	
	function listallmedicalproduct(){
		$query = "SELECT * FROM ese_med_prod WHERE med_prod_status=1 ORDER BY med_prod_id DESC";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function getmedicalproduct($id){
		$safe_id = (int)$id;
		$query = "SELECT * FROM ese_med_prod WHERE med_prod_id={$safe_id}";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function addMedicalproduct($inputs){
		$insert = array(
			'med_prod_title' => isset($inputs['title']) ? $inputs['title'] : '',
			'med_prod_name' => isset($inputs['name']) ? $inputs['name'] : '',
			'med_prod_cat_id' => isset($inputs['cate']) ? (int)$inputs['cate'] : 0,
			'med_prod_decrip' => isset($inputs['descrip']) ? $inputs['descrip'] : '',										
			'med_prod_depart' => isset($inputs['depart']) ? $inputs['depart'] : '',
			'med_prod_img' => isset($inputs['photo']) ? $inputs['photo'] : '',
			'med_prod_mesrmnt_img' => isset($inputs['photo2']) ? $inputs['photo2'] : '',
			'med_prod_status' => isset($inputs['status']) ? (int)$inputs['status'] : 1
		);
		$this->insert($insert, "ese_med_prod");	
		return true;
	}

	function getInsert(){
		$query = "SELECT max(med_prod_id) FROM ese_med_prod ";
		$rec = $this->fetchAll($query);
		return $rec;
	}

	function editMedicalproduct($inputs){
		$safe_id = isset($inputs['id']) ? (int)$inputs['id'] : 0;
		$insert = array(
			'med_prod_title' => isset($inputs['title']) ? $inputs['title'] : '',
			'med_prod_name' => isset($inputs['name']) ? $inputs['name'] : '',
			'med_prod_cat_id' => isset($inputs['cate']) ? (int)$inputs['cate'] : 0,
			'med_prod_decrip' => isset($inputs['descrip']) ? $inputs['descrip'] : '',										
			'med_prod_depart' => isset($inputs['depart']) ? $inputs['depart'] : '',
			'med_prod_img' => isset($inputs['photo']) ? $inputs['photo'] : '',
			'med_prod_mesrmnt_img' => isset($inputs['photo2']) ? $inputs['photo2'] : '',
			'med_prod_status' => isset($inputs['status']) ? (int)$inputs['status'] : 1,
			'med_prod_id' => $safe_id
		);
		$this->update($insert, "ese_med_prod", "`med_prod_id`={$safe_id}");		
		return true;
	}
			
	function updateGalleryImage($id, $image){
		$safe_id = (int)$id;
		$this->update(array('med_prod_img' => $image), 'ese_med_prod', "`med_prod_id`={$safe_id}");
	}

	function updateGalleryImage2($id, $image2){
		$safe_id = (int)$id;
		$this->update(array('med_prod_mesrmnt_img' => $image2), 'ese_med_prod', "`med_prod_id`={$safe_id}");
	}
	
	function listcategory(){
		$query = "SELECT * FROM ese_med_cat WHERE me_cat_status=1";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}
	
	function listMedicatgarm(){
		$query = "SELECT med_prod_id,med_prod_cat_id,med_prod_title,med_prod_name,med_prod_img,med_cat_title,med_cat_id,med_cat_descr,med_cat_main_id FROM `ese_med_cat` LEFT JOIN `ese_med_prod` ON ese_med_prod.med_prod_cat_id =ese_med_cat.med_cat_id WHERE ese_med_cat.med_cat_main_id=2";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function listMedicatsilicon(){
		$query = "SELECT med_prod_id,med_prod_cat_id,med_prod_title,med_prod_name,med_prod_img,med_cat_title,med_cat_id,med_cat_descr,med_cat_main_id FROM `ese_med_cat` LEFT JOIN `ese_med_prod` ON ese_med_prod.med_prod_cat_id =ese_med_cat.med_cat_id WHERE ese_med_cat.med_cat_main_id=5";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function listMedicatsurgical(){
		$query = "SELECT med_prod_id,med_prod_cat_id,med_prod_title,med_prod_name,med_prod_img,med_cat_title,med_cat_id,med_cat_descr,med_cat_main_id FROM `ese_med_cat` LEFT JOIN `ese_med_prod` ON ese_med_prod.med_prod_cat_id =ese_med_cat.med_cat_id WHERE ese_med_cat.med_cat_main_id=7";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function listSearch($s){
		$safe_s = $this->addFilter($s);
		$query = "SELECT * FROM ese_med_prod WHERE med_prod_title LIKE '%{$safe_s}%' OR med_prod_name LIKE '%{$safe_s}%' OR med_prod_decrip LIKE '%{$safe_s}%' OR med_prod_depart LIKE '%{$safe_s}%'";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}

	function listallproducts($mid){
		$safe_mid = (int)$mid;
		$query = "SELECT * FROM ese_med_prod INNER JOIN ese_med_cat ON ese_med_prod.med_prod_cat_id =ese_med_cat.med_cat_id INNER JOIN ese_med_main_cat ON ese_med_cat.med_cat_main_id = ese_med_main_cat.med_main_cat_id WHERE ese_med_main_cat.med_main_cat_id ={$safe_mid} AND med_prod_status=1";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();		
	}
}
?>