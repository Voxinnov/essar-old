<?php	 	

class Loginsession extends MySql{
	
	function deleteList($list){
		if(is_array($list)){
			for($i=0; $i<count($list); $i++){
				$this->delete('testimonials', '`t_id`=' . (int)$list[$i]);
			}
		}
	}	
			
	function addLoginsession($inputs){
		$insert = array('session_value' => isset($inputs['title']) ? $inputs['title'] : '');
		$this->insert($insert, "ese_user_session");	
		return true;
	}

	function getInsert(){
		return $this->lastInsertId();
	}

	function ListLoginsession(){
		// Optimized to fetch only the latest session record instead of tens of thousands of rows
		$query = "SELECT session_value FROM ese_user_session ORDER BY session_id DESC LIMIT 1";
		$rec = $this->fetchAll($query);
		return $rec;		
	}
}
?>