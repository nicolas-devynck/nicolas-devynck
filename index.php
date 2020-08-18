<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Curriculum Vitae Developpeur Web</title>
		<!-- Encodage UTF8 -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Content-Type" content="UTF-8">
		<!-- Meta pour les robots -->
		<meta name="Content-Language" content="fr">
		<meta name="description" content="CV Nicolas Devynck, CV developpeur PHP, Narbonne, Creation de sites, developpement web, XHTML CSS">
		<meta name="keywords" content="cv d&eacute;veloppeur narbonne, developpement web, developpeur web, CV freelance, CV developpeur PHP, Narbonne, freelance, indépendant, creation site internet, developpement">
		<meta name="Copyright" content="Devynck nicolas">
		<meta name="Author" content="Devynck nicolas">
		<meta name="Identifier-Url" content="http://www.nicolas-devynck.fr/">
		<meta name="Revisit-After" content="30 days">
		<meta name="Robots" content="all">
		<meta name="Rating" content="general">
		<meta name="Distribution" content="global">
		<meta name="Geography" content="France">
		<meta name="Category" content="internet">
		<!-- Meta pour les ecran mobile HD -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<!-- Liens JQuery plus son plugin, CSS -->
		<script type="text/javascript" src="js/jQuery.js"></script>
		<script type="text/javascript" src="js/jQueryRotate.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.theme.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/png" href="css/logo.png" />

	</head>
	<body>
		<!-- Engrenage JQuery -->
		<div id="engr1"></div>
		<div id="engr2"></div>
		<div id="engr3"></div>
		<div>
			<div class="nav">
				<!-- Logo -->
				<div id="logo"></div>
				<!-- Menu -->
				<span>[<a class="scrollTo" href="#Projet"> Projet </a>]</span>
				<span>[<a class="scrollTo" href="#formation"> Formations </a>]</span> 
				<span>[<a class="scrollTo" href="#contact"> Contact </a>]</span>
				<!-- Engrenage JQuery Bis -->
				<div id="engr4"></div>
				<div id="engr5"></div>
			</div>
		</div>
		<div id="cadre">
			<!-- header -->
			<header>
				<img src="css/titre.png" alt="Devynck Nicolas Développeur Web" />
				<div id="url">www.nicolas-devynck.fr</div>
				<div id="mail_imp">contact@nicolas-devynck.fr</div> 
			</header>
			<aside>
				<div class="aside">
					<h2 id="info">Brèves</h2><div id="engr8"></div>
					<div class="cache_engrenage"></div>
					<!-- Brèves --><?php include 'txt/info.txt'; ?>
					<!-- continuer contact ici -->
				</div>
			</aside>
			<article>
				<div class="article">
					<h2 id="Projet">Projet</h2><div id="engr6"></div>
					<div class="cache_engrenage"></div>
					<div class="accordion" id="proj">
						<!-- Projet --><?php include 'txt/experience.txt'; ?>
					</div>
					
					<h2 id="formation">Formations</h2><div id="engr7"></div>
					<div class="cache_engrenage"></div>
					<div class="accordion" id="forma">
						<!-- Formations --><?php include 'txt/formation.txt'; ?>
					</div>
					<div class="contact">
						<h2 id="contact">Contactez moi</h2><div id="engr9"></div>
						<div class="cache_engrenage"></div>
						<!-- Formulaire de contacte -->
						<form method="post" action="php/mail.php" id="formulaire">
							<h3>Vos Coordonnées :</h3>
							<div class="input_contact">
								<label for="nom">Nom & Prénom :</label>
								<br />
								<input type="text" name="nom" id="nom" />
								<br />
								<label for="mail">Mail :</label>
								<br />
								<input type="email" name="mail" id="mail" placeholder="contact@example.com" />
								<br />
							</div>
							<h3>Details du message :</h3>
							<div class="input_contact">
								<label for="sujet">Sujet :</label>
								<br />
								<input type="text" name="sujet" id="sujet" />
								<br />
								<label for="msg">Message :</label>
								<br />
								<textarea name="msg" id="msg"></textarea>
								<div class="bouton">
									<input type="submit" value="Envoyer" />
								</div>
							</div>
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<footer>
				<div class="footer">
					<!-- Footer -->
					© Devynck nicolas 2015-2016
					<br />
					Les portes de l'avenir sont ouvertes à ceux qui savent les pousser. <a href="https://fr.wikipedia.org/wiki/Coluche" target="_blank">(coluche)</a><br />
					<!-- rezo -->
					<div class="rezo">
						<a href="http://github.com/nicolas-devynck" target="_blank"><img src="css/github.png" height="35" width="35" alt="Github" /><span>Sur Github</span></a>
						<a href="http://www.facebook.com/devynck.nicolas" target="_blank"><img src="css/fb.png" height="35" width="35" alt="Page FB" /><span>Sur Facebook</span></a>
					</div>
				</div>
				<div class="clear"></div>
			</footer>
		</div>
		<!-- Script ajax, Engrenage, Scroll sur les ancres -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>