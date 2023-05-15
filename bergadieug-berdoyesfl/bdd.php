<?php
include_once('bddData.php');


function connexion(string $id, string $mdp) : bool
{
    $cnx = mysqli_connect('localhost', $id, $mdp);

    if (!$cnx) {
        return FALSE;
    } else {
        return TRUE;
    }
}

$cnx = connexion('user', 'aaaAAA111///');

function deconnexion(mysqli $cnx) : void
{
    mysqli_close($cnx);
    echo "Déconnexion réussie !<br>";
}

$cnx = connexion('user', 'aaaAAA111///');
deconnexion($cnx);
?>