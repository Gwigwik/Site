<?php

// submit_contact.php
if (!isset($_GET['dateC']) || !isset($_GET['nom']) || !isset($_GET['prenom']) || !isset($_GET['email']) || !isset($_GET['genre']) || !isset($_GET['dateN']) || !isset($_GET['choix']) || !isset($_GET['sujet']) || !isset($_GET['contenu']))
{?>
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
                        <p>Champs manquants ou incorrects</br></p>
                    </div>
                </div>
                <footer>
                    <?php include_once('php/footer.php'); ?>
                </footer>
            </div>
        </body>
    </html>
<?php    return; /*arrete le code ici dans le cas ou les champs ne sont pas bons*/
}
/* si on veut stocker les variables :
$dateC = $_GET['dateC'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['email'];
$genre = $_GET['genre'];
$dateN = $_GET['dateN'];
$choix = $_GET['choix'];
$sujet = $_GET['sujet'];
$contenu = $_GET['contenu'];
*/
?>

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
				 	<p>Demande de contact bien reçue</br></p>
				</div>
			</div>
			<footer>
				<?php include_once('php/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>