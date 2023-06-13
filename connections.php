<?php

class connections {
    private static $instance = null;
    private $pdo;

    private function __construct($config) {
        try {
            $this->pdo = new PDO("mysql:host={$config['host']};dbname={$config['baza']}", $config['username'], $config['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo 'Error' . $exception->getMessage();
        }
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