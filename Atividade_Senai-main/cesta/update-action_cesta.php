<?php

require_once '../conn.php';
$id_cestarai = filter_input(INPUT_POST,'id_cestarai');
$ano_cestarai= filter_input(INPUT_POST, 'ano_cestarai');
$valor_cestarai = filter_input(INPUT_POST, 'valor_cestarai');


$stmt = $conn->prepare("UPDATE cestarai SET anocestarai = :ANO, valorcestarai = :VALOR WHERE idcestarai = :ID");


$stmt->bindValue(':ID', $id_cestarai);
$stmt->bindValue(':ANO', $ano_cestarai);
$stmt->bindValue(':VALOR', $valor_cestarai);
$stmt->execute();

header("Location: index_cesta.php");
?>