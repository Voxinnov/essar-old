<?php

class RecordDelete extends MySql{

	
	
	function deleteMachine($id){
		$query="SELECT * FROM `ese_machn` WHERE `machn_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_machn','`machn_id`='.$id);
	}
	function deleteMProduct($id){
		$query="SELECT * FROM `ese_med_prod` WHERE `med_prod_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_med_prod','`med_prod_id`='.$id);
	}
	
	function deletemainCategory($id){
		$query="SELECT * FROM `ese_med_main_cat` WHERE `med_main_cat_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_med_main_cat','`med_main_cat_id`='.$id);
	}
	
	function deletemediCategory($id){
		$query="SELECT * FROM `ese_med_cat` WHERE `med_cat_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_med_cat','`med_cat_id`='.$id);
	}
	function deletemediSizechart($id){
		$query="SELECT * FROM `ese_size_chart` WHERE `size_chart_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_size_chart','`size_chart_id`='.$id);
	}
	function deleteMchnimg($id){
		$query="SELECT * FROM `ese_machn_img` WHERE `machn_img_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_machn_img','`machn_img_id`='.$id);
	}
	function removecart($id){
		$query="SELECT * FROM `ese_cart` WHERE `cart_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_cart','`cart_id`='.$id);
	}
	function deleteTrafficProd($id){
		$query="SELECT * FROM `ese_tff_prod` WHERE `tff_prod_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_tff_prod','`tff_prod_id`='.$id);
	}
	function deleteTrafficcategory($id){
		$query="SELECT * FROM `ese_traf_main_cat` WHERE `traf_main_cat_id`='".$id."'";
			$rec=$this->fetchAll($query);
			$this->delete('ese_traf_main_cat','`traf_main_cat_id`='.$id);
	}
	function deleteFeedback($id){
		$query="SELECT * FROM `ese_feedback` WHERE `fb_id`='".$id."'";
	//	print_r($query);exit;
			$rec=$this->fetchAll($query);
			$this->delete('ese_feedback','`fb_id`='.$id);
	}
}