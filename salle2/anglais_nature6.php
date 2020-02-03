<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total2.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<style>
			#rep_anglais li{
				display:inline;
				padding:10px;
			}
		</style>
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
							<li> <a href="">Effectif</a></li>
							<li> <a href="">Le Projet</a></li>
						</ul>
					</li>

					<li>
						<a href="">Contactez-nous</a>
					</li>

					<li id="aide" onclick="afficher_table_aide()">
						<img src="aide.png" alt="bouton d'aide"/>
					</li>					
				</ul>		
			</nav>	
		</header>
		
		<main>
			<div id="helping">
				<a href="anglais_nature6.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Aide</h1>
				<h2>Ceci est la page d'aide si tu as des difficultés.</h2>
				<ul>
					<li><img src="arbre.png" alt="tree"/><p>Tree</p></li>
					<li><img src="sol.png" alt="ground"/><p>Ground</p></li>
					<li><img src="ciel.png" alt="sky"/><p>Sky</p></li>
					<li><img src="fleurs.png" alt="flower"/><p>Flower</p></li>
					<li><img src="lumiere.png" alt="light"/><p>Light</p></li>
					<li><img src="eau.png" alt="water"/><p>Water</p></li>
				</ul>
			</div>
			
			<div id="presentation">
				<h1>Anglais</h1>
				<h2>Ecoute n°6</h2>
			</div>
			
			<div id="corps">
				<a href="bibliotheque.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1> Jeu anglais </h1>
				<p> Cliquer sur le son et écouter attentivement <br> Choisisser l'image qui correspond à ce vous avez entendus </p>
				<audio controls src="water.mp4">Salut</audio>
				<ul id="rep_anglais">
					<li>
						<input type="radio" id="oui" onclick="verification()">
						<img src="eau.png" alt="water"/>
					</li>
					<li>
						<input type="radio" id="non" onclick="verification()">
						<img src="arbre.png" alt="tree"/>
					</li>
					
					<li>
						<input type="radio" id="nop" onclick="verification()">
						<img src="sol.png" alt="ground"/>
					</li>
	
					<li>
						<input type="radio" id="no" onclick="verification()">
						<img src="fleurs.png" alt="flower"/>
					</li>
				</ul>
			</div>
		</main>

		<footer>Créé par Wissale Jerraf, Hana Ben Hamida, Sophie Vak Sam, Roxane Marchand & Emilie Arquilliere </footer>
		<script type="text/javascript">
			var i_ang =0;
			function verification () {
				var CB = document.getElementById("oui");
				var CBA = document.getElementById("non");
				var CBB = document.getElementById("nop");
				var CBC = document.getElementById("no");
				
				
				if(CB.checked){
					alert("c'est la bonne reponse!");
					i_ang=i_ang+1;
				}
				else{
					alert("raté");
				}
				reussi();
			}

			function afficher_aide(){
				document.getElementById('aide').style.display='block';
			}

			setTimeout(afficher_aide, 15000);
			
			function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

			setTimeout(afficher_corps, 1000);

			function afficher_table_aide(){
				document.getElementById('corps').style.display='none';
				document.getElementById('helping').style.display='block';
			}
			
			function reussi(){
				if(i_ang==1)
				{
					alert('Tu as réussis !');
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle2_bd.php?i_ang", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('bibliotheque.php');",1000);
				}
			}
		</script>
	</body>
</html>