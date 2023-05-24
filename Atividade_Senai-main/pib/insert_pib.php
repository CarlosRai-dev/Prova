<?php

require_once '../conn.php';
$ano_pibrai= filter_input(INPUT_POST, 'ano_pibrai');
$valor_pibrai = filter_input(INPUT_POST, 'valor_pibrai');

$stmt = $conn->prepare("INSERT INTO pibrai (anopibrai, valorpibrai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_pibrai);
$stmt->bindValue(':VALOR', $valor_pibrai);
$stmt->execute();
header("Location: index_pib.php");
?>