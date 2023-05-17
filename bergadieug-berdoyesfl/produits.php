<?php
	session_start();
	include_once('bdd/bddData.php');
	include_once('bdd/bdd.php');
	/*
	foreach($_SESSION['produits'] as $produit) :
		if (isset($_POST[$produit['alt']])) {
			$_SESSION[$produit['alt']] = $_POST[$produit['alt']];
		}
	endforeach*/
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
			<div id="MenuPrincipalA">

				<?php include_once('php/menuC.php'); ?>

				<div id="Principal">
					<table id="tableau" border="1">
						<thead>
							<tr><th>Photo</th><th>Référence</th><th>Désignation</th><th>Prix</th><th class=stock>Stock</th><th>Commande</th></tr>
						</thead>
						<tbody>
							<?php foreach($_SESSION['produits'] as $produit) :
								if ($produit['type'] == $_GET['cat']) {
									//echo '<form action="produits.php?cat='.$_GET['cat'].'" method="post">';
									echo '<tr>';
									echo '<td><div id='.$produit['id'].' />';
									echo '<img alt='.$produit['alt'].' class="images"'.' src='.$produit['src'].' height="250" width="250"'.' onclick='.$produit['onClick'].' /></td>';
									echo '<td>'.$produit['alt'].'</td>';
									echo '<td>'.$produit['description'].'</td>';
									echo '<td>'.$produit['prix'].'€</td>';
									echo '<td class=stock><label id='.$produit['stockId'].'>'.$produit['stock'].'</label></td>';
									echo '<td><button disabled id='.$produit['bMId'].' type=button onclick='.$produit['bMClick'].'>-</button>';
									echo '<input type=text id='.$produit['inputId'].' size=1 value=0 name ='.$produit['alt'].' onInput='.$produit['onInput'].'>';
									echo '<button id='.$produit['bPId'].' type=button onclick='.$produit['bPClick'].'>+</button></br></br>';
									echo '<button './*type ="submit"*/' id='.$produit['bE'].' onclick=ajouterPanier('.$produit['inputId'].','.$produit['stockId'].') type=button>Ajouter au panier</button></td>';
									echo '</tr>';
									//echo '</form>';
								}
							endforeach ?>
						</tbody>
					</table>
					<button type="button" onClick=cacher(tableau)><label id=cS>Afficher stock</label></button>
				</div>
			</div>
			<footer>
				<?php include_once('php/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>