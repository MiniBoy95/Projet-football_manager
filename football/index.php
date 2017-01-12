<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php

		include_once('include/database.php');

		$query = $bdd->query("SELECT * FROM equipe");
	
		$equipe = $query->fetchAll();


?>
<?php foreach ($equipe as $equipe): ?>


	<div>

	<h1 id="id" class="carre">ID : <?= $a'equ_id'] ?></h1>

	<h1 id="nom">Nom de l'equipe : <?= $equipe['equ_nom'] ?></h1>

	<p id="contenu">Budget : <?= $equipe['equ_budget'] ?></p>

	<a href="edition.php?article_id=<?= $article['id'] ?>" id="lien">Modifier</a>

	</div>
	<br>

<?php endforeach; ?>

</body>
</html>
