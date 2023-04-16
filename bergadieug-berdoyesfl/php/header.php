<div id="Header">
	<div id="HTitre"><img alt="Logo patte" src="img/patte.jpg" height="50" width="50">CatComp<img alt="Logo patte" src="img/patte.jpg" height="50" width="50"></div>
	
	
    <!-- Si l'utilisateur existe, on l'affiche -->
	<?php
	if (isset($_SESSION['id'])) {
		echo '<div id="Connect">'.$_SESSION['id'].'</div>';
	} else {
		echo '<div id="Connect">Non connecté</div>';
	}
	?>
	
	<ul id="Hul">
	<div class="colonne">
		<li><a href="index.php">Accueil</a></li> 
	</div>
	<div class="colonne">
		<li><a href="produits.php?cat=croquette">Croquettes</a></li> 
	</div>
	<div class="colonne">
		<li><a href="produits.php?cat=jouet">Jouets</a></li> 
	</div>
	<div class="colonne">
		<li><a href="produits.php?cat=arbre">Arbres à chat</a></li> 
	</div>
	<div class="colonne"> 
		<li><a href="panier.php">Panier</a></li> 
	</div>
	<div class="colonne"> 
		<li><a href="contact.php">Contact</a></li> 
	</div>
	<div>
		<li>
			<?php
			if (!isset($_SESSION['id'])) {
				echo '<a href="connexion.php">Connexion</a>';
			} else {
				echo '<a href="connexion.php">Déconnexion</a>';
			}
			?>
		</li> 
	</div>
	</ul>
</div>
