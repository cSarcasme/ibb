<?php 
require_once("model/manager.php");
class OperationManager extends Manager
{
    

        
    public function search_stat0($term0)
        {
			
            $db=$this -> dbConnect();

			/* retrieve the search term that autocomplete sends */
			//$a_json = array();
			//$a_json_row = array();
			$data = $db->query("SELECT * FROM warehouse as w WHERE  warehouse_name LIKE '%$term0%' ");
			if(!empty($data)){
				return $data;
			}

	}
	
	public function  warehouseId($mot){
		$db=$this -> dbConnect();

		$req =$db -> query("SELECT warehouse.warehouse_id FROM warehouse WHERE warehouse_name = ".$mot);

	}
  
	public function search_stat1($term1)
	{
		
		$db=$this -> dbConnect();

		/* retrieve the search term that autocomplete sends */
		//$a_json = array();
		//$a_json_row = array();
		$data = $db->query("SELECT * FROM stat1  WHERE  stat1.name LIKE '%$term1%' ");
		if(!empty($data)){
			return $data;
		}

	}

	public function  stat1Id($mot1){
		$db=$this -> dbConnect();

		$req =$db -> query("SELECT stat1.id FROM stat1 WHERE stat1.name = ".$mot1);

	}
	public function search_stat2($term2)
	{
			
            $db=$this -> dbConnect();

			/* retrieve the search term that autocomplete sends */
			//$a_json = array();
			//$a_json_row = array();
			$data = $db->query("SELECT * FROM stat2  WHERE  stat2.name LIKE '%$term2%' ");
			if(!empty($data)){
				return $data;
			}

	}
	
	public function  stat2Id($mot2){
		$db=$this -> dbConnect();

		$req =$db -> query("SELECT stat2.id FROM stat2 WHERE stat2.name = ".$mot2);

	}
	
	public function search_stat3($term3)
	{
		
		$db=$this -> dbConnect();

		/* retrieve the search term that autocomplete sends */
		//$a_json = array();
		//$a_json_row = array();
		$data = $db->query("SELECT * FROM stat3  WHERE  stat3.stat3_name LIKE '%$term3%' ");
		if(!empty($data)){
			return $data;
		}

	}

	public function  stat3Id($mot3){
		$db=$this -> dbConnect();

		$req =$db -> query("SELECT stat3.stat3_id FROM stat3 WHERE stat3.stat3_name = ".$mot3);

	}
	
	

	public function  petiteEnseigne(){
		$db=$this -> dbConnect();
		$req =$db -> query("SELECT name FROM small_enseigne");
		return $req;
	}

}

/*
                {
				while($row = mysql_fetch_array($data)) {

				  // echo '<pre>'.print_r($row,true)."</pre>";

				  if (!empty($row['warehouse_name']))
				  {
					$warehouse_name = isset($row['warehouse_name']) ? $row['warehouse_name'] : NULL;
					$warehouse_id = isset($row['warehouse_id']) ? $row['warehouse_id'] : NULL;
				  }
					$warehouse_name = htmlentities(stripslashes($warehouse_name));
					$warehouse_id = htmlentities(stripslashes($warehouse_id));
					$a_json_row["id"] = $warehouse_id;
					$a_json_row["value"] = $warehouse_name;
					$a_json_row["label"] = $warehouse_name.''.$warehouse_id;
					array_push($a_json, $a_json_row);

				}
			}
			// jQuery wants JSON data
			echo json_encode($a_json);
			flush();
			 
			$mysqli->close();*/