<?php
/*connexion bbd*/

class Manager
{
    protected function dbConnect()
      {
        $db = new \PDO('mysql:localhost=;dbname=ibb;charset=utf8', 'root', '',
        array (\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        return $db;
    }
}