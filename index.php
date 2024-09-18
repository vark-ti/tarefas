<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Tarefas</title>
</head>
<body>
    <h2>Cadastro de Tarefas</h2>
<form action="salvar.php" method="post">
    <label>Título: </label><input type="text" name="titulo" id="titulo" required>
    <label>Descrição: </label><input type="text" name="descricao" id="descricao" required>
    <label>Data: </label><input type="date" name="data" id="data" required>
    <button>Salvar</button>
</form>
<h2>Lista de Tarefas</h2>
<?php 
require("listar.php"); 
?>
</body>
</html>