
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>

<!--page article-->
<?php $title = "article"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>

<section id="Article">
   
    <h1 id>Suivie des Articles</h1>
    <table class="table table-bordered table-hover table-dark">
        <thead>    
            <tr class="text-center">
        <td><h3> Nom de l'opération</h3></td>
        <td><h3> Code du produit</h3></td>
        <td><h3> Nom du produit</h3> </td>
        <td><h3> EAN</h3> </td>
        <td><h3> Offre conso</h3> </td>
        <td><h3> Reduction promotionnelle</h3> </td>
        <td><h3> PVC management</h3> </td>
        <td><h3> Type d'opération</h3> </td>
        <td><h3> Tarif</h3> </td>
        <tr>
     </thead>

        <?php
                  
                  foreach ($req as $row){
                    $row[14]= isset($row[14]) ? $row[14] : NULL;

                    echo"<tr>";
                    echo"<td>$row[10]</td>";
                    echo"<td>$row[7]</td>";
                    echo"<td>$row[8]</td>";
                    echo"<td>$row[7]</td>"; 
                    echo"<td>$row[9]</td>";
                    echo"<td>$row[2]</td>";
                    echo"<td>$row[3]</td>";
                    echo"<td>$row[4]</td>";
                    echo"<td>$row[11]</td>";
                    
                    echo"</tr>";
  
  
                  }
                          
                  ?>

        </table>


<fieldset>   

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
