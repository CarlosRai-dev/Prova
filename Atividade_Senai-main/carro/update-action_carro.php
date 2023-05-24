<?php

require_once '../conn.php';
$id_carrorai = filter_input(INPUT_POST,'id_carrorai');
$ano_carrorai= filter_input(INPUT_POST, 'ano_carrorai');
$valor_carrorai = filter_input(INPUT_POST, 'valor_carrorai');


$stmt = $conn->prepare("UPDATE carro SET anocarrorai = :ANO, valorcarrorai = :VALOR WHERE idcarrorai = :ID");


$stmt->bindValue(':ID', $id_carrorai);
$stmt->bindValue(':ANO', $ano_carrorai);
$stmt->bindValue(':VALOR', $valor_carrorai);
$stmt->execute();

header("Location: index_carro.php");
?>