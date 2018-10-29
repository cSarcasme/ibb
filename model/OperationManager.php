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