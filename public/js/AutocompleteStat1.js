$(document).ready(function($){


$('#stat1').autocomplete({
  source : function(requete, reponse){ // les deux arguments représentent les données nécessaires au plugin
  $.ajax({
          url : 'index.php?page=jsonstat1', // on appelle le script JSON
          dataType : 'json', // on spécifie bien que le type de données est en JSON
          data : {
              term:requete.term,
              maxRows : 2
              
          },
          
          success : function(data){
              reponse(data);
                  
          }
      });
  },
  minLenght:1,
  select:function(event,ui){
    
      
  }
  });
});
