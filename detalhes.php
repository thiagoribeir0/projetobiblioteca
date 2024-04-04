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

        <?php
            session_start();

            if (isset($_GET['titulo'])) {
            $titulo = urldecode($_GET['titulo']);

            if ($_SESSION["livros"]) {
                foreach ($_SESSION["livros"] as $livro) {
                if ($livro["titulo"] === $titulo) {
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

        <br>

        <div class="card-group btn">
            <button type="submit"><a href="dados.php">Voltar</a></button>
        </div>   
    </div>
</body>
</html>