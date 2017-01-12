<?php

		include_once('include/form.php');


		include_once('include/database.php');
        // On prépare la requette à éxécuter 

			if (isset($_GET['nom'])&& isset($_GET['contenu'])&& isset($_GET['date'])){
    $req = $bdd->prepare('INSERT INTO article(nom, contenu, date) VALUES (:nom, :contenu, :date)');

        // On éxécute la requette d'insertion et on y injecte les données qu'on veut ajouter
    

    $req->execute(array(
            'nom' => $_GET['nom'],
            'contenu' => $_GET['contenu'],
            'date' => $_GET['date']
            ));
}
?>