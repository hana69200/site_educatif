  <!DOCTYPE HTML>
<html>
<head>
<title>SchoolWeb</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="total3.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="fct.js"></script>
		<script> 
		function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('corps').style.display='block';
			}

				setTimeout(afficher_corps, 1000);
		
		var j=0; 
		var i_fr = 0; 
			function allowDrop(ev) 
			{ 
                ev.preventDefault(); 
				ev.stopPropagation();

            } 
              
            function dragStart(ev) 
			{ 
                ev.dataTransfer.setData("text", ev.target.id); 
            } 
              
            function dragDrop1(ev) { 
                ev.preventDefault(); 
                var data = ev.dataTransfer.getData("text"); 
				var drop1 = document.getElementById("drop1").innerHTML;
				  var drp1 = ev.target.getAttribute('data-allowed');
				  if(drop1==""){
					ev.stopPropagation();
					ev.target.appendChild(document.getElementById(data));
					j=j+1;
					if(drp1==data){
						alert("reussi");
						i_fr=i_fr+1;
						document.getElementById('drop1').style.color="green";
						document.getElementById('drop1').style.fontSize = "15px";
					  }
					  else{
						  alert('raté');
						document.getElementById('drop1').style.color="red";
						document.getElementById('drop1').style.fontSize = "15px";

					  }
				  }	
				
				reussi();	
            }
			function dragDrop2(ev) { 
                ev.preventDefault(); 
                var data = ev.dataTransfer.getData("text"); 
				var drop2 = document.getElementById("drop2").innerHTML;
				  var drp2 = ev.target.getAttribute('data-allowed');
				  if(drop2==""){
					ev.stopPropagation();
					ev.target.appendChild(document.getElementById(data));
					j=j+1;
					if(drp2==data){
						alert("reussi");
						i_fr=i_fr+1;
						document.getElementById('drop2').style.color="green";
						document.getElementById('drop2').style.fontSize = "15px";
					  }
					  else{
						  alert('raté');
						document.getElementById('drop2').style.color="red";
						document.getElementById('drop2').style.fontSize = "15px";

					  }
				  }	
				reussi();
					
            }
			function dragDrop3(ev) { 
                ev.preventDefault(); 
                var data = ev.dataTransfer.getData("text"); 
				var drop3 = document.getElementById("drop3").innerHTML;
				  var drp3 = ev.target.getAttribute('data-allowed');
				  if(drop3==""){
					ev.stopPropagation();
					ev.target.appendChild(document.getElementById(data));
					j=j+1;
					if(drp3==data){
						alert("reussi");
						i_fr=i_fr+1;
						document.getElementById('drop3').style.color="green";
						document.getElementById('drop3').style.fontSize = "15px";
					  }
					  else{
						  alert('raté');
						document.getElementById('drop3').style.color="red";
						document.getElementById('drop3').style.fontSize = "15px";

					  }
				  }	
				
				reussi();	
            }
			function dragDrop4(ev) { 
                ev.preventDefault(); 
                var data = ev.dataTransfer.getData("text"); 
				var drop4 = document.getElementById("drop4").innerHTML;
				  var drp4 = ev.target.getAttribute('data-allowed');
				  if(drop4==""){
					ev.stopPropagation();
					ev.target.appendChild(document.getElementById(data));
					j=j+1;
					if(drp4==data){
						alert("reussi");
						i_fr=i_fr+1;
						document.getElementById('drop4').style.color="green";
						document.getElementById('drop4').style.fontSize = "15px";
					  }
					  else{
						  alert('raté');
						document.getElementById('drop4').style.color="red";
						document.getElementById('drop4').style.fontSize = "15px";

					  }
				  }	
				
					reussi();
            }
			function dragDrop5(ev) { 
                ev.preventDefault(); 
                var data = ev.dataTransfer.getData("text"); 
				var drop5 = document.getElementById("drop5").innerHTML;
				  var drp5 = ev.target.getAttribute('data-allowed');
				  if(drop5==""){
					ev.stopPropagation();
					ev.target.appendChild(document.getElementById(data));
					j=j+1;
					if(drp5==data){
						alert("reussi");
						i_fr=i_fr+1;
						document.getElementById('drop5').style.color="green";
						document.getElementById('drop5').style.fontSize = "15px";
					  }
					  else{
						  alert('raté');
						document.getElementById('drop5').style.color="red";
						document.getElementById('drop5').style.fontSize = "15px";

					  }
				  }	
				reussi();
					
            }
			
			
			function reussi(){
				if(i_fr==5){
					var xhr = getXMLHttpRequest();
					xhr.open("GET", "salle3_bd.php?i_fr", true);
					xhr.send(null);
					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
								alert(xhr.responseText); // Données textuelles récupérées
						}
					}
					window.setTimeout("location=('index.php');", 1000);
				}
				else if(j==5 && i_fr!=5){
					document.getElementById('reload').style.display='block';
				}
			}
        </script> 
        <style> 
            .div1, .div2, .div3, .div4, .div5{ 
                width: 120px; 
                height: 10px;
                padding: 10px; 
				margin-bottom:10px;
                border: 1px solid black; 
                background-color: white; 
				color:black;
				display:inline-flex;
            } 
			#drop1, #drop2, #drop3, #drop4, #drop5{ 
                width: 120px; 
                height: 10px; 
                padding: 12px; 
				margin-bottom:2px;
                border: 1px solid black; 
                background-color: #F5F5F5; 
            } 
            p { 
                font-size:20px; 
                font-weight:bold; 
            } 
			.porfavor
			{
				display : flex; 
				align-content:row;
				}
				
			a:link
			{
				text-decoration:none;
				}
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
				padding:50px;
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
			
			#reload button{
				margin-left:auto;
				margin-right:auto;
				padding:5px;
				border-radius:0.5em;
				background-color:rgba(255,255,244,0.9);
				margin-bottom:10px;
			}
			
			#reload{
				display:none;
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
		
		<div id="presentation">
			<h1>Français</h1>
			<h2>La conjugaison</h2>
		</div>
		
		<div id="corps">
			<a href="index.php" id="croix"><img src="croix.png" alt="croix"/></a>
			<p>Prends le verbe AIMER et mets le dans la bonne phrase !</p> 
			<div class="div1" ondrop="dragDrop1(event)" ondragover="allowDrop(event)"> 
			<label id="drag1" draggable="true"
			ondragstart="dragStart(event)" width="220" height="70">avons découvert</label></div> 
			
			<div class="div2" ondrop="dragDrop2(event)" ondragover="allowDrop(event)"> 
			<label id="drag2" draggable="true"
			ondragstart="dragStart(event)" width="220" height="70">découvres</label></div>
			
			<div class="div3" ondrop="dragDrop3(event)" ondragover="allowDrop(event)"> 		
			<label id="drag3" draggable="true"
			ondragstart="dragStart(event)" width="220" height="70">découvrez</label></div>

			<div class="div4" ondrop="dragDrop4(event)" ondragover="allowDrop(event)"> 		
			<label id="drag4" draggable="true"
			ondragstart="dragStart(event)" width="220" height="70">ont découvert</label></div>

			<div class="div5" ondrop="dragDrop5(event)" ondragover="allowDrop(event)"> 		
			<label id="drag5" draggable="true"
			ondragstart="dragStart(event)" width="220" height="70">découvriras</label></div> 
			
			
			<br> 
			<div class="porfavor">Nous<div id="drop1" ondrop="dragDrop1(event)" onmousedown="return false" ondragover="allowDrop(event)" data-allowed="drag1"></div> ton excellent travail</div>
			<div class="porfavor">Vous <div id="drop3" ondrop="dragDrop3(event)" onmousedown="return false" ondragover="allowDrop(event)" data-allowed="drag3"></div> le français</div>
			<div class="porfavor">hier, ils<div id="drop4" ondrop="dragDrop4(event)" onmousedown="return false" ondragover="allowDrop(event)" data-allowed="drag4"></div> la musique</div>
			<div class="porfavor">demain, tu<div id="drop5" ondrop="dragDrop5(event)" onmousedown="return false" ondragover="allowDrop(event)" data-allowed="drag5"></div> le sport</div>
			<div class="porfavor">Tu  <div id="drop2" ondrop="dragDrop2(event)" onmousedown="return false" ondragover="allowDrop(event)" data-allowed="drag2"></div> la conjugaison</div>

			<div id="reload"><a href ="francais3_2.php"><button>Essaye encore une fois</button></a></div>
		</div>
		<footer>Créer par Wissale Jerraf, Hana Ben Hamida, Vak Sam Sophie Ham, Roxane Marchand & Emilie Arquilliere </footer>
    </body> 
</html>              