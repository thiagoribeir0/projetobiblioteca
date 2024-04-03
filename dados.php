<?php
session_start();

if (!isset($_SESSION["usuario_logado"])) {
    header("Location: login.php");
    exit();
}
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
    </table>
</body>
</html>