function accueil(){
	//var r = document.getElementById("search").value;
	//document.getElementById("return").innerHTML = "Recherche en cours...";
	$.ajax ({
		url: "gestion_pages/pages.php",
		dataType: 'html',
		data: {'page' : 'accueil'},
		
		success: function(response){
			document.getElementById("return").innerHTML = response;
			document.getElementById("accueil").className = "nav-link active";
			document.getElementById("regles").className = "nav-link";
			document.getElementById("contact").className = "nav-link";
		}
	});
}

function regles(){
	//var r = document.getElementById("search").value;
	//document.getElementById("return").innerHTML = "Recherche en cours...";
	$.ajax ({
		url: "gestion_pages/pages.php",
		dataType: 'html',
		data: {'page' : 'regles'},
		success: function(response){
			document.getElementById("return").innerHTML = response;
			document.getElementById("accueil").className = "nav-link";
			document.getElementById("regles").className = "nav-link active";
			document.getElementById("contact").className = "nav-link";
		}
	});
}

function contact(){
	//var r = document.getElementById("search").value;
	//document.getElementById("return").innerHTML = "Recherche en cours...";

	$.ajax ({
		url: "gestion_pages/pages.php",
		dataType: 'html',
		data: {'page' : 'contact'},
		success: function(response){
			document.getElementById("return").innerHTML = response;
			document.getElementById("accueil").className = "nav-link";
			document.getElementById("regles").className = "nav-link";
			document.getElementById("contact").className = "nav-link active";
			ctrl_boutton();
		}
	});
}

function submit_form(){
	let email = $("#contact_email").val();
	let sujet = document.getElementById("contact_sujet").value;
	let message = document.getElementById("contact_message").value;

	$.ajax ({
		url: "gestion_pages/form.php",
		dataType: 'html',
		data: {'boutton': 'clique', 'email': email, 'sujet': sujet, 'message': message},
		
		success: function(response){

			var resultat_test_success = test_success(response);
			var resultat_test_email = test_email(response);
			var resultat_test_sujet = test_sujet(response);
			var resultat_test_message = test_message(response);
			var resultat_test_sendmail = test_sendmail(response);

			document.getElementById("resultat_msg").innerHTML = response;       
	        
	        display_success(resultat_test_success);
	        display_message(resultat_test_message);
	        display_sujet(resultat_test_sujet);
	        display_email(resultat_test_email);
	        display_sendmail(response);   
		}
	});
}

// FONCTIONS POUR TESTER LE CONTENU (=MESSAGE AFFICHE A L'ECRAN) DE LA REPONSE TRANSMISE PAR PAGES.PHP

function test_success(respo){
	var resp = respo;
	var patternSuccess = new RegExp("transmis");
	var resultat_test_success = patternSuccess.test(resp);
	return resultat_test_success;
}

function test_sendmail(respo){
	var resp = respo;
	var patternSuccess = new RegExp("Oops");
	var resultat_test_sendmail = patternSuccess.test(resp);
	return resultat_test_sendmail;
}

function test_email(respo){
	var resp = respo;
	var patternSuccess = new RegExp("email");
	var resultat_test_email = patternSuccess.test(resp);
	return resultat_test_email;
}

function test_sujet(respo){
	var resp = respo;
	var patternSuccess = new RegExp("sujet");
	var resultat_test_sujet= patternSuccess.test(resp);
	return resultat_test_sujet;
}

function test_message(respo){
	var resp = respo;
	var patternSuccess = new RegExp("renseigné");
	var resultat_test_message = patternSuccess.test(resp);
	return resultat_test_message;
}


// FONCTIONS POUR AFFICHER/MODIFIER LE CONTENU/STYLE DU FORMULAIRE SELON LES MESSAGES AFFICHES

function display_success(resultat_test_success){
	if (resultat_test_success === true) {
	    document.getElementById("resultat_msg").className = "alert alert-success col-12 col-8";
	    document.getElementById("contact_email").value="";
		document.getElementById("contact_sujet").value="";
		document.getElementById("contact_message").value="";
	}
	else if(resultat_test_success === false) {
    	document.getElementById("resultat_msg").className = "alert alert-warning col-12 col-lg-8";
	}
}

function display_sendmail(resultat_test_sendmail){
	if (resultat_test_success === true) {
	    document.getElementById("resultat_msg").className = "alert alert-danger col-12 col-8";
	}
	else if(resultat_test_success === false) {
    	document.getElementById("resultat_msg").className = "alert alert-warning col-12 col-lg-8";
	}
}

function display_message(resultat_test_message){
	if (resultat_test_message === true) {
	    document.getElementById("contact_message").className = "form-control input-border";
	    document.getElementById('contact_message').focus();
	}
	else{
		document.getElementById("contact_message").className = "form-control";
	}
}

function display_sujet(resultat_test_sujet){
	if (resultat_test_sujet === true) {
	    document.getElementById("contact_sujet").className = "form-control input-border";
	    document.getElementById('contact_sujet').focus();
	}
	else{
		document.getElementById("contact_sujet").className = "form-control";
	}
}


function display_email(resultat_test_email){
	if (resultat_test_email === true) {
	    document.getElementById("contact_email").className = "form-control input-border";
	    document.getElementById('contact_email').focus();
	}
	else{
		document.getElementById("contact_email").className = "form-control";
	}
}
