<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dao;

require_once 'C:/wamp/www/sgd/util/Connection.php';
require_once 'C:/wamp/www/sgd/model/Chamado.php';

/**
 * Description of ChamadoDao
 *
 * @author Luan Souza Montanari
 */
use PDO;
use util\Connection;
use model\Chamado;

class ChamadoDao {

    const TABLE_CHAMADO = 'chamado';

    private $connection;

    function __construct() {
        $this->connection = Connection::getConnection();
    }

    public function inserir($chamado = null) {
        $var = $this->connection->prepare(" insert into " . self::TABLE_CHAMADO . " (id_requerente, data_emissao, desc_requerente) values(:id_requerente, :data_emissao, :desc_requerente)");

        $var->bindValue('id_requerente', $chamado->getIdRequerenteChamado(), PDO::PARAM_INT);
        $var->bindValue('data_emissao', $chamado->getDataEmissaoChamado(), PDO::PARAM_STR);
        $var->bindValue('desc_requerente', $chamado->getDescricaoRequerenteChamado(), PDO::PARAM_STR);

        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }

    public function listar() {
        $var = $this->connection->prepare("select * from " . self::TABLE_CHAMADO);
        $var->execute();
        return $var->fetchAll();
    }

    public function delete($id) {
        $var = $this->connection->prepare("delete from " . self::TABLE_CHAMADO . " where id = :id");

        $var->bindParam('id', $id, PDO::PARAM_INT);
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }

    public function find($id) {
        $sel = $this->connection->prepare("select *from " . self::TABLE_CHAMADO . " where id = :id");
        $sel->bindValue('id', $id, PDO::PARAM_INT);
        $sel->execute();
        $result = $sel->fetchAll();

        if ($result) {
            $reg = $result[0];
            $chamado = new Chamado($reg['id'], $reg['id_requerente'], $reg['id_tecnico'], $reg['id_supervisor'], $reg['prioridade'], $reg['status'], $reg['data_emissao'], $reg['data_aceitacao'], $reg['data_conclusao'], $reg['desc_requerente'], $reg['desc_tecnico'], $reg['data_supervisor'], $reg['dependencia_externa']);
            return $chamado;
        } else {
            return null;
        }
    }

    public function alterar_usuario(Chamado $chamado = null) {
        $var = $this->connection->prepare("update " .self::TABLE_CHAMADO .
                " set desc_requerente = :desc_requerente where id = :id ");
        $var->bindValue('id', $chamado->getIdChamado(), PDO::PARAM_INT);
        $var->bindValue('desc_requerente', $chamado->getDescricaoRequerenteChamado(), PDO::PARAM_STR);
        
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }

    public function alterar_tecnico(Chamado $chamado = null) {
        $var = $this->connection->prepare("update " .self::TABLE_CHAMADO .
                " set status = :status, desc_tecnico = :desc_tecnico where id = :id ");
        $var->bindValue('id', $chamado->getIdChamado(), PDO::PARAM_INT);
        $var->bindValue('status', $chamado->getStatusChamado(), PDO::PARAM_STR);
        $var->bindValue('desc_tecnico', $chamado->getDescricaoTecnicoChamado(), PDO::PARAM_STR);
        
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }

    public function alterar_supervisor(Chamado $chamado = null) {
        
    }

    public function alterar_adiministardor(Chamado $chamado = null) {
        $var = $this->connection->prepare("update " .self::TABLE_CHAMADO .
                " set id_requerente =:id_requerente, id_tecnico =:id_supervisor, id_requerente =:id_requerente, prioridade = :prioridade, status = :status, desc_supervisor = :desc_supervisor where id = :id ");
        $var->bindValue('id', $chamado->getIdChamado(), PDO::PARAM_INT);
        $var->bindValue('id_requerente', $chamado->getIdRequerenteChamado(), PDO::PARAM_INT);
        $var->bindValue('id_tecnico', $chamado->getIdTecnicoChamado(), PDO::PARAM_INT);
        $var->bindValue('id_supervisor', $chamado->getIdSupervisorChamado(), PDO::PARAM_INT);
        $var->bindValue('prioridade', $chamado->getPrioridadeChamado(), PDO::PARAM_STR);
        $var->bindValue('status', $chamado->getStatusChamado(), PDO::PARAM_STR);
        $var->bindValue('desc_supervisor', $chamado->getDescricaoTecnicoChamado(), PDO::PARAM_STR);
        
        $this->connection->beginTransaction();
        $var->execute();
        $this->connection->commit();
    }

}
