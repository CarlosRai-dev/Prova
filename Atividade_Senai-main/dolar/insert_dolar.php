<?php

require_once '../conn.php';
$ano_dolarrai= filter_input(INPUT_POST, 'ano_dolarrai');
$valor_dolarrai = filter_input(INPUT_POST, 'valor_dolarrai');

$stmt = $conn->prepare("INSERT INTO dolarrai (anodolarrai, valordolarrai) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_dolarrai);
$stmt->bindValue(':VALOR', $valor_dolarrai);
$stmt->execute();
header("Location: index_dolar.php");
?>