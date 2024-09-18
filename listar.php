<?php
require("conexao.php");

$sql = "select * from tarefas";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Título</th><th>Descrição</th><th>Data de Conclusão</th></tr>";
    
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($linha['id']) . "</td>";
        echo "<td>" . htmlspecialchars($linha['titulo']) . "</td>";
        echo "<td>" . htmlspecialchars($linha['descricao']) . "</td>";
        echo "<td>" . htmlspecialchars($linha['data_conclusao']) . "</td>";
        echo "<td>
                <a href='alterar.php?id=" . htmlspecialchars($linha['id']) . "'>Alterar</a> |
                <a href='excluir.php?id=" . htmlspecialchars($linha['id']) . "' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
              </td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

// Fecha a declaração e a conexão
$stmt->close();
$conexao->close();
?>