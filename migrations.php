<?php
use app\core\Application;

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'host' => 'db',
        'dbname' => 'php_mvc',
        'user' => 'php_mvc',
        'password' => 'php_mvc',
//        'dsn' => $_ENV['DB_DSN'],
//        'user' => $_ENV['DB_USER'],
//        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
