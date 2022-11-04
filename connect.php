<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'espodb';
$port = '3306';

$connection = mysqli_connect($server, $username, $password, $database, $port);

if ($connection->connect_errno) {
    echo 'Falha ao conectar ao MySQL: (' .
        $connection->connect_errno .
        ') ' .
        $connection->connect_errno;
}

mysqli_set_charset($connection, 'utf8');

?>
