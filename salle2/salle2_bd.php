<?php
require_once('connexion.php');
header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 

if (isset($_GET["i_fr"])) {
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("update salle2 set francais='1'"); // requête SQL
	$query->execute(); // paramètres et exécution
	$query->closeCursor();
}
else if(isset($_GET["i_ang"])){
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("update salle2 set anglais='1'"); // requête SQL
	$query->execute(); // paramètres et exécution
	$query->closeCursor();
}else if(isset($_GET["i_geo"])){
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("update salle2 set geo='1'"); // requête SQL
	$query->execute(); // paramètres et exécution
	$query->closeCursor();
}else if(isset($_GET["i_hist"])){
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("update salle2 set histoire='1'"); // requête SQL
	$query->execute(); // paramètres et exécution
	$query->closeCursor();
}else if(isset($_GET["i_maths"])){
	$bdd = connectDb(); //connexion à la BDD
	$query = $bdd->prepare("update salle2 set maths='1'"); // requête SQL
	$query->execute(); // paramètres et exécution
	$query->closeCursor();
}
?>