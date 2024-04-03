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

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

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

<?php
session_start();

function salvar_usuario($name, $email, $username, $password, &$usuarios) {
    $novo_usuario = array(
        "name" => $name,
        "email" => $email,
        "username" => $username,
        "password" => $password
    );
    $usuarios[] = $novo_usuario;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($name) || empty($email) || empty($username) || empty($password)) {
            header("Location: cadastro.php?erro=1");
            exit();
        }

        $usuarios = array();

        salvar_usuario($name, $email, $username, $password, $usuarios);

        header("Location: login.php?sucesso=1");
        exit();
    }
}
?>