<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace util;
/**
 * Description of Connection
 *
 * @author Luan Souza Montanari
 */
class Connection {
    const DBNAME = 'sgd';
    const PORT = '5432';
    const USER  = 'postgres';
    const PASSWORD = '123456';
    const HOST = 'localhost';
    
    public static function getConnection(){
        $connection = new \PDO('pgsql:host=' .self::HOST . ';dbname='.self::DBNAME
                . ' port='.self::PORT , self::USER, self::PASSWORD);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET NAMES 'UTF8'");
        $connection->exec("SET CLIENT_ENCODING TO 'UTF-8'");
        return $connection;
    }
}
