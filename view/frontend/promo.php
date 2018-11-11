
<!--page home-->
<?php $title = "promo"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>

<section id="Acceuil">
   
    <h1 id>Plan promo</h1>
    <table class="table table-bordered table-hover table-dark">
        <thead>    
            <tr class="text-center">
         
        <td><h3> Nom de l'opération</h3></td>
        <td><h3> Etat</h3> </td>
        <td><h3> Prio</h3> </td>
        <td><h3> Mois de création</h3> </td>
        <td><h3> Date de début</h3> </td>
        <td><h3> Date de fin</h3> </td>
        <td><h3> Date disponible</h3> </td>
        <td><h3> Date de début d'engagement</h3> </td>
        <td><h3> Date de fin d'engagement</h3> </td>
        <td><h3> Date de création</h3> </td>
        <td><h3> Date de modification</h3> </td>
        <td><h3> Enseigne</h3> </td>
        <td><h3> Sous enseigne</h3> </td>
        <td><h3> Code du client</h3> </td>
        <td><h3> stat1</h3> </td>
        <td><h3> stat2</h3> </td>
        <td><h3> stat3</h3> </td>
        <td><h3> Nom du client</h3> </td>
        <td><h3> Direct</h3> </td>
        
        <tr>
     </thead>

        <?php
                  
                  foreach ($req as $row){
                    $row[14]= isset($row[14]) ? $row[14] : NULL;
                    $row[19]= isset($row[19]) ? $row[19] : NULL;
                    $row[18]= isset($row[18]) ? $row[18] : NULL;
                    $row[15]= isset($row[15]) ? $row[15] : NULL;
                    $row[16]= isset($row[16]) ? $row[16] : NULL;
                    $row[17]= isset($row[17]) ? $row[17] : NULL;
                    echo"<tr>";
                    echo"<td>".$row['operation_name']."</td>";
                    echo"<td>".$row['operation_etat']."</td>";
                    echo"<td>".$row['prio']."</td>"; 
                    echo"<td>$row[1]</td>";
                    echo"<td>".$row['operation_start_date']."</td>";
                    echo"<td>".$row['operation_end_date']."</td>";
                    echo"<td>".$row['operation_available_request_date']."</td>";
                    echo"<td>".$row['operation_commitment_start_date']."</td>";
                    echo"<td>".$row['operation_commitment_end_date']."</td>";
                    echo"<td>".$row['operation_creation_date']."</td>";
                    echo"<td>".$row['operation_modification_date']."</td>";
                    echo"<td>$row[19]</td>";
                    echo"<td>$row[18]</td>";
                    echo"<td>$row[13]</td>";
                    echo"<td>$row[14]</td>";
                    echo"<td>$row[15]</td>";
                    echo"<td>$row[16]</td>";
                    echo"<td>$row[17]</td>";
                    
                    
                    echo"</tr>";
  
  
                  }
                          
                  ?>

        </table>


