<?php
require_once('model/HomeManager.php');
require_once('model/OperationManager.php');


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
            
            
            

            require('view/frontend/promo.php');
        }

        
    }
    class PageOperation{
        /* * page menu view * */
        public function operation(){
            $OperationManager= new OperationManager;
            $recup1=$OperationManager-> petiteEnseigne();
            
            

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


    }


    class PageArticle{
        /* * page article view * */
        public function article(){
            
            
            

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