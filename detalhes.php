<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
session_start();

if (isset($_GET['titulo'])) {
    $titulo = urldecode($_GET['titulo']);

if ($_SESSION["livros"]) {
    foreach ($_SESSION["livros"] as $livro) {
        if ($livro["titulo"] === $titulo) {
            echo "<h2>Detalhes do livro</h2>";
            echo "<p>Título: {$livro['titulo']}</p>";
            echo "<p>Autor: {$livro['autor']}</p>";
            echo "<p>Páginas: {$livro['paginas']}</p>";
            echo "<p>Editora: {$livro['editora']}</p>";
            echo "<p>Sinopse: {$livro['sinopse']}</p>";
            break;
        }
    }
}
}
?>

    <form action="dados.php">
        <button type="submit" formaction="dados.php">Voltar</button>
    </form>

</body>
</html>