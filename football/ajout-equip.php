<?php

		include_once('include/equip-ajout.php');

		include_once('include/database.php');
        // On prépare la requette à éxécuter 

			if (isset($_GET['equ_nom'])&& isset($_GET['equ_budget'])){
    $req = $bdd->prepare('INSERT INTO equipe(equ_nom, equ_budget) VALUES (:equ_nom, :equ_budget)');

        // On éxécute la requette d'insertion et on y injecte les données qu'on veut ajouter
    

    $req->execute(array(
            'equ_nom' => $_GET['equ_nom'],
            'equ_budget' => $_GET['equ_budget'],
            ));
}
?>