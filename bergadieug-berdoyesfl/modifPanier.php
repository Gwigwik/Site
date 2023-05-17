<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer la nouvelle valeur envoyée par la requête
        echo 'test';
        $alt = $_POST['alt'];
        $stock = $_POST['stock'];

        foreach($_SESSION['produits'] as $produit) :
            if (isset($_POST[$produit['alt']])) {
                $_SESSION[$produit['alt']] = $_POST[$produit['alt']];
            }
        endforeach;

    }
?>