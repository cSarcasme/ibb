<?php 
require_once("model/manager.php");
class ArticleManager extends Manager
{
    
	

    public function ThirdBoard()
    {
        
        $db=$this -> dbConnect();
        $tableau = array(); 
        $num=$db->query("SELECT article_id, operation_conso_offer, operation_promotionnal_reduction, operation_pvc_managment, 
        operation_type, uvc_prevision, op_id, pro_id,product_name,product_EAN,operation_name,tarif
                         FROM article as a ,operation as o, product as p,tarif as t
                         WHERE a.pro_id=p.product_code AND o.id_operation=a.op_id AND t.product_code=p.product_code
                         ");
        $num -> execute( array());
       while ($result=$num -> fetch()) {
        
        $tableau[] = $result;
        
       }
       // echo '<pre>'.print_r($tableau,true)."</pre>";
         return $tableau;
    }
      
    
    
    
}