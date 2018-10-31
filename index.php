<?php
if(!isset($_SESSION)){
    session_start();
}


require('controller/frontend.php');
try{
	
	$pages = scandir('view/frontend/');
	
	if (isset($_GET['page'])) {
		/* page home */
		if ($_GET['page'] == 'home') {
			$home = new PageHome;
			$home -> home();

		}
	
			elseif ($_GET['page'] == 'menu') {
				$menu = new PageMenu;
				$menu -> menu();
			}
			elseif ($_GET['page'] == 'operation') {
				$operation = new PageOperation;
				$operation -> operation();
			}
			elseif ($_GET['page'] == 'promo') {
				$promo = new PagePromo;
				$promo -> promo();
			}
			elseif ($_GET['page'] == 'article') {
				$article = new PageArticle;
				$article -> article();
			}
			elseif ($_GET['page'] == 'recap') {
				$recap = new PageRecap;
				$recap -> recap();
			}
			elseif ($_GET['page'] == 'commande') {
				$commande = new PageCommande;
				$commande -> commande();
			}
			elseif ($_GET['page'] == 'reservation') {
				$reservation = new PageReservation;
				$reservation -> reservation();
			}
			elseif ($_GET['page'] == 'prevision') {
				$prevision = new PagePrevision;
				$prevision -> prevision();
			}
			elseif ($_GET['page'] == 'jsonclient') {
				if(isset($_GET['term'])){
					$client = new PageOperation;
					$client -> jsonStat0($_GET['term'] );
				}
			}
			elseif ($_GET['page'] == 'jsonstat1') {
				if(isset($_GET['term'])){
					$stat1 = new PageOperation;
					$stat1 -> jsonStat1($_GET['term'] );
				}
			}
			elseif ($_GET['page'] == 'jsonstat2') {
				if(isset($_GET['term'])){
					$stat2 = new PageOperation;
					$stat2 -> jsonStat2($_GET['term'] );
				}
			}
			elseif ($_GET['page'] == 'jsonstat3') {
				if(isset($_GET['term'])){
					$stat3 = new PageOperation;
					$stat3 -> jsonStat3($_GET['term'] );
				}
			}
			
					
				
			
	
		/* search page exist */
		elseif(in_array($_GET['page'],$pages)){
			$page=$_GET['page'];
		}
		else{
			throw new Exception('Ce n\' est pas la bonne page');			
		}
	}
	else{
		$home = new PageHome;
		$home -> home();
	}
	
}
catch(Exception $e) {
	
	require('view/frontend/error.php');
	
}
?>







