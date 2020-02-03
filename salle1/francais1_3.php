  <!Doctype html>

<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script type="text/javascript">
			function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

			setTimeout(afficher_corps, 1000);

			var i_fr=0;
			function change(id)
				{
					id.style.backgroundColor="green";
					i_fr=i_fr+1;
					reussi_francais();
				}
			function mauvais(id)
			{
				id.style.backgroundColor="red";
				}
			function reussi_francais()
			{
				if(i_fr==5)
				{
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle1.php?i_fr", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('classe.php');", 1000);
				}
			}
			
			</script>
		<script type="text/javascript" src="reussi.js"></script>
	</head>

	<body>
		<header>
			<nav>
				<ul>
					<li>
						<a href="">Accueil</a>
					</li>		
							
					<li class=nous>
						<a href="">A propos de nous</a>
						<ul class="niveau3">
							<li> <a href="nous.html">Effectif</a></li>
							<li> <a href="">Le Projet</a></li>
						</ul>
					</li>

					<li>
						<a href="">Contactez-nous</a>
					</li>
				</ul>
				
			</nav>	
		</header>

		<main>
			<div id="presentation">
				<h1>Français</h1>
				<h2>Problème n°3</h2>
			</div>
			
			<div id="corps">
				<a href="classe.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<div id="Probleme">
					<h1> Problème n°3</h1>
						<p>Corrige les mots en italique !</p>
						
						
						Moi j'aime l'<em>otomne</em>
						<ul>
							<input type="button" name="student_code"  id="no1" value="otone" onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nop1" value='auttomne' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="oui1" value='autone' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nien1" value='automne' onclick='change(this);'>
						</ul>
						Les <em>pheuiles</em> de toutes les couleurs tombent
						<ul>
							<input type="button" name="student_code"  id="no1" value="feuilles" onclick='change(this);'>
							<input type="button" name ="student_code"  id="nop1" value='feuiles' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="oui1" value='feullies' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nien1" value='feilles' onclick='mauvais(this);'>
						</ul>
						Les fourmis finissent leurs <em>provizions</em>
						<ul>
							<input type="button" name ="student_code"  id="nop1" value='provitions' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="oui1" value='preauvisions' onclick='mauvais(this);'>
							<input type="button" name="student_code"  id="no1" value="provisions" onclick='change(this);'>
							<input type="button" name ="student_code"  id="nien1" value='prauvisions' onclick='mauvais(this);'>
						</ul>
						Le soleil s'endort pour un long Hiver
						C'est aussi la <em>cézon</em> de la rentrée des classes
						<ul>
							<input type="button" name="student_code"  id="no1" value="céson" onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nop1" value='séson' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="oui1" value='saison' onclick='change(this);'>
						</ul>
						Mais maintenant c'est l'<em>iver</em>.
						<ul>
							<input type="button" name="student_code"  id="no1" value="hyver" onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nop1" value='hiver' onclick='change(this);'>
							<input type="button" name ="student_code"  id="oui1" value='iverre' onclick='mauvais(this);'>
							<input type="button" name ="student_code"  id="nien1" value='hivere' onclick='mauvais(this);'>
						</ul>

						Alicia Chocolat
						<!--http://www.takatrouver.net/poesie/?id=6041-->

				</div>
			</div>
		</main>
		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere</footer>
	</body>
</html>