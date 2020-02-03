<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<style>
			#corps{
				flex-direction:column;
				background-color: RGBa(0, 0, 0, 0.7);
				color: white;
				margin-left:auto;
				margin-right:auto;
				width:75%;
				height:50%;
				margin-top:4vh;
				text-align:center;
			}

			#presentation{
				background-color: RGBa(0, 0, 0, 0.7);
				color: white;
				margin-left:auto;
				margin-right:auto;
				margin-top:35vh;
				padding:20px;
				width:75%;
				height:50%;
				text-align:center;
			}

			.mot{
				margin-left: auto;
				margin-right: auto;
				margin-top: 20px;
			}

				
			.total{
				display: flex;
				margin-top:15px;
				margin-bottom:20px;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
				padding: 60px;
				border-radius:0.5em;
			}

			.total img{width:150px;height: 175px;}

			.gauche{}

			#div1,#div2,#div3,#div4,#div5,#div6,#div7,#div8{ 
				float:left;
				width: 100px;
				height: 35px;
				margin: 10px;
				border: 1px solid black;
				background-color:white;
			}

			#div9,#div10,#div11,#div12,#div13,#div14,#div15,#div16,#div17{
				width: 100px;
				height: 40px;
				margin: 10px;
				padding: 10px;
				text-align: center;
				border: 1px solid black;
				background-color:white;
			}

			#btn_replay{
				display:none;
				margin-left:auto;
				margin-right:auto;
				padding:5px;
				border-radius:0.5em;
				background-color:rgba(255,255,244,0.9);
				margin-bottom:10px;
			}
			#drag1,#drag2,#drag3,#drag4,#drag5,#drag6,#drag7,#drag8{
				width: 99px;
				height: 34px;
			}
			#helping{
				background-color: RGBa(0, 0, 0, 0.7);
				color: white;
				margin-left:auto;
				margin-right:auto;
				margin-top:35vh;
				padding:20px;
				width:75%;
				height:50%;
				text-align:center;
			}
			#aide_gaulois{
				height: 350px;
				width: 500px;
			}
		</style>
		<script>
			function afficher_corps(){
			document.getElementById('presentation').style.display='none';
			document.getElementById('corps').style.display='flex';
			}

			setTimeout(afficher_corps, 1000);

			var i_hist=0;
			var j = 0;
			function allowDrop(ev) {
			ev.preventDefault();
			ev.stopPropagation();
			}

			function drag(ev) {
			ev.dataTransfer.setData("image", ev.target.id);
			}

			function drop1(ev){
			ev.preventDefault();
			var drop1 = document.getElementById("div10").innerHTML;
			var drp1 = ev.target.getAttribute('data-allowed');
			if(drop1==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp1==data){
				document.getElementById('div10').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div10').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop2(ev){
			ev.preventDefault();
			var drop2 = document.getElementById("div11").innerHTML;
			var drp2 = ev.target.getAttribute('data-allowed');
			if(drop2==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp2==data){
				document.getElementById('div11').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div11').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop3(ev){
			ev.preventDefault();
			var drop3 = document.getElementById("div12").innerHTML;
			var drp3 = ev.target.getAttribute('data-allowed');
			if(drop3==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp3==data){
				document.getElementById('div12').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div12').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop4(ev){
			ev.preventDefault();
			var drop4 = document.getElementById("div13").innerHTML;
			var drp4 = ev.target.getAttribute('data-allowed');
			if(drop4==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp4==data){
				document.getElementById('div13').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div13').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop5(ev){
			ev.preventDefault();
			var drop5 = document.getElementById("div14").innerHTML;
			var drp5 = ev.target.getAttribute('data-allowed');
			if(drop5==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp5==data){
				document.getElementById('div14').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div14').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop6(ev){
			ev.preventDefault();
			var drop6 = document.getElementById("div15").innerHTML;
			var drp6 = ev.target.getAttribute('data-allowed');
			if(drop6==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp6==data){
				document.getElementById('div15').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div15').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop7(ev){
			ev.preventDefault();
			var drop7 = document.getElementById("div16").innerHTML;
			var drp7 = ev.target.getAttribute('data-allowed');
			if(drop7==""){
			var data = ev.dataTransfer.getData("image", ev.target.id);
			ev.stopPropagation();
			ev.target.appendChild(document.getElementById(data));
			j=j+1;
			if(drp7==data){
				document.getElementById('div16').style.border="3px solid green";
				i_hist=i_hist+1;
			}
			else{
				document.getElementById('div16').style.border="3px solid red";
			}
			}
			reussi_hist();
			}

			function drop8(ev){
				ev.preventDefault();
				var drop8 = document.getElementById("div17").innerHTML;
				var drp8 = ev.target.getAttribute('data-allowed');
				if(drop8==""){
				var data = ev.dataTransfer.getData("image", ev.target.id);
				ev.stopPropagation();
				ev.target.appendChild(document.getElementById(data));
				j=j+1;
				if(drp8==data){
					document.getElementById('div17').style.border="3px solid green";
					i_hist=i_hist+1;
				}
				else{
					document.getElementById('div17').style.border="3px solid red";
				}
				}
				reussi_hist();
			}

			function reussi_hist(){
				if(i_hist==8){
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle3_bd.php?i_hist", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('index.php');", 1000);
				}
				else if(j==8 && i_hist!=8){
					document.getElementById('btn_replay').style.display='block';
				}
			}

			function afficher_aide(){
				document.getElementById('aide').style.display='block';
			}

			setTimeout(afficher_aide, 15000);

			function afficher_table_aide(){
				document.getElementById('corps').style.display='none';
				document.getElementById('helping').style.display='block';
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
		

			<div id="helping">
				<a href="hist.html" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Aide</h1>
				<h2>Ceci est la page d'aide si tu as des difficultés.</h2>
				<img src="gaulois_aide.png" alt="aide gaulois" id="aide_gaulois"/>
			</div>
			
			<div id="presentation">
				<h1>Histoire</h1>
				<h2>La Cinquième République</h2>
			</div>

			<div id="corps">
			<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1> Histoire </h1>
				<p>Replace les dates de mandats sous le bon président !</p>
				<div class="mot">
					<div id="div1">
						<img src="dateGaulle.png" draggable="true" ondragStart="drag(event)" id="drag1" width="88" height="31">
					</div>

					<div id="div2">
						<img src="datePompi.png" draggable="true" ondragStart="drag(event)" id="drag2" width="88" height="31">
					</div>

					<div id="div3">
						<img src="dateGiscard.png" draggable="true" ondragStart="drag(event)" id="drag3" width="88" height="31">
					</div>

					<div id="div4"> 
						<img src="dateMitt.png" draggable="true" ondragStart="drag(event)" id="drag4" width="88" height="31">
					</div>

					<div id="div5">
						<img src="dateChirac.png" draggable="true" ondragStart="drag(event)" id="drag5" width="88" height="31">
					</div>

					<div id="div6">
						<img src="dateSarko.png" draggable="true" ondragStart="drag(event)" id="drag6" width="88" height="31">
					</div>

					<div id="div7">
						<img src="dateHoll.png" draggable="true" ondragStart="drag(event)" id="drag7" width="88" height="31">
					</div>

					<div id="div8">
						<img src="dateMacron.png" draggable="true" ondragStart="drag(event)" id="drag8" width="88" height="31">
					</div>
				</div>

				<div class="total">
					<div id="pres2">
						<img src="pompidou.jpg" alt="Georges Pompidou">
						<p>Georges Pompidou</p>
						<div id="div11" ondrop="drop2(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag2"></div>
					</div>
					<div id="pres6">
						<img src="sarkozy.jpg" alt="Nicolas Sarkozy">
						<p>Nicolas Sarkozy</p>
						<div id="div15" ondrop="drop6(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag6"></div>
					</div>
					<div id="pres3">
						<img src="giscard.jpg" alt="Valéry Giscard d'Estaing">
						<p>Valéry Giscard d'Estaing</p>
						<div id="div12" ondrop="drop3(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag3"></div>
					</div>
					<div id="pres8">
						<img src="macron.jpg" alt="Emmanuel Macron">
						<p>Emmanuel Macron</p>
						<div id="div17" ondrop="drop8(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag8"></div>
					</div>
					<div id="pres4">
						<img src="mitterand.jpg" alt="François Mitterrand">
						<p>François Mitterrand</p>
						<div id="div13" ondrop="drop4(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag4"></div>
					</div>
					<div id="pres1">
						<img src="deGaulles.jpg" alt="Charles de Gaulle">
						<p>Charles de Gaulle</p>
						<div id="div10" ondrop="drop1(event)" ondragover="allowDrop(event)"  onmousedown="return false" data-allowed="drag1"></div>
					</div>
					<div id="pres7">
						<img src="hollande.jpg" alt="François Hollande">
						<p>François Hollande</p>
						<div id="div16" ondrop="drop7(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag7"></div>
					</div>
					<div id="pres5">
						<img src="chirac.jpg" alt="Jacques Chirac">
						<p>Jacques Chirac</p>
						<div id="div14" ondrop="drop5(event)" ondragover="allowDrop(event)" onmousedown="return false" data-allowed="drag5"></div>
					</div>
				</div>
				
				<div id="btn_replay"><a href ="histoire.html">Recommence</a></div>
			</div>
		<footer>Créé par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>