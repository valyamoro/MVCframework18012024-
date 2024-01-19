<?php

return [
    'port' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'books2',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'options' => [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "set names 'utf8mb4'",
    ],
];
