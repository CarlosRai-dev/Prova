<?php 
require_once '../conn.php';

$id_dolarrai = filter_input(INPUT_GET, 'iddolarrai');

if($id_dolarrai){
    $stmt = $conn->prepare("DELETE FROM dolarrai WHERE iddolarrai = :ID");

    $stmt->bindValue(':ID', $id_dolarrai);

    $stmt->execute();

    header("Location: index_dolar.php");
}