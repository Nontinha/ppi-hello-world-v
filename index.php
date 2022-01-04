<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ai, galera!</title>
</head>
<body>
    <h1>Aplicação de o Jonta</h1>
    <?php
        require_once "model/Conexao.php";
    $tecnologias = Conexao::select("tecnologia", "id, nome");
    print_r($tecnologias);
    ?>
</body>
</html>