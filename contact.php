<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<META NAME="Desciption"
	CONTENT="Présentation du cursus scolaire et des projets de Flavien Bert">
<META NAME="Keywords" CONTENT="Flavien,bert,portfolio,cpe">
<META NAME="Author" CONTENT="Flavien Bert">
<META NAME="Identifier-URL" CONTENT="http://www.flavienbert.fr">
<META NAME="Copyright" CONTENT="Flavien Bert">
<META NAME="Publisher" CONTENT="Flavien Bert">
<META NAME="Reply-to" CONTENT="bert.flavien@gmail.com">
<title>Bert Flavien - contact</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="icon" type="image/png" href="img/title.png" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scrollTop.js"></script>
<script type="text/javascript">
	$(function() {
		this.env = $("#envoyer");
		$("#envoyer").click(
				function() {
					valid = true;
					if ($("#nom").val() == "") {
						valid = false;
						$("#nom").next(".erreur-message").fadeIn().text(
								"Veuillez entrer votre Nom");
						$("#nom").css("border-color", "red");
					} else if (!$("#nom").val().match(/^[a-z]+$/i)) {
						valid = false;
						$("#nom").next(".erreur-message").fadeIn().text(
								"Veuillez entrer un Nom valide");
						$("#nom").css("border-color", "red");
					} else {
						$("#nom").next(".erreur-message").fadeOut();
						$("#nom").css("border-color", "green");
					}

					if ($("#prenom").val() == "") {
						valid = false;
						$("#prenom").next(".erreur-message").fadeIn().text(
								"Veuillez entrer votre Prénom");
						$("#prenom").css("border-color", "red");
					} else {
						$("#prenom").next(".erreur-message").fadeOut();
						$("#prenom").css("border-color", "green");
					}

					if ($("#email").val() == "") {
						valid = false;
						$("#email").next(".erreur-message").fadeIn().text(
								"Veuillez entrer votre e-mail");
						$("#email").css("border-color", "red");
					} else if (!$("#email").val().match(
							/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i)) {
						valid = false;
						$("#email").next(".erreur-message").fadeIn().text(
								"Veuillez entrer une adresse valide");
						$("#email").css("border-color", "red");
					} else {
						$("#email").next(".erreur-message").fadeOut();
						$("#email").css("border-color", "green");
					}

					return valid;
				});
	});
</script>



<body>
<div id="contact">
<?php include_once("analyticstracking.php") ?>

	<header>
	<div id="navigation_principale">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="navbar navbar-static-top">
					<div class="container">
						<a class="brand" href="#">Flavien Bert - Portfolio </a>
						<ul class="nav">
							<li><a href="index.html"> <img src="img/icons/maison.png"
										width="21px" height="21px"> &nbsp;Accueil
							</a>
								
								
								
								</li>
							<li class="divider-vertical"></li>
							<li><a href="presentation.html"><img src="img/icons/propos2.png"
										width="25px" height="22px"> À Propos</a>
								
								
								
								</li>
							<li class="divider-vertical"></li>
							<li><a href="cv.php"><img src="img/icons/livre1.png"
										width="25px" height="22px"> CV</a>
								
								
								
								</li>
							<li class="divider-vertical"></li>
							<li><a href="projet.php"><img src="img/icons/valise.png"
										width="21px" height="21px"> &nbsp;&nbsp;Projets</a>
								
								
								
								</li>
							<li class="divider-vertical"></li>
							<li class="active"><a href="contact.php"><img
										src="img/icons/email.png" width="21px" height="21px">
									&nbsp;Contact</a>
								
								
								
								</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="menu">
		<div class="btn-group">
			<a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"
					href="#"> <span>Portfolio - MENU</span> &nbsp;&nbsp;<img
					src="img/list.png" width="30px" height="30px">
			</a>
			<ul class="dropdown-menu">
				<li class="active"><a href="index.html"> <img
							src="img/icons/maison.png" width="21px" height="21px">
						&nbsp;Accueil
				</a>
					
					
					
					</li>
				<li><a href="presentation.html"><img src="img/icons/propos2.png"
							width="25px" height="22px"> À Propos</a>
					
					
					
					</li>
				<li><a href="cv.php"><img src="img/icons/livre1.png" width="25px"
							height="22px"> CV</a>
					
					
					
					</li>
				<li><a href="projet.php"><img src="img/icons/valise.png"
							width="21px" height="21px"> &nbsp;&nbsp;Projets</a>
					
					
					
					</li>
				<li><a href="contact.php"><img src="img/icons/email.png"
							width="21px" height="21px"> &nbsp;Contact</a>
					
					
					
					</li>
			</ul>
		</div>

	</div>

		<div class="banniere">
		<h1>CONTACT</h1>
		</div>

