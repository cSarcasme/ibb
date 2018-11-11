<!--page operation-->
<?php $title = "Operation"?>

<?php ob_start();
  
?>

<?php
    include('body/topbar.php')

?>



<section id="operation">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="text-white">Créer une nouvellle opération</h1>
                
    <?php
      if(isset($_POST['submit'])){
        $opName=htmlspecialchars($_POST['operation_name']);
        $opStartDate=htmlspecialchars($_POST['operation_start_date']);
        $opEndDate=htmlspecialchars($_POST['operation_end_date']);
        $opReqDate=htmlspecialchars($_POST['operation_available_request_date']);
        $opcommitStartDate=htmlspecialchars($_POST['operation_commitment_start_date']);
        $opCommitEndDate=htmlspecialchars($_POST['operation_commitment_end_date']);
        $prio=htmlspecialchars($_POST['prio']);
        $client=htmlspecialchars($_POST['client']);
        $stat1=htmlspecialchars($_POST['stat1']);
        $stat2=htmlspecialchars($_POST['stat2']);
        $stat3=htmlspecialchars($_POST['stat3']);
        $enseigne2=htmlspecialchars($_POST['enseigne2']);
        $errors=array();
        $verif=new VerifOpNameIfExist;
        $result = $verif -> If_Exist($opName);

                   
        if(empty($client) AND empty($stat1) AND empty($stat2) AND empty($enseigne2) AND empty($stat3) OR empty($opName) ){
            $errors['empty']="Tous les champs ne sont pas remplis.";
        }
        
       elseif( (!empty($client) AND !empty($stat1)) OR (!empty($client) AND !empty($stat2)) OR (!empty($client) AND !empty($stat3)) OR (!empty($client) AND !empty($enseigne2))
                OR (!empty($stat1) AND !empty($stat2)) OR (!empty($stat1) AND !empty($stat3)) OR (!empty($stat1) AND !empty($enseigne2))
                OR (!empty($stat2) AND !empty($stat3)) OR (!empty($stat2) AND !empty($enseigne2))
                OR (!empty($stat3) AND !empty($enseigne2))
                OR (!empty($client) AND !empty($stat1) AND !empty($stat2)) OR (!empty($client) AND !empty($stat2) AND !empty($stat3)) OR (!empty($client) AND !empty($stat3) AND !empty($enseigne2))
                OR (!empty($stat1) AND !empty($stat2) AND !empty($stat3)) OR (!empty($stat1) AND !empty($stat3) AND !empty($enseigne2))
                OR (!empty($stat2) AND !empty($stat3) AND !empty($enseigne2))
                OR (!empty($client) AND !empty($stat1) AND !empty($stat2) AND !empty($stat3)) OR (!empty($client) AND !empty($stat2) AND !empty($stat3) AND !empty($enseigne2)) 
                OR (!empty($stat1) AND !empty($stat2) AND !empty($stat3) AND !empty($enseigne2))
                OR (!empty($client) AND !empty($stat1) AND !empty($stat2) AND !empty($stat3) AND !empty($enseigne2))){
            $errors['choix']="Vous devez soit remplir client ou stat1 ou stat2 ou stat3 ou petite enseigne.";
                }
        elseif($result){
            $errors['operation']="Nom d' opération déja utiliser";
        }
      
        if(!empty($errors)){
            ?>
            <div class="alert alert-danger"> 
            <?php
                foreach($errors as $error){
                    echo "<strong>"."ATTENTION!!! "."</strong>". $error."<br/>";
                }
            ?>
            </div>
            <?php
        }
        else{
            Get_Op($opName,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio);
            Session_Op();
            $cli=Client_Id($client) OR Stat1_Id($stat1) OR Stat2_Id($stat2) OR Stat3_Id($stat3) OR Enseigne_Id($enseigne2);
            $numb=$cli[1];
            $clientId=$cli[0];
            $opId=$_SESSION['opId'];
            Client_Op($opId,$clientId,$numb);
        } 
      }
    ?>
  <form method="post">
                    <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" placeholder="Client" name="client" id="client"  />
                        </div>
                        <div class="form-group col-2">
                        <input type="text" class="form-control" placeholder="Stat1" name="stat1" id="stat1"  />

                        </div>
                        <div class="form-group col-2">
                            <input type="text" class="form-control" placeholder="Stat2" name="stat2" id="stat2"  />
                        </div>
                        <div class="form-group col-2">
                            <input type="text" class="form-control" placeholder="Stat3" name="stat3" id="stat3"  />
                        </div>
                        <div class="col-2">
                            <div class="row">
                            <div class="form-group col-10">
                                <input type="text" class="form-control" placeholder="Petite enseigne" name="enseigne2"  id="enseigne2"/>
                            </div>
                            <div class="col-2 ">
                                
                               <a href="#" title="clique moi" data-toggle="modal" data-target="#exampleModalLong"><i class="mt-1 text-white fas fa-info-circle fa-2x" ></i></a>
                               
                               <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">liste petite enseigne</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <div class="modal-body">
                                           <?php
                                           foreach($recup1 as $row){
                                               echo ", ".$row['name'];
                                           }
                                           ?>
                                        </div>
                                            <div class="modal-footer">
                                                <em>Rempplir au choix <strong>client</strong> ou <strong> stat1 </strong> ou <strong> stat2</strong> ou <strong>stat3</strong> ou <strong>petite enseigne</strong></em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <p class="text-white"><label for="operation_name">Rentrez un nom d' opération*</label><br>
                            <input type="text" id="operation_name" class="form-control" name="operation_name" placeholder="Nom de l'opération" /></p>
                        </div>
                    </div>

 
        
    <p><label class="text-white" for="operation_start_date">Date de début de l'opération (aaaa-mm-jj) :</label><br>
    <input type="Date" name="operation_start_date" /></p>
    
    <p><label class="text-white" for="operation_end_date">Date de fin de l'opération (aaaa-mm-jj) :</label><br>
    <input type="date" name="operation_end_date" /></p>

    <p><label class="text-white" for="operation_available_request_date">Date de disponibilité demandée (aaaa-mm-jj):</label><br>
    <input type="date" name="operation_available_request_date" /></p>

    <p><label class="text-white" for="operation_commitment_start_date">Date de début d'engagement (aaaa-mm-jj):</label><br>
    <input type="date" name="operation_commitment_start_date" /></p>

    <p><label class="text-white" for="operation_commitment_end_date">Date de fin d'engagement(aaaa-mm-jj) :</label><br>
    <input type="date" name="operation_commitment_end_date" /></p>
    
               
    <p class="text-white">  Prioritaire
                        <input type="radio" class="text-white ml-2" name="prio" value="oui" id="oui" checked="checked" /> <label class="text-white" for="oui">Oui</label>
                        <input type="radio" class="text-white ml-2" name="prio" value="non" id="non" /> <label class="text-white" for="non">Non</label>                  
                     </p>
                    <div class="row">
                        <div class="col-3 text-center">
                            <button type="submit" name=submit class=" btn btn-block btn-md btn-success">Valider</button>
                        </div>
                    </div> 
                  </div>
                  </form>
            </div>            
        </div>
    </div>
</section>

 

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
