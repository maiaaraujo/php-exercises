<?php
include 'conexao.php';

$resultado = $conexao->query("SELECT * FROM usuarios");

echo "<h2>Lista de Usuários</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
        </tr>";

while ($linha = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>{$linha['id']}</td>
            <td>{$linha['nome']}</td>
            <td>{$linha['email']}</td>
            <td>{$linha['idade']}</td>
          </tr>";
}

echo "</table>";

$conexao->close();
?>
