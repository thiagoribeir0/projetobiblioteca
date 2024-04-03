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

$livros = $_SESSION["livros"] ?? array();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
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
                        <td><a href="detalhes.php">Ver detalhes</a></td>
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