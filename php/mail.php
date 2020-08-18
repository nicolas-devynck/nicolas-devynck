<?php
	// on passe les $_POST dans des variables, avec addslashes pour les champs qui n'on pas de paterne (on c'est jamais) et wordwrap qui ajoute un retour de ligne tout les 70 caractaire
	$sujet = addslashes($_POST['sujet']); 
	$mail = $_POST['mail'];
	$msg = wordwrap(addslashes($_POST['msg']), 70, "\r\n");
	$nom = $_POST['nom'];
	
	function verifNom($fnom) { //Verification du champ nom
		if (!preg_match('/^[a-zA-Z ]*$/', $fnom) || strlen($fnom) < 2 || strlen($fnom) > 25) { return FALSE; }
		else { return TRUE; }
	}
	function verifSujet($fsujet) { //Verification du champ sujet
		if (strlen($fsujet) < 2 || strlen($fsujet) > 50) { return FALSE; }
		else { return TRUE; }
	}
	function verifMsg($fmsg) { //Verification du champ msg
		if (strlen($fmsg) < 5 || strlen($fmsg) > 2000) { return FALSE; }
		else { return TRUE; }
	}
	function verifMail($fmail) { //Verification du champ mail
		if (!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $fmail) || strlen($fmail) < 7 || strlen($fmail) > 25) { return FALSE; }
		else { return TRUE; }
	}
	
	//execute les fonction de verification et recupe les boolean
	$boolMsg = verifMsg($msg);
	$boolNom = verifNom($nom);
	$boolSujet = verifSujet($sujet);
	$boolMail = verifMail($mail);
	
	//tab erreur pour identifer le problemme
	$erreur = array(
  		array('msg', $msg, $boolMsg),
		array("nom", $nom, $boolNom),
		array("sujet", $sujet, $boolSujet),
		array("mail", $mail, $boolMail),
	);
	
	if ($boolMsg && $boolNom && $boolSujet && $boolMail) { // si tout est TRUE on envois le mail
		// Destinataire
		$to = 'contact@nicolas-devynck.fr';
		// l'en-tête Content-type
		$headers  = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		$headers .= 'To: '.$to.''."\r\n"; // 
		$headers .= 'From: '.$mail.''."\r\n";
		// message
		$message = '
		<html>
		<head><title>'.$sujet.'</title></head>
		<body>
			'.$nom.' vous a envoyer un message depuis votre CV<br /><br />
			<b>Message :</b><br />
			'.$msg.'
			<hr />
			<b>Mail :</b>'.$mail.'<br />
		</body>
		</html>
		';
		
		// Envoi
		mail($to, $sujet, $message, $headers);
	 
		// si le formulaire et envoyer sans ajax
		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			echo "Votre requête a bien été traitée!<br /> \n\r"; // message de validation
			echo "<a href=".$_SERVER['HTTP_REFERER']." ><-- Retour</a>"; // lien retour
		}
		// si le formulaire et envoyer avec ajax retourne le tableau erreur en JSon
		else {
			echo json_encode($erreur);
		}
	}
	else {
		// si le formulaire et envoyer sans ajax 
		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			echo "<h1>Erreur</h1> \n\r"; // message d'erreur
			for ($i=0; $i<sizeof($erreur); $i++) {
				if (!$erreur[$i][2]) {  // on vas chercher tous les FALSE
					// envois des enformation relative a l'erreur
					echo "le champs <b>".$erreur[$i][0]."</b> est incorrecte :<br />\n\n<b>".$erreur[$i][1]."</b><br /><br />\n\n";				
				}
			}
			echo "<br /><a href=".$_SERVER['HTTP_REFERER']." ><-- Retour</a>"; // lien retour
		}
		// si le formulaire et envoyer avec ajax retourne le tableau erreur en JSon
		else {
			echo json_encode($erreur);
		}
	}
?>