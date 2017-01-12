<?php

	
		include_once('include/database.php');


// On prépare la requette à éxécuter
			if (isset($_POST['nom'])&& isset($_POST['contenu'])&& isset($_POST['date'])){
    $req = $bdd->prepare('UPDATE article SET nom = :nom, contenu = :contenu, date = :date WHERE id = :article_id');


    $req->execute(array(
            'nom' => $_POST['nom'],
            'contenu' => $_POST['contenu'],
            'date' => $_POST['date'],
            'article_id' => $_GET['article_id']
            ));

}

		$query = $bdd->query("SELECT * FROM article WHERE id = ".$_GET['article_id']);

		$article = $query->fetchAll();

		$nom = $article[0]['nom'];
		$contenu = $article[0]['contenu'];
		$date = $article[0]['date'];

	include_once('include/form2.php');
?>