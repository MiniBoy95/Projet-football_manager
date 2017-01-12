<?php

		include_once('include/equip-ajout.php');

		include_once('include/database.php');
        // On prépare la requette à éxécuter 

        $pdoStat = $bdd->prepare('INSERT INTO equip VALUE ( :equ_nom, :equ_budget)')

        $pdoStat->bindValue(':equ_nom', $_POST['equi_nom'], PDO::PARAM_STR);

         $pdoStat->bindValue(':equ_budget', $_POST['equi_budget'], PDO::PARAM_STR);

         //éxécution de la requête préparée

         $pdoStat->execute();
?>
    
