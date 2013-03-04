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
<title>Bert Flavien - Projets</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="icon" type="image/png" href="img/title.png" />
<link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css"
	media="screen" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/animation_nav_projets.js"></script>
<script type="text/javascript" src="js/nav_projets.js"></script>
<script type="text/javascript" src="js/imgProjet.js"></script>
<script type="text/javascript" src="js/zoombox/zoombox.js"></script>
<script type="text/javascript">
jQuery(function($){
    $('a.zoombox').zoombox({
    	autoplay:true,
    	overflow:true,
    	theme:'prettyphoto',
    	width:800,
    	height:300
   	});
});
</script>

<script type="text/javascript">
$(function(){
    $('a[href^=#]').click(function(){
        cible=$(this).attr('href');
            hauteur=$(cible).offset().top - 100;
            $('html,body').animate({
                scrollTop:hauteur
            },1000);
    });
});
</script>

<script type='text/javascript'>
$(window).load(function(){
	var lastId=-1,
	topMenu = $("#nav_projets"),
	topMenuHeight = topMenu.outerHeight()+65,
	menuItems = topMenu.find("a"),
	scrollItems = menuItems.map(function(){
	var item = $($(this).attr("href"));
	if (item.length) { 
		return item; 
		}
	});

	$(window).scroll(function(){
		var fromTop = $(this).scrollTop()+topMenuHeight;
		var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
			return this;
			});
		cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";
		if (lastId !== id) {
		lastId = id;
		menuItems.parent().removeClass("active").end().filter("[href=#"+id+"]").parent().addClass("active");
		} 
	});
});
</script>




