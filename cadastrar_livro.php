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
</head>
<body>
<h2>Cadastro livro</h2>
    <form action="cadastrar_livro.php" method="post">

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <br><br>

        <label for="autor">Autor:</label>
        <input type="autor" id="autor" name="autor" required>

        <br><br>

        <label for="paginas">Páginas:</label>
        <input type="number" id="paginas" name="paginas" required>
        
        <br><br>
        
        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora" required>
        <br><br>

        <label for="sinopse">Sinopse:</label>
        <input type="text" id="sinopse" name="sinopse" required>
        <br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <br>
    
    <form action="dados.php">
        <button type="submit" formaction="dados.php">Voltar</button>
    </form>

</body>
</html>