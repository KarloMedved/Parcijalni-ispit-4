<?php

use Core\Connections;


require_once 'vendor/autoload.php';


$configFilePath = __DIR__ . '/config.php';

$configManager = new Manager($configFilePath);

$Connection = connections::getInstance($configManager);

$pdo = $Connection->getConnection();

if ($pdo) {
    echo 'Connected';
} else {
    echo 'Error';
}

?>