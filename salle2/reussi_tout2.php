<?php
	require_once('connexion.php');
	header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).

	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("select francais from salle2"); // requête SQL
	$query->execute(); // paramètres et exécution
	while($fr = $query->fetch()){
		$francais = $fr['francais'];
	}
	$query->closeCursor();



	
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("select geo from salle2"); // requête SQL
	$query->execute(); // paramètres et exécution
	while($geo = $query->fetch()){
		$geographie = $geo['geo'];
	}
	$query->closeCursor();





	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("select histoire from salle2"); // requête SQL
	$query->execute(); // paramètres et exécution
	while($hist = $query->fetch()){
		$histoire = $hist['histoire'];
	}
	$query->closeCursor();




	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("select anglais from salle2"); // requête SQL
	$query->execute(); // paramètres et exécution
	while($ang = $query->fetch()){
		$anglais = $ang['anglais'];
	}
	$query->closeCursor();



	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("select maths from salle2"); // requête SQL
	$query->execute(); // paramètres et exécution
	while($maths = $query->fetch()){
		$mathematique = $maths['maths'];
	}
	$query->closeCursor();
	
	$array = array($francais,$mathematique,$anglais,$histoire,$geographie);
	echo json_encode($array);
?>