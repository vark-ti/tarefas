<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'ecidade';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
  echo "Não foi possível se conectar";
}