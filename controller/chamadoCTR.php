<?php

namespace controller;

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
}

/*if(isset($_GET['acao'])&& $_GET['acao']=='listar'){
   $chamadoDao = new ChamadoDao();
 * $chamado = $chamadoDao->listar();
}*/