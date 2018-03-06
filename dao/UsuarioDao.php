<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author Luan Souza Montanari
 */

namespace dao;
require_once '../util/Connection.php';
require_once  '../model/Usuario.php';

use PDO;
class UsuarioDao {
    const TABLE_USUARIO = 'usuario';
    private $connection;
    
    function __construct() {
        $this->connection = \util\Connection::getConnection();
    }

    public function inserir($usuario = null) {
        $var = $this->connection->prepare("insert into " . self::TABLE_USUARIO . "(nome, email, login, senha) values(:nome, :email, :login, :senha)");
        
        $var->bindValue('nome', $usuario->getNomeUsuario(), PDO::PARAM_STR);
        $var->bindValue('email', $usuario->getEmailUsuario(), PDO::PARAM_STR);
        $var->bindValue('login', $usuario->getLoginUsuario(), PDO::PARAM_STR);
        $var->bindValue('senha', $usuario->getSenhaUsuario(), PDO::PARAM_STR);
        //$var->bindValue('tipo', $usuario->getTipoUsuario(), PDO::PARAM_STR);
        
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }
    
    public function listar(){
        $var = $this->connection->prepare("select * from " . self::TABLE_USUARIO);
        $var->execute();
        return $var->fetchAll();
    }
    
    public function delete($id){
        $var=$this->connection->prepare("delete from ".self::TABLE_USUARIO . " where id = :id");
        
        $var->bindParam('id', $id, PDO::PARAM_INT);
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }
    
     /*envia os dados para o formulario para alterar*/
     public function find($id){
         $sel = $this->connection->prepare("select * from " . self::TABLE_USUARIO . " where id = :id");
         $sel->bindValue('id', $id, PDO::PARAM_INT);
         $sel->execute();
         $result = $sel->fetchAll();
         
         if($result){
             $reg = $result[0];
             $usuario = new \model\Usuario($reg['id'], $reg['nome'], $reg['email'], $reg['login'], $reg['senha'], $reg['tipo']);
             return $usuario;
         } else {
             return null;
         }
     }
     
    public function alterar(\model\Usuario $usuario = null){
        $var = $this->connection->prepare("update " .self::TABLE_USUARIO .
                " set nome = :nome, email = :email, login = :login, senha = :senha, tipo = :tipo where id = :id ");
        $var->bindValue('id', $usuario->getIdUsuario(), PDO::PARAM_INT);
        $var->bindValue('nome', $usuario->getNomeUsuario(), PDO::PARAM_STR);
        $var->bindValue('email', $usuario->getEmailUsuario(), PDO::PARAM_STR);
        $var->bindValue('login', $usuario->getLoginUsuario(), PDO::PARAM_STR);
        $var->bindValue('senha', $usuario->getSenhaUsuario(), PDO::PARAM_STR);
        $var->bindValue('tipo', $usuario->getTipoUsuario(), PDO::PARAM_STR);
        
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }
    
    public function logar($login , $senha){
        $sel = $this->connection->prepare("select * from " . self::TABLE_USUARIO . " where login = :login and senha = :senha ");
        $sel->bindValue('login', $login, PDO::PARAM_STR);
        $sel->bindValue('senha', $senha, PDO::PARAM_STR);
        $sel->execute();
        $result = $sel->fetchAll();
        
        if($result){
            
             return $result;
         } else {
             return null;
         }
        
    }
     
}
