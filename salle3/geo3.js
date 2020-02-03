var i_geo=0;

function afficher_aide(){
	document.getElementById('aide').style.display='block';
}

setTimeout(afficher_aide, 15000);

function afficher_corps(){
	document.getElementById('presentation').style.display='none';
	document.getElementById('corps').style.display='block';
}

setTimeout(afficher_corps, 1000);

function afficher_table_aide(){
	document.getElementById('corps').style.display='none';
	document.getElementById('helping').style.display='block';
}

//Pays qui font partie de l'UE
function choix(){

	var au = document.getElementById("Autriche");
	var col = document.getElementById("couleur");
	
	if(au.onclick){
		col.style.fill='#ffadf0 ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix2(){

	var be = document.getElementById("Belgique");
	var col = document.getElementById("couleur2");

	if(be.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
	}
	reussi_geo();
}

function choix3(){

	var bu = document.getElementById("Bulgarie");
	var col = document.getElementById("couleur3");

	if(bu.onclick){
		col.style.fill=' #72aeff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix4(){

	var rt = document.getElementById("Rep_tcheque");
	var col = document.getElementById("couleur4");

	if(rt.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix5(){

	var al = document.getElementById("Allemagne");
	var col = document.getElementById("couleur5");

	if(al.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
	}
	reussi_geo();
}

function choix6(){

	var da = document.getElementById("Danemark");
	var col = document.getElementById("couleur6");

	if(da.onclick){
		col.style.fill='#cfff44';
		i_geo+=1;
	}
	reussi_geo();
}

function choix7(){

	var es = document.getElementById("Estonie");
	var col = document.getElementById("couleur7");

	if(es.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix8(){

	var fi = document.getElementById("Finlande");
	var col = document.getElementById("couleur8");

	if(fi.onclick){
		col.style.fill='#ffadf0 ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix9(){

	var ru = document.getElementById("R-U");
	var col = document.getElementById("couleur9");

	if(ru.onclick){
		col.style.fill='#cfff44';
		i_geo+=1;
	}
	reussi_geo();
}

function choix10(){

	var gr = document.getElementById("Grece");
	var col = document.getElementById("couleur10");

	if(gr.onclick){
		col.style.fill='#ffe242';
		i_geo+=1;
	}
	reussi_geo();
}

function choix11(){

	var cr = document.getElementById("Croatie");
	var col = document.getElementById("couleur11");

	if(cr.onclick){
		col.style.fill='#ff7994';
		i_geo+=1;
	}
	reussi_geo();
}

function choix12(){

	var ho = document.getElementById("Hongrie");
	var col = document.getElementById("couleur12");

	if(ho.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix13(){

	var ir = document.getElementById("Irlande");
	var col = document.getElementById("couleur13");

	if(ir.onclick){
		col.style.fill='#cfff44';
		i_geo+=1;
	}
	reussi_geo();
}

function choix14(){

	var it = document.getElementById("Italie");
	var col = document.getElementById("couleur14");

	if(it.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
	}
	reussi_geo();
}

function choix15(){

	var li = document.getElementById("Lituanie");
	var col = document.getElementById("couleur15");

	if(li.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix16(){

	var lu = document.getElementById("Luxembourg");
	var col = document.getElementById("couleur16");

	if(lu.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
	}
	reussi_geo();
}

function choix17(){

	var le = document.getElementById("Lettonie");
	var col = document.getElementById("couleur17");

	if(le.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix18(){

	var po = document.getElementById("Pologne");
	var col = document.getElementById("couleur18");

	if(po.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix19(){

	var por = document.getElementById("Portugal");
	var col = document.getElementById("couleur19");

	if(por.onclick){
		col.style.fill=' #fc981f ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix20(){

	var rou = document.getElementById("Roumanie");
	var col = document.getElementById("couleur20");

	if(rou.onclick){
		col.style.fill=' #72aeff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix21(){

	var sl = document.getElementById("Slovaquie");
	var col = document.getElementById("couleur21");

	if(sl.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix22(){

	var slo = document.getElementById("Slovenie");
	var col = document.getElementById("couleur22");

	if(slo.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix23(){

	var su = document.getElementById("Suede");
	var col = document.getElementById("couleur23");

	if(su.onclick){
		col.style.fill=' #ffadf0 ';
		i_geo+=1;
	}
	reussi_geo();
}

function choix24(){

	var pb = document.getElementById("P-B");
	var col = document.getElementById("couleur24");

	if(pb.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
	}
	reussi_geo();
}

function choix25(){

	var es = document.getElementById("Espagne");
	var col = document.getElementById("couleur25");

	if(es.onclick){
		col.style.fill=' #fc981f ';
		i_geo+=1;
	}
	reussi_geo();
}
function choix26(){
	
	var fr = document.getElementById("France");
	var col = document.getElementById("couleur26");

	if(fr.onclick){
		col.style.fill='#87cd05';
		i_geo+=1;
		
	}
	reussi_geo();			
}

function choix27(){

	var ch = document.getElementById("Chypre");
	var col = document.getElementById("couleur27");

	if(ch.onclick){
		col.style.fill=' #d529ff ';
		i_geo+=1;
	}
	reussi_geo();
}

//Pays qui ne font pas partie de l'UE
function choix28(){

	var al = document.getElementById("Albanie");
	var col = document.getElementById("couleur28");

	if(al.onclick){
		col.style.fill='red';
	}
}

function choix29(){

	var an = document.getElementById("Andorre");
	var col = document.getElementById("couleur29");

	if(an.onclick){
		col.style.fill='red';
	}
}

function choix30(){

	var ar = document.getElementById("Armenie");
	var col = document.getElementById("couleur30");

	if(ar.onclick){
		col.style.fill='red';
	}
}

function choix31(){

	var bo = document.getElementById("Bosnie");
	var col = document.getElementById("couleur31");

	if(bo.onclick){
		col.style.fill='red';
	}
}

function choix32(){

	var bi = document.getElementById("Bielorussie");
	var col = document.getElementById("couleur32");

	if(bi.onclick){
		col.style.fill='red';
	}
}

function choix33(){

	var su = document.getElementById("Suisse");
	var col = document.getElementById("couleur33");

	if(su.onclick){
		col.style.fill='red';
	}
}

function choix34(){

	var ge = document.getElementById("Georgie");
	var col = document.getElementById("couleur34");

	if(ge.onclick){
		col.style.fill='red';
	}
}

function choix35(){

	var is = document.getElementById("Island");
	var col = document.getElementById("couleur35");

	if(is.onclick){
		col.style.fill='red';
	}
}

function choix36(){

	var lic = document.getElementById("Lichtenstein");
	var col = document.getElementById("couleur36");

	if(lic.onclick){
		col.style.fill='red';
	}
}

function choix37(){

	var mol = document.getElementById("Moldavie");
	var col = document.getElementById("couleur37");

	if(mol.onclick){
		col.style.fill='red';
	}
}

function choix38(){

	var mac = document.getElementById("Macedoine");
	var col = document.getElementById("couleur38");

	if(mac.onclick){
		col.style.fill='red';
	}
}

function choix39(){

	var mon = document.getElementById("Montenegro");
	var col = document.getElementById("couleur39");

	if(mon.onclick){
		col.style.fill='red';
	}
}

function choix40(){

	var nor = document.getElementById("Norvege");
	var col = document.getElementById("couleur40");

	if(nor.onclick){
		col.style.fill='red';
	}
}

function choix41(){

	var ser = document.getElementById("Serbie");
	var col = document.getElementById("couleur41");

	if(ser.onclick){
		col.style.fill='red';
	}
}

function choix42(){

	var tur = document.getElementById("Turquie");
	var col = document.getElementById("couleur42");

	if(tur.onclick){
		col.style.fill='red';
	}
}

function choix43(){

	var ukr = document.getElementById("Ukraine");
	var col = document.getElementById("couleur43");

	if(ukr.onclick){
		col.style.fill='red';
	}
}

function choix44(){

	var kos = document.getElementById("Kosovo");
	var col = document.getElementById("couleur44");

	if(kos.onclick){
		col.style.fill='red';
	}
}

//Fonction qui verifie la reussite de l'exercice
function reussi_geo(){
	if(i_geo==27){
		var xhr = getXMLHttpRequest();
		xhr.open("GET", "salle3_bd.php?i_geo", true);
		xhr.send(null);
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
					alert(xhr.responseText); // Données textuelles récupérées
			}
		}
		window.setTimeout("location=('index.php');",1000);
	}
}