
<!--page home-->
<?php $title = "Menu"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>

    <fieldset>
    <legend>Choisissez le champs que vous voulez ajouter </legend>

<?php

$_SESSION['var1'] = isset($_SESSION['var1']) ? ($_SESSION['var1']) : NULL;
unset($_SESSION['var1']);
$_SESSION['var2'] = isset($_SESSION['var2']) ? ($_SESSION['var2']) : NULL;
unset($_SESSION['var2']);

?>

            <a href="index.php?page=operation"> <h4> Opération </h4> </a>
            <a href="display_search_promo.php"> <h4> Réservation </h4> </a>
            <a href="display_commande_choice.php"> <h4> Commande </h4> </a>
            <a href="display_add_prevision.php"> <h4> Prévision </h4> </a>
            
            <a href="display_add_article.php"> <h4> Article </h4> </a>
             <a href="display_add_society.php"><h4>Entrepot</h4> </a>
            <a href="display_add_institution.php"><h4>Client</h4> </a>
            <a href="display_sign.php"><h4>Grosse enseigne</h4> </a>
  </fieldset>
  <a href="index.php?page=home">Retourner à la page d'accueil </a>






<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
