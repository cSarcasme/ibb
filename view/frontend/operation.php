
<!--page operation-->
<?php $title = "Operation"?>

<?php ob_start();?>

<?php
    include('body/topbar.php')

?>


                <nav>
                    <ul>
                        <li><a href="index.php?page=menu">Menu</a></li>
                        <li><a href="display_add_operation.php"> Opération</a></li>
                        <li><a href="display_search_promo.php">Réservation</a></li>
                        <li><a href="display_commande_choice.php">Commande</a></li>
                    </ul>
                </nav>
            </header>
  
	<body>
		<h1> Nouvelle opération</h1>
    
  <fieldset>
    <legend>Entrer les informations de l'opération</legend><fieldset>  
    <?php
    clientName();  stat1();   stat2();   stat3(); 
    ?>
   </fieldset> 
   
                
                  
   <SELECT type="text" name="enseigne2" required />
      <?php 
                
        foreach ($recup1 as $row){
          echo '<OPTION>'. $row['name'] . '</OPTION>';
        }
                
      ?>      
            
           </SELECT>
   
    <p><label for="operation_name">Nom ou de l'opération :</label><br>
    <input type="text" name="operation_name" /></p>

   
    <p><label for="operation_month">Mois de l'opération :</label><br>
    <input type="text" name="operation_month" /></p>
   
    <p><label for="operation_start_date">Date de début de l'opération (aaaa-mm-jj) :</label><br>
    <input type="Date" name="operation_start_date" /></p>
    
    <p><label for="operation_end_date">Date de fin de l'opération (aaaa-mm-jj) :</label><br>
    <input type="date" name="operation_end_date" /></p>

    <p><label for="operation_available_request_date">Date de disponibilité demandée (aaaa-mm-jj):</label><br>
    <input type="date" name="operation_available_request_date" /></p>

    <p><label for="operation_commitment_start_date">Date de début d'engagement (aaaa-mm-jj):</label><br>
    <input type="date" name="operation_commitment_start_date" /></p>

    <p><label for="operation_commitment_end_date">Date de fin d'engagement(aaaa-mm-jj) :</label><br>
    <input type="date" name="operation_commitment_end_date" /></p>
    
               
  <p>  Prioritaire
<input type="radio" name="prio" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="prio" value="non" id="non" /> <label for="non">Non</label>   </p>               
  <p></p>
<input type="submit" name="Ok" value="Ajouter une nouvelle opération" >
</form>

<?php
    function clientName()
    {
?>     
                      
<form method="GET">
  <input type="text" placeholder="client" id="client" class="ui-autocomplete-input" autocomplete="off" />
                            
</form>
<?php
     }
?>

<?php
    function stat1()
    {
?>     
                      
<form method="GET">
  <input type="text" placeholder="stat1" id="stat1" class="ui-autocomplete-input" autocomplete="off" />
                            
</form>
<?php
     }
?> 
<?php
    function stat2()
    {
?>     
                      
<form method="GET">
  <input type="text" placeholder="stat2" id="stat2" class="ui-autocomplete-input" autocomplete="off" />
                            
</form>
<?php
     }
?>
<?php
    function stat3()
    {
?>     
                      
<form method="GET">
  <input type="text" placeholder="stat3" id="stat3" class="ui-autocomplete-input" autocomplete="off" />
                            
</form>
<?php
     }
?>
  </body>






<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
