

<!--page operation-->
<?php $title = "Operation"?>

<?php ob_start();?>

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
                    
                   
                    //Client_Op($opId,$clientId,$numb);
                    Get_Op($opName,$opStartDate,$opEndDate,$opReqDate,$opcommitStartDate,$opCommitEndDate,$prio);
                      
                  }
                ?>
                <p class="text-white">Entrer les informations de l'opération</p>

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
                        <div class="form-group col-2">
                            <select  class="form-control" type="text" name="enseigne2" required>
                            <option>petite enseigne</option>
                            <?php 
                                      
                              foreach ($recup1 as $row){
                                echo '<OPTION>'. $row['name'] . '</OPTION>';
                              }
                                      
                            ?>               
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <p class="text-white"><label for="operation_name">Rentrez un nom d' opération*</label><br>
                            <input type="text" id="operation_name" class="form-control" name="operation_name" placeholder="Nom de l'opération" /></p>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-3">
                            <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                <input type="text" placeholder="Date de début de l'opération" name="operation_start_date"  class="form-control datepicker" data-target="#datetimepicker"/>
                                <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-3">
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" placeholder="Date de fin de l'opération" name="operation_end_date" class="form-control datepicker" data-target="#datetimepicker1"/>
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-3">
                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                <input type="text" placeholder="Date de disponibilité demandée" name="operation_available_request_date"  class="form-control datepicker" data-target="#datetimepicker2"/>
                                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-3">
                            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text" placeholder="Date de début d'engagement" name="operation_commitment_start_date"  class="form-control datepicker" data-target="#datetimepicker3"/>
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-3">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" placeholder="Date de fin d'engagement" name="operation_commitment_end_date"  class="form-control datepicker" data-target="#datetimepicker4"/>
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="form-group col-1">
                            <p class="text-white">Prioritaire:</p>
                        </div>
                        <div class="form-group col-1">
                            <div class="form-check">
                                <input class="form-check-input" name="prio" value="oui" type="checkbox" id="gridCheck">
                                <label class="form-check-label  text-white" for="gridCheck">
                                  Oui
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-1">
                            <div class="form-check">
                                <input class="form-check-input" name="prio" value="non" type="checkbox" id="gridCheck">
                                <label class="form-check-label text-white" for="gridCheck">
                                   Non
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-center">
                            <button type=submit name=submit class=" btn btn-block btn-md btn-success">Valider</button>
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
