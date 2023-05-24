<?php

require_once '../conn.php';
$ano_processadorrai= filter_input(INPUT_POST, 'ano_processadorrai');
$valor_processadorrai = filter_input(INPUT_POST, 'valor_processadorrai');

$stmt = $conn->prepare("INSERT INTO processadorrai (anoprocessadorrai, valorprocessadorrai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_processador);
$stmt->bindValue(':VALOR', $valor_processador);
$stmt->execute();
header("Location: index_processador.php");
?>