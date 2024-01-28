<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h2>Cadastrar Usuário</h2>
    <form action="processar_cadastro.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Idade: <input type="number" name="idade" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
