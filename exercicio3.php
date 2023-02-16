<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 3</title>
</head>

<body>
    <?php /* A mensagem "Aprovado",se a média alcançada for maior ou igual a sete;
    A mensagem "Reprovado", se a média for menor do que set_error_handler
    A mensagem "Aprovado com Distinção",se a média for igual a dez */ ?>

    <form action="" method="get">
        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $media = ($nota1 + $nota2) / 2;

    echo "Média: $media <br>";
    if ($media < 7)
        echo "Reprovado";
    elseif ($media == 10)
        echo "Aprovado com Honra so mérito";
    else
        echo "Aprovado";
    ?>

</body>

</html>