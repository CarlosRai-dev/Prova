<?php 
require_once '../conn.php';

$id_carrorai = filter_input(INPUT_GET, 'idcarrorai');

if($id_carrorai){
    $stmt = $conn->prepare("DELETE FROM carrorai WHERE idcarrorai = :ID");

    $stmt->bindValue(':ID', $id_carrorai);

    $stmt->execute();

    header("Location: index_carro.php");
}
