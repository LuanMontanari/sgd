<?php

namespace controller;
require_once '../util/seguranca.php';
require_once '../model/Chamado.php';
require_once '../dao/ChamadoDao.php';

use model\Chamado;
use dao\ChamadoDao;

if (isset($_POST['cadastrar'])) {
    $chamado = new Chamado();
    session_start();

    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, 'pt_BR');

    $id_requerente = $_SESSION['id'];
    $data_emissao = date("Y-m-d");
    $desc_requerente = $_POST['desc_requerente'];

    $chamado->setIdRequerenteChamado($id_requerente);
    $chamado->setDataEmissaoChamado($data_emissao);
    $chamado->setDescricaoRequerenteChamado($desc_requerente);

    $chamadoDao = new ChamadoDao();
    $chamadoDao->inserir($chamado);
    header('location:../cadastrar_chamado.php');
}

if (isset($_GET['acao']) && $_GET['acao'] == 'deletar') {
    $chamadoDao = new ChamadoDao();
    $id = (int) $_GET['id'];
    $chamadoDao->delete($id);
}

if (isset($_POST['atualizar'])) {
    $id =  $_POST['id'];
    if($_POST['id_requerente']== ''){
        $id_requerente = null;
    } else {
        $id_requerente =  $_POST['id_requerente'];
    }
    
    if($_POST['id_tecnico']==''){
        $id_tecnico =null;
    }else{
        $id_tecnico =  $_POST['id_tecnico'];
    }
    
    if($_POST['id_supervisor']==''){
        $id_supervisor =null;
    }else{
        $id_supervisor =  $_POST['id_supervisor'];
    }
    
    $prioridade = $_POST['prioridade'];
    $status = $_POST['status'];
    $desc_requerente = $_POST['desc_requerente'];
    $desc_tecnico = $_POST['desc_tecnico'];
    $desc_supervisor = $_POST['desc_supervisor'];

    if ($_SESSION['tipo'] == 'adiministrador') {
       // $chamado = new Chamado($id, $id_requerente, null, null, $prioriodade, $status, $desc_requerente, $desc_tecnico, $desc_supervisor, null);
       $chamado = new Chamado(); 
       $chamado->setIdChamado($id);
       $chamado->setIdRequerenteChamado($id_requerente);
       $chamado->setIdTecnicoChamado($id_tecnico);
       $chamado->setIdSupervisorChamado($id_supervisor);
       $chamado->setPrioridadeChamado($prioridade);
       $chamado->setStatusChamado($status);
       $chamado->setDescricaoRequerenteChamado($desc_requerente);
       $chamado->setDescricaoTecnicoChamado($desc_tecnico);
       $chamado->setDescricaoSupervisorChamado($desc_supervisor);
        var_dump($chamado);
        $chamadoDao = new ChamadoDao();
        $chamadoDao->alterar_adiministardor($chamado);
    } else if ($_SESSION['tipo'] == 'tecnico'){
        //$chamado = new Chamado($id, $id_requerente, $id_tecnico, $id_supervisor, $prioriodade, $status, $desc_requerente, $desc_tecnico, $desc_supervisor, null);
        $chamado = new Chamado();
        $chamado->setIdChamado($id);
        $chamado->setStatusChamado($status);
        $chamado->setDescricaoTecnicoChamado($desc_tecnico);
        
        $chamadoDao = new ChamadoDao();
        $chamadoDao->alterar_tecnico($chamado);
    }
    header('location:../alterar_chamado.php');
}