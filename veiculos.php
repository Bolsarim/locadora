<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];

echo $nome;

$arquivo = fopen("veiculos.csv" , "a");
fwrite($arquivo, $nome. ";". $email. ";". $veiculo .";". "\n");
fclose($arquivo);


?>