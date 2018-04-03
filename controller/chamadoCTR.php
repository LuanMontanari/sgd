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
    $id_requerente =  $_POST['id_requerente'];
    $id_tecnico =  $_POST['id_tecnico'];
    $id_supervisor = $_POST['id_supervisor'];
    $prioriodade = $_POST['prioridade'];
    $status = $_POST['status'];
    $desc_requerente = $_POST['desc_requerente'];
    $desc_tecnico = $_POST['desc_tecnico'];
    $desc_supervisor = $_POST['desc_supervisor'];

    if ($_SESSION['tipo'] == 'adiministrador') {
        $chamado = new Chamado($id, $id_requerente, $id_tecnico, $id_supervisor, $prioriodade, $status, $desc_requerente, $desc_tecnico, $desc_supervisor, null);
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
}