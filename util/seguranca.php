<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

function somente_admin() {
    if ($_SESSION['tipo'] != 'adiministrador') {
        header('location:C:/wamp/www/sgd/index.php');
    }
}

function expulsa_usuario() {
    if ($_SESSION['tipo'] == 'usuario') {
        header('location:C:/wamp/www/sgd/index.php');
    }
}

?>
