<?php

$id = $_GET['id'];

$linhas = file('dados.csv');

$linhaParaApagar = $id;

$linhas[$linhaParaApagar] = "";

file_put_contents('dados.csv', implode('', $linhas));

header('location:tabela.php');

?>