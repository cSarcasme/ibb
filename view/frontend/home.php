<!--page home-->
<?php $title = "Accueil"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>
<section id="Acceuil">
   
    <h1 id>Plan promo</h1>

    <table class="table table-bordered table-hover table-dark">
        <thead>    
            <tr class="text-center">
                <th><h3> </h3> </th>    
                <th><h3> Nom ou N° de l'opération</h3></th>
                <th><h3> prio</h3> </th>
                <th><h3> Type d'opération</h3> </th>
                <th><h3> Mois de création</h3> </th>
                <th><h3> Année de création</h3> </th>
                <th><h3> Centrale</h3> </th>
                <th><h3> Mois de enseigne remontée</h3> </th>
                <th><h3> Date conso  début</h3> </th>
                <th><h3> Date conso fin</h3> </th>
                <th><h3> Date dispo demandé</h3> </th>
                <th><h3> Date de début d'engagement</h3> </th>
                <th><h3> Date de fin d'engagement</h3> </th>
                <th><h3> Date de création</h3> </th>
                <th><h3> Date de modification</h3> </th>
                <th><h3> code du produit</h3></th>
                <th><h3> Produit libellé</h3></th>
                <th><h3> EAN</h3></th>
                <th><h3> Tarif</h3> </th>
                <th><h3> Prévision UVC</h3></th>
                <th><h3> Offre conso</h3> </th>
                <th><h3> Remise Promo</h3> </th>
                <th><h3> PVC management</h3> </th>
                <th><h3> Résa client</h3> </th>
                <th><h3> Code du client</h3> </th>
                <th><h3> Client</h3> </th>
                <th><h3> Etat </h3> </th>
                <th><h3> Total Resa</h3> </th>
                <th><h3> Nom du client</h3> </th>
            <tr>
        </thead>
        <thead>
            <tr>
                <form method="post">
                    <td>
                        <h3><input type="submit" name="Ok" value="Trier" >  </h3> 
                    </th>    
                                        
                    <th><h3><input type="radio" name="tri" value="1" id="1" />    </p> </h3>
                    <th><h3><input type="radio" name="tri" value="2" id="2" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="3" id="3" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="4" id="4" />    </p> </h3> </th>
                    <th><h3> <input type="radio" name="tri" value="5" id="5" />    </p></h3> </th>
                    <th><h3> <input type="radio" name="tri" value="6" id="6" />    </p></h3> </th>
                    <th><h3> <input type="radio" name="tri" value="7" id="7" />    </p></h3> </th>
                    <th><h3> <input type="radio" name="tri" value="8" id="8" />    </p></h3> </th>
                    <th><h3><input type="radio" name="tri" value="9" id="9" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="10" id="10" />    </p> </h3> </th>
                    <th><h3> <input type="radio" name="tri" value="11" id="11" />   </p></h3> </th>
                    <th><h3><input type="radio" name="tri" value="12" id="12" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="13" id="13" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="14" id="14" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="15" id="15" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="16" id="16" />    </p> </h3> </th>
                    <th><h3> <input type="radio" name="tri" value="17" id="17" />   </p></h3> </th>
                    <th><h3><input type="radio" name="tri" value="18" id="18" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="19" id="19" />   </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="20" id="20" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="21" id="21" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="22" id="22" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="23" id="23" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="24" id="24" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="24" id="25" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="24" id="26" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="24" id="27" />    </p> </h3> </th>
                    <th><h3><input type="radio" name="tri" value="24" id="28" />    </p> </h3> </th>
                </form>
            <tr>
        </thead>
        <tbody>        
        <?php
    
        foreach ($recup as $row){
                
            
                                  
            echo"<tr>";
            //echo"<td><a href='display_operation_modified.php?idOp=".$row['id_operation']."&idArt=".$row['article_id']."'>Modifier</a></td>";
            echo"<td></td>";
            echo"<td>".$row['operation_name']."</td>";
            echo"<td>".$row['prio']."</td>";
            echo"<td>".$row['operation_type']."</td>";
            echo"<td></td>";
            echo"<td></td>";
            echo"<td></td>";
            echo"<td></td>";
            echo"<td>".$row['operation_start_date']."</td>";
            echo"<td>".$row['operation_end_date']."</td>";
            echo"<td>".$row['operation_available_request_date']."</td>";
            echo"<td>".$row['operation_commitment_start_date']."</td>";
            echo"<td>".$row['operation_commitment_end_date']."</td>";
            echo"<td>".$row['operation_creation_date']."</td>";
            echo"<td>".$row['operation_modification_date']."</td>";
            echo"<td>".$row['product_code']."</td>";
            echo"<td>".$row['product_name']."</td>";
            echo"<td>".$row['product_EAN']."</td>";
            echo"<td>".$row['tarif']."</td>";
            echo"<td></td>";

            echo"<td>".$row['operation_conso_offer']."</td>";
            echo"<td>".$row['operation_promotionnal_reduction']."</td>";
            echo"<td>".$row['operation_pvc_managment']."</td>";
            echo"<td></td>";

            echo"<td></td>";
            echo"<td></td>";
            echo"<td></td>";
            echo"<td></td>";
            echo"<td></td>";
            echo '</tr>';

            }
                    
            ?>
        </tbody>
    </table>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>S