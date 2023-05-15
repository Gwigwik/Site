<?php
	session_start();
	include_once('varSession.inc.php');
	include_once('bdd.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Site de vente</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	</head>
	<body>
		<header>
			<?php include_once('php/header.php'); ?>
		</header>
		<div id=MenuFooter>
			<div id="MenuPrincipalI">

				<?php include_once('php/menuC.php'); ?>

				<div id="Principal">
				 	<p id="PTitre">Bienvenue chez CatComp !</br></br>Nous sommes une compagnie qui vous propose tout ce dont vous avez besoin pour prendre soin de votre chat !</br></br></p>
				 	<div id="images">
						<div class="image">
							<p><a href="produits.php?cat=croquette"><img alt="Logo Croquettes" src="img/croquettes.jpg"height="250" width="250">Croquettes</a></p>
						</div>
						<div class="image">
							<p><a href="produits.php?cat=jouet"><img alt="Logo Jouets" src="img/jouets.jpg" height="250" width="250">Jouets</a></p>
						</div>
						<div class="image">
							<p><a href="produits.php?cat=arbre"><img alt="Logo Arbres à chats" src="img/arbres.jpg"height="250" width="250">Arbres à chat</a></p>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<?php include_once('php/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>

