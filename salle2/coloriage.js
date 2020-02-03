var i_maths=0;

window.onload = function debut() {
	alert(" - Je suis très rapide en calcul mental.\n - 12 × 28 ?\n - 56.\n - Mais c'est faux !\n - Oui mais c'est rapide !\n Ne soit pas comme moi et bonne chance à toi \ud83d\ude09.");
	setTimeout(draw1, 1500);
	document.getElementById("text-base").style.textAlign="left";
	document.getElementById("text-base").style.marginTop="210px";
	document.getElementById("calculs").style.display="block";
}
			
function draw1() {
	// Get the modal
	document.getElementById("myModal").style.display = "block";
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		// Get the button that opens the modal
		var btn = document.getElementById("ope1");
		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	// var reponse = document.getElementById("rep");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		ctx.scale(0.5, 1); // oval
		
		ctx.beginPath(); // oreille gauche
		ctx.lineWidth = "3"; // épaisseur
		ctx.strokeStyle = "black"; // bordure
		ctx.arc(1700, 112, 110, 0, 2 * Math.PI);
		ctx.fillStyle = "white"; // remplissage
		ctx.fill();
		ctx.stroke();
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 35) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // intérieur oreille gauche
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1705, 147, 75, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw2, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '15 + 20 = ?'", 1000);
			}
		}
	}
}
		
function draw2() {
	document.getElementById("ope2").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "25 ÷ 5 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];
	
	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope2"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 5) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FaDBD8"; // remplissage
				ctx.fill();
						
				ctx.beginPath(); // oreille droite
				ctx.lineWidth = "3"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(2085, 112, 110, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw3, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '25 ÷ 5 = ?'", 1000);
			}
		}
	}
}
			
function draw3() {
	document.getElementById("ope3").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "81 - 9  = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];
	
	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope3"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 72) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // intérieur oreille droite
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(2080, 147, 75, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw4, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '81 - 9  = ?'", 1000);
			}
		}
	}
}

function draw4() {
	document.getElementById("ope4").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "3 × 11 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope4"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 33) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FaDBD8"; // remplissage
				ctx.fill();
				
				ctx.scale(1.5, 1);
		
				ctx.beginPath(); // corps
				ctx.lineWidth = "3"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1252, 555, 220, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw5, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '3 × 11 = ?'", 1000);
			}
		}
	}
}

function draw5() {
	document.getElementById("ope5").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "1/5 + 1/2 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope5"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == '0.7' || rep == '0,7' || rep == '7/10') {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.strokeStyle = "black";
				ctx.moveTo(1100, 460);
				ctx.lineTo(980, 460);
				ctx.stroke();
				ctx.lineWidth = "1";
				ctx.stroke();
				
				ctx.beginPath(); // corps intérieur
				ctx.lineWidth = "1"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1252, 595, 180, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw6, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '1/5 + 1/2 = ?'", 1000);
			}
		}
	}
}
		
function draw6() {
	document.getElementById("ope6").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "88 - 12 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];
	
	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope6"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 76) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				
				ctx.scale(1.4, 1.05);
		
				ctx.beginPath(); // tête
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(897, 290, 150, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw7, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '88 - 12 = ?'", 1000);
			}
		}
	}
}

function draw7() {
	document.getElementById("ope7").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "7 × 14 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];
	
	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope7"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 98) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.scale(0.5, 1); // oval
		
				ctx.beginPath(); // oeil gauche
				ctx.lineWidth = "2";
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1650, 260, 50, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw8, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '7 × 14 = ?'", 1000);
			}
		}
	}
}		
		
function draw8() {
	document.getElementById("ope8").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "135 ÷ 9 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope8"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 15) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.lineWidth = "1";
				ctx.moveTo(1640, 210);
				ctx.lineTo(1450, 210);
				ctx.stroke();
		
				ctx.beginPath(); // iris gauche
				ctx.lineWidth = "1";
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1650, 280, 30, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw9, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '135 ÷ 9 = ?'", 1000);
			}
		}
	}
}

function draw9() {
	document.getElementById("ope9").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "17 + 93 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope9"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 110) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#AED6F1"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.moveTo(1640, 270);
				ctx.lineTo(1450, 270);
				ctx.stroke();
				
				ctx.beginPath(); // pupille gauche
				ctx.arc(1650, 295, 15, 0, 2 * Math.PI);
				ctx.fillStyle = "black";
				ctx.fill();
		
				ctx.beginPath(); // oeil droit
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1935, 260, 50, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				setTimeout(draw10, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '17 + 93 = ?'", 1000);
			}
		}
	}
}
	
function draw10() {
	document.getElementById("ope10").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "2/8 × 4/1 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope10"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 1 || rep == '8/8') {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.lineWidth = "1";
				ctx.moveTo(2150, 210);
				ctx.lineTo(1940, 210);
				ctx.stroke();
				
				ctx.beginPath(); // iris droit
				ctx.lineWidth = "1";
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1935, 280, 30, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw11, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '2/8 × 4/1 = ?'", 1000);
			}
		}
	}
}
		
function draw11() {
	document.getElementById("ope11").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "99 ÷ 33 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope11"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 3) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#AED6F1"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.moveTo(2150, 270);
				ctx.lineTo(1940, 270);
				ctx.stroke();
				
				ctx.beginPath(); // pupille droite
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(1935, 295, 15, 0, 2 * Math.PI);
				ctx.fillStyle = "black";
				ctx.fill();
				
				ctx.scale(2.6, 1); // oval
				
				ctx.beginPath(); // partie basse visage
				ctx.lineWidth = "0.3"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(689, 370, 68, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw12, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '99 ÷ 33 = ?'", 1000);
			}
		}
	}
}
		
