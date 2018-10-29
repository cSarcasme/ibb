
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
   <form action="index.php" method="post">
   
   <SELECT type="text" name="enseigne2" required />
            <OPTION></OPTION>
            
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
              
<h3> Nom client</h3>        
<legend> client</legend>      
                      
<form method="GET">
  <input type="text" placeholder="client" id="client" class="ui-autocomplete-input" autocomplete="off" />
                            
</form>
<?php
     }


function stat1()
{
          ?>
          <h3> Stat1</h3>        
            <legend> stat1</legend>
        <p></p>       
        </p><p>
        <form action="index.php" method="GET">
              <input type="text" placeholder="stat1" id="stat1" class="ui-autocomplete-input" autocomplete="off" />
              <script language="JavaScript" type="text/javascript">
              $(document).ready(function($){

                  $('#stat1').autocomplete({
                      source: function(request, reponse){
                        $.ajax({
                          dataType: "json",
                          type :'GET',
                          url:"index.php?termA="+$('#stat1').val(),
                          data: {
                          maxRows : 5 // on donne la chaîne de caractère tapée dans le champ de recherche
                          },
                        
                          success: function(data) { 
                          
                                reponse($.map(data, function(objet){
                                  
                                  return objet.value  ; // on retourne cette forme de suggestion
                                }
                          ))},

                          error: function(data) {
                                successmessage = 'Error';
                                console.log(successmessage);
                            }
                    
                          });
                        },  
                  minLength: 3,
                  select: function(event,ui){
                
                              alert(ui.item.value);
                  var clientName1 = ui.item.value;
                  if(clientName1 != '') {
                  location.href= 'index.php?clientName1=' + clientName1;
                  }},
                      
          });
        });

        </script>

        </form>
<?php
}


function stat2()
{
                ?>
              <h3> Stat2</h3>        
                  <legend> stat2</legend>
              <p></p>       
              </p><p>
              <form action="index.php" method="GET">
                    <input type="text" placeholder="stat2" id="stat2" class="ui-autocomplete-input" autocomplete="off" />
                    <script language="JavaScript" type="text/javascript">
                    $(document).ready(function($){

                        $('#stat2').autocomplete({
                            source: function(request, reponse){
                              $.ajax({
                                dataType: "json",
                                type :'GET',
                                url:"index.php?term2="+$('#stat2').val(),
                                data: {
                                maxRows : 5 // on donne la chaîne de caractère tapée dans le champ de recherche
                                },
                              
                                success: function(data) { 
                                
                                      reponse($.map(data, function(objet){
                                        
                                        return objet.value  ; // on retourne cette forme de suggestion
                                      }
                                ))},

                                error: function(data) {
                                      successmessage = 'Error';
                                      console.log(successmessage);
                                  }
                          
                                });
                              },  
                        minLength: 3,
                        select: function(event,ui){
                      
                                    alert(ui.item.value);
                        var clientName2 = ui.item.value;
                        if(clientName2 != '') {
                        location.href= 'index.php?clientName2=' + clientName2;
                        }},
                            
                });
              });

              </script>

              </form>
<?php 
}


function stat3()
{
?>
         
            <h3> Stat3</h3>        
                <legend> stat3</legend>
            <p></p>       
            </p><p>
            <form action="index.php" method="GET">
                  <input type="text" placeholder="stat3" id="stat3" class="ui-autocomplete-input" autocomplete="off" />
                  <script language="JavaScript" type="text/javascript">
                  $(document).ready(function($){

                      $('#stat3').autocomplete({
                          source: function(request, reponse){
                            $.ajax({
                              dataType: "json",
                              type :'GET',
                              url:"index.php?term3="+$('#stat3').val(),
                              data: {
                              maxRows : 5 // on donne la chaîne de caractère tapée dans le champ de recherche
                              },
                            
                              success: function(data) { 
                              
                                    reponse($.map(data, function(objet){
                                      
                                      return objet.value  ; // on retourne cette forme de suggestion
                                    }
                              ))},

                              error: function(data) {
                                    successmessage = 'Error';
                                    console.log(successmessage);
                                }
                        
                              });
                            },  
                      minLength: 3,
                      select: function(event,ui){
                    
                        
                      var clientName3 = ui.item.value;
                      if(clientName3 != '') {
                      location.href= 'index.php?clientName3=' + clientName3;
                      }},
                          
              });
            });

            </script>
            </form>    

            
            <?php
}
function dbConnect2()
{
    try
	{
    $bdd = new PDO('mysql:host=localhost;dbname=ibb', 'root', '');
      return $bdd;
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
}


?>
   
  </body>
</htlm>





<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
