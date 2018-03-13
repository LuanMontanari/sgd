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

$usuarioDao = new \dao\UsuarioDao();

$usuario = new \model\Usuario();
$usuario = $usuarioDao->logar($login, $senha);

if($usuario==null){
    
    $msg="<p>usuário e senha inválidos</p>";
    header('location:../login.php?msg='.$msg);
} else {
    session_start();
    $_SESSION['id']=$usuario->getIdUsuario();
    $_SESSION['nome']=$usuario->getNomeUsuario();
    $_SESSION['login']=$usuario->getLoginUsuario();
    $_SESSION['email']=$usuario->getEmailUsuario();
    $_SESSION['tipo']=$usuario->getTipoUsuario();
    $_SESSION['status']=$usuario->getStatusUsuario();
    
    //var_dump($_SESSION);
    
    /*if($_SESSION['tipo']='usuario'){
        header();
    } else if ($_SESSION['tipo']='administrador') {
        header();
    }*/
    
    
 header('location:../index.php');
}