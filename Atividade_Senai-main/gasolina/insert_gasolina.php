<?php

require_once '../conn.php';
$ano_gasolinarai= filter_input(INPUT_POST, 'ano_gasolinarai');
$valor_gasolinarai = filter_input(INPUT_POST, 'valor_gasolinarai');

$stmt = $conn->prepare("INSERT INTO gasolinarai (anogasolinarai, valorgasolinarai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_gasolinarai);
$stmt->bindValue(':VALOR', $valor_gasolinarai);
$stmt->execute();
header("Location: index_gasolina.php");
?>