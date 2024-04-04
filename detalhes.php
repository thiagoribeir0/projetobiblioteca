<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form class="form" action="dados.php" method="post">
        <div class="card">
            <div class="card-top">

        <?php
            session_start();

            if (isset($_GET['titulo'])) {
            $titulo = urldecode($_GET['titulo']);

            if ($_SESSION["livros"]) {
                foreach ($_SESSION["livros"] as $livro) {
                if ($livro["titulo"] === $titulo) {
                    echo "<h1 class='title'>{$livro['titulo']}</h1>";
                    echo "<p><strong>Autor:</strong> <br> {$livro['autor']}</p>";
                    echo "<p><strong>Páginas:</strong> <br> {$livro['paginas']}</p>";
                    echo "<p><strong>Editora:</strong> <br> {$livro['editora']}</p>";
                    echo "<p><strong>Sinopse:</strong> <br> {$livro['sinopse']}</p>";
                    break;
                    }
                }
            }
        }
        ?>

        <br>

        <div class="card-group btn">
            <button type="submit"><a href="dados.php">Voltar</a></button>
        </div>   
    </div>
</body>
</html>