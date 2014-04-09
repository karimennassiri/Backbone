  $(window).load(function(){

  // Création de notre modéle   
  var Personne = Backbone.Model.extend({});

  $(function() {

    // instancier le Modéle 
    var personne = new Personne({ nom: 'karim', nom1: 'karim2' });

    // Création de la vue1
    var View1 = Backbone.View.extend({
     render: function() {
       $.ajax({
          type: "GET",
          url: "ete_requete.php",
              })
       .done(function( msg ) {
        $('#par').html( msg );
               });
        }
    });



    var View2 = Backbone.View.extend({
    render: function() {
    $(this.el).html(personne.get('nom1')); } 

    });
   

    // Préparation du routeur
    var jeu_router = Backbone.Router.extend({

    //définir les différents chemins
    routes:{
    "saison/:page":"pageAction", 
    },

    pageAction: function(page) {
      //if(page=="View"){new View({ el: $('#par')}).render();}
      if(page=="View"){
       new View1().render();  
      }
      if(page=="ete"){
        new View2({ el: $('#par')}).render();  

      }
    
        }

        });

    var app = new jeu_router;
    Backbone.history.start();


    // Affichage pris en charge avec JQuery
    //new View({ el: $('#par')}).render();
    
    });

});
