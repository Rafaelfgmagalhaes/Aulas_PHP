<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./_css/estilo.css">
    <title>Operadores de atribuição</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto é de R$ " .number_format($preco, 2);
            $preco += ($preco*10/100);
            echo "</br>O preço do produto com 10% de aumento é de R$ " .number_format($preco, 2);
        ?>
    </div>
</body>
</html>