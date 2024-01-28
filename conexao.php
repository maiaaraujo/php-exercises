<?php
$host = 'localhost';
$user = 'root';
$senha = '1234';
$banco = 'crud_php';

$conexao = new mysqli($host, $user, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
