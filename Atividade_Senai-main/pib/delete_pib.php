<?php 
require_once '../conn.php';

$id_pibrai = filter_input(INPUT_GET, 'idpibrai');

if($id_pibrai){
    $stmt = $conn->prepare("DELETE FROM pibrai WHERE idpibrai = :ID");

    $stmt->bindValue(':ID', $id_pibrai);

    $stmt->execute();

    header("Location: index_pib.php");
}