<?php

require_once '../conn.php';
$id_processadorrai = filter_input(INPUT_POST,'id_processadorrai');
$ano_processadorrai= filter_input(INPUT_POST, 'ano_processadorrai');
$valor_processadorrai = filter_input(INPUT_POST, 'valor_processadorrai');


$stmt = $conn->prepare("UPDATE processadorrai SET anoprocessadorrai = :ANO, valorprocessadorrai = :VALOR WHERE idprocessadorrai = :ID");


$stmt->bindValue(':ID', $id_processadorrai);
$stmt->bindValue(':ANO', $ano_processadorrai);
$stmt->bindValue(':VALOR', $valor_processadorrai);
$stmt->execute();

header("Location: index_processador.php");
?>