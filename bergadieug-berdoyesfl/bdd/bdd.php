<?php
function connexion($hostname, $user, $mdp, $database) {
    //Créer une connexion à la base de données
    $conn = new mysqli($hostname, $user, $mdp, $database);

    // Vérifier les erreurs de connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
    
    return $conn;
}

function deconnexion($conn) {
    $conn->close();
}

function recuperation($conn, $table, $categorie) {
    if ($categorie == '') { $req = 'SELECT * FROM '.$table; }
    else { $req = 'SELECT * FROM '.$table.' WHERE type LIKE "'.$categorie.'"'; }
    
    //Envoi de la requête sql
    if (!mysqli_query($conn, $req)) { return NULL; }
    else { return mysqli_query($conn, $req); }
}

$conn = connexion("localhost", $_SESSION['idBdd'], $_SESSION['mdpBdd'], "catcomp");

/*Remplissage de catcompdata.sql pour les produits
$file = fopen("sql/catcompdata.sql", "w");

foreach($produits as $produit) {
    fwrite($file, 'INSERT INTO Produits VALUES("'.$produit['type'].'", "'.$produit['id'].'", "'.$produit['alt'].'", "'.$produit['src'].'", "'.$produit['onClick'].'",
     "'.$produit['description'].'", "'.$produit['prix'].'", "'.$produit['stockId'].'", '.$produit['stock'].', "'.$produit['bMId'].'", "'.$produit['bMClick'].'", 
     "'.$produit['inputId'].'", "'.$produit['onInput'].'", "'.$produit['bPId'].'", "'.$produit['bPClick'].'", "'.$produit['bE'].'");'."\n");
}

fclose($file);
*/

$_SESSION['produits'] = recuperation($conn, "Produits", '');
$_SESSION['utilisateurs'] = recuperation($conn, 'Clients', '');

deconnexion($conn);

?>