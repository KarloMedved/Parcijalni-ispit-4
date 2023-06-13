<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

$configFilePath = __DIR__ . '/config.php';

$configManager = new manager($configFilePath);

$Connection = connections::getInstance($configManager);

$pdo = $Connection->getConnection();

if ($pdo) {
    echo 'Connected';
} else {
    echo 'Error';
}

?>