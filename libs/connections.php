<?php

namespace Core;

use PDO;
class Connections {
    private static $instance = null;
    private PDO $pdo;

    private function __construct($config) {

        $this->pdo = new PDO('mysql:host=' . $config::getInstance()->get('host'). ';dbname=' . $config::getInstance()->get('dbName'), $config::getInstance()->get('user'), $config::getInstance()->get('password'));
    }

    public static function getInstance($config) {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>