<?php
/*connexion bbd*/
namespace ced\stream\model;

class Manager
{
    protected function dbConnect()
      {
        $db = new \PDO('mysql:host=;dbname=;charset=utf8', '', '',
        array (\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        return $db;
    }
}