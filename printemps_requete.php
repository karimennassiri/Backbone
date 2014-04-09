<?php 

    $connexion = new PDO("mysql:host=localhost;dbname=haikus","root", "root"); // connexion à la BDD

    $requette=$connexion->query("SELECT * from haikuAuteurId where saison='printemps' order by RAND() limit 1 "); //Requêtte pour extraire les haikus de l'été. 

    $requette->setFetchMode(PDO::FETCH_OBJ);
    while($resultat = $requette->fetch()){
        echo '<ul>';
        echo '<li id="ete1">'.$resultat->l1.'</li>';
        echo '<li id="ete2" ondrop="drop(event)" ondragover="allowDrop(event)" >'.$resultat->l2.'</li>';
        echo '<li id="ete3">'.$resultat->l3.'</li>';
        echo '</ul>';

        $_SESSION['testprintemps']= $resultat->l2;

    }

      $requette->closeCursor();
     ?>