<body>
<?php include_once("analyticstracking.php") ?>

	<div id="projet">
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
								<li class="active"><a href="projet.php"><img
											src="img/icons/valise.png" width="21px" height="21px"> &nbsp;
										Projets</a>
									
									
									
									</li>
								<li class="divider-vertical"></li>
								<li><a href="contact.php"><img src="img/icons/email.png"
											width="21px" height="21px"> &nbsp;Contact</a>
									
									
									
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


			<div class="btn-group">
				<a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"
						href="#"> <span>Liste des Projets</span> &nbsp;&nbsp;<img
						src="img/more.png" width="30px" height="30px">
				</a>
				<ul class="dropdown-menu">
					<li><a href="#notecpe"> Notes CPE (Android)</a>
						
						
						
						</li>
					<li><a href="#dijkstra">Dijkstra (C++/C)</a>
						
						
						
						</li>
					<li><a href="#pepite_land">Jeu Vidéo 2D (C++ avec Qt)</a>
						
						
						
						</li>
					<li><a href="#quaternions">Les Quaternions (C++)</a>
						
						
						
						</li>
				</ul>
			</div>

		</div>

		<div class="banniere">
		<h1>mes projets personnels</h1>
		</div>


	<div id="nav_projets">
		<ul >
			<li ><a class="active" href=#allProjets>MES PROJETS</a>
			
			
			
			</li>
			<li><a href=#notecpe>NOTES CPE</a>
			
			
			
			</li>
			<li><a href=#dijkstra>DIJKSTRA</a>
			
			
			
			</li>
			<li><a href=#pepite_land>PEPITE LAND</a>
			
			
			
			</li>
			<li><a href=#quaternions>QUATERNIONS</a>
			
			
			
			</li>
		</ul>
		</div>
		
	</header>
		<section>				
		<div id="allProjets" class="allProjets">
			<div class="content_projets" id="content_projets">

				<a href="#notecpe"> <span class="title">Notes CPE</span> <span
					class="descr">Application Android permettant aux étudiants de CPE
						d'avoir accès rapidement à leurs notes avec un système de
						notification</span> <span class="bg"></span> <img
					src="img/projets/noteCPE/notecpe.png" />
				</a> <a href="#dijkstra"> <span class="title">Dijkstra</span> <span
					class="descr">Étude et implémentation de l'algorithme de Dijkstra
						et k-plus courts chemins en C++/C</span> <span class="bg"></span>
					<img src="img/projets/dijkstra/graph.png" />
				</a> <a href="#pepite_land"> <span class="title">Pépite Land</span>
					<span class="descr">Jeu Vidéo 2D implémenté en C++ avec le
						FrameWork Qt</span> <span class="bg"></span> <img
					src="img/projets/pepite_land/pepite16.png" />
				</a> <a href="#quaternions"> <span class="title">Les Quaternions</span>
					<span class="descr">Étude et implémentation en C++ des quaternions
						très utilisés pour les applications 3D </span> <span class="bg"></span>
					<img src="img/projets/quaternions/axe.png" />
				</a>
			</div>

		</div>
			
			<div id="notecpe">
			
				<h2>
					Notes de CPE (Android)
				</h2>
								
				<h3>Présentation</h3>

				<div class="bloc_contenu">
					<span class="label label-info">2012 - 2013</span><br /> <br />
					<p>Bientôt disponible...</p>

				</div>

				<h3 id="notecpe_plus">Téléchargements</h3>

				<div class="bloc_contenu">
					La version PDF du compte rendu de projet est indisponnible pour le
					moment. <br /> <br /> Le code source du projet est indisponible en
					format compresser.

				</div>
			</div>

		<div class="line_horizontale"></div>
			
			<div id="dijkstra">
				<h2>
					Algorithme de Dijkstra (C++)
				</h2>

				<h3>Présentation</h3>

				<div class="bloc_contenu">
					<span class="label label-info">2012 - 2013</span><br /> <br />
					<p>Lors de ma 4ème année d'école d'ingénieur, mon collègue et
						moi-même avons implémenté un projet de graphes et algorithmique en
						langage C. Nous avons décidé d'étudier l'algorithme très populaire
						de Dijkstra et celui des k-plus courts chemins beaucoup moins
						fréquent.</p>
					<p>Ne voulant pas attendre que ce chemin apparaisse de lui même,
						nous avons reproduit ces algorithmes vieux de 40 ans qui de nos
						jours restent des références.Qu'il s'agisse de problèmes
						d'optimisation réseaux, d'ordonnancement ou dans le domaine
						d'intelligence artificielle, l'algorithme de Dijkstra est une
						solution rapide et efficace.</p>
					<p>Nous avons réussi à obtenir des résultats concrets
						satisfaisants. En effet, nous affichont le graphe initiale et les
						différents chemins obtenus sur un fichier .png afin de faciliter
						la lecture.</p>
					<p>En revanche, nous avons implémenté nos algorithmes avec le
						langage C. Étant un langage bas niveau nous avons du coder
						l'ensemble des fonctions élémentaires afin de pouvoir manier les
						piles. Ainsi, pour rendre plus lisible notre code, on aurait pu
						utiliser la librairie STL du C++.</p>
					Pour avoir plus d'informations sur ce projet, <a
						href="#dijkstra_plus">cliquez-ici</a>

				</div>

				<h3>Images</h3>

				<div class="bloc_contenu_img">
					<div class="galerie">
						<?php 
						$dos = "img/min/dijkstra/";
						$dir = opendir($dos);
						while ($file = readdir($dir)){
							$allow_ext = array("jpg",'png','gif');
							$ext = strtolower(substr($file, -3));
							if(in_array($ext, $allow_ext)){
								?>
						<div class="min">
							<a class="zoombox zgallery3 "
								href="img/min/dijkstra/<?php echo $file; ?>"><img
								src="img/min/dijkstra/<?php echo $file; ?>" /> </a>
						</div>
						<?php 								
							}
						}
						?>
					</div>
				</div>

				<h3 id="dijkstra_plus">Téléchargements</h3>

				<div class="bloc_contenu">
					La version PDF du compte rendu de projet est disponnible : <a
						href="img/projets/dijkstra/rapport-dijkstra.pdf"><img
						src="img/pdf.png" width="50" height="50"> </a><br /> <br /> Le
					code source du projet est disponible en format compresser :<a
						href="img/projets/dijkstra/Dijkstra.tar.gz"><img src="img/tar.png"
						width="50" height="50"> </a><br /> <br />
				</div>
			</div>
		<div class="line_horizontale"></div>
			


			<div id="pepite_land">
				<h2>
					Pépite Land (C++)
				</h2>

				<h3>Présentation</h3>

				<div class="bloc_contenu">
					<span class="label label-info">2011 - 2012</span><br /> <br />
					<p>Dans le cadre de mini-projet en langage C++ et pour l'attirance
						personnelle pour les jeux vidéos, mon partenaire et moi-même avons
						choisi d'implémenter un jeu vidéo en 2 dimensions orienté objet
						avec la librairie Qt. Nous avons conçu et codé le jeu pendant la
						1ère année d'école d'ingénieur.</p>
					<p>Pour parvenir à concevoir ce jeu vidéo, nous avions quelques
						séances avec des professeurs pour nous guider mais une grande
						partie de notre apprentissage s'est faite de manière autodidacte
						sur internet en parcourant des forums et les documentations
						officielles de Qt principalement.</p>

					<p>
						Ce projet nous a pris beaucoup de temps lors du second semestre,
						mais tout ce temps passé pour la création du jeu vidéo est
						bénéfique pour la suite en vue des résultats obtenus, de
						l'expériences acquises et on a appris à effectuer un travail
						d'équipe en se séparant les différentes tâches judicieusement. En
						effet, sur le plan personnel ce projet est une réussite permettant
						de comprendre les fondamentaux du langage C++ et de découvrir
						l'utilité et la richesse de bibliotèques extrement vaste tel que
						Qt. De plus, nous avons eu l'occasion de mettre en place des
						patterns très utilisés dans les différents domaines de
						l'informatique: le pattern <strong>MVC</strong> et le pattern <strong>Oberver</strong>.
						Ils sont très utiles facilitant l'implémentation de notre code
						source.
					</p>
					Pour avoir plus d'informations sur ce projet, <a
						href="#pepite_land_plus">cliquez-ici</a>

				</div>

				<h3>Images</h3>

				<div class="bloc_contenu_img">
					<div class="galerie">
						<?php 
						$dos = "img/min/pepite_land/";
						$dir = opendir($dos);
						while ($file = readdir($dir)){
							$allow_ext = array("jpg",'png','gif');
							$ext = strtolower(substr($file, -3));
							if(in_array($ext, $allow_ext)){
								?>
						<div class="min">
							<a class="zoombox zgallery2 "
								href="img/min/pepite_land/<?php echo $file; ?>"><img
								src="img/min/pepite_land/<?php echo $file; ?>" /> </a>
						</div>
						<?php 								
							}
						}
						?>
					</div>
				</div>

				<h3 id="pepite_land_plus">Téléchargements</h3>

				<div class="bloc_contenu">
					La version PDF du compte rendu de projet est disponnible : <a
						href="img/projets/pepite_land/compte-renduPepiteLand.pdf"><img
						src="img/pdf.png" width="50" height="50"> </a><br /> <br /> Le
					code source du projet est disponible en format compresser :<a
						href="img/projets/pepite_land/pepite_land.tar.gz"><img
						src="img/tar.png" width="50" height="50"> </a><br /> <br />
				</div>
			</div>
		<div class="line_horizontale"></div>
			
			<div id="quaternions">
				<h2>
					Les Quaternions (<strong>C++</strong>)
				</h2>

				<h3>Présentation</h3>

				<div class="bloc_contenu">
					<span class="label label-info">2011 - 2012</span><br /> <br />
					<p>Lors de ma 3ème année d'école d'ingénieur, deux collègues et
						moi-même avons implémenté une application mettant en oeuvre
						l'utilité des quaternions en langage C++. En effet, les
						quaternions sont très utiles et performant pour exécuter des
						rotations 3D.</p>
					<p>Le but de cette étude est de modéliser l'animation 3D d'un bras
						informatiquement. Nous aurions pu utiliser les angles d'Euler,
						mais les quaternions permettent de faciliter le traitement grâce à
						leurs propriétés (un angle, un axe). Nous avons effectuer une
						étude sur l'ensemble des propriétés des quaternions afin de
						pouvoir les extraire pour notre application.</p>
					<p>On définira comment passer d'une position à une autre de façon
						droite, continue et homogène. Puis nous avons amélioré le
						mouvement de sorte à ce qu'il prenne des formes différentes, non
						droites, entre autre avec les notions de courbes de Bézier et de
						Splines.</p>
					<p>Nous avons réussi à créer une animation fluide grâce aux
						quaternions et aux courbes de Bézier et aux Splines. Ainsi, nous
						avons animer un bras. Mais, avec l'étude que l'on a fait, on
						pourrait, non pas créer des animations en restant sur une sphère,
						mais on pourrait définir des formes géométriques complexes en 3D.
					</p>
					Pour avoir plus d'informations sur ce projet, <a
						href="#quaternions_plus">cliquez-ici</a>

				</div>

				<h3>Images</h3>

				<div class="bloc_contenu_img">
					<div class="galerie">
						<?php 
						$dos = "img/min/quaternions/";
						$dir = opendir($dos);
						while ($file = readdir($dir)){
							$allow_ext = array("jpg",'png','gif');
							$ext = strtolower(substr($file, -3));
							if(in_array($ext, $allow_ext)){
								?>
						<div class="min">
							<a class="zoombox zgallery4 "
								href="img/min/quaternions/<?php echo $file; ?>"><img
								src="img/min/quaternions/<?php echo $file; ?>" /> </a>
						</div>
						<?php 								
							}
						}
						?>
					</div>
				</div>

				<h3 id="quaternions_plus">Téléchargements</h3>

				<div class="bloc_contenu">
					La version PDF du compte rendu de projet est disponnible : <a
						href="img/projets/quaternions/quaternion.pdf"><img
						src="img/pdf.png" width="50" height="50"> </a><br /> <br /> Le
					code source du projet est disponible en format compresser :<a
						href="img/projets/quaternions/sources_quaternions.tar.gz"><img
						src="img/tar.png" width="50" height="50"> </a><br /> <br />
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
