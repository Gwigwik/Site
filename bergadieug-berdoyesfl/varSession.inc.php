<?php

//$_SESSION['produits'] = json_decode(file_get_contents('json/produits.json'), true);

// Charger le fichier XML
$xml = simplexml_load_file('xml/users.xml');

// Initialiser le tableau d'utilisateurs
$utilisateurs = array();

// Parcourir les éléments "user" du fichier XML et les ajouter au tableau d'utilisateurs
foreach ($xml->user as $user) {
    $utilisateurs[] = array(
        'id' => (string) $user->id,
        'mdp' => (string) $user->mdp
    );
}

?>