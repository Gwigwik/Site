//Fonctions
//Rajouter une quantité du produit x de quantité dispo q, p et m étant les boutons plus et moins
function qP(x, p, m, q) {
	x.value++;
	m.disabled = false;
	if (x.value >= parseInt(q.textContent)) { //On vérifie qu'on ne dépasse pas la quantité du produit disponible
		p.disabled = true;
		x.value = parseInt(q.textContent);
	}
	x.focus(); //focus la zone de texte
}

//Enlever une quantité du produit x de quantité dispo q
function qM(x, p, m, q) {
	x.value--;
	if (x.value <= 0) { //On vérifie qu'on n'entre pas un nombre < 0 et on désactive le bouton
		m.disabled = true;
		x.value = 0;
	}
	if (x.value < parseInt(q.textContent)) {
		p.disabled = false;
	}
	x.focus(); //focus la zone de texte
}

//Vérifie la mise en forme de l'input lorsque l'user rentre une quantité voulue
function test(x, p, m, q) {
	var i;
	for (i=0; i<x.value.length; i++) { //On regarde si on n'a que des entiers
		if (!Number.isInteger(parseInt(x.value[i]))) {
			x.value = 0;
		}
	}
	if (x.value > parseInt(q.textContent)) { //On limite la quantité à celle dispo
		x.value = parseInt(q.textContent);
	}
	while(x.value[0] == 0 && x.value.length > 1) { //On enlève les nombres qui commencent par 0
		x.value = x.value.substring(1, x.value.length);
	}
	if (x.value == '') { //On enlève les nombres vides
		x.value = 0;
	}
	if (x.value == 0) { //Gère les boutons
		m.disabled = true;
		p.disabled = false;
	}
	if (x.value == parseInt(q.textContent)) { //Gère les boutons
		p.disabled = true;
		if (x.value != 0) {
			m.disabled = false;
		}
	}
}

//Cacher ou afficher la colonne affichant le stock restant
function cacher(tbl) {
	var col = 4;
	if (document.getElementById("cS").innerHTML == "Cacher stock") {
		for (var i = 0; i < tbl.rows.length; i++) {
			tbl.rows[i].cells[col].style.display = "none";
			document.getElementById("cS").innerHTML = "Afficher stock";
		}
	} else {
		for (var i = 0; i < tbl.rows.length; i++) {
			tbl.rows[i].cells[col].style.display = "table-cell";
			document.getElementById("cS").innerHTML = "Cacher stock";
		}
	}
}

//Vérifie si le mail est écrit dans le bon format, change la couleur et affiche un message si ce n'est pas le cas
function verif() {
	var texte = document.getElementById("email").value;
	var i = 0;
	const alph = [];
	alph.push("a","z","e","r","t","y","u","i","o","p","m","l","k","j","h","g","f","d","s","q","w","x","c","v","b","n");
	alph.push("A","Z","E","R","T","Y","U","I","O","P","M","L","K","J","H","G","F","D","S","Q","W","X","C","V","B","N");
	alph.push("0","1","2","3","4","5","6","7","8","9");
	document.getElementById("email").style.color = '#000000'; //Zone en noir de base
	document.getElementById("lMail").style.display = "none";
	if (document.getElementById("email").value.length > 0) {
		//Premier partie avant le @
		while(alph.includes(texte[i]) || texte[i] == ".") {
			i++;
		}
		//Première partie non vide
		if (i == 0) {
			document.getElementById("email").style.color = '#FF0000';
		}
		//Présence du @
		if (texte[i] != "@") {
			document.getElementById("email").style.color = '#FF0000';
			document.getElementById("lMail").style.display = "contents";
		}
		i++;
		//Deuxième partie non vide
		if (texte[i] == null || !alph.includes(texte[i])) {
			document.getElementById("email").style.color = '#FF0000';
			document.getElementById("lMail").style.display = "contents";
		}
		//Partie entre le @ et le S
		while(alph.includes(texte[i])) {
			i++;
		}
		//Présence du .
		if (texte[i] != ".") {
			document.getElementById("email").style.color = '#FF0000';
			document.getElementById("lMail").style.display = "contents";
		}
		i++;
		//Troisème partie non vide
		if (texte[i] == null || !alph.includes(texte[i])) {
			document.getElementById("email").style.color = '#FF0000';
			document.getElementById("lMail").style.display = "contents";
		}
		//Troisème partie
		while(alph.includes(texte[i])) {
			i++;
		}
		if (texte[i] != null && !alph.includes(texte[i])) {
			document.getElementById("email").style.color = '#FF0000';
			document.getElementById("lMail").style.display = "contents";
		}
	}
}

//Grandis l'image contenue dans div id à l'aide de sa source
function grandissement(id, grand, source) {
  if (grand == false) {
    document.getElementById(id).innerHTML = '<img src="' + source + '" style="width: 500px; height: 500px;" onclick="grandissement(\'' + id + '\', ' + !grand + ', \'' + source + '\')" />';
  } else {
    document.getElementById(id).innerHTML = '<img src="' + source + '" style="width: 250px; height: 250px;" onclick="grandissement(\'' + id + '\', ' + !grand + ', \'' + source + '\')" />';
  }
}

//Création d'un objet XMLHTTPRequest
function getXhr() {
	var xhr = null;
	if (window.XMLHttpRequest) //FF & autres
	   xhr = new XMLHttpRequest();
	else if (window.ActiveXObject) { //IE < 7
		 try {
		   xhr = new ActiveXObject("Msxml2.XMLHTTP");
		 } catch (e) {
		   xhr = new ActiveXObject("Microsoft.XMLHTTP");
		 }
	} else { //Objet non supporté par le navigateur
	   alert("Votre navigateur ne supporte pas AJAX");
	   xhr = false;
	}
	return xhr;
}

function ajouterPanier(alt, stockId) {
	var xhr = getXhr();
	// On définit que l'on va faire à chq changement d'état
	xhr.onreadystatechange = function() {
	   // On ne fait quelque chose que si on a tout reç̧u 
	   // et que le serveur est ok
	   if (xhr.readyState == 4 && xhr.status == 200){
			// traitement ré́alisé avec la réponse...
			stockId.textContent = parseInt(stockId.textContent) - alt.value;
		  	alt.value = 0;
	   }
	}
	// cas de la mé́thode post
	xhr.open("POST","modifPanier.php",true) ;
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=utf-8');
	xhr.send("alt="+parseInt(stockId.textContent)+"stock="+alt.value);
  }