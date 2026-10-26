<?php	 	

	class Sizechart extends MySql{
	
	
			
	

	 /* Add Testimonials
			*/			
			function addSizechart($inputs){
					$insert	=	array('size_chart_prod_id'=>$inputs['p_id'],
										'size_chart_position'=>$inputs['position'],
										'size_chart_2XS'=>$inputs['_2XS'],
										'size_chart_XS'=>$inputs['_2XS'],
										'size_chart_S'=>$inputs['_S'],
										'size_chart_M'=>$inputs['_M'],
										'size_chart_L'=>$inputs['_L'],
										'size_chart_XL'=>$inputs['_XL'],
										'size_chart_2XL'=>$inputs['_2XL'],
										'size_chart_3XL'=>$inputs['_3XL'],
										'size_chart_4XL'=>$inputs['_4XL']
										);
				///print_r($insert);exit;
				$this->insert($insert,"ese_size_chart");	
				
				return true;
				
				
			}


	
		function editSizechart($inputs){
					$insert	=	array('size_chart_prod_id'=>$inputs['p_id'],
										'size_chart_position'=>$inputs['position'],
										'size_chart_2XS'=>$inputs['_2XS'],
										'size_chart_XS'=>$inputs['_XS'],
										'size_chart_S'=>$inputs['_S'],
										'size_chart_M'=>$inputs['_M'],
										'size_chart_L'=>$inputs['_L'],
										'size_chart_XL'=>$inputs['_XL'],
										'size_chart_2XL'=>$inputs['_2XL'],
										'size_chart_3XL'=>$inputs['_3XL'],
										'size_chart_4XL'=>$inputs['_4XL'],
										'size_chart_id'=>$inputs['id']
							);
							
						//print_r($insert); exit;
				$this->update($insert,"ese_size_chart",'`size_chart_id`='.$inputs['id']);		
				return true;
			}
function ListSizechart($id){
		
	

		$query = "SELECT * FROM ese_size_chart WHERE size_chart_prod_id =$id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}

	function getSizechart($id){
		
	

		$query = "SELECT * FROM ese_size_chart WHERE size_chart_id = $id";
		
		$rec	=	$this->fetchAll($query);
		
		
		return $rec;		
		
		
	}
	
}
?>