<fieldset>       

              <?php
      if(isset($_POST['submit'])){
        $opConso=htmlspecialchars($_POST['operation_conso_offer']);
        $opPromoRed=htmlspecialchars($_POST['operation_promotionnal_reduction']);
        $opPvc=htmlspecialchars($_POST['operation_pvc_managment']);
        $opType=htmlspecialchars($_POST['operation_type']);
        $uvcPre=htmlspecialchars($_POST['uvc_prevision']);
        $product=htmlspecialchars($_POST['promo']);

        
        $prod_id=Product_Id($product); 
        $prodId =$prod_id[0];
        //echo '<pre>'.print_r($prod_id,true)."</pre>";
        $opId=$_SESSION['opId'];
        Get_Promo($opConso,$opPromoRed,$opPvc,$opType,$uvcPre,$opId,$prodId);
         
  
      }
    ?>
   

            <form method="post">
            
            <div class="form-group col-2">
                <input type="text" class="form-control" placeholder="Article" name="promo" id="promo"  />
            </div>         

                <p><label for="operation_conso_offer">Offre conso :</label><br>
                            <select name="operation_conso_offer">

                  <option value=""></option> 
                  <option value="10% BRI">10% BRI</option>
                  <option value="15% BRI">15% BRI</option>
                  <option value="20% BRI">20% BRI</option>
                  <option value="25% BRI">25% BRI</option>
                  <option value="30% BRI">30% BRI</option>
                  <option value="40% BRI">40% BRI</option>
                  <option value="50% BRI">50% BRI</option>
                  <option value="60% BRI">60% BRI</option>
                  <option value="70% BRI">70% BRI</option>
                  <option value="80% BRI">80% BRI</option>
                  <option value="0,30 € Bon Achat différé">0,30 € Bon Achat différé</option>
                  <option value="0,52 € de BRI">0,52 € de BRI</option>
                  <option value="1 € de BRI">1 € de BRI</option>
                  <option value="1,50 € de BRI">1,50 € de BRI</option>
                  <option value="2 € de BRI">2 € de BRI</option>
                  <option value="2,50 € de BRI">2,50 € de BRI</option>
                  <option value="2,54 € de BRI">2,54 € de BRI</option>
                  <option value="2,70 € de BRI">2,70 € de BRI</option>
                  <option value="3 € de RI">3 € de RI</option>
                  <option value="1,5€ RI pour 3 PRODUITS">1,5€ RI pour 3 PRODUITS</option>
                  <option value="3€ RI pour 3 PRODUITS">3€ RI pour 3 PRODUITS</option>
                  <option value="RI 10%">RI 10%</option>
                  <option value="RI 20%">RI 20%</option>
                  <option value="RI 30%">RI 30%</option>
                  <option value="RI 40%">RI 40%</option>
                  <option value="0,35€ BRD">0,35€ BRD</option>
                  <option value="0,50€ BRD">0,50€ BRD</option>
                  <option value="0,65€ BRD">0,65€ BRD</option>
                  <option value="1€ RI">1€ RI</option>
                  <option value="1,5€ RI">1,5€ RI</option>
                  <option value="2€ RI">2€ RI</option>
                  <option value="3€ RI"> 3€ RI </option>  
                  <option value="5€ RI">5€ RI</option>
                  <option value="Euro Cora 1,50 €">Euro Cora 1,50 €</option>
                  <option value="Crescendo 30% 40% 50%">Crescendo 30% 40% 50%</option>
                  <option value="3 POUR 2">3 POUR 2</option>
                  <option value="5 + 1GT">5 + 1GT</option>
                  <option value="4 + 1GT">4 + 1GT</option>
                  <option value="3 + 1GT">3 + 1GT</option>
                  <option value="2 + 1GT">2 + 1GT</option>
                  <option value="4 + 2GT">4 + 2GT</option>
                  <option value="9 + 3GT">9 + 3GT</option>
                  <option value="10+2GT">10+2GT</option>
                  <option value="3 POUR 2">3 POUR 2</option>
                  <option value="6 POUR 4">6 POUR 4</option>
                  <option value="2 CARTONS + 1GT">2 CARTONS + 1GT</option>
                  <option value="5 COLIS + 1GT">5 COLIS + 1GT</option>
                  <option value="6 CARTONS DONT 1GT">6 CARTONS DONT 1GT</option>
                  <option value="1 + 1GT">1 + 1GT</option>
                  <option value="12 dt 2GT">12 dt 2GT</option>
                  <option value="24 dt 2GT">24 dt 2GT</option>
                  <option value="24 dt 4GT">24 dt 4GT</option>
                  <option value="10 + 2">10 + 2</option>
                  <option value="2ième à 50%">2ième à 50%</option>
                  <option value="2ième à 60%">2ième à 60%</option>
                  <option value="2ième à 70%">2ième à 70%</option>
                  <option value="2ième à 80%">2ième à 80%</option>
                  <option value="2ième à 100%">2ième à 100%</option>
                  <option value="0,20€ FID">0,20€ FID</option>
                  <option value="0,30€ FID">0,30€ FID</option>
                  <option value="10% FID">10% FID</option>
                  <option value="20% FID">20% FID</option>
                  <option value="25% FID">25% FID</option>
                  <option value="30% FID">30% FID</option>
                  <option value="40% FID">40% FID</option>
                  <option value="50% FID">50% FID</option>
                  <option value="60% FID">60% FID</option>
                  <option value="70% FID">70% FID</option>
                  <option value="80% FID">80% FID</option>
                  <option value="0,30 € fid">0,30 € fid</option>
                  <option value="30% TEL">30% TEL</option>
                  <option value="Net">Net</option>
                  <option value="16,66%">16,66%</option>
                  <option value="10% S/F">10% S/F</option>
                  <option value="15% S/F">15% S/F</option>
                  <option value="Carte 30%">Carte 30%</option> 
                   </select></p>

                  <p><label for="operation_promotionnal_reduction">Remise promo :</label><br>
                   <select name="operation_promotionnal_reduction">
                   <option value=""></option>
                    <option value="5%">5%</option>
                  <option value="10%">10%</option>
                  <option value="15%">15%</option>
                   <option value="20%">20%</option>
                   <option value="Net">Net</option>
       
                   </select></p>

                   <p><label for="operation_pvc_managment">PVC management:</label><br>
                  <input type="text" name="operation_pvc_managment" /></p>

                <p><label for="uvc_prevision">Prevision UVC:</label><br>
                  <input type="text" name="uvc_prevision" /></p>


            <p><label for="operation_type">Type d'opération:</label><br>
            <select name="operation_type">
          <option value=""></option>
          <option value=" Tract">Tract</option>
          <option value="Offre Compl">Offre Compl.</option>
          <option value="Demarrage">Remontée</option>
          <option value="Appel Group">Demarrage</option>
          <option value="Fidélité">Appel Group.</option>
          <option value="Guide">Guide</option>
          <option value="Offre Salon">Offre Salon</option>
          <option value="Note hebdo">Note hebdo</option>
          <option value="Prospection">Prospection</option>
          <option value="Temps fort">Temps fort</option>
          <option value="Test">Test</option>
          <p></p>       
          </p><p>
          </select></p>
          <div class="row">
                        <div class="col-3 text-center">
                            <button type="submit" name=submit class=" btn btn-block btn-md btn-success">Valider</button>
                        </div>
                    </div>             <br/><br />   
      </fieldset>








  </body>
</html>


</body>
       
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
