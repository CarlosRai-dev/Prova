<?php

require_once '../conn.php';
$id_gasolinarai = filter_input(INPUT_POST,'id_gasolinarai');
$ano_gasolinarai= filter_input(INPUT_POST, 'ano_gasolinarai');
$valor_gasolinarai = filter_input(INPUT_POST, 'valor_gasolinarai');


$stmt = $conn->prepare("UPDATE gasolinarai SET anogasolinarai = :ANO, valorgasolinarai = :VALOR WHERE idgasolinarai = :ID");


$stmt->bindValue(':ID', $id_gasolinarai);
$stmt->bindValue(':ANO', $ano_gasolinarai);
$stmt->bindValue(':VALOR', $valor_gasolinarai);
$stmt->execute();

header("Location: index_gasolina.php");
?>