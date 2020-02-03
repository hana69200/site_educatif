<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script type="text/javascript">
			var i_ang =0;
			function maFonction1()
			{
				alert("Juste!!");
				i_ang=i_ang+1;
				reussi_anglais();
			}
			function maFonction2()
			{
				alert("Faux");
			}
			function maFonction4(){
				alert("faux");
			}
			function maFonction5()
			{
				alert("Faux");
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
			
			function reussi_anglais(){
				if(i_ang==1)
				{
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle3_bd.php?i_ang", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('index.php');",1000);
				}
			}
		</script>
		<style>
			.corps{
				width: 300px;
				height:400px;
			}
			#corps{
				padding-bottom:200px;
			}
			.cheveux
			{
				position:absolute;
				/* width:30px; */
				/* height:20px; */
				width:6.6%;
				z-index:2;
				right:753px;
				bottom:638px;
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
				<a href="anglais_nature1.html" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Aide</h1>
				<h2>Ceci est la page d'aide si tu as des difficultés.</h2>
				
			</div>
			
			<div id="presentation">
				<h1>Anglais</h1>
				<h2>Ecoute n°7</h2>
			</div>
			
			<div id="corps">
				<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1> Jeu anglais </h1>
				<p> Cliquer sur le son et écouter attentivement <br> Choisisser l'image qui correspond à ce vous avez entendus </p>
				<audio controls src="cheveux.mp3" >Your browser does not support the <code>audio</code> element.</audio>
				<section id="slider">
					<img src="corpsHumain2.png" class="corps" alt="slider" onclick="maFonction2();"/>
					<!-- partie sur les cheveux -->
					<img src="cheveux.PNG" class="cheveux" onclick="maFonction1()" >
				</section>
			</div>
		</main>
		<footer>Créé par Wissale Jerraf, Hana Ben Hamida, Sophie Vak Sam, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>