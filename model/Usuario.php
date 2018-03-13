<?php

namespace model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Luan Souza Montanari
 */
class Usuario {
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $loginUsuario;
    private $senhaUsuario;
    private $tipoUsuario;
    private $statusUsuario;
            
    function __construct($idUsuario=null , $nomeUsuario=null, $emailUsuario=null, $loginUsuario=null, $senhaUsuario=null, $tipoUsuario=null, $statusUsuario=null) {
        $this->idUsuario = $idUsuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->loginUsuario = $loginUsuario;
        $this->senhaUsuario = $senhaUsuario;
        $this->tipoUsuario = $tipoUsuario;
        $this->statusUsuario=$statusUsuario;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmailUsuario() {
        return $this->emailUsuario;
    }

    function getLoginUsuario() {
        return $this->loginUsuario;
    }

    function getSenhaUsuario() {
        return $this->senhaUsuario;
    }

    function getTipoUsuario() {
        return $this->tipoUsuario;
    }
    
    function getStatusUsuario() {
        return $this->statusUsuario;
    }

        
    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setLoginUsuario($loginUsuario) {
        $this->loginUsuario = $loginUsuario;
    }

    function setSenhaUsuario($senhaUsuario) {
        $this->senhaUsuario = $senhaUsuario;
    }

    function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    function setStatusUsuario($statusUsuario) {
        $this->statusUsuario = $statusUsuario;
    }


    
}
