<?php 
require_once '../conn.php';

$id_gasolinarai = filter_input(INPUT_GET, 'idgasolinarai');

if($id_gasolinarai){
    $stmt = $conn->prepare("DELETE FROM gasolinarai WHERE idgasolinarai = :ID");

    $stmt->bindValue(':ID', $id_gasolinarai);

    $stmt->execute();

    header("Location: index_gasolina.php");
}