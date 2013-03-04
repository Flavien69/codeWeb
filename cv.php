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
<title>Bert Flavien - CV</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="icon" type="image/png" href="img/title.png" />
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push([ '_setAccount', 'UA-38629294-1' ]);
	_gaq.push([ '_trackPageview' ]);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl'
				: 'http://www')
				+ '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
</script>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<div id="cv">
	
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
								</a></li>
								<li class="divider-vertical"></li>
								<li><a href="presentation.html"><img src="img/icons/propos2.png"
										width="25px" height="22px"> À Propos</a></li>
								<li class="divider-vertical"></li>
								<li class="active"><a href="cv.php"><img
										src="img/icons/livre1.png" width="25px" height="22px"> CV</a>
								</li>
								<li class="divider-vertical"></li>
								<li><a href="projet.php"><img src="img/icons/valise.png"
										width="21px" height="21px"> &nbsp; Projets</a></li>
								<li class="divider-vertical"></li>
								<li><a href="contact.php"><img src="img/icons/email.png"
										width="21px" height="21px"> &nbsp;Contact</a></li>
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
					</a></li>
					<li><a href="presentation.html"><img src="img/icons/propos2.png"
							width="25px" height="22px"> À Propos</a></li>
					<li><a href="cv.php"><img src="img/icons/livre1.png" width="25px"
							height="22px"> CV</a></li>
					<li><a href="projet.php"><img src="img/icons/valise.png"
							width="21px" height="21px"> &nbsp;&nbsp;Projets</a></li>
					<li><a href="contact.php"><img src="img/icons/email.png"
							width="21px" height="21px"> &nbsp;Contact</a></li>
				</ul>
			</div>

		</div>

		
		<div id="nav_cv">
				<div class="tabbable">
					<!-- Only required for left/right tabs -->
					<ul class="nav nav-pills">
						<li class="active"><a href="#compétences" data-toggle="tab">Compétences</a>
						</li>
						<li><a href="#formation" data-toggle="tab">Formation</a></li>
						<li><a href="#expériences" data-toggle="tab">Expériences
								professionnelles</a></li>
						<li><a href="img/FLAVIEN_ANGLAIS_CV_2012-13.pdf">Télécharger
								&nbsp;<img src="img/icons/télécharger1.png" width="13px"
								height="8px">
						</a></li>
					</ul>
				</div>
			
		</div>
	</header>




		<section>

			<div class="tab-content">

				<div class="tab-pane active" id="compétences">

		<div class="banniere">
		<h1>mes compétences</h1>			
		</div>					
					
										
					<div id="som_tot">
						<div id="sommaire_competences">
							<ul>
								<li>Langages de programmation<br/><br/></li>
								<li>Logiciels<br/><br/></li>
								<li>Systèmes d'exploitation<br/><br/></li>
								<li>Langue et Loisirs</li>
							</ul>
						</div>


						<div id="galerie">
							<div class="slider">
								<?php 
						$dos = "img/min/galerie_competences/";
						$dir = opendir($dos);
						while ($file = readdir($dir)){
							$allow_ext = array("jpg",'png','gif');
							$ext = strtolower(substr($file, -3));
							if(in_array($ext, $allow_ext)){
								?>
						<span class="imageSlider"> 

						<img src="img/min/galerie_competences/<?php echo $file; ?>" /> </span>
						
						<?php 								
							}
						}
						?>

							</div>
						</div>
					</div>

					<h2>Langages de programmation</h2>

					<div class="bloc_contenu">

						<ul>

							<li><b>C </b>: C'est le premier langage de programmation que j'ai
								appris pendant la prépa ainsi, celui où j'ai le plus pratiqué et
								effectué le plus de projets. C'est un bon langage pour commencer
								la programmation et c'est d'ailleurs un des premiers langages
								qu'on apprend quand on veut programmer. C'est un langage d'assez
								bas niveau et donc proche de la machine. J'ai réalisé en C
								plusieurs projets personnels et des travaux pratiques qui
								permettent de bien comprendre ce langage. <br /> <br /></li>

							<li><b>C++ (FrameWork Qt)</b> : J'ai appris le C++ durant la 1ère
								année d'école d'ingénieur dans le cadre d'initiation à ce
								langage. C'est un langage de haut niveau permettant la
								programmation objet facilement. Il propose un grand nombre de
								fonctions utiles permettant une programmation plus facile
								comparé au langage C (string par rapport à char*...). Ensuite,
								j'ai effectué un très gros projet en C++ durant 6 mois en
								utilisant la bibliothèque Qt: un jeu vidéo 2D. Cette bibliotèque
								permet un affichage et des performances correctes par rapport
								aux bibliotèques SDL/SFML que nous avons testé. <br /> <br /></li>

							<li><b>Java</b> : Le Java est un langage orientée objet, de la
								même manière que le langage C. Il propose un ensemble de
								fonctions et d'outils très important. C'est un langage très
								portable. Par contre, il possède un inconvénient majeure qui est
								sa consommation importante en mémoire, il ne s'adapte donc que
								peu à des petites configurations. <br /> <br /></li>

							<li><b>(X)HTML et CSS</b> : Le langage HTML est un langage à
								balises dérivés du XML. J'ai commencé à apprendre ces deux
								langages durant ma deuxième année d'école d'ingénieur dans le
								but de réaliser des sites Web. De plus, j'ai appris différentes
								méthodes permettant d'adapter un site Web pour smartphone avec
								les media query. <br /> <br /></li>

							<li><b>PHP </b>: Le PHP est un langage de haut niveau utilisé par
								un serveur Web. Il offre de nombreuses fonctionnalités comme
								rendre les pages dynamiques, gérer des bases de données ainsi
								que créer des sessions utilisateur pour les forums par exemple.
								J'ai commencé à apprendre ce langage en implémentant mon premier
								site Web. J'ai notamment utilisé le PHP dans ce portfolio afin
								de gérer le formulaire de contact. <br /> <br /></li>

							<li><b>JavaScript et jQuery</b> : Le Javascript permet d'animer
								des pages HTML en utilisant des événements.. On peut faire des
								multiples animations avec ce langage comme un menus déroulant
								par exemple (comme sur ce site). jQuery est une bibliothèque
								JavaScript libre qui porte sur l'interaction entre JavaScript et
								HTML, et a pour but de simplifier des commandes communes de
								JavaScript. De la même façon que le PHP, j'ai débuté à apprendre
								ce langage en implémentant mon premier site Web. <br /> <br /></li>

							<li><b>SQL (MySQL/SQLite)</b> est un langage informatique
								normalisé servant à effectuer des opérations sur des bases de
								données relationnelles. La partie langage de manipulation de
								données de SQL permet de rechercher, d'ajouter, de modifier ou
								de supprimer des données dans les bases de données
								relationnelles. J'ai eu l'occasion d'implémenter ce langage lors
								de nombreux travaux pratiques en école d'ingénieur et dans
								l'application Android des notes de CPE.</li>

						</ul>

					</div>

					<h2>Logiciels</h2>

					<div class="bloc_contenu">
						<ul>

							<li><b>Qt Créator</b> : Qt Creator est un environnement de
								développement intégré multiplate-forme faisant partie du
								framework Qt. Il est donc orienté pour la programmation en
								C++.Il intègre directement dans l'interface un débogueur, un
								outil de création d'interfaces graphiques. Je l'ai utilisé pour
								coder le jeu vidéo 2D. C'est un logiciel très puissant et très
								éfficace. <br /> <br /></li>

							<li><b>Eclipse</b> : C'est un IDE (Integrated Development
								Environment) très puissant, c'est-à-dire un logiciel qui
								simplifie la programmation en proposant un certain nombre de
								raccourcis et d'aide à la programmation. Ce logiciel est
								principalement utilisé pour coder en Java mais je l'utilise
								égallement pour l'implémentation de site Web ou en C++. Je l'ai
								majoritairement utilisé pour l'application Android avec le SDK
								Android. <br /> <br /></li>

							<li><b>Latex</b> : C'est un langage et un système de composition
								de documents. Du fait de sa relative simplicité, il est devenu
								la méthode privilégiée d'écriture de documents scientifiques
								employant TeX. Il est particulièrement utilisé dans les domaines
								techniques et scientifiques pour la production de documents de
								taille moyenne ou importante. J'utilise rgulièrement Latex pour
								mes compte-rendu de projets ou de stage.<br /> <br /></li>

							<li><b>Subversion (SVN)</b> : SVN est un logiciel permettant une gestion des versions. Je 
							l'utilise fréquement lors des projets afin d'éviter les conflits de versions entres les 
							différents programmes de chaque membres.</li>
						</ul>

					</div>

					<h2>Systèmes d'exploitation</h2>

					<div class="bloc_contenu">
						<ul>

							<li><b>Windows (XP/Vista/Seven)</b> : J'utilise ce système d'exploitation depuis que je suis petit
							 et j'ai donc utilisé une grande partie des versions de Windows (Windows 95, Windows 98, 
							 Windows XP, Windows Vista et Windows Seven). J'ai appris au fil du temps les différentes
							 fonctionnalités de Windows. Je l'utilise quotidiennement.<br /> <br /></li>
													
							<li><b>Android</b> : Android est un système d'exploitation fondé
								sur un noyau Linux, il comporte une interface spécifique,
								développée en Java. Je l'utilise principalement avec ma tablette
								Nexus. J'ai réalisé une application Android cette année
								permettant aux étudiants de CPE d'accéder à leurs notes
								rapidements.<br /> <br /></li>

								
							<li><b>Linux (Debian)</b>: Depuis 2 ans, j'ai commencé à utiliser linux (Debian plus précisément) 
							dans le cadre de ma formation à l'école, j'ai appris une grande partie des commandes.</li>
						</ul>

					</div>

					<h2>Langues et Loisirs</h2>

					<div class="bloc_contenu">
						<div id="anglais">

							<strong>ANGLAIS:</strong>
							<table>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Lu :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Parlé :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Écrit :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>
							</table>
						</div>
						<div id="espagnol">
							<strong>ESPAGNOL:</strong>
							<table>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Lu :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Parlé :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Écrit :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile2.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>
							</table>
						</div>


						<div id="loisirs">
							<strong>LOISIRS:</strong>
							<table>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Foot :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Tennis de table :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Jeux vidéo :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Séries et Films :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Informatique :</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/etoile.png"
										width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" /><img
										src="img/etoile.png" width="15px" height="15px" alt="etoile" />
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="expériences">
				
		<div class="banniere">
		<h1>expériences professionnelles</h1>			
		</div>						

					<h2>
						Etat de l’art des outils de supervision en vue du déploiement dans
						le contexte du Grand Lyon
					</h2>

					<div class="bloc_contenu">
						<span class="label label-info"> Juillet 2012</span><br /> <br />
						<p>
							J’ai réalisé un stage d’exécution d’un mois dans la société <strong>Grand
								Lyon</strong>. Durant ce stage, j'ai été accompagné par un
							ingénieur m’encadrant dans mes recherches.<br /> L’objectif du
							stage fut d’effectuer <strong>une étude d’opportunité sur
								l’évolution des outils de supervision</strong>.En effet, la
							communauté urbaine de Lyon utilise de nombreux logiciels pour
							superviser son système d’information . De ce fait le Grand Lyon
							s’interroge sur la possible unification des outils de supervision
							ainsi que sur une solution Open Source afin d’obtenir des
							résultats plus précis dans l’avenir.<br /> De plus, l’objectif
							général du stage fut de découvrir l’organisation d’une entreprise
							et les métiers de l’ingénieur.
						</p>

						<p>Le Grand Lyon étant une grande entreprise, j’ai eu la
							possibilité de me rendre compte de la complexité de la structure
							d’une entreprise regroupant de multiples unités, directions et
							pôles.</p>
						<br />
						<p>
							Durant ce mois, <strong>j’ai réalisé l’état de l’art des
								différents logiciels de supervisions</strong>, puis j’ai pu
							tester seulement deux logiciels sur une maquette faute de temps.
							En effet, avant de pouvoir effectuer la maquette il est
							nécessaire de réaliser des recherches avancées afin d’avoir les
							connaissances requises pour son installation.
						</p>

						<p>
							Ce stage m’a permis de comprendre le fonctionnement global d’une
							grande entreprise ainsi que le travail d’un ingénieur. De plus, <strong>j’ai
								acquis de nombreuses connaissances sur Linux et sur le réseau</strong>
							qui me serviront dans le futur.
						</p>
						<br /> La version PDF de mon rapport de stage est disponnible : <a
							href="img/rapport.pdf"><img src="img/pdf.png" width="50"
							height="50"> </a><br /> <br /> <a
							href="http://www.grandlyon.com/">Accès directement au site
							officiel </a><br /> <br /> <img src="img/grandlyon.png"
							width="300" height="200">
					</div>


					<h2>Missions au centre d'ingénierie
						nucléaire d'EDF, Lyon (69)</h2>

					<div class="bloc_contenu">
						<span class="label label-info"> Août 2011</span><br /> <br /> Au
						seins de ce bureau d'étude, j'ai participé aux débriefings
						techniques sous le tutorat d'ingénieurs suivis de missions de
						bureautiques :
						<ul>
							<li>Mise en page et rédaction sous Word</li>
							<li>utilisation d'Excel</li>
							<li>classement de dossier</li>

						</ul>


						<a href="http://www.edf.com/le-groupe-edf-3.html">Accès
							directement au site officiel </a><br /> <br /> <img
							src="img/edf.png" width="200" height="100">
					</div>


					<h2>Assistant Technicien, Axione, Lyon (69)</h2>

					<div class="bloc_contenu">
						<span class="label label-info"> Juillet 2011</span><br /> <br />
						Missions polyvalentes de Télécom à <strong>AXIONE</strong>
						(aménageur numérique des territoires, filiale de <strong>BOUYGUES
							TELECOM</strong>) <br /> <br /> Ma principale mission était <strong>la
							maintenance des sites GSM</strong> correspondante à différentes
						étapes :
						<ul>
							<li>Mesures des infrastructures numériques</li>
							<li>Adaptation d'antennes</li>
							<li>Jarretirage</li>
							<li>ajout de cartes RAX permettant d'améliorer le réseau 3G</li>
						</ul>


						<a href="http://www.axione.fr/">Accès directement au site officiel
						</a><br /> <br /> <img src="img/axione.png" width="300"
							height="100">
					</div>
				</div>




				<div class="tab-pane" id="formation">
				
		<div class="banniere">
		<h1>ma formation</h1>			
		</div>	
		
					<h2>
						Ecole Supérieure de Chimie Physique Electronique de Lyon (CPE),
						France
					</h2>
					<div class="bloc_contenu">
						<span class="label label-info">2011-2014</span>
						<p>
							<br />Cycle ingénieur dans la fillière Electronique,
							Télécommunication et Informatique (ETI) de CPE de Lyon.
						</p>
						<dl class="dl-horizontal">
							<dt>Logiciel :</dt>
							<dd>Word, LaTex, Open Office, Excel, Powerpoint , Matlab, Pspice,
								Eclipse, Subversion, Git</dd>
							<dt>Systèmes :</dt>
							<dd>Windows Seven / XP, Linux (Ubuntu, Mint)</dd>
							<dt>Technologies Web :</dt>
							<dd>HTML5, CSS3</dd>
							<dt>Programmation :</dt>
							<dd>C/C++, Java, PHP, Assembleur, SQL,</dd>
							<dt>Frameworks :</dt>
							<dd>
								Qt, <strong>Android</strong>, SDL, SFML
							</dd>
						</dl>

						<a href="http://www.cpe.fr/">Accès directement au site officiel </a><br />
						<br /> <img src="img/CPE.png">
					</div>

					<h2>Institution des Chartreux, Lyon, France</h2>

					<div class="bloc_contenu">
						<span class="label label-info">2009-2011</span>
						<p>
							<br />Classes préparatoires intégrées à CPE Lyon, section
							Sciences de l'Ingénieur (<strong>SI</strong>).<br /> <br />
							Matières principales :
						
						
						<ul>
							<li>Mathématique</li>
							<li>Physique</li>
							<li>Mécanique</li>
						</ul>
						<a href="www.prepa-cpe.fr/">Accès directement au site officiel </a><br />
						<br /> <img src="img/chartreux.png">
					</div>


					<h2>Lycée "Aux Lazaristes", Lyon, France</h2>
					<div class="bloc_contenu">
						<span class="label label-info">2008-2011</span>
						<p>
							<br />Bac Scientifique fillière Science de l'ingénieur (SI) –
							spécialité Mathématiques
						</p>
						<a href="http://www.auxlazaristes.fr/">Accès directement au site
							officiel </a><br /> <br /> <img src="img/lazo.png" width="350"
							height="200">
					</div>
				</div>
			</div>
		</section>
		<div class="scrollTop" id="scrollTop">
			<a href="#">↑Top↑</a>
		</div>

		<footer>
			© 2013 - Flavien Bert - Tous droits réservés<br /><br /> <a
				href="https://plus.google.com/u/0/118079000973244861908/posts"><img
				src="img/g+.jpg" width="36px" height="36px"> </a>
		</footer>
	</div>
	<script type="text/javascript" src="js/slider.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
