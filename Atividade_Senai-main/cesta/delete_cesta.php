<?php 
require_once '../conn.php';

$id_cestarai = filter_input(INPUT_GET, 'idcestarai');

if($id_cestarai){
    $stmt = $conn->prepare("DELETE FROM cesta WHERE idcestarai = :ID");

    $stmt->bindValue(':ID', $id_cestarai);

    $stmt->execute();

    header("Location: index_cesta.php");
}