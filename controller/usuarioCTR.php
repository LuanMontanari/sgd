<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioCTR
 *
 * @author Luan Souza Montanari
 */
namespace controller;

require_once '../model/Usuario.php';
require_once '../dao/UsuarioDao.php';

use \dao\UsuarioDao;
use \model\Usuario;





if (isset($_GET['acao']) && $_GET['acao'] == 'deletar') {
$usarioDao = new UsuarioDao();
$id = (int) $_GET['id'];
$usarioDao->delete($id);
}

if (isset($_POST['atualizar'])) {
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo=$_POST['tipo'];
$usuario = new Usuario($id, $nome, $email, $login, $senha, $tipo);
$usuarioDao = new UsuarioDao();
if($senha==null || $senha==''){
    $usuarioDao->alterar($usuario);
} else {
    $usuarioDao->alterar_com_senha($usuario);
}


}

if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
$usuarioDao = new UsuarioDao();
$id = (int) $_GET['id'];
$resultado = $usuarioDao->find($id);
//var_dump($resultado);
//header('location:../alterar_usuario.php?resultado='.$resultado);

}
$usuarioDao = new UsuarioDao();
$usuario = $usuarioDao->listar();




if(isset($_POST['cadastrar'])){
$usuario = new Usuario();

$nomeUsuario = $_POST['nome'];
$emailUsuario = $_POST['email'];
$loginUsuario = $_POST['login'];
$senhaUsuario = $_POST['senha'];
//$tipoUsuario = $_POST['tipo'];

$usuario->setNomeUsuario($nomeUsuario);
$usuario->setEmailUsuario($emailUsuario);
$usuario->setLoginUsuario($loginUsuario);
$usuario->setSenhaUsuario($senhaUsuario);
//$usuario->setTipoUsuario($tipoUsuario);

$usuarioDao = new UsuarioDao();
$usuarioDao->inserir($usuario);
header('location:../cadastro.php');
}

/* fazer o controle de páginas com session

 * if ($_SESSION['tipo'] = adiministrador){
 *  header('location:listar_usuario_adimin.php')
 * }else{header('location:cadastrar.php') }
 *  */