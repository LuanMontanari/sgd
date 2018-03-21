<?php
require_once 'util/seguranca.php';

if ($_SESSION['tipo'] == 'adiministrador') {
    $location = 'menu_admin.php';
} else if($_SESSION['tipo'] == 'usuario') {
    $location = 'menu_user.php';
}

 
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SGD </title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">Sistema</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php include $location?>

                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="d-lg-none">Chamados
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header"><?= $_SESSION['nome'] ?></h6>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="perfil.php">Minha conta</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="controller/logout.php" >
                            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
          