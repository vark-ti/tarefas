<?php
require("conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_conclusao = $_POST['data_conclusao'];

$sql = "insert into tarefas (titulo, descricao, data_conclusao) values ('".$titulo."' , '".$descricao."' , '".$data_conclusao."')";

$stmt = $conexao->prepare($sql);
$stmt->execute();

if($stmt){
    header("Location: index.html");
    exit();
}else{
    echo "algum erro ocorreu";
}