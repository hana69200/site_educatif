function afficher_corps(){
				document.getElementById('presentation').style.display='none';
				document.getElementById('map').style.display='flex';
			}

setTimeout(afficher_corps, 1000);

function afficher_aide(){
	document.getElementById('aide').style.display='block';
}

setTimeout(afficher_aide, 15000);

function afficher_table_aide(){
	document.getElementById('map').style.display='none';
	document.getElementById('helping').style.display='block';
}

var i_geo =0;

function choix(){
	
	var reg_GE = document.getElementById("Région-A");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	
	var col = document.getElementById("couleur");
	
	if(reg_GE.onclick){
		if(rep == "1"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_GE.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}	


function choix2(){
	var reg_NA = document.getElementById("Région-B");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	
	var col = document.getElementById("couleur2");
	
	if(reg_NA.onclick){
		if(rep == "2"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_NA.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix3(){

	var reg_ARA = document.getElementById("Région-C");

	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur3");
		
	if(reg_ARA.onclick){
		if(rep == "3"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_ARA.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix4(){
	var reg_BFC = document.getElementById("Région-D");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur4");
	
	if(reg_BFC.onclick){
		if(rep == "4"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_BFC.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}


function choix5(){
	var reg_B = document.getElementById("Région-E");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur5");
	
	if(reg_B.onclick){
		if(rep == "5"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_B.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix6(){
	
	var reg_C = document.getElementById("Région-F");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur6");
	
	if(reg_C.onclick){
		if(rep == "6"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_C.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();	
}

function choix7(){
	var reg_CVL = document.getElementById("Région-G");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur7");
	
	if(reg_CVL.onclick){
		if(rep == "7"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_CVL.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix8(){
	var reg_IdF = document.getElementById("Région-H");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur8");
	
	if(reg_IdF.onclick){
		if(rep == "8"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_IdF.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix9(){
	
	var reg_O = document.getElementById("Région-I");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur9");
	
	if(reg_O.onclick){
		if(rep == "9"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_O.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix10(){
	
	var reg_HdF = document.getElementById("Région-J");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur10");
	
	if(reg_HdF.onclick){
		if(rep == "10"){
			col.style.fill='green';
			i_geo=i_geo+1
			reg_HdF.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix11(){
	
	var reg_N = document.getElementById("Région-K");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur11");
	
	if(reg_N.onclick){
		if(rep == "11"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_N.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}

function choix12(){
	
	var reg_PdlL = document.getElementById("Région-L");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur12");
	
	if(reg_PdlL.onclick){
		if(rep == "12"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_PdlL.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();
}


function choix13(){
	
	var reg_PACA = document.getElementById("Région-M");
	
	var rep = prompt('Quelle est le numéro de cette région ?');
	var col = document.getElementById("couleur13");
	
	if(reg_PACA.onclick){
		if(rep == "13"){
			col.style.fill='green';
			i_geo=i_geo+1;
			reg_PACA.onclick = false;
		}else if(rep==null || rep.length == 0){
			do_nothing;
		}else{
			col.style.fill='red';
		}
	}
	reussi_geo();	
}

function reussi_geo(){
	if(i_geo==13)
	{
		var xhr = getXMLHttpRequest();
		xhr.open("GET", "salle1_bd.php?i_geo", true);
		xhr.send(null);
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
					alert(xhr.responseText); // Données textuelles récupérées
			}
		}
		window.setTimeout("location=('classe.php');",1000);
	}
}
	