<?php 
require_once("model/manager.php");
class PromoManager extends Manager
{
    

    public function SecondBoard()
    {
        
        $db=$this -> dbConnect();
      
        $req=$db->query("SELECT * FROM operation as o ORDER BY id_operation DESC LIMIT 0, 5
        
        ");
        return $req;
    }
      
     

    
    
}