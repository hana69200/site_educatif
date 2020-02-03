  <!Doctype html>

<html lang="fr">
	<head>
		<title>SchoolWeb</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total2.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<style>
			#ph2, #ph3,#ph4, #ph5, #p2
			{ 
				display:none;
				align-content :center;
			}
			#corps{display:block;}
		</style>
		<script>
			var i_fr =0;
			var sujNotFound =0;
			var codNotFound =0;

			function afficher_aide(){
				document.getElementById('aide').style.display='block';
			}

			setTimeout(afficher_aide, 15000);

			function afficher_table_aide(){
				document.getElementById('corps').style.display='none';
				document.getElementById('helping').style.display='block';
			}
			
			function sujetNonTrouve()
			{
				if(sujNotFound!=3)
				{
					alert('raté ! Essaye encore ! ');
					sujNotFound=sujNotFound+1;
				}
				else 
				{
					alert("Cherche d'abord le verbe dans la phrase ! Le sujet est celui qui fait l'action");
					sujNotFound=0;
				}
			}
			function CodNonTrouve()
			{
				if(codNotFound!=3)
				{
					alert('raté ! Essaye encore ! ');
					codNotFound=codNotFound+1;
				}
				else 
				{
					alert("Cherche d'abord le verbe dans la phrase ! ");
					codNotFound=0;
				}
			}
			
			function sujetTrouveRoland()
			{
				alert('Bravo ! tu as réussi ! Le sujet était Roland');
				document.getElementById("ph1").style.visibility ="hidden";
				document.getElementById("ph2").style.display ="block";
			}
			
			function sujetTrouveMaitre()
			{
				document.getElementById("ph2").style.visibility ="hidden";
				document.getElementById("ph3").style.display ="block";
				document.getElementById("p1").style.visibility="hidden";
				document.getElementById("p2").style.display="block";
				alert('Bravo ! tu as réussi ! Le sujet était le maître');	
			}
			
			function CodTrouveCrack()
			{
				document.getElementById("ph3").style.visibility="hidden";
				document.getElementById("ph4").style.display="block";
				alert("Tu as réussi ! Le COD était Crack !");
			}
			
			function CodTrouveDit()
			{
				document.getElementById("ph4").style.visibility="hidden"; 
				document.getElementById("ph5").style.display="block"; 
				alert("Tu as réussi ! Le COD était 'Bonjour au maître très poliment'");
			}
			
			function CodTrouvePorte()
			{
				document.getElementById("ph5").style.visibility="hidden"; 
				alert("Bravo tu as trouvé le dernier COD ! ");
				i_fr=i_fr+1;
				reussi_fr();
			}
			
			function reussi_fr(){
				if(i_fr==1){
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle2_bd.php?i_fr", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('bibliotheque.php');", 1000);
				}
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
				</ul>
				
			</nav>	
		</header>
		
		<main>
			<div id="corps">
				<div id="Probleme">
					<h1> Problème n°3</h1>
						<p id='p1'>Trouve le sujet du verbe souligné !</p>
						<p id='p2'>Trouve le COD du verbe souligné </p>
						
						<p id='ph1'><cite onclick='sujetTrouveRoland();'>Roland</cite>
								   <cite onclick='sujetNonTrouve();'><u> était </u></cite>
								   <cite onclick='sujetNonTrouve();'>en</cite> 
								   <cite onclick='sujetNontrouve();'>retard.</cite></p>
						
						<p id='ph2'>
									<cite onclick='sujetNonTrouve();'>"Va </cite>
									<cite onclick='sujetNonTrouve();'>au </cite>
									<cite onclick='sujetNonTrouve();'>coin", </cite>
									<cite onclick='sujetNonTrouve();'><u>dit</u></cite>
									<cite onclick='sujetTrouveMaitre();'> le maître,</cite>
							et Roland obéit. Mais, au coin, il n'y avait rien à faire, </p>
							
						<p id='ph3'>  
								<cite onclick='CodNonTrouve();'>Puis</cite> 
								<cite onclick='CodNonTrouve();'>il</cite> 
								<cite onclick='CodNonTrouve();'><u>dit</u></cite>
								<cite onclick='COdNonTrouve();'>:</cite> 
								<cite onclick='CodTrouveCrack();'>« CRACK »</cite> 
								<cite onclick='CodNonTrouve();'>et</cite>
								<cite onclick='CodNonTrouve();'> le</cite>
								<cite onclick='CodNonTrouve();'> tigre</cite> 
								<cite onclick='CodNonTrouve();'>devint</cite>
								<cite onclick='CodNonTrouve();'> vivant</cite>.</p>
						
						<p id="ph4">
								<cite onclick='CodNonTrouve();'>Le</cite> 
								<cite onclick='CodNonTrouve();'>tigre</cite> 
								<cite onclick='CodNonTrouve();'>s'étira</cite>, 
								<cite onclick='CodNonTrouve();'>se</cite> 
								<cite onclick='CodNonTrouve();'>déroula</cite> 
								<cite onclick='CodNonTrouve();'>de</cite> 
								<cite onclick='CodNonTrouve();'>tout</cite> 
								<cite onclick='CodNonTrouve();'>son</cite> 
								<cite onclick='CodNonTrouve();'>long</cite>
								<cite onclick='CodNonTrouve();'>et</cite> 
								<cite onclick='CodNonTrouve();'><u>dit</u></cite> 
								<cite onclick='CodTrouveDit();'>bonjour</cite> 
								<cite onclick='CodNonTrouve();'>au</cite> 
								<cite onclick='CodNonTrouve();'>maître</cite>
								<cite onclick='CodNonTrouve();'>très</cite> 
								<cite onclick='CodNonTrouve();'>poliment.</cite> 
							Le maître répondit : « Il n'y a pas de place pour toi ici. »</p>
						

							<p id="ph5">
							<cite onclick='CodNonTrouve();'>Il </cite> 
							<cite onclick='CodNonTrouve();'><u>ouvrit</u> </cite> 
							<cite onclick='CodTrouvePorte();'>la porte </cite> 
							<cite onclick='CodNonTrouve();'>et, </cite> 
							<cite onclick='CodNonTrouve();'>sans </cite> 
							<cite onclick='CodNonTrouve();'>un </cite> 
							<cite onclick='CodNonTrouve();'>mot </cite> 
							<cite onclick='CodNonTrouve();'>de </cite> 
							<cite onclick='CodNonTrouve();'>plus, </cite> 
							<cite onclick='CodNonTrouve();'>le </cite> 
							<cite onclick='CodNonTrouve();'>tigre </cite> 
							sortit. </cite> 
							« Récréation, tout le monde dehors maintenant », dit le maître. 
						« Sauf toi, Roland. Tu restes ici. Et attention, plus de « CRACK », je te prie ».</p>
				</div>
			</div>
		</main>
		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
	</body>
</html>