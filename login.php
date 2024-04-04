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
            $erro = "Usuário ou senha incorretos!";
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
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form class="form" action="login.php" method="post">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="imagens/livro.png">
                <h1 class="title">Biblioteca Virtual</h1>
                <p>Para o primeiro acesso, é necessario realizar um cadastro.</p>
            </div>

            <?php if(isset($erro)) { ?>
                <div class="card-group">
                    <span class="centered-link"><p class="error"><?php echo $erro; ?></p></span>
                </div> 
            <?php } ?> 
        
            <div class="card-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="card-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="card-group">
                <span class="centered-link">Não tem uma conta? <a href="cadastro.php">Faça seu cadastro</a>.</p></span>
            </div>

            <br><br>

            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
            </div> 
        </div>
    </form>

</body>
</html>