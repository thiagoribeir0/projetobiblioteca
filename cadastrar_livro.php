<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["paginas"]) && isset($_POST["editora"]) && isset($_POST["sinopse"])) {
        $livro = array(
            "titulo" => $_POST["titulo"],
            "autor" => $_POST["autor"],
            "paginas" => $_POST["paginas"],
            "editora" => $_POST["editora"],
            "sinopse" => $_POST["sinopse"],
        );

        $_SESSION["livros"][] = $livro;

        header("Location: dados.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form class="form" action="cadastrar_livro.php" method="post">
        <div class="card">
            <div class="card-top">
                <h1 class="title">Cadastre um livro</h1>
            </div>

            <div class="card-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>

            <div class="card-group">
                <label for="autor">Autor:</label>
                <input type="autor" id="autor" name="autor" required>
            </div>
        
            <div class="card-group">
                <label for="paginas">Páginas:</label>
                <input type="number" id="paginas" name="paginas" required>
            </div>
        
            <div class="card-group">
                <label for="editora">Editora:</label>
                <input type="text" id="editora" name="editora" required>
            </div>

            <div class="card-group">
                <label for="sinopse">Sinopse:</label>
                <input type="text" id="sinopse" name="sinopse" required>
            </div>

            <br>
        
            <div class="card-group btn">
                <button type="submit">Cadastrar</button>
            </div>

            <div class="card-group btn">
                <button type="submit" formaction="dados.php"><a href="dados.php">Voltar</a></button></span>
            </div>

        </div>
    </form>

    <br>
    
    <form action="dados.php">
        <button type="submit" formaction="dados.php">Voltar</button>
    </form>

</body>
</html>