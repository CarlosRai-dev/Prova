<?php 
require_once '../conn.php';

$id_processadorrai = filter_input(INPUT_GET, 'idprocessadorrai');

if($id_processadorrai){
    $stmt = $conn->prepare("DELETE FROM processador WHERE idprocessadorrai = :ID");

    $stmt->bindValue(':ID', $id_processadorrai);

    $stmt->execute();

    header("Location: index_processador.php");
}