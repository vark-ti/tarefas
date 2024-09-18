<?php
require("conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

$sql = "insert into tarefas (titulo, descricao, data) values ('".$titulo."' , '".$descricao."' , '".$data."')";

$stmt = $conexao->prepare($sql);
$stmt->execute();

if($stmt){
    header("Location: index.php");
    exit();
}else{
    echo "algum erro ocorreu";
}