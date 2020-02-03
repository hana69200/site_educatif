<!Doctype html>

<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
		<link rel="stylesheet" type="text/css" href="cour.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script>
			function afficher_corps(){
				document.getElementById('consigne').style.display='none';
				document.getElementById('zone').style.display='flex';
			}

			setTimeout(afficher_corps, 1000);
			
			var xhr = getXMLHttpRequest();
			xhr.open("GET", "reussi_tout3.php?", true);
			xhr.send(null);
			xhr.onreadystatechange = function(){
				if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
					// alert(xhr.responseText); //affiche ce que retourne le php
					var recupere_php = xhr.responseText;// met le résultat de php dans recupere_php
					var reussi_total = new Array(5);// on créer un tableau vide de 5 valeurs
					var j = 0;
					for(i=2;i<recupere_php.length;i=i+4){ //on ajoute les caratères de la chaine correpsondant au numero dans reussi_total
						reussi_total[j]=recupere_php[i];
						// alert(reussi_total[j]); // on test si les valeurs afficher sont les bonnes et si le tableau est bien rempli
						j+=1;
					}
					if(reussi_total[0]==1){
						document.getElementById("zone_francais").style.visibility='hidden';
						document.getElementById("fr_non").style.display='none';
						document.getElementById("fr_ok").style.display='block';
					}
					if(reussi_total[1]==1){
						document.getElementById("zone_maths").style.visibility='hidden';
						document.getElementById("maths_non").style.display='none';
						document.getElementById("maths_ok").style.display='block';
					}
					if(reussi_total[2]==1){
						document.getElementById("zone_anglais").style.visibility='hidden';
						document.getElementById("ang_non").style.display='none';
						document.getElementById("ang_ok").style.display='block';
					}
					if(reussi_total[3]==1){
						document.getElementById("zone_histoire").style.visibility='hidden';
						document.getElementById("hist_non").style.display='none';
						document.getElementById("hist_ok").style.display='block';
					}
					if(reussi_total[4]==1){
						document.getElementById("zone_geo").style.visibility='hidden';
						document.getElementById("geo_non").style.display='none';
						document.getElementById("geo_ok").style.display='block';
					}
					if(reussi_total[0]==1 && reussi_total[1]==1 && reussi_total[2]==1 && reussi_total[3]==1 && reussi_total[4]==1){
						document.getElementById("zone_porte").style.display='block';
						document.getElementById("recompense").style.display='block';
					}
				}
			}
			
			function carnet(){
				document.getElementById("carnet_ouvert").style.display='block';
				document.getElementById("zone").style.display='none';
			}
			
			function afficher_puzzle(){
				document.getElementById("recompense").style.display='none';
				document.getElementById("puzzle").style.display='block';
				document.getElementById("zone_porte").style.display='none';
			}
			
			function imprime(){
				window.open("jeu_de_loie.jpg");
				window.print('image');
			}
		</script>
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
		
		<div id="consigne">
			<h1>Trouve où sont cachés les exercices !</h1>
		</div>
		
		<div id="zone">
			<div id="zone_francais" 
			onmouseover="document.getElementById('francais').style.visibility='visible';"
			onmouseout="document.getElementById('francais').style.visibility='hidden';">
				<button id="francais"><a href="francais3.html">Par LA !</a></button>
			</div>
			
			<div id="puzzle">
				<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Imprime ton image à colorier !</h1>
				<a href="#" onClick="imprime();"><button>IMPRIMER</button></a>
			</div>
			
			<div id="recompense" onclick="afficher_puzzle()"></div>
			
			
			<div id="zone_hist_math_geo">
				
				
				<div id="zone_histoire" 
				onmouseover="document.getElementById('histoire').style.visibility='visible';"
				onmouseout="document.getElementById('histoire').style.visibility='hidden';">
					<button id="histoire"><a href="histoire.html">Par LA !</a></button>
				</div>
				
				<div id="zone_maths">
					<a href="symetrie.html">
						<span class="text-hover">1 2 3</span>
						<span class="text-base">? ? ?</span>
					</a>
				</div>
				
				<div id="zone_geo">
					<a href="geo3.php">
						salut
					</a>
				</div>
			</div>
			
			<div id="zone_anglais">
				<a href="mouth.html">
					coucou
				</a>
			</div>
			
			<div id="zone_porte">
				<a href="#"><button id="porte">Sors vite !</button></a>
			</div>
		</div>

		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>