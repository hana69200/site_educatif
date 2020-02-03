<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total2.css"/>
		<link rel="stylesheet" type="text/css" href="bibliotheque.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="bibliotheque.js"></script>
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
				<a href="bibliotheque.php" id="croix"><img src="croix.png" alt="croix"/></a>
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
		
		<div id="zone">
			<div id="zone_francais"
			onmouseover="document.getElementById('francais').style.visibility='visible';"
			onmouseout="document.getElementById('francais').style.visibility='hidden';">
				<a href="francais2.html">
					<canvas id="flag1"></canvas>
				</a>
			</div>
				
			<div id="zone_maths">
				<a href="coloriage.php">
					<p class="maths1">+
						<span class="text-hover1">8</span>
						<span class="text-base1">?</span>
					</p>
					<p class="maths2">-
						<span class="text-hover2">3</span>
						<span class="text-base2">?</span>
					</p>
					<p class="maths3">×
						<span class="text-hover3">8</span>
						<span class="text-base3">?</span>
					</p>
				</a>
			</div>
				
			<div id="zone_histoire">
				<a href="histoire.php">
					<img id="pre1" src="prehistoire1.png"/>
					<img id="pre2" src="prehistoire2.png"/>
					<img id="gaule" src="vercingetorix.png"/>
					<img id="rome" src="cesar.png"/>
					<img id="moyen" src="moyenage.png"/>
					<img id="roi" src="louisXIV.png"/>
					<img id="napoleon" src="napoleon.png"/>
					<img id="revolt" src="revolution_fr.png"/>
					<img id="guerre" src="guerre.png"/>
					<img id="mur" src="berlin.png"/>
				</a>
			</div>
			
			<div id="porte">
				<a href="salle3/index.php"><button>Sors vite !</button></a>
			</div>
			
			<div id="zone_geo">	
				<div class="book-box">
					<a href="geo2.php">
						<div class="book-cover">
							<figure class="front"></figure>
							<figure class="back"></figure>
						</div>
					</a>
				</div>
			</div>
			
			<div id="zone_anglais">
				<a href="anglais_nature1.html">
					<canvas id="flag"></canvas>
					<script type="text/javascript" src="bibliotheque.js"></script>
				</a>
			</div>
		</div>
		<div id="puzzle">
			<a href="bibliotheque.php" id="croix"><img src="croix.png" alt="croix"/></a>
			<iframe id="center" src="puzzle.html" height="380" width="620" name="center"></iframe>
			<p>Cliquez sur l'image pour lancer le Puzzle!!</p>
			
		</div>
		
		<div id="recompense" onclick="afficher_puzzle()"></div>

		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>