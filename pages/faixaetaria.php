<?php
$nome = $_GET["nome"];
$idade = filter_input(INPUT_GET, "idade", FILTER_VALIDATE_INT);

if ($idade <= 12) {
    $mensagem = $nome.", você é uma Criança e tem" .$idade." anos, ACESSO NEGADO!";
} else if ($idade <= 17) {
    $mensagem = $nome.", você é um Adolescente e tem " .$idade." anos, ACESSO NEGADO!";
} else if ($idade <= 25) {
    $mensagem = $nome.", você é um Jovem e tem ".$idade." anos, você está autorizado a entrar no sistema!";
} else if ($idade <= 59) {
    $mensagem = $nome.", você é um Adulto e tem ".$idade." anos, você está autorizado a entrar no sistema!";
} else if ($idade >= 60) {
    $mensagem = $nome.", você está na Maior Idade e tem ".$idade. " anos, você está autorizado a entrar no sistema!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Resultado</h1>
    <div id="resultado">
    
    <?php
    //SAÍDAS//
    echo $mensagem;
    ?>

    </div>

</body>