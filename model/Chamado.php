<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of Chamado
 *
 * @author Luan Souza Montanari
 */
class Chamado {
    private $idChamado;
    private $idRequerenteChamado;
    private $idTecnicoChamado;
    private  $idSupervisorChamado;
    private $prioridadeChamado;
    private $statusChamado;
    private $dataEmissaoChamado;
    private $dataAceitacaoChamado;
    private $dataConclusaoChamado;
    private $descricaoRequerenteChamado;
    private $descricaoTecnicoChamado;
    private $descricaoSupervisorChamado;
    private $dependenciaExternaChamado;
    
    function __construct($idChamado=null, $idRequerenteChamado=null, $idTecnicoChamado=null, $idSupervisorChamado=null, $prioridadeChamado=null, $statusChamado=null, $dataEmissaoChamado=null, $dataAceitacaoChamado=null, $dataConclusaoChamado=null, $descricaoRequerenteChamado=null, $descricaoTecnicoChamado=null, $descricaoSupervisorChamado=null, $dependenciaExternaChamado=null) {
        $this->idChamado = $idChamado;
        $this->idRequerenteChamado = $idRequerenteChamado;
        $this->idTecnicoChamado = $idTecnicoChamado;
        $this->idSupervisorChamado = $idSupervisorChamado;
        $this->prioridadeChamado = $prioridadeChamado;
        $this->statusChamado = $statusChamado;
        $this->dataEmissaoChamado = $dataEmissaoChamado;
        $this->dataAceitacaoChamado = $dataAceitacaoChamado;
        $this->dataConclusaoChamado = $dataConclusaoChamado;
        $this->descricaoRequerenteChamado = $descricaoRequerenteChamado;
        $this->descricaoTecnicoChamado = $descricaoTecnicoChamado;
        $this->descricaoSupervisorChamado = $descricaoSupervisorChamado;
        $this->dependenciaExternaChamado = $dependenciaExternaChamado;
    }
    
    function getIdChamado() {
        return $this->idChamado;
    }

    function getIdRequerenteChamado() {
        return $this->idRequerenteChamado;
    }

    function getIdTecnicoChamado() {
        return $this->idTecnicoChamado;
    }

    function getIdSupervisorChamado() {
        return $this->idSupervisorChamado;
    }

    function getPrioridadeChamado() {
        return $this->prioridadeChamado;
    }

    function getStatusChamado() {
        return $this->statusChamado;
    }

    function getDataEmissaoChamado() {
        return $this->dataEmissaoChamado;
    }

    function getDataAceitacaoChamado() {
        return $this->dataAceitacaoChamado;
    }

    function getDataConclusaoChamado() {
        return $this->dataConclusaoChamado;
    }

    function getDescricaoRequerenteChamado() {
        return $this->descricaoRequerenteChamado;
    }

    function getDescricaoTecnicoChamado() {
        return $this->descricaoTecnicoChamado;
    }

    function getDescricaoSupervisorChamado() {
        return $this->descricaoSupervisorChamado;
    }

    function getDependenciaExternaChamado() {
        return $this->dependenciaExternaChamado;
    }

    function setIdChamado($idChamado) {
        $this->idChamado = $idChamado;
    }

    function setIdRequerenteChamado($idRequerenteChamado) {
        $this->idRequerenteChamado = $idRequerenteChamado;
    }

    function setIdTecnicoChamado($idTecnicoChamado) {
        $this->idTecnicoChamado = $idTecnicoChamado;
    }

    function setIdSupervisorChamado($idSupervisorChamado) {
        $this->idSupervisorChamado = $idSupervisorChamado;
    }

    function setPrioridadeChamado($prioridadeChamado) {
        $this->prioridadeChamado = $prioridadeChamado;
    }

    function setStatusChamado($statusChamado) {
        $this->statusChamado = $statusChamado;
    }

    function setDataEmissaoChamado($dataEmissaoChamado) {
        $this->dataEmissaoChamado = $dataEmissaoChamado;
    }

    function setDataAceitacaoChamado($dataAceitacaoChamado) {
        $this->dataAceitacaoChamado = $dataAceitacaoChamado;
    }

    function setDataConclusaoChamado($dataConclusaoChamado) {
        $this->dataConclusaoChamado = $dataConclusaoChamado;
    }

    function setDescricaoRequerenteChamado($descricaoRequerenteChamado) {
        $this->descricaoRequerenteChamado = $descricaoRequerenteChamado;
    }

    function setDescricaoTecnicoChamado($descricaoTecnicoChamado) {
        $this->descricaoTecnicoChamado = $descricaoTecnicoChamado;
    }

    function setDescricaoSupervisorChamado($descricaoSupervisorChamado) {
        $this->descricaoSupervisorChamado = $descricaoSupervisorChamado;
    }

    function setDependenciaExternaChamado($dependenciaExternaChamado) {
        $this->dependenciaExternaChamado = $dependenciaExternaChamado;
    }



}
