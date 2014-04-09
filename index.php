<!DOCTYPE html>
<html>

<!-- Reste : 
- encodage
- bouton de validation
- l2 a supprimer en gardant l'espace
- générer les vues avec le contenu
-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Javascript -->
     <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script type='text/javascript' src="js/underscore.js"></script>
    <script type='text/javascript' src="js/backbone.js"></script>
    <script type='text/javascript' src="js/fichier.js"></script>
    <script type='text/javascript' src="js/draganddrop.js"></script>
    <script type='text/javascript' src="js/scriptSPA.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />


    <title>Haïku Season Game</title>
  </head>
  <body>

    <!-- DEBUT HEADER -->
    <header>
    
    <h1>Haïku Season Game</h1>

      <section id="intro">
        <p>
        Bonjour petit samouraï, bienvenue dans le Haïku Season Game, afin de devenir un grand haïkiste
        donneur de high-kick poétique, ce jeu va te permettre de réviser tes haïkus préférés. La règle
        est simple, une strophe de Haiku te sera proposée, seulement il manquera un des trois vers, à toi de
        trouver le bon vers correspondant en le choisissant dans les trois vers proposés sur la gauche.
      </p>
      </section>
      <!--<img src="lotus.png">-->
    </header>
    <!-- FIN HEADER -->
    <!-- DEBUT CONTENEUR -->
    <section id="jeu">
      <h2>Trouve le haïku manquant puis médite comme un chat ...</h2>
      <nav>
          <a id="pr" href=" #saison/View">Printemps</a>
          <a id="et" href="#saison/ete">Été</a> 
          <a id="au" href="#saison/automne">Automne</a>
          <a id="hi" href="#saison/hiver">Hiver</a>
      </nav>

    <!-- Printemps-->
       <section  class="printemps" id="validation">


        <article id="jouer">
           <?php 
              include("printemps_requete.php"); 
           ?>        
        </article><!-- FIN jouer-->


        <article id="proposer">
          <?php 
                include("rand_requete_printemps.php"); 
            ?>
        </article> <!-- FIN proposer-->
        <!-- Formulaire -->
        <form>
          <input type='reset' name='raz' value="Annuler" />
          <input type='submit' name='validation' value="Valider" />
        </form>
        <!-- FIN Formulaire -->
    </section> <!-- FIN Printemps-->

      <!-- ETE-->
        <section  class="ete" id="validation">


        <article id="jouer">
           <?php 
              include("ete_requete.php"); 
           ?>        
        </article><!-- FIN jouer-->


        <article id="proposer">
          <?php 
                include("rand_requete.php"); 
            ?>
        </article> <!-- FIN proposer-->
        <!-- Formulaire -->
        <form>
          <input type='reset' name='raz' value="Annuler" />
          <input type='submit' name='validation' value="Valider" />
        </form>
        <!-- FIN Formulaire -->

    </section> 
    <!-- FIN ETE -->

    <!-- Automne -->
            <section  class="automne" id="validation">
        <article id="jouer">
           <?php 
              include("aut_requete.php"); 
           ?>        
        </article><!-- FIN jouer-->


        <article id="proposer">
          <?php 
                include("rand_requete_auto.php"); 
            ?>
        </article> <!-- FIN proposer-->
        <!-- Formulaire -->
        <form>
          <input type='reset' name='raz' value="Annuler" />
          <input type='submit' name='validation' value="Valider" />
        </form>
        <!-- FIN Formulaire -->

    </section> <!-- FIN Automne-->

<!-- Hiver -->
            <section  class="hiver" id="validation">

        <article id="jouer">
           <?php 
              include("hiver_requete.php"); 
           ?>        
        </article><!-- FIN jouer-->


        <article id="proposer">
          <?php 
                include("rand_requete_hiver.php"); 
            ?>
        </article> <!-- FIN proposer-->
        <!-- Formulaire -->
        <form>
          <input type='reset' name='raz' value="Annuler" />
          <input type='submit' name='validation' value="Valider" />
        </form>
        <!-- FIN Formulaire -->

    </section> <!-- FIN Hiver-->

    </section> <!-- FIN Jeu -->

    <footer>
    <p>Made with HTML5, CSS3, et Backbone.js and JQuery. Laetitia Pot, Karim Ennassiri, Loup Cellard. INF04 Master Archinfo.</p>
    </footer>

  </body>
  <!-- FIN BODY-->
</html>
