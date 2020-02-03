<!Doctype html>

<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total.css" />
		<link rel="stylesheet" type="text/css" href="classe.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script>
			/*-----animation drapeau----*/
			window.onload = function waving(){
				var flag = document.getElementById('flag');
				drawFlag( flag, 320, 0, 40 );
				flag.style.marginLeft = -(flag.width/2)+'px';
				flag.style.marginTop  = -(flag.height/2)+'px';
				flag.onmouseover = function() {
					waveFlag(flag, 20, 10, 150, 200, -0.1)
				};
			} 

			function drawFlag( canvas, width, padX, padY ){
				if (!padX) padX = 0;
				if (!padY) padY = 0;
				
				var a = width / 1.9;
				var b = width;
				var c = 7*a/13;
				var d = 0.76*a;
				var e = 0.054*a;
				var g = 0.063*a;
				var k = 0.0616*a;
				var l = a / 13;
				canvas.width  = b+2*padX;
				canvas.height = a+2*padY;
				var ctx = canvas.getContext('2d');
					
				// Stripes
				ctx.fillStyle = "#00008B";
				ctx.fillRect(5,15,80,15);
				ctx.fillStyle = "#FFFFFF";
				ctx.fillRect(5,30,80,10);
				ctx.fillStyle = "#FF0000";
				ctx.fillRect(5,33,80,10);
				ctx.fillStyle = "#FFFFFF";
				ctx.fillRect(5,43,80,10);
				ctx.fillStyle = "#00008B";
				ctx.fillRect(5,47,80,15);
					 
				// Vertical stripes
				ctx.strokeStyle = '#FF0000';
				ctx.moveTo(45,15);
				ctx.lineTo(45,63);
				ctx.lineWidth = 10;
				ctx.stroke();

				// Vertical 
				ctx.beginPath();
				ctx.strokeStyle = '#FFFFFF';
				ctx.moveTo(38,15);
				ctx.lineTo(38,33);
				ctx.lineWidth = 4;
				ctx.stroke();
			  
				ctx.moveTo(50,15);
				ctx.lineTo(50,33);
				ctx.lineWidth = 4;
				ctx.stroke();
				
				ctx.moveTo(38,43);
				ctx.lineTo(38,63);
				ctx.lineWidth = 4;
				ctx.stroke();
				
				ctx.moveTo(50,43);
				ctx.lineTo(50,63);
				ctx.lineWidth = 4;
				ctx.stroke();
				
				
				//Diagonales blanches
				ctx.beginPath();
				ctx.lineWidth = 7;
				ctx.strokeStyle = '#FFFFFF';
				ctx.moveTo(38,29);
				ctx.lineTo(5,16);
				ctx.stroke();
				
				ctx.lineWidth = 7;
				ctx.moveTo(86,60);
				ctx.lineTo(50,46);
				ctx.stroke();
				
				ctx.lineWidth = 7;
				ctx.moveTo(86,15);
				ctx.lineTo(50,30);
				ctx.stroke();
				
				ctx.lineWidth = 7;
				ctx.moveTo(38,47);
				ctx.lineTo(5,60);
				ctx.stroke();
				
				//Diagonales rouges
				ctx.beginPath();
				ctx.lineWidth = 1.5;
				ctx.strokeStyle = '#FF0000';
				ctx.moveTo(38,29);
				ctx.lineTo(5,16);
				ctx.stroke();
				
				ctx.lineWidth = 1.5;
				ctx.moveTo(86,60);
				ctx.lineTo(50,46);
				ctx.stroke();
				
				ctx.lineWidth = 1.5;
				ctx.moveTo(86,15);
				ctx.lineTo(50,30);
				ctx.stroke();
				
				ctx.lineWidth = 1.5;
				ctx.moveTo(38,47);
				ctx.lineTo(5,60);
				ctx.stroke();
			}

			function waveFlag(canvas, wavelength, amplitude, period, shading, squeeze) {
				if (!squeeze)    squeeze    = 0;
				if (!shading)    shading    = 100;
				if (!period)     period     = 200;
				if (!amplitude)  amplitude  = 10;
				if (!wavelength) wavelength = canvas.width/10;

				var fps = 30;
				var ctx = canvas.getContext('2d');
				var   w = canvas.width, h = canvas.height;
				var  od = ctx.getImageData(0,0,w,h).data;
				// var ct = 0, st=new Date;
				return setInterval(function(){
					var id = ctx.getImageData(0,0,w,h);
					var  d = id.data;
					var now = (new Date)/period;
					for (var y=0;y<h;++y){
						var lastO=0,shade=0;
						var sq = (y-h/2)*squeeze;
						for (var x=0;x<w;++x){
							var px  = (y*w + x)*4;
							var pct = x/w;
							var o   = Math.sin(x/wavelength-now)*amplitude*pct;
							var y2  = y + (o+sq*pct)<<0;
							var opx = (y2*w + x)*4;
							shade = (o-lastO)*shading;
							d[px  ] = od[opx  ]+shade;
							d[px+1] = od[opx+1]+shade;
							d[px+2] = od[opx+2]+shade;
							d[px+3] = od[opx+3];
							lastO = o;
						}
					}
					ctx.putImageData(id,0,0);		
					// if ((++ct)%100 == 0) console.log( 1000 * ct / (new Date - st));
				},1000/fps);
			}
			
			function animActive(){
				balle.style.animation = "5s linear 0s normal none 15 bouncing";
			}

			function afficher_corps(){
				document.getElementById('consigne').style.display='none';
				document.getElementById('zone').style.display='flex';
			}

			setTimeout(afficher_corps, 1000);
			
			var xhr = getXMLHttpRequest();
			xhr.open("GET", "reussi_tout1.php?", true);
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
						document.getElementById("book-box").style.visibility='hidden';
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
						document.getElementById("container").style.visibility='hidden';
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
				window.open("coloriage_minion.PNG");
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
			<a href="classe.php" id="croix"><img src="croix.png" alt="croix"/></a>
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
			<div id="recompense" onclick="afficher_puzzle()"></div>
			<div id="book-box">
				<div class="book-cover">
					<a href="francais1.html">
						<figure class="front"></figure>
						<figure class="back"></figure>
					</a>
				</div>
			</div>
			
			<div id="puzzle">
				<a href="classe.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Imprime ton image à colorier !</h1>
				<a href="#" onClick="imprime();"><button>IMPRIMER</button></a>
			</div>
			
			<div id="zone_hist_math_geo">

				<a href="hist.php"><div id="container" onclick="animActive()">
					<div id="balle"></div>
				</div></a>
				
				<div id="zone_maths">
					<a href="Maths.html">
						<span class="text-hover">1 2 3</span>
						<span class="text-base">? ? ?</span>
					</a>
				</div>
				
				<div id="zone_geo">
					<a href="geo1.php">
						<figure class="ball"></figure>
					</a>
				</div>
			</div>
			
			<div id="zone_anglais">
				<a href="anglais_color.html">
					<canvas id="flag"></canvas>
				</a>
			</div>

			<div id="zone_porte">
				<a href="salle2/bibliotheque.php"><button id="porte">Sors vite !</button></a>
			</div>
		</div>

		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>