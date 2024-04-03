<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">

        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        
        <br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
