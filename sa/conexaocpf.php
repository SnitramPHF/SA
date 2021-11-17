<?php

include_once "funcoes.php";
$con = new mysqli('localhost:3308', 'root', '', 'sa');

if($con->connect_error){
    $msg = "Falha ao conectar: ".$con->connect_error;
    alertErro($msg);
}

?>