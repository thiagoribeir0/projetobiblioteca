<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        
        <br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <br><br>
        
        <input type="submit" value="Entrar">
    </form>
    
    <p>
        Não tem uma conta? <a href="cadastro.php">Faça seu cadastro</a>.</p>

</body>
</html>