<?php

if(isset($_POST['nome']) &&
isset($_POST['salario-antigo']) &&
isset($_POST['genero-sexual']) &&
isset($_POST['cargo'])
) {

    $nome = $_POST['nome'];
    $salarioAntigo = $_POST['salario-antigo'];
    $genero = $_POST['genero-sexual'];
    $cargo = $_POST['cargo'];

    if ($salarioAntigo > 5000) {
        $salarioNovo = ($salarioAntigo / 100 * 10) + $salarioAntigo;

    } else {
        $salarioNovo = ($salarioAntigo / 100 * 20) + $salarioAntigo;
    }

    if($genero == 'masculino') {
        $theGenero = 'O';
    } elseif ($genero == 'feminino') {
        $theGenero = 'A';
    } else {
        $theGenero = 'I';
    }

    echo"$theGenero $nome passará a receber R$$salarioNovo, no cargo de $cargo";




} else {
    echo"<h1>Você não enviou as informações corretamente</h1>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Valor do aumento</title>
</head>
<body>
    <!-- <?=$mensagem?> -->
</body>
</html>