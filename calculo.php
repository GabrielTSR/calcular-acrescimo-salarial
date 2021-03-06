<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Valor do aumento</title>
</head>

<?php

if(isset($_POST['nome']) &&
isset($_POST['salario-antigo']) &&
isset($_POST['genero-sexual']) &&
isset($_POST['cargo'])
) {

    $nome = $_POST['nome'];
    $salarioAntigo = $_POST['salario-antigo'];
    $genero = $_POST['genero-sexual'];
    $cargo = strtolower($_POST['cargo']);

    $salarioNovo = $salarioAntigo > 5000 ? $salarioAntigo * 1.1 : $salarioAntigo * 1.2;

    $theGenero = $genero === 'masculino' ? 'O' : ($genero === 'feminino' ? 'A' : '');

    $mensagem = "$theGenero $nome passará a receber R$<span class=\"novoSalario\">$salarioNovo</span>, no cargo de $cargo.";




} else {
    
    echo"<h1 id=\"error-message\">As informações não foram enviadas corretamente</h1>";
    exit;
}

?>


<body>
    <div id="circle-container">
        <h1>RESULTADO:</h1>
        <p><?=$mensagem?></p>
    </div>
</body>
</html>