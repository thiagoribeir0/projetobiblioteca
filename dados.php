<?php
session_start();

if (!isset($_SESSION["usuario_logado"])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION["livros"])) {
    $_SESSION["livros"] = [
    [
        "titulo" => "Neuromancer",
        "autor" => "William Gibson",
        "paginas" => "319",
        "editora" => "Aleph",
        "sinopse" => "Considerada a obra precursora do movimento cyberpunk e um clássico da ficção científica moderna, Neuromancer conta a história de Case, um cowboy do ciberespaço e hacker da matrix. Como punição por tentar enganar os patrões, seu sistema nervoso foi contaminado por uma toxina que o impede de entrar no mundo virtual.",
    ],
    [
        "titulo" => "Count Zero",
        "autor" => "William Gibson",
        "paginas" => "312",
        "editora" => "Aleph",
        "sinopse" => "Em meio ao caos futurista, Bobby Newmark, um aspirante a cowboy, acaba entrando de gaiato nessa história. E ele estaria morto, se não fosse a intervenção salvadora de uma misteriosa garota feita de luz. Por isso, Bobby – agora Count Zero – se torna uma pessoa valiosa e é ai que a caçada começa.",
    ],
    [
        "titulo" => "Monalisa Overdrive",
        "autor" => "William Gibson",
        "paginas" => "320",
        "editora" => "Aleph",
        "sinopse" => "As Inteligências Artificiais assombram a matrix. O ciberespaço, essa espécie de alucinação coletiva, está cada vez mais perigoso. As Inteligências Artificiais atingiram a autoconsciência e dividem esse espaço com os mais inusitados personagens, movidos por interesses diversos e intenções nem sempre lícitas.",
    ],
];
}

$livros = $_SESSION["livros"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Livros cadastrados</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Páginas</th>
                <th>Editora</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($livros) && !empty($livros)): ?>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?php echo $livro["titulo"]; ?></td>
                        <td><?php echo $livro["autor"]; ?></td>
                        <td><?php echo $livro["paginas"]; ?></td>
                        <td><?php echo $livro["editora"]; ?></td>
                        <td><a href="detalhes.php?titulo=<?php echo urlencode($livro['titulo']); ?>">Ver Detalhes</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum livro cadastrado.</td>
            </tr>
            <?php endif; ?>

        </tbody>
    </table>
    
    <br>

    <form action="cadastrar_livro.php">
        <button type="submit" formaction="cadastrar_livro.php">Cadastrar livro</button>
    </form>

    <br>
            
    <form action="login.php">
        <button type="submit" formaction="login.php">Sair da conta</button>
    </form>

</body>
</html>