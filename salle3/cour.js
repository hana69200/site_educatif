var dessin = document.getElementById("francais");
				dessin.onclick = function faux() {
				  var canevas = document.getElementById('fr');
				  if (canevas.getContext) {
					var ctx = canevas.getContext('2d');

					ctx.lineWidth = "2";
					ctx.moveTo(0, 50);
					ctx.lineTo(80, 20);
					ctx.moveTo(15, 30);
					ctx.lineTo(80, 50);
					ctx.strokeStyle = "orange";
					ctx.stroke();
					
					setTimeout(texte, 1000);
				  }
				}
				
				function texte() {
					document.getElementById("correction").style.display = "block";
				}
				
				document.getElementById("cuneiforme").onclick = function trad() {
						document.getElementById("traduction").style.display = "block";
					}
					
					document.getElementById("hieroglyphe").onclick = function trad2() {
						document.getElementById("traduction").style.display = "block";
					}
					document.getElementById("black").onclick = function affiche1() {
						document.getElementById("color_black").style.display = "block";
					}
					document.getElementById("grey").onclick = function affiche2() {
						document.getElementById("color_grey").style.display = "block";
					}
					document.getElementById("brown").onclick = function affiche3() {
						document.getElementById("color_brown").style.display = "block";
					}
					document.getElementById("orange").onclick = function affiche4() {
						document.getElementById("color_orange").style.display = "block";
					}
					document.getElementById("yellow").onclick = function affiche5() {
						document.getElementById("color_yellow").style.display = "block";
					}
					document.getElementById("green").onclick = function affiche6() {
						document.getElementById("color_green").style.display = "block";
					}
					document.getElementById("blue").onclick = function affiche7() {
						document.getElementById("color_blue").style.display = "block";
					}
					document.getElementById("purple").onclick = function affiche8() {
						document.getElementById("color_purple").style.display = "block";
					}
					document.getElementById("pink").onclick = function affiche9() {
						document.getElementById("color_pink").style.display = "block";
					}
					document.getElementById("red").onclick = function affiche10() {
						document.getElementById("color_red").style.display = "block";
					}
					
					function afficher_corps(){
				document.getElementById('consigne').style.display='none';
				document.getElementById('zone').style.display='flex';
			}

			setTimeout(afficher_corps, 1000);
			
			function carteBateau()
                    {
                        document.getElementById("bateauCarte").style.display = "block";
                        }
			
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