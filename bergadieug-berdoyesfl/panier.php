<?php
    session_start();
    include_once('varSession.inc.php');
    $somme = 0;
    foreach($produits as $produit) :
		if (isset($_POST[$produit['alt']])) {
			$_SESSION[$produit['alt']] = 0;
		}
        if (isset($_SESSION[$produit['alt']])) {
			$somme += $produit['prix']*$_SESSION[$produit['alt']];
		}
	endforeach
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
                    <table id="tableau" border="1">
                        <thead>
                            <tr><th>Photo</th><th>Référence</th><th>Désignation</th><th>Prix total</th><th>Commande</th><th>Somme : <?php echo $somme; ?>€</th></tr>
                        </thead>
                        <tbody>
                            <?php foreach($produits as $produit) :
                                if (isset($_SESSION[$produit['alt']]) && $_SESSION[$produit['alt']]!=0) {
                                    echo '<form action="panier.php" method="post">';
                                    echo '<tr>';
                                    echo '<td><div id='.$produit['id'].' />';
                                    echo '<img alt='.$produit['alt'].' class="images"'.' src='.$produit['src'].' height="250" width="250"'.' onclick='.$produit['onClick'].' /></td>';
                                    echo '<td>'.$produit['alt'].'</td>';
                                    echo '<td>'.$produit['description'].'</td>';
                                    echo '<td>'.$produit['prix']*$_SESSION[$produit['alt']].'€</td>';
                                    echo '<td class=stock><label id='.$produit['stockId'].'>'.$produit['stock'].'</label></td>';
                                    echo '<td>'.$_SESSION[$produit['alt']].'</td>';
                                    echo '<td><button type ="submit" id='.$produit['bE'].' name='.$produit['alt'].' type=button>Retirer</button></td>';
                                    echo '</tr>';
									echo '</form>';
                                }
                            endforeach ?>
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

