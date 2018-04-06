<?php

namespace controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/Usuario.php';
require_once '../dao/UsuarioDao.php';

use dao\UsuarioDao;
use model\Usuario;

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuarioDao = new UsuarioDao();

$usuario = new Usuario();
$usuario = $usuarioDao->logar($login, $senha);

if ($usuario == null) {

    $msg = "usuário e senha inválidos";
    
} else {
    $status = $usuario->getStatusUsuario();
    if ($status == 'pendente') {
        $msg = 'seu cadastro não foi ativado ainda, aguarde o adiministrador do sistema avalia-lo';
    } else if ($status == 'desativado') {
        $msg = 'seu cadastro  foi  desativado entre em contato com o adiministrador do sistema para ativar';
    } else {
        session_start();
        $_SESSION['id'] = $usuario->getIdUsuario();
        $_SESSION['nome'] = $usuario->getNomeUsuario();
        $_SESSION['login'] = $usuario->getLoginUsuario();
        $_SESSION['email'] = $usuario->getEmailUsuario();
        $_SESSION['tipo'] = $usuario->getTipoUsuario();
        $_SESSION['status'] = $usuario->getStatusUsuario();
        
        header('location:../index.php');
    }
    
    header('location:../login.php?msg=' . $msg);

    //var_dump($_SESSION);

    /* if($_SESSION['tipo']='usuario'){
      header();
      } else if ($_SESSION['tipo']='administrador') {
      header();
      } */
}