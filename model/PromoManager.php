<?php 
require_once("model/manager.php");
class PromoManager extends Manager
{
    public function  GetPomo($opConso,$opPromoRed,$opPvc,$opType,$uvcPre,$opId,$prodId){
		$db=$this -> dbConnect();
		$request =$db -> prepare("INSERT INTO   article(
        operation_conso_offer,
        operation_promotionnal_reduction,
        operation_pvc_managment,
        operation_type,
        uvc_prevision,
        op_id,
        pro_id) 
		VALUES(?,?,?,?,?,?,?)");
		$affected=$request ->execute(array($opConso,$opPromoRed,$opPvc,$opType,$uvcPre,$opId,$prodId));
		

		return $affected;
	}
    public function  productId($product){
		$db=$this -> dbConnect();
		$req =$db -> prepare("SELECT product_code FROM product WHERE product_name = ?");
		$req -> execute( array($product));
        $result =$req -> fetch() ;
 
        
		return $result;
    }
    
    public function search_promo($promo)
        {
			
            $db=$this -> dbConnect();

			/* retrieve the search term that autocomplete sends */
			//$a_json = array();
			//$a_json_row = array();
			$data = $db->query("SELECT product_name FROM product as p WHERE  product_name LIKE '%$promo%' ");
			if(!empty($data)){
				return $data;
			}

	}

    public function SecondBoard()
    {
        
        $db=$this -> dbConnect();
        $tableau = array(); 
        $num=$db->query("SELECT  operation_name,MONTH(operation_start_date),oc.id_operation , operation_etat , prio, operation_start_date, operation_end_date
        , operation_available_request_date , operation_commitment_start_date , operation_commitment_end_date ,
        operation_creation_date , operation_modification_date , client_code,s1.name,s2.name, stat3_name,warehouse_name,direct
                         FROM operation_client as oc, operation as o,warehouse as w,stat3 as s3, stat2 as s2, stat1 as s1
                        WHERE  oc.id_operation=o.id_operation AND w.warehouse_id=oc.client_code  AND s1.id=s2.stat1_id AND s2.id=s3.stat2_id AND  s3.stat3_id=w.stat3_id AND oc.number_stat=0 ORDER BY oc.id_operation DESC LIMIT 0, 5");
        $num -> execute( array());
       while ($result=$num -> fetch()) {
        
        $tableau[] = $result;
        
       }
       $num1=$db->query("SELECT operation_name,MONTH(operation_start_date) ,oc.id_operation, operation_etat , prio, operation_start_date, operation_end_date
       , operation_available_request_date , operation_commitment_start_date , operation_commitment_end_date ,
       operation_creation_date , operation_modification_date , client_code,s1.name
       FROM operation_client as oc, operation as o,stat1 as s1
                        WHERE  oc.id_operation=o.id_operation AND s1.id=oc.client_code AND oc.number_stat=1 ORDER BY oc.id_operation DESC LIMIT 0, 5");
        $num1 -> execute( array());
       while ($result1=$num1 -> fetch()) {
            
            $tableau[] = $result1;
       }
       $num2=$db->query("SELECT operation_name ,MONTH(operation_start_date),oc.id_operation, operation_etat , prio, operation_start_date, operation_end_date
       , operation_available_request_date , operation_commitment_start_date , operation_commitment_end_date ,
       operation_creation_date , operation_modification_date , client_code,s1.name,s2.name
       FROM operation_client as oc, operation as o,stat2 as s2, stat1 as s1
       WHERE  oc.id_operation=o.id_operation AND s2.id=oc.client_code AND s1.id=s2.stat1_id AND oc.number_stat=2 ORDER BY oc.id_operation DESC LIMIT 0, 5");
        $num2 -> execute( array());
        while ($result2=$num2 -> fetch()) {
        
        $tableau[] = $result2;
        }
        $num3=$db->query("SELECT operation_name ,MONTH(operation_start_date),oc.id_operation, operation_etat
         , prio, operation_start_date, operation_end_date, operation_available_request_date , operation_commitment_start_date , operation_commitment_end_date , 
         operation_creation_date , operation_modification_date , client_code,s1.name,s2.name, stat3_name  
         FROM operation_client as oc, operation as o,stat3 as s3, stat2 as s2, stat1 as s1
        WHERE  oc.id_operation=o.id_operation AND s3.stat3_id=oc.client_code AND s1.id=s2.stat1_id AND s2.id=s3.stat2_id AND oc.number_stat=3 ORDER BY oc.id_operation DESC LIMIT 0, 5");
         $num3 -> execute( array());
         while ($result3=$num3 -> fetch()) {
         
         $tableau[] = $result3;
        
         }
         
            $num0=$db->query("SELECT operation_name ,MONTH(operation_start_date),oc.id_operation, operation_etat
            , prio, operation_start_date, operation_end_date, operation_available_request_date , operation_commitment_start_date , operation_commitment_end_date , 
            operation_creation_date , operation_modification_date , client_code,NULL,NULL,NULL ,NULL,NULL,s.name ,bs.name 

             FROM operation_client as oc, operation as o,small_enseigne as s,big_sign as bs
            WHERE  oc.id_operation=o.id_operation AND  s.id=oc.client_code AND  bs.id=s.big_sign_id AND oc.number_stat=4 ORDER BY oc.id_operation DESC LIMIT 0, 5");
             $num0 -> execute( array());
             while ($result0=$num0 -> fetch()) {
             
             $tableau[] = $result0;
             }
         return $tableau;
    }
      
    
    
    
}