function draw12() {
	document.getElementById("ope12").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "33 × 3 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope12"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 99) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FDEDEC"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // nez
				ctx.lineWidth = "1"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(690, 320, 8, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw13, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '33 × 3 = ?'", 1000);
			}
		}
	}
}
		
function draw13() {
	document.getElementById("ope13").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "646 + 54 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope13"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 700) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "black"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.strokeStyle = "black"; // bordure
				ctx.moveTo(690, 320);
				ctx.lineTo(540, 320);
				ctx.lineWidth = "1";
				ctx.stroke();
		
				ctx.beginPath();
				ctx.lineWidth = "1"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.rect(670, 350, 20, 40); // dent gauche
				ctx.rect(691, 350, 20, 40); // dent droite
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw14, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '646 + 54 = ?'", 1000);
			}
		}
	}
}
		
function draw14() {
	document.getElementById("ope14").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "193 - 49 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope14"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 144) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				
				ctx.beginPath();
				ctx.strokeStyle = "black"; // bordure
				ctx.moveTo(690, 320);
				ctx.lineTo(540, 320);
				ctx.lineWidth = "1";
				ctx.stroke();
				
				ctx.beginPath(); // bouche
				ctx.lineWidth = "1"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(675, 345, 15, 0, Math.PI);
				ctx.fillStyle = "#FDEDEC"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				ctx.beginPath(); // bouche
				ctx.lineWidth = "1"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(705, 345, 15, 0, Math.PI);
				ctx.fillStyle = "#FDEDEC"; // remplissage
				ctx.fill();
				ctx.stroke();
				
				ctx.scale(1, 1); // oval 
				
				ctx.beginPath(); // moustaches droites
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(770, 380, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.beginPath(); // moustaches
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(770, 400, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.beginPath(); // moustaches
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(770, 420, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.beginPath(); // moustaches gauches
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(610, 380, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.beginPath(); // moustaches
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(610, 400, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.beginPath(); // moustaches
				ctx.lineWidth = "1"; // épaisseur
				ctx.arc(610, 420, 50, 10.2, 1.75 * Math.PI);
				ctx.stroke();
				
				ctx.scale(1.8, 1);
		
				ctx.beginPath(); // main gauche
				ctx.lineWidth = "1.5"; // épaisseur
				ctx.arc(330, 523, 40, 3.50 * Math.PI, 8.1);
				ctx.stroke();
		
				setTimeout(draw15, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '193 - 49 = ?'", 1000);
			}
		}
	}
}		
		
function draw15() {
	document.getElementById("ope15").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "121 ÷ 11 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope15"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 11) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // main droit
				ctx.lineWidth = "1.5"; // épaisseur
				ctx.arc(433, 523, 40, 7.5, 3.50 * Math.PI);
				ctx.stroke();
		
				setTimeout(draw16, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '121 ÷ 11 = ?'", 1000);
			}
		}
	}
}			

function draw16() {
	document.getElementById("ope16").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "321 - 123 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope16"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 198) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
		
				ctx.beginPath(); // pied gauche
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(340, 730, 30, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw17, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '321 - 123 = ?'", 1000);
			}
		}
	}

}	
		
function draw17() {
	document.getElementById("ope17").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#85C1E9";
	document.getElementById("operation").innerHTML = "389 + 45 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope17"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 434) {
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // pied droit
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(425, 730, 30, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
		
				setTimeout(draw18, 1250);
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '389 + 45 = ?'", 1000);
			}
		}
	}
}
	
function draw18() {
	document.getElementById("ope18").style.visibility = "visible";
	document.getElementById("myModal").style.display = "none";
	document.getElementById("operation").style.color = "#BB8FCE";
	document.getElementById("operation").innerHTML = "54 × 5 = ?";
	document.getElementById("myModal").style.display = "block";
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		document.getElementById("myModal").style.display = "none";
		var btn = document.getElementById("ope18"); 
		btn.onclick = function() {
		  document.getElementById("myModal").style.display = "block";
		}
	}
			
	var bouton = document.getElementById("ok");
	
	var canvas = document.getElementById('canvas');
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		bouton.onclick = function() {
			var rep = document.getElementById("rep").value;
			if(rep == 270) {
				i_maths=i_maths+1;
				document.getElementById("operation").innerHTML = "C'est la bonne réponse! Continuez ainsi. \ud83d\ude03";
				ctx.fillStyle = "#FEF9E7"; // remplissage
				ctx.fill();
				
				ctx.beginPath(); // pied droit
				ctx.lineWidth = "2"; // épaisseur
				ctx.strokeStyle = "black"; // bordure
				ctx.arc(425, 730, 30, 0, 2 * Math.PI);
				ctx.fillStyle = "white"; // remplissage
				ctx.fill();
				ctx.stroke();
				fin();
			}
			else {
				document.getElementById("operation").innerHTML = "Oh non. Reessayez. \ud83d\ude0a";
				setTimeout("document.getElementById('operation').innerHTML = '54 × 5 = ?'", 1000);
			}
		}
	}
}

function fin() {
	document.getElementById("myModal").style.display = "none";
	alert("Tu es un génie !!! \ud83d\ude24");
	document.getElementById("text-base").style.visibility="hidden";
	document.getElementById("text-end").style.visibility="visible";
	if(i_maths==1){
		var xhr = getXMLHttpRequest();
		xhr.open("GET", "salle2_bd.php?i_maths", true);
		xhr.send(null);
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
					alert(xhr.responseText); // Données textuelles récupérées
			}
		}
		window.setTimeout("location=('bibliotheque.php');", 2000);
	}
}
		