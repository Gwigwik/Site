<?php
function connectToDatabase($hostname, $username, $password, $database)
{
    // Créer une connexion à la base de données
    $conn = new mysqli($hostname, $username, $password, $database);

    // Vérifier les erreurs de connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Définir le jeu de caractères de la connexion
    $conn->set_charset("utf8");

    // Retourner la connexion établie
    return $conn;
}

$conn = connectToDatabase("localhost", "user", "aaaAAA111///", "catcomp");

$file = fopen("sql/catcompdata.sql", "a");

foreach($produits as $produit) {
    fwrite($file, 'INSERT INTO Produits VALUES('.$produit['type'].');'."\n");
}
    

// Close the file
fclose($file);

// Fermer la connexion lorsque vous avez terminé
$conn->close();
?>