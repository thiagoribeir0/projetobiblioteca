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
            break;
        }
    }
}
}
?>