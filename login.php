<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($_SESSION["usuarios"][$username]) && $_SESSION["usuarios"][$username] == $password) {
            $_SESSION["usuario_logado"] = true;
            header("Location: dados.php");
            exit();
        } else {
            $erro = "Usuário ou senha incorretos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if(isset($erro)) { 
        echo "<p>$erro</p>"; 
    } 
    ?>

    <form action="login.php" method="post">
        
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        
        <br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <br><br>
        
        <input type="submit" value="Entrar">
    </form>
    
    <p>Não tem uma conta? <a href="cadastro.php">Faça seu cadastro</a>.</p>

</body>
</html>