<?php
namespace controller;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/Usuario.php';
require_once '../dao/UsuarioDao.php';
require_once '../util/seguranca.php';
use dao\UsuarioDao;
use model\Usuario;

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuarioDao = new \dao\UsuarioDao();


$result = $usuarioDao->logar($login, $senha);

$msg=null;

if($result==null){
    $msg="<p>usuário e senha inválidos</p>";
    header('location:../login.php');
} else {
    $_SESSION['id']=$result[0]['id'];
    $_SESSION['nome']=$result[0]['nome'];
    $_SESSION['login']=$result[0]['login'];
    $_SESSION['email']=$result[0]['email'];
    $_SESSION['tipo']=$result[0]['tipo'];
    $_SESSION['status']=$result[0]['status'];
    
    /*if($_SESSION['tipo']='usuario'){
        header();
    } else if ($_SESSION['tipo']='administrador') {
        header();
    }*/
    
 header('location:../index.php');
}