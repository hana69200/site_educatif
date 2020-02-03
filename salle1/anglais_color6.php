<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<style>
			#rep_anglais li{
				display:inline;
				padding:10px;
			}
		</style>
		<script type="text/javascript">
			function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

			setTimeout(afficher_corps, 1000);
			
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
				else if (CBA.checked || CBB.checked || CBC.checked){
					alert("Désolé continuez à rechercher");
				}
				else{
					alert("Vous n'avez rien sélectionner");
				}
				reussi_anglais();
			}

			function afficher_aide(){
				document.getElementById('aide').style.display='block';
			}

			setTimeout(afficher_aide, 15000);

			function afficher_table_aide(){
				document.getElementById('corps').style.display='none';
				document.getElementById('helping').style.display='block';
			}
			
			function reussi_anglais(){
				if(i_ang==1)
				{
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle1_bd.php?i_ang", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('classe.php');",1000);
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
			<a href="anglais_color.html" id="croix"><img src="croix.png" alt="croix"/></a>
			<h1>Aide</h1>
			<h2>Ceci est la page d'aide si tu as des difficultés.</h2>
			<ul>
				<li><img src="red.png" alt="red"/><p>Red</p></li>
				<li><img src="orange.png" alt="red"/><p>Orange</p></li>
				<li><img src="yellow.png" alt="red"/><p>Yellow</p></li>
				<li><img src="green.png" alt="red"/><p>Green</p></li>
				<li><img src="blue.png" alt="red"/><p>Blue</p></li>
				<li><img src="purple.png" alt="red"/><p>Purple</p></li>
				<li><img src="pink.png" alt="red"/><p>Pink</p></li>
				<li><img src="brown.png" alt="red"/><p>Brown</p></li>
				<li><img src="white.png" alt="red"/><p>White</p></li>
				<li><img src="grey.png" alt="red"/><p>Grey</p></li>
				<li><img src="silver.png" alt="red"/><p>Silver</p></li>
				<li><img src="black.png" alt="red"/><p>Black</p></li>
			</ul>
		</div>
		
		<div id="presentation">
			<h1>Anglais</h1>
			<h2>Ecoute n°6</h2>
		</div>
		
			<div id="corps">
				<a href="classe.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1> Anglais Ecoute n°6 </h1>

				<p> Cliquer sur le son et écouter attentivement <br> Choisisser l'image qui correspond à ce vous avez entendus </p>
				<audio controls src="black.mp3">Salut</audio>
				<ul id="rep_anglais">
					<li>
						<input type="radio" id="non" onclick="verification()">
						<img src="yellow.png" alt="yellow"/>
					</li>
					
					<li>
						<input type="radio" id="nien" onclick="verification()">
						<img src="blue.png" alt="blue"/>
					</li>
					
					<li>
						<input type="radio" id="nop" onclick="verification()">
						<img src="pink.png" alt="pink"/>
					</li>
							
					<li>
						<input type="radio" id="oui" onclick="verification()">
						<img src="black.png" alt="black"/>
					</li>
				</ul>
			</div>
		</main>

		<footer>Créé par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>