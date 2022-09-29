<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokenpo</title>
</head>
<body>

    <h4>Digite 0 para pedra 1 para papel e 2 para tesoura </h4>

    <form method="get">
        Digite seu nome: <input type="text" name="nome">
        Digite sua escolha: <input type="text" name="escolha">
        <input type="submit" value="Começar">
    </form>

<?php

    echo "Seja muito bem-vindo ao Jokenpo </br> </br>";
    $nomeJogador = $_GET['nome'];
    $opcoesDeJogada = ["PEDRA", "PAPEL", "TESOURA"];
    $sorteio = rand(0, 2);
    $escolhaJogador = $_GET['escolha'];

    do 
    {
        
    } while($escolhaJogador > 2 or $escolhaJogador < 0);

    echo $nomeJogador , " Você escolheu: {$opcoesDeJogada[$escolhaJogador]}\n";
    echo "Eu escolhi: {$opcoesDeJogada[$sorteio]}\n";

    if($escolhaJogador == $sorteio)
    {
        echo "Empatamos!</br>";
    } 

    else {
        switch($escolhaJogador) {
            case 0:
                if($sorteio === 1) {
                    echo "Eu venci!</br>";
                } else {
                    echo "Você venceu!</br>";
                }
                break;

            case 1:
                if($sorteio === 0) {
                    echo "Você venceu!</br>";
                } else {
                    echo "Eu venci!</br>";
                }
                break;

            case 2:
                if($sorteio === 1) {
                    echo "Você venceu!</br>";
                } else {
                    echo "Eu venci!</br>";
                }
                break;
        }
    }
?>

<?php

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "jokenpo";
$con = mysqli_connect($host, $user, $pass, $base);

$res = mysqli_query($con,"insert into ranking (nome, opcao) values ('$nomeJogador', '$escolhaJogador')");
echo"Cadastro realizado com sucesso! </br>";

mysqli_close($con);

?>
</body>

</html>