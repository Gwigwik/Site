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
				 	<p>Demande de contact</br></p>
				 	<table border="0">
						<tbody>
							<form method="get" action="">
								<tr>
									<td>Date du contact</td><td><input type="date" id="dateC" name="dateC" required></td>
								</tr>
								<tr>
									<td>Nom</td><td><input type="text" id="nom" name="nom" required minlength="1" maxlength="20" size="20" placeholder="Entrez votre nom"></td>
								</tr>
								<tr>
									<td>Prenom</td><td><input type="text" id="prenom" name="prenom" required minlength="1" maxlength="20" size="20" placeholder="Entrez votre prenom"></td>
								</tr>
								<tr>
									<td>Email</td><td><input type="text" id="email" name="email" required minlength="1" maxlength="30" size="20" placeholder="monmail@monsite.org" onInput=verif()></td>
									<td><label id="lMail">Format : monmail@monsite.org</label></td>
								</tr>
								<tr>
									<td>Genre</td><td><input type="radio" name="genre" id="femme"><label for="femme">Femme</label>
									<input type="radio" name="genre" id="homme"><label for="homme">Homme</label>
									<input type="radio" name="genre" id="autre"><label for="autre">Autre</label></td>
								</tr>
								<tr>
									<td>Date de naissance</td><td><input type="date" id="dateN" name="dateN" required></td>
								</tr>
								<tr>
									<td>Fonction</td>
									<td>
										<select name="choix" id="choix" required>
										<option value="">- - Sélectionner votre métier - -</option>
										<option value="Admin">Administratif</option>
										<option value="Aéro">Aéronautique</option>
										<option value="Agri">Agriculture</option>
										<option value="Agro">Agroalimentaire</option>
										<option value="Arti">Artisanat</option>
										<option value="BTP">BTP</option>
										<option value="Compta">Comptabilité</option>
										<option value="Enseign">Enseignement</option>
										<option value="Public">Fonction publique</option>
										<option value="Journ">Journalisme</option>
										<option value="Int">Internet</option>
										<option value="Medic">Médical</option>
										<option value="Music">Musique</option>
										<option value="Sport">Sport</option>
										<option value="Transp">Transports</option></select>
									</td>
								</tr>
								<tr>
									<td>Sujet</td><td><input type="text" id="sujet" name="sujet" required minlength="1" maxlength="50" size="20" placeholder="Entrez le sujet de votre mail"></td>
								</tr>
								<tr>
									<td>Contenu</td><td><textarea id="contenu" name="contenue" rows="5" cols="50" placeholder="Tapez ici votre mail" required></textarea></td>
								</tr>
								<tr>
									<td></td><td></td><td><input type="submit" value="Envoyer"></td><td></td>
								</tr>
							</form>
						</tbody>
					</table>
				</div>
			</div>
			<footer>
				<?php include_once('php/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>
