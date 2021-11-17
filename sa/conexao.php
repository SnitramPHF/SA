<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';
$porta = '3308';

$mysqli = new mysqli($host, $usuario, $senha, $database, $porta);

if ($mysqli->error) {
    die ("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>