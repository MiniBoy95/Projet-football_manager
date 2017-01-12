<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center><h1>Modifier un article</h1></center>
<center><form action="" method="post">
	<label for="text" id="titre">Titre de l'article</label>
	<br>
	<br>
	<input type ="text" name="nom" placeholder="Nom" value="<?php echo $nom; ?>">
	<br>
	<input type ="hidden" name="article_id" value="'.$article['id'].'">
	<br>
	<br>
	<label for="text">Contenu</label>
	<br>
	<br>
	<textarea name="contenu" rows="2" cols="30" placeholder="contenu">
		<?php echo $contenu; ?>
	</textarea>
	<br>
	<br>
	<label for="text">Date</label>
	<br>
	<br>
	<input type="text" name="date" placeholder="Date" value="<?php echo $date; ?>">
	<br>
	<br>
	<input type="submit" name="Valider">
	<br>
	<br>
</form>
</form>
<br>
</form></center>
<center>
<form method="link" action="http://localhost:8080/bdd/ajout.php"> <input type="submit" value="Retour">
</form></center>
<br>
<br>
<center>
<form method="link" action="http://localhost:8080/bdd/index.php"> <input type="submit" value="Resultat">
</form></center>
</body>
</html>