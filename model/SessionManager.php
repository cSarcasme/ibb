<?php 
require_once("model/manager.php");
class SessionManager extends Manager
{
 
	public function  OpSession(){
		$db=$this -> dbConnect();
		$req =$db -> query("SELECT id_operation FROM operation ORDER BY id_operation DESC LIMIT 0, 1");
		while ($donnees = $req->fetch())
			{
			$id_operation = $donnees['id_operation'];
			$_SESSION['opId'] = $id_operation; 
			}
		
		
	}
}
		