</header>

	<section>	
			<div class="contact_left">
					<h2>Formulaire de contact</h2>
			
		<?php

		/* Récupération des valeurs des champs du formulaire */
		if (isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message']) )
		{
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$expediteur = $_POST['email'];
			$message = $_POST['message'];
			if (!empty($nom) && !empty($prenom) && !empty($expediteur) && !empty($message))
			{
				/* Destinataire (votre adresse e-mail) */
				$to = 'bert.flavien@gmail.com';
				$sujet = 'Formulaire de contact';
				$message=str_replace("\'", "'", $message);
				/* Construction du message */
				$msg  = 'Bonjour,'."\r\n\r\n";
				$msg .= 'Ce mail a été envoyé depuis monsite.com par '.$prenom.' '.$nom."\r\n\r\n";
				$msg .= 'Voici le message qui vous est adressé :'."\r\n";
				$msg .= '***************************'."\r\n";
				$msg .= $message."\r\n";
				$msg .= '***************************'."\r\n";

				/* En-têtes de l'e-mail */
				$headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";

				/* Envoi de l'e-mail */

				mail($to, $sujet, $msg, $headers);
				echo"<font size=\"5\" color=\"green\"> Votre e-mail a bien été envoyé Mr.".$nom." </font>";

			}
			else
			{
				echo("Vous n'avez pas rempli tous les champs");
			}
		}


		?>
		<form method="post">
			Votre nom : <br /> <input id="nom" type="text" name="nom" value="" />
			<span class="erreur-message"> </span> <br /> Votre prenom : <br /> <input
				id="prenom" type="text" name="prenom" value="" /> <span
				class="erreur-message"></span> <br /> Votre e-mail : <br /> <input
				id="email" type="text" name="email" value="" /> <span
				class="erreur-message"></span> <br /> Votre Message :<br />
			<textarea name="message" rows="10" cols="10"></textarea>

			<br /> <label>Recopier ici le texte de l'image ci-dessous :</label> <input
				class="text" type="text" id="captcha_" name="captcha" value="">

			<div class="captcha-img">
				<img src="http://www.doyoubuzz.com/captcha.php" alt="captcha"
					id="captcha_img"> <a class="link alink"
					href="javascript:reset_captcha('http://www.doyoubuzz.com/captcha.php')">Changer
					le code</a>
				<script type="text/javascript">
					//<!--
					function reset_captcha(file) {
						date = new Date();
						document.getElementById('captcha_img').src = file + '?'
								+ date.getTime();
					}
				</script>
			</div>

			<br /> <input id="envoyer" type="submit" value="Envoyer">

		</form>
	</div>
	<h2>coordonnées</h2>
				<div class="contact_right">
					<div class="bloc_contenu">
				    <strong>Adresse:</strong><br />
					BERT Flavien <br/>6 Allée des Bleuets<br /> 69160, TASSIN LA DEMI-LUNE<br /> FRANCE<br />
					<br /> <strong>Mobile :</strong> 06.82.78.05.08<br /> <br /> <strong>Email
						:</strong> bert.flavien@gmail.com<br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					&nbsp; &nbsp;flavien.bert@cpe.fr<br /> <br /> <strong>Détenteur
						du permis B et véhiculé. </strong>
				</div>
				</div>
			
	</section>

	<div class="scrollTop" id="scrollTop">
		<a href="#">↑Top↑</a>
	</div>

	<footer>
		© 2013 - Flavien Bert - Tous droits réservés<br /><br/> <a
			href="https://plus.google.com/u/0/118079000973244861908/posts"><img
			src="img/g+.jpg" width="36px" height="36px"> </a>
	</footer>


	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>
