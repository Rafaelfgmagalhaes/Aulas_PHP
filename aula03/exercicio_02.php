<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./_css/estilo.css">
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
            $atual = $_GET["aa"];
            echo "O ano atual é  $atual e o ano anterior e " . --$atual;
        ?>
    </div>
</body>
</html>