<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_SESSION[$_POST['alt']])) {
            $_SESSION[$_POST['alt']] += $_POST['inputId'];
        } else {
            $_SESSION[$_POST['alt']] = $_POST['inputId'];
        }
    }
?>