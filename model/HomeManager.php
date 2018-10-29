<?php 
require_once("model/manager.php");
class HomeManager extends Manager
{
    

    public function MainBoard()
    {
        
        $db=$this -> dbConnect();
      
        $req=$db->query("SELECT * FROM operation as o, article as a, operation_article as p,product_article as pa,product as pro, tarif as t 
        WHERE p.article_id = a.article_id AND p.id_operation = o.id_operation AND pro.product_code= pa.product_code AND pa.article_id=a.article_id AND pro.product_code = t.product_code ORDER BY operation_name
        ");
        return $req;
    }
     public function Tried()
     {
        $db=$this -> dbConnect();
       $req=$db->query(
                     "SELECT * FROM operation as o, article as a, operation_article as oa, tarif as t, product as p, product_article as pa, client as c, operation_client as pc 
                WHERE oa.article_id = a.article_id AND oa.id_operation = o.id_operation AND  pa.product_code= p.product_code  AND p.product_code =t.product_code AND pa.article_id = a.article_id AND pc.client_code = c.client_code AND pc.id_operation = o.id_operation
                ORDER BY
                CASE WHEN '".@$_SESSION['tri']."' = '1' THEN operation_name END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '2' THEN prio END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '3' THEN operation_month END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '4' THEN operation_start_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '5' THEN operation_end_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '6' THEN operation_available_request_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '7' THEN operation_commitment_start_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '8' THEN operation_commitment_end_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '9' THEN operation_creation_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '10' THEN operation_modification_date END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '12' THEN product_name END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '13' THEN product_EAN END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '14' THEN tarif END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '15' THEN operation_conso_offer END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '16' THEN operation_promotionnal_reduction END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '17' THEN operation_pvc_managment END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '18' THEN operation_type END ASC ,

                CASE WHEN '".@$_SESSION['tri']."' = '20' THEN stat1 END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '21' THEN stat2 END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '22' THEN stat3 END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '23' THEN stat4 END ASC,
                CASE WHEN '".@$_SESSION['tri']."' = '24' THEN client_name END ASC;
                ");
                return $req; 
     }   
     

    
    
}