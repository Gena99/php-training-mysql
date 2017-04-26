<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	$dsn = 'mysql:dbname=reunion_island;host=localhost';
	$user = 'root';
	$password = 'root';
	/*
	if (isset($_POST['name']) && isset($_POST['difficulty']) && isset($_POST['distance']) && isset($_POST['duration']) && isset($_POST['height_difference']) ) {
	}
	*/
	echo 'ok....';
	try {
		$connexion = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
	$requestInsersion = "INSERT INTO `reunion_island`.`hiking` 
	(`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`)
	VALUES (null, '".$_POST['name']."', '".$_POST['difficulty']."', ".$_POST['distance'].", '".$_POST['duration']."', ".$_POST['height_difference'].");";
	echo $requestInsersion;
	$result = $connexion->query($requestInsersion);


	
}




?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
