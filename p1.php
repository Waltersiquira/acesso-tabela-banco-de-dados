<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash</title>
</head>
<body>
    <?php 
    $user = $_GET['usuario'] ?? '';
    $senha = $_GET['senha'] ?? '';
    if ($user == 'Guilherme' and password_verify($senha, '$2y$10$FKCBxt.ne95pV3dsC16JMe63q.rRptAYjON02NCUsGcHd7Bq2adn2') or $user == 'Walter' and password_verify($senha, '$2y$10$FKCBxt.ne95pV3dsC16JMe63q.rRptAYjON02NCUsGcHd7Bq2adn2') or $user == 'João da Silva' and password_verify($senha, '$2y$10$/SfVXxJcV1Dgont1HeNCSOTL42blZKbXF9ZLxyVfEFbXWaNcmmsyW')){
        gafanhotos();
    }
    elseif (!empty($user) and !empty($senha)){
        cursos();
    } else {
        echo 'erro de senha ou usuário vazio';
    }
    ?>
</body>
</html>