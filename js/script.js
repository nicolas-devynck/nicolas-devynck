//script engrenage
var iScrollPos = 0; // variable qui contiendra la position du scroll
$(window).scroll(function () {
    var iCurScrollPos = $(this).scrollTop(); // on passe la position du scroll
	if (iCurScrollPos > iScrollPos) { // scroll down
		$("#engr1").rotate(-iCurScrollPos); //.rotate = plugin rotate
		$("#engr4").rotate(iCurScrollPos);
		$("#engr5").rotate(-iCurScrollPos*2);
	} else { // scroll up
		$("#engr1").rotate(-iCurScrollPos);
		$("#engr4").rotate(iCurScrollPos);
		$("#engr5").rotate(-iCurScrollPos*2);
	}
	iScrollPos = iCurScrollPos;
});
$("#formation h3").click(function() {
	$("#engr6").rotate({
		angle:0,
		animateTo:360, 
   });
});
$("#experiances h3").click(function() {
	$("#engr7").rotate({
		angle:0,
		animateTo:360, 
   });
});
$("#competences h3").click(function() {
	$("#engr8").rotate({
		angle:0,
		animateTo:360, 
   });
});
// fonction accordion jquery ui
$(function() {
  $( ".accordion" ).accordion({
    heightStyle: "content",
	collapsible: true
  });
});
//foncttion ajax pour le formulaire
$(function(){
	$("#formulaire").submit(function(event){ // quant le formulaire et envoyer
		$.ajax({ // on passe par ajax
			type : "POST", // GET vs POST ici POST car le script php et construit aussi pour qu'il fonctione si JS et désactiver
			url: $(this).attr("action"), // recuperation de l'action du formulaire
			data: $(this).serialize(),
			success : function(retPHP) { // traitement des retour php
				var tabJSon = JSON.parse(retPHP); // JSON.parse car echo renvoie un 'string'
				// si le mail est bien partit on vide le formulaire
				if (tabJSon[0][2] && tabJSon[1][2] && tabJSon[2][2] && tabJSon[3][2]) { // tabJSon[i][2] = le boolean renvoyée par php et si tout est TRUE alors tout c'est bien passer'
					for (var i=0; i<tabJSon.length; i++) {
						document.getElementById(tabJSon[i][0]).value = '';
						document.getElementById(tabJSon[i][0]).style.backgroundColor = '#ffc354';
					}					
					alert('Votre requête a bien été traitée!'); // envois d'un mesage de validation
				}
				// si il y a des erreur
				else {
					for (var i=0; i<tabJSon.length; i++) {
						if (!tabJSon[i][2]) { // on vas chercher tous les FALSE renvoyée par php
							document.getElementById(tabJSon[i][0]).value = tabJSon[i][1]; // on renvois ce que la personne à taper
							document.getElementById(tabJSon[i][0]).style.backgroundColor = '#FF6347'; // et on passe le champs en rouge
						}
						else { //on recupe tout les TRUE
							document.getElementById(tabJSon[i][0]).value = tabJSon[i][1]; // on renvois ce que la personne à taper
							document.getElementById(tabJSon[i][0]).style.backgroundColor = '#98FB98'; // et on passe le champs en vert
						}
					}
					alert('Information incorrecte !! Merci de corriger'); //on envois un message d'erreur
				}
				
			},
			error: function() {
				// si ajax a planter
				alert("Erreur votre requête a échoué !");
			}
		});
		return false;
	});
});