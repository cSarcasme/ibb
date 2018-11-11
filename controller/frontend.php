<?php
require_once('model/HomeManager.php');
require_once('model/OperationManager.php');
require_once('model/SessionManager.php');
require_once('model/PromoManager.php');
require_once('model/ArticleManager.php');



    function Session_Op(){
        $SessionManager= new SessionManager;
        $SessionManager-> OpSession();
    }

    class PageHome{
        /* * page home view * */
        public function home(){
            $HomeManager= new HomeManager;
            $recup=$HomeManager->MainBoard();
            $recupTri=$HomeManager->Tried();

            require('view/frontend/home.php');
        }

        
    }
    class PageMenu{
        /* * page menu view * */
        public function menu(){
            
            
            

            require('view/frontend/menu.php');
        }

        
    }
    class PagePromo{
        /* * page promo view * */
        public function promo(){
            $PromoManager= new PromoManager;
            $req=$PromoManager->SecondBoard();

                function Get_Promo($opConso,$opPromoRed,$opPvc,$opType,$uvcPre,$opId,$prodId){
                    $PromoManager= new PromoManager;
                    $affected =$PromoManager-> GetPomo($opConso,$opPromoRed,$opPvc,$opType,$uvcPre,$opId,$prodId);
                    if($affected==false){
                        throw new Exception("impossible d'envoyer les données");
                    }
                    else {
                        header('Location: index.php?page=article');
                        }
                }
                function Product_Id($product){
            
                    $PromoManager= new PromoManager;
                    $req=$PromoManager-> productId($product);

                    return $req;
                    
                    
                }        
        
            

            require('view/frontend/promo.php');
            return $req;
        }
        public function jsonPromo($promo){
                        
                        $PromoManager= new PromoManager;
                        $recup=$PromoManager-> search_promo($promo);
                        $array=[];
                        
                        while($data=$recup->fetch()){
                            array_push($array,$data['product_name']);
                        }
                    
                        echo json_encode($array);    
        }
     

    }
    class PageOperation{
        /* * page menu view * */
        public function operation(){
            $OperationManager= new OperationManager;
            $recup1=$OperationManager-> petiteEnseigne();
           
            function Client_Id($client){
                                
                                $OperationManager= new OperationManager;
                                $req=$OperationManager-> warehouseId($client);

                                return $req;
                                
                                
                            }  
            function Stat1_Id($stat1){
                
                $OperationManager= new OperationManager;
                $req=$OperationManager-> stat1Id($stat1);

                return $req;
                
                
            } 
            function Stat2_Id($stat2){
                
                $OperationManager= new OperationManager;
                $req=$OperationManager-> stat2Id($stat2);

                return $req;
                
                
            } 
            function Stat3_Id($stat3){
                
                $OperationManager= new OperationManager;
                $req=$OperationManager-> stat3Id($stat3);

                return $req;
                
                
            } 
            function Enseigne_Id($enseigne2){
                
                $OperationManager= new OperationManager;
                $req=$OperationManager-> enseigneId($enseigne2);

                return $req;
                
                
            } 
            function Client_Op($opId,$clientId,$numb){
              
                $OperationManager= new OperationManager;
                $affectedLines=$OperationManager-> ClientOp($opId,$clientId,$numb);
                if($affectedLines==false){
                    throw new Exception("impossible d'envoyer les données");
                }
         else {
                    header('Location: index.php?page=promo');
                    }
            }
            function Get_Op($opName,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio){
                $OperationManager= new OperationManager;
                $affectedLines =$OperationManager-> GetOpe($opName,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio);
                if($affectedLines==false){
                    throw new Exception("impossible d'envoyer les données");
                }
               
            }
            
           

                require('view/frontend/operation.php');
            }
        
            
                   
            public function jsonStat0($term0){
                
                $OperationManager= new OperationManager;
                $recup=$OperationManager-> search_stat0($term0);
                $array=[];
                
                while($data=$recup->fetch()){
                    array_push($array,$data['warehouse_name']);
                }
            
                echo json_encode($array);
                
                
            }
        

        public function jsonStat1($term1){
                
            $OperationManager= new OperationManager;
            $recup=$OperationManager-> search_stat1($term1);
            $array=[];
            while($data=$recup->fetch()){
                array_push($array,$data['name']);
            }
        
            echo json_encode($array);
            
        }
    

        public function jsonStat2($term2){
                    
            $OperationManager= new OperationManager;
            $recup=$OperationManager-> search_stat2($term2);
            $array=[];
            while($data=$recup->fetch()){
                array_push($array,$data['name']);
            }
        
            echo json_encode($array);
            
        }


        public function jsonStat3($term3){
                        
            $OperationManager= new OperationManager;
            $recup=$OperationManager-> search_stat3($term3);
            $array=[];
            while($data=$recup->fetch()){
                array_push($array,$data['stat3_name']);
            }

            echo json_encode($array);
            
        }

        public function jsonEnseigne($term4){
                        
            $OperationManager= new OperationManager;
            $recup=$OperationManager-> search_enseigne($term4);
            $array=[];
            while($data=$recup->fetch()){
                array_push($array,$data['name']);
            }

            echo json_encode($array);
            
        }



    }


    class PageArticle{
        /* * page article view * */
        public function article(){
            $ArticleManager= new ArticleManager;
            $req=$ArticleManager->ThirdBoard();
           
           

            require('view/frontend/article.php');
        }

        
    }
    class PageRecap{
        /* * page recap view * */
        public function recap(){
            
            
            

            require('view/frontend/recap.php');
        }

        
    }
    class PageCommande{
        /* * page commande view * */
        public function commande(){
            
            
            

            require('view/frontend/commande.php');
        }

        
    }
    class PageReservation{
        /* * page reservation view * */
        public function reservation(){
            
            
            

            require('view/frontend/reservation.php');
        }

        
    }
    class PagePrevision{
        /* * page prevision view * */
        public function prevision(){
            
            
            

            require('view/frontend/prevision.php');
        }

        
    }
    class VerifOpNameIfExist{
        public function If_Exist($opName){
            $OperationManager = new OperationManager;
            $result = $OperationManager -> IfExist($opName);
            
            return $result;
        }
    }