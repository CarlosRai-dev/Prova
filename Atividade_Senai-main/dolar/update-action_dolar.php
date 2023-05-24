<?php

require_once '../conn.php';
$id_dolarrai = filter_input(INPUT_POST,'id_dolarrai');
$ano_dolarrai= filter_input(INPUT_POST, 'ano_dolarrai');
$valor_dolarrai = filter_input(INPUT_POST, 'valor_dolarrai');


$stmt = $conn->prepare("UPDATE dolarrai SET anodolarrai = :ANO, valordolarrai = :VALOR WHERE iddolarrai = :ID");


$stmt->bindValue(':ID', $id_dolarrai);
$stmt->bindValue(':ANO', $ano_dolarrai);
$stmt->bindValue(':VALOR', $valor_dolarrai);
$stmt->execute();

header("Location: index_dolar.php");
?>