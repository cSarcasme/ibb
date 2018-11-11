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
			$data = $db->query("SELECT warehouse_name FROM warehouse as w WHERE  warehouse_name LIKE '%$term0%' ");
			if(!empty($data)){
				return $data;
			}

	}
	
	public function  warehouseId($client){
		$db=$this -> dbConnect();
		$va=0;
		$req =$db -> prepare("SELECT warehouse_id FROM warehouse WHERE warehouse_name  = ? ");
		$req -> execute( array($client));
		$result =$req -> fetch() ;
		return array($result[0],$va);

			}
	public function  stat1Id($stat1){
		$db=$this -> dbConnect();
		$va=1;
		$req =$db -> prepare("SELECT id FROM stat1 WHERE name = ?");
		$req -> execute( array($stat1));
		$result =$req -> fetch() ;
		return array($result[0],$va);
	}
	public function  stat2Id($stat2){
		$db=$this -> dbConnect();
		$va=2;
		$req =$db -> prepare("SELECT id FROM stat2 WHERE name = ?");
		$req -> execute( array($stat2));
		$result =$req -> fetch() ;
		

		return array($result[0],$va);
	}
	public function  stat3Id($stat3){
		$db=$this -> dbConnect();
		$va=3;
		$req =$db -> prepare("SELECT stat3_id FROM stat3 WHERE stat3_name = ?");
		$req -> execute( array($stat3));
		$result =$req -> fetch() ;
		return array($result[0],$va);
	}
	public function  enseigneId($enseigne2){
		$db=$this -> dbConnect();
		$va=4;
		$req =$db -> prepare("SELECT id FROM small_enseigne WHERE name = ?");
		$req -> execute( array($enseigne2));
		$result =$req -> fetch() ;
		return array($result[0],$va);
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

	public function search_enseigne($term4)
	{
		
		$db=$this -> dbConnect();

		/* retrieve the search term that autocomplete sends */
		//$a_json = array();
		//$a_json_row = array();
		$data = $db->query("SELECT name FROM small_enseigne  WHERE small_enseigne.name  LIKE '%$term4%' ");
		//if(!empty($data)){
			return $data;
		//}

	}


	public function  petiteEnseigne(){
		$db=$this -> dbConnect();
		$req =$db -> query("SELECT name FROM small_enseigne");
		return $req;
	}

	
	public function  ClientOp($opId,$clientId,$numb){
		
		$db=$this -> dbConnect();
		$req =$db -> prepare("INSERT INTO   operation_client(
		id_operation,
		client_code,
		number_stat) 
		VALUES(?,?,?)");
		$affectedLines=$req ->execute(array($opId,$clientId,$numb));
		return $affectedLines;
	}
	public function  GetOpe($opName,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio){
		$db=$this -> dbConnect();
		$op_etat='non validé';
		$req =$db -> prepare("INSERT INTO   operation(
		operation_name,
		operation_etat,
		operation_start_date,
		operation_end_date,
		operation_available_request_date,
		operation_commitment_start_date,
		operation_commitment_end_date,
		prio,
		operation_creation_date,
		operation_modification_date) 
		VALUES(?,?,?,?,?,?,?,?,NOW(),NOW())");
		$affectedLines=$req ->execute(array($opName,$op_etat,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio));
		
		
		return $affectedLines;
	}

	public function IfExist($opName){
        $db=$this->dbConnect();
        $req = $db->prepare("SELECT operation_name FROM operation WHERE operation_name=?");
        $req->execute(array($opName));
        $data=$req->fetch();

        return $data;
    }

}
		
