<!--page home-->
<?php $title = "Accueil"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>


<style type="text/css">
    input {width:100px;}
    td {border: solid 1px black;
        
        width :80px;
        }
    table {border-collapse: collapse;}
</style>
<title>Table sorter</title>
<script type='text/javascript'>
}
</script>          
                   
<nav>
    <ul>              
        <li><a href="index.php?page=menu">Menu</a></li>
        <li><a href="index.php?page=operation"> Opération</a></li>
        <li><a href="display_search_promo.php">Réservation</a></li>
        <li><a href="display_commande_choice.php">Commande</a></li>
        <li><a href="display_search.php">Recherche</a></li>
     </ul>
</nav>

    
        <table id="matable">
            <tr>
                <th colspan="25"  >
                    <h1>Plan promo</h1>
                </th>
            </tr> 
            <tr>
                <td><h3> </h3> </td>    
                <td><h3> Nom ou N° de l'opération</h3></td>
                <td><h3> prio</h3> </td>
                <td><h3> Type d'opération</h3> </td>
                <td><h3> Mois de création</h3> </td>
                <td><h3> Année de création</h3> </td>
                <td><h3> Centrale</h3> </td>
                <td><h3> Mois de enseigne remontée</h3> </td>
                <td><h3> Date conso  début</h3> </td>
                <td><h3> Date conso fin</h3> </td>
                <td><h3> Date dispo demandé</h3> </td>
                <td><h3> Date de début d'engagement</h3> </td>
                <td><h3> Date de fin d'engagement</h3> </td>
                <td><h3> Date de création</h3> </td>
                <td><h3> Date de modification</h3> </td>
                <td><h3> code du produit</h3></td>

                <td><h3> Produit libellé</h3></td>
                <td><h3> EAN</h3></td>

                <td><h3> Tarif</h3> </td>
                <td><h3> Prévision UVC</h3></td>

                <td><h3> Offre conso</h3> </td>
                <td><h3> Remise Promo</h3> </td>
                <td><h3> PVC management</h3> </td>
                <td><h3> Résa client</h3> </td>
                <td><h3> Code du client</h3> </td>
                <td><h3> Client</h3> </td>
                <td><h3> Etat </h3> </td>
                <td><h3> Total Resa</h3> </td>
                <td><h3> Nom du client</h3> </td>


            <tr>
            <form method="post" action="index.php">
 
            <td>
                <h3><input type="submit" name="Ok" value="Trier" >  </h3> 
            </td>    
                    
                
            </td>
                 
                        
                    
            <td><h3><input type="radio" name="tri" value="1" id="1" />    </p> </h3>
            <td><h3><input type="radio" name="tri" value="2" id="2" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="3" id="3" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="4" id="4" />    </p> </h3> </td>
            <td><h3> <input type="radio" name="tri" value="5" id="5" />    </p></h3> </td>
            <td><h3> <input type="radio" name="tri" value="6" id="6" />    </p></h3> </td>
            <td><h3> <input type="radio" name="tri" value="7" id="7" />    </p></h3> </td>
            <td><h3> <input type="radio" name="tri" value="8" id="8" />    </p></h3> </td>
            <td><h3><input type="radio" name="tri" value="9" id="9" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="10" id="10" />    </p> </h3> </td>
            <td><h3> <input type="radio" name="tri" value="11" id="11" />   </p></h3> </td>
            <td><h3><input type="radio" name="tri" value="12" id="12" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="13" id="13" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="14" id="14" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="15" id="15" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="16" id="16" />    </p> </h3> </td>
            <td><h3> <input type="radio" name="tri" value="17" id="17" />   </p></h3> </td>
            <td><h3><input type="radio" name="tri" value="18" id="18" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="19" id="19" />   </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="20" id="20" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="21" id="21" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="22" id="22" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="23" id="23" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="24" id="24" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="24" id="25" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="24" id="26" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="24" id="27" />    </p> </h3> </td>
            <td><h3><input type="radio" name="tri" value="24" id="28" />    </p> </h3> </td>

            <tr>
                   
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
                        echo"<td>".$row['operation_month']."</td>";
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
                        echo"<td></td>";
                        echo"<td></td>";

                }
                        
                ?>
       



<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>