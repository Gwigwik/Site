<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Site de vente</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<script type="text/javascript" src="js/scriptC.js"></script>
	</head>
	<body>
		<header>
			<?php include_once('php/header.php'); ?>
		</header>
		<div id=MenuFooter>
			<div id="MenuPrincipalC">

				<?php include_once('php/menuC.php'); ?>

				<div id="Principal">
					<form method="get" action="">
						<div id="Principal">
				 			<div>Connexion</br></br></br>
							</div>
							<div id="connexion">
					 			<table border="0">
									<tbody>
										<tr><td>Identifiant</td><td><input type="text" id="identifiant" name="identifiant" required minlength="1" maxlength="20" size="20" placeholder="Entrez votre identifiant"></td></tr>
										<tr><td>Mot de passe</td><td><input type="password" id="mdp" name="mdp" required minlength="5" maxlength="20" size="20" placeholder="Entrez votre mot de passe"></td></tr>
									</tbody>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>

			<footer>
				<?php include_once('php/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>
