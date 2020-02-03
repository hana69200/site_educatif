<!Doctype html>

<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
		<link rel="stylesheet" type="text/css" href="cour.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="cour.js"></script>
		<script type="text/javascript" src="fct.js"></script>
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

					<li>
						<img src="carnet.png" id="carnet" alt="carnet" onclick="carnet()"/>
					</li>
				</ul>		
			</nav>	
		</header>
		
		<div id="carnet_ouvert">
			<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
			<div id="matiere_valide">
				<h1>Carnet de liaison</h1>
				<h2>Retrouve ici ton avancé <br>dans le jeu !</h2>
				<h3 id="fr_ok">Français : <span style="color:green">validé</span></h3>
				<h3 id="fr_non">Français : <span style="color:red">pas encore validé</span></h3>
				<h3 id="geo_ok">Géographie : <span style="color:green">validé</span></h3>
				<h3 id="geo_non">Géographie : <span style="color:red">pas encore validé</span></h3>
				<h3 id="hist_ok">Histoire : <span style="color:green">validé</span></h3>
				<h3 id="hist_non">Historie : <span style="color:red">pas encore validé</span></h3>
				<h3 id="ang_ok">Anglais : <span style="color:green">validé</span></h3>
				<h3 id="ang_non">Anglais : <span style="color:red">pas encore validé</span></h3>
				<h3 id="maths_ok">Mathématiques : <span style="color:green">validé</span></h3>
				<h3 id="maths_non">Mathématiques : <span style="color:red">pas encore validé</span></h3>
			</div>
		</div>
		
		<div id="zone_geo">
				<img id="carte" src="Carte.PNG" onclick="carteBateau();">
              <a href="geo3.php"> <img id="bateauCarte" src="carteAvecBateau.PNG"></a>
		</div>
		<div id="zone_francais">
				<a href="francais3.html"><img id="francais" src="erreur_fr.png" onclick="faux()"/></a>
				<p id="correction">TOUS</p>
				<canvas id="fr" height="50" width="100"></canvas>
				</div>
				<div id="puzzle">
				<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Imprime ton image à colorier !</h1>
				<a href="#" onClick="imprime();"><button>IMPRIMER</button></a>
			</div>
			
			<div id="recompense" onclick="afficher_puzzle()"></div>
			<div id="zone_histoire">
				<a href="histoire.php"><img id="cuneiforme" src="cunéiforme.png" onclick="trad()"/>
				<img id="hieroglyphe" src="hiéroglyphe.png" onclick="trad2()"/></a>
				<p id="traduction">= ECOLE</p>
			</div>

			<div id="zone_anglais">
				<a href="mouth.html"><img id="black" src="zone_black.png" onclick="affiche1()"/></a>
				<a href="mouth.html"><img id="grey" src="zone_grey.png" onclick="affiche2()"/></a>
				<a href="mouth.html"><img id="brown" src="zone_brown.png" onclick="affiche3()"/></a>
				<a href="mouth.html"><img id="orange" src="zone_orange.png" onclick="affiche4()"/></a>
				<a href="mouth.html"><img id="yellow" src="zone_yellow.png" onclick="affiche5()"/></a>
				<a href="mouth.html"><img id="green" src="zone_green.png" onclick="affiche6()"/></a>
				<a href="mouth.html"><img id="blue" src="zone_blue.png" onclick="affiche7()"/></a>
				<a href="mouth.html"><img id="purple" src="zone_purple.png" onclick="affiche8()"/></a>
				<a href="mouth.html"><img id="pink" src="zone_pink.png" onclick="affiche9()"/></a>
				<a href="mouth.html"><img id="red" src="zone_red.png" onclick="affiche10()"/></a>
				<p id="color_black">BLACK</p>
				<p id="color_grey">GREY</p>
				<p id="color_brown">BROWN</p>
				<p id="color_orange">ORANGE</p>
				<p id="color_yellow">YELLOW</p>
				<p id="color_green">GREEN</p>
				<p id="color_blue">BLUE</p>
				<p id="color_purple">PURPLE</p>
				<p id="color_pink">PINK</p>
				<p id="color_red">RED</p>
			</div>

				<div id="zone_maths">
					<a class="maths" href="symetrie.html">
						<span class="text-hover">10</span>
						<span class="text-base">?</span>
					</a>
				</div>
				
				<div id="zone_porte">
				<a href="#"><button id="porte">Sors vite !</button></a>
			</div>

		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>