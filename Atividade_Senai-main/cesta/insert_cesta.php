<?php

require_once '../conn.php';
$ano_cestarai= filter_input(INPUT_POST, 'ano_cestarai');
$valor_cestarai= filter_input(INPUT_POST, 'valor_cestarai');

$stmt = $conn->prepare("INSERT INTO cestarai (anocestarai, valorcestarai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_cestarai);
$stmt->bindValue(':VALOR', $valor_cestarai);
$stmt->execute();
header("Location: index_cesta.php");
?>