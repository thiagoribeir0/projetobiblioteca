<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form class="form" action="cadastro.php" method="post">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="imagens/usuario.png">
                <h1 class="title">Preencha os dados</h1>
            </div> 
            
            <div class="card-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="card-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="card-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
        
            <div class="card-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <br></br>

            <div class="card-group btn">
                <button type="submit">Cadastrar</button>
            </div>

            <div class="card-group">
                <span class="centered-link">Já possui uma conta? <a href="login.php">Fazer login</a>.</p></span>
            </div>

        </div>
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

        $_SESSION["usuarios"][$username] = $password;

        header("Location: login.php?sucesso=1");
        exit();
    }
}
?>