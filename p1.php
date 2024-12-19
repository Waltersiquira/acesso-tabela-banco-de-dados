<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash</title>
</head>
<body>
    <?php 
    require_once 'includes/funcoes.php';
    $user = $_GET['usuario'] ?? '';
    $senha = $_GET['senha'] ?? '';
    if ($user == 'Guilherme' and password_verify($senha, '$2y$10$givaJFYDHNqz9.M.lFHH4uouC4nC5lzERacynTsWtELI4GBly8l7u') == true or $user == 'Walter' and password_verify($senha, '$2y$10$givaJFYDHNqz9.M.lFHH4uouC4nC5lzERacynTsWtELI4GBly8l7u') == true or $user == 'João da Silva' and password_verify($senha, '$2y$10$njT8oJD8x9g4yXTigCnRX.8C4dBGVDCWrXH2sN4qh4UJgMAAEiI/.') == true){
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
