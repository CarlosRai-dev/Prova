<?php

require_once '../conn.php';
$ano_carrorai= filter_input(INPUT_POST, 'ano_carrorai');
$valor_carrorai = filter_input(INPUT_POST, 'valor_carrorai');

$stmt = $conn->prepare("INSERT INTO carrorai (anocarrorai, valorcarrorai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_carrorai);
$stmt->bindValue(':VALOR', $valor_carrorai);
$stmt->execute();
header("Location: index_carro.php");
?>

