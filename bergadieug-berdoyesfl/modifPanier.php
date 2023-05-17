<?php
    session_start();

    //Mise à jour du panier
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_SESSION[$_POST['alt']])) {
            $_SESSION[$_POST['alt']] += $_POST['inputId'];
        } else {
            $_SESSION[$_POST['alt']] = $_POST['inputId'];
        }
    }

    //Mise à jour de la base de données
    function connexion($hostname, $user, $mdp, $database) {
        $conn = new mysqli($hostname, $user, $mdp, $database);
        if ($conn->connect_error) { die("Erreur de connexion à la base de données : " . $conn->connect_error); }
        $conn->set_charset("utf8");
        return $conn;
    }
    
    function modification($conn, $alt, $stock) {
        return mysqli_query($conn, 'UPDATE Produits SET stock = '.$stock.' WHERE alt LIKE "'.$alt.'"'); 
    }

    function deconnexion($conn) { $conn->close(); }

    $conn = connexion($_SESSION['hostname'], $_SESSION['idBdd'], $_SESSION['mdpBdd'], $_SESSION['database']);
    modification($conn, $_POST['alt'], $_POST['stockId']);
    deconnexion($conn);
?>