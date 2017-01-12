<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php

		include_once('include/database.php');

		$query = $bdd->query("SELECT * FROM article");
	
		$article = $query->fetchAll();


?>
<?php foreach ($article as $article): ?>


	<div>

	<h1 id="id" class="carre">ID : <?= $article['id'] ?></h1>

	<time id="date">Date : <?= $article['date'] ?></time>

	<h1 id="nom">Nom de l'article : <?= $article['nom'] ?></h1>

	<p id="contenu">Contenu : <?= $article['contenu'] ?></p>

	<a href="edition.php?article_id=<?= $article['id'] ?>" id="lien">Modifier</a>

	</div>
	<br>

<?php endforeach; ?>

</body>
</html>
