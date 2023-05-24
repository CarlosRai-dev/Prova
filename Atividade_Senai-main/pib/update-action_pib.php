<?php

require_once '../conn.php';
$id_pibrai = filter_input(INPUT_POST,'id_pibrai');
$ano_pibrai= filter_input(INPUT_POST, 'ano_pibrai');
$valor_pibrai = filter_input(INPUT_POST, 'valor_pibrai');


$stmt = $conn->prepare("UPDATE pibrai SET anopibrai = :ANO, valorpibrai = :VALOR WHERE idpibrai = :ID");


$stmt->bindValue(':ID', $id_pibrai);
$stmt->bindValue(':ANO', $ano_pibrai);
$stmt->bindValue(':VALOR', $valor_pibrai);
$stmt->execute();

header("Location: index_pib.php");
?>