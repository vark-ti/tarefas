<?php

$servidor = 'mysql:dbname=ecidade;host=127.0.0.1;';
$usuario = 'root';
$senha = 'root';

try{     
    $conexao = new PDO($servidor, $usuario, $senha);
}catch (PDOException $e){
     die ('Erro ao se conectar ao banco.');
}