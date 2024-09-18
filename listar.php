<?php
require("conexao.php");

$sql = "select * from tarefas";
$stmt = $conexao->prepare($sql);
$stmt->execute();

