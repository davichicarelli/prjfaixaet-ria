<?php
$nome = $_GET["nome"];
$idade = filter_input(INPUT_GET, "idade", FILTER_VALIDATE_INT);

if ($idade <= 12) {
    $mensagem = "Você é uma criança, ACESSO NEGADO!";
} else if ($idade <= 17) {
    $mensagem = "Você é um adolescente, ACESSO NEGADO!";
} else if ($idade <= 25) {
    $mensagem = "Você é um Jovem, você está autorizado a entrar no sistema!";
} else if ($idade <= 59) {
    $mensagem = "Você é um Adulto, você está autorizado a entrar no sistema!";
} else if ($idade >= 60) {
    $mensagem = "Você faz parte da Melhor Idade, você está autorizado a entrar no sistema!";
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