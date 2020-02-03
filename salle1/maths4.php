<!Doctype html>
<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="total.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<style>
			ul{
				list-style-type: none;
			}
			
			#aire{
				width:400px;
				height: 250px;
			}
			#helping table{
				color: black;
				margin:auto;
				padding:15px;
				background-color:rgba(250,250,250,0.9);
				text-align: center;
				border-radius:0.5em;
			}
		</style>
		<script type="text/javascript">
			function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

			setTimeout(afficher_corps, 1000);
			
			var i_maths =0;
			function verification () {
				var CB = document.getElementById("oui");
				var CBA = document.getElementById("nien");
				var CBB = document.getElementById("non");
				var CBC = document.getElementById("nop");
				if(CB.checked){
					alert("c'est la bonne reponse!");
					i_maths=i_maths+1;
				}else{
					alert("C'est faux");
				}
				reussi_maths();
			}

			function afficher_aide(){
				document.getElementById('aide').style.display='block';
			}

			setTimeout(afficher_aide, 15000);

			function afficher_table_aide(){
				document.getElementById('corps').style.display='none';
				document.getElementById('helping').style.display='block';
			}

			function reussi_maths(){
				if(i_maths==1)
				{
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle1_bd.php?i_maths", true);
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
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li>
						<a href="#">Accueil</a>
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
					
					<li id="aide" onclick="afficher_table_aide()">
						<img src="aide.png" alt="bouton d'aide"/>
					</li>
					
				</ul>		
			</nav>	
		</header>
		
		<main>
			<div id="helping">
				<a href="maths4.html" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Aide</h1>
				<h2>Ceci est la page d'aide si tu as des difficultés.</h2>
				<table>
					<tr>
						<th>Table de 1</th>
						<th>Table de 2</th>
						<th>Table de 3</th>
						<th>Table de 4</th>
						<th>Table de 5</th>
						<th>Table de 6</th>
						<th>Table de 7</th>
						<th>Table de 8</th>
						<th>Table de 9</th>
					</tr>
					
					<tr>
						<th>1 x 1 = 1</th>
						<th>2 x 1 = 2</th>
						<th>3 x 1 = 3</th>
						<th>4 x 1 = 4</th>
						<th>5 x 1 = 5</th>
						<th>6 x 1 = 6</th>
						<th>7 x 1 = 7</th>
						<th>8 x 1 = 8</th>
						<th>9 x 1 = 9</th>
					</tr>
					
					<tr>
						<th>1 x 2 = 2</th>
						<th>2 x 2 = 4</th>
						<th>3 x 2 = 6</th>
						<th>4 x 2 = 8</th>
						<th>5 x 2 = 10</th>
						<th>6 x 2 = 12</th>
						<th>7 x 2 = 14</th>
						<th>8 x 2 = 16</th>
						<th>9 x 2 = 18</th>
					</tr>
					
					<tr>
						<th>1 x 3 = 3</th>
						<th>2 x 3 = 6</th>
						<th>3 x 3 = 9</th>
						<th>4 x 3 = 12</th>
						<th>5 x 3 = 15</th>
						<th>6 x 3 = 18</th>
						<th>7 x 3 = 21</th>
						<th>8 x 3 = 24</th>
						<th>9 x 3 = 27</th>
					</tr>
					
					<tr>
						<th>1 x 4 = 4</th>
						<th>2 x 4 = 8</th>
						<th>3 x 4 = 12</th>
						<th>4 x 4 = 16</th>
						<th>5 x 4 = 20</th>
						<th>6 x 4 = 24</th>
						<th>7 x 4 = 28</th>
						<th>8 x 4 = 32</th>
						<th>9 x 4 = 36</th>
					</tr>
					
					<tr>
						<th>1 x 5 = 5</th>
						<th>2 x 5 = 10</th>
						<th>3 x 5 = 15</th>
						<th>4 x 5 = 20</th>
						<th>5 x 5 = 25</th>
						<th>6 x 5 = 30</th>
						<th>7 x 5 = 35</th>
						<th>8 x 5 = 40</th>
						<th>9 x 5 = 45</th>
					</tr>
					
					<tr>
						<th>1 x 6 = 6</th>
						<th>2 x 6 = 12</th>
						<th>3 x 6 = 18</th>
						<th>4 x 6 = 24</th>
						<th>5 x 6 = 30</th>
						<th>6 x 6 = 36</th>
						<th>7 x 6 = 42</th>
						<th>8 x 6 = 48</th>
						<th>9 x 6 = 54</th>
					</tr>
					
					<tr>
						<th>1 x 7 = 7</th>
						<th>2 x 7 = 14</th>
						<th>3 x 7 = 21</th>
						<th>4 x 7 = 28</th>
						<th>5 x 7 = 35</th>
						<th>6 x 7 = 42</th>
						<th>7 x 7 = 49</th>
						<th>8 x 7 = 56</th>
						<th>9 x 7 = 63</th>
					</tr>
					
					<tr>
						<th>1 x 8 = 8</th>
						<th>2 x 8 = 16</th>
						<th>3 x 8 = 24</th>
						<th>4 x 8 = 32</th>
						<th>5 x 8 = 40</th>
						<th>6 x 8 = 48</th>
						<th>7 x 8 = 56</th>
						<th>8 x 8 = 64</th>
						<th>9 x 8 = 72</th>
					</tr>
					
					<tr>
						<th>1 x 9 = 9</th>
						<th>2 x 9 = 18</th>
						<th>3 x 9 = 27</th>
						<th>4 x 9 = 36</th>
						<th>5 x 9 = 45</th>
						<th>6 x 9 = 54</th>
						<th>7 x 9 = 63</th>
						<th>8 x 9 = 72</th>
						<th>9 x 9 = 81</th>
					</tr>
					
					<tr>
						<th>1 x 10 = 10</th>
						<th>2 x 10 = 20</th>
						<th>3 x 10 = 30</th>
						<th>4 x 10 = 40</th>
						<th>5 x 10 = 50</th>
						<th>6 x 10 = 60</th>
						<th>7 x 10 = 70</th>
						<th>8 x 10 = 80</th>
						<th>9 x 10 = 90</th>
					</tr>
				</table>
			</div>
			
			<div id="presentation">
				<h1>Mathématiques</h1>
				<h2>Problème n°4</h2>
			</div>
			
			<div id="corps">
				<a href="classe.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<div id="Probleme">
					<h1> Problèmes n°4</h1>
					<p> Quelle est l'aire de cette surface ?</p>
					<img src="aire_maths.png" alt="aire" id="aire"/>
					<div id="reponses">
						<ul>
							<li><input type="radio" id="oui" onclick="verification()">
							<label>23cm</label></li>
							<li><input type="radio" id="non" onclick="verification()">
							<label>30cm</label></li>
							<li><input type="radio" id="nop" onclick="verification()">
							<label>21cm</label></li>
							<li><input type="radio" id="nien" onclick="verification()">
							<label>24cm</label></li>
						</ul>
					</div>
				</div>
			</div>
		</main>
		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>