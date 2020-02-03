<!DOCTYPE html>
<html>
    <head>
        <title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script>
			var i_maths=0;
			
			function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

			setTimeout(afficher_corps, 1000);

			function Faux1()
			{
				alert("Erreur, observez bien les images.");
			}
			
			function Juste()
			{
				alert('Tu as réussis !');
				i_maths=i_maths+1;
				reussi_maths();
			}
			
			function reussi_maths(){
				if(i_maths==1){
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle3_bd.php?i_maths", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					setTimeout("location=('index.php');",1000);
				}
			}
		</script>
		<style>
			.gauche img{
				width:250px;
				height:200px;
			}
			table{
				width:500px;
				height:300px;
				margin-left:auto;
				margin-right:auto;
			}
			table img{
				width:200px;
				height:150px;
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
			<div id="presentation">
				<h1>Mathématiques</h1>
				<h2>Symétrie n°4</h2>
			</div>

			<div id="corps">
				<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
				<h1>Mathématiques</h1>
				<p>Trouvez la symétrie de l'image ci-dessous.</p><br/>
				<div class="gauche">
					<img class="chateau1.PNG" src="mario.PNG"/>
				</div>
				<div>
					 <table>
						 <tr>
							<td><img src="mar1-1.png" onclick="Faux1()"/></td>
							<td><img src="mar2-1.png" onclick="Faux1()"/></td>
						 </tr>
						 <tr> 
							<td><img src="mar3-1.png" onclick="Faux1()"/></td>
							<td><img src="mar4-1.png" onclick="Juste()"/></td>
						 </tr>
					 </table>
				 </div>
			</div>
		</main>
		<footer>Créé par Wissale Jerraf, Hana Ben Hamida, Sophie Vak Sam, Roxane Marchand & Emilie Arquilliere </footer>
    </body>
</html>