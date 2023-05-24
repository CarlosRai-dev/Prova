<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM pibrai");
$stmt->execute();
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Ano</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <?php foreach ($list as $gasolina): ?>
    <tbody>
      <tr>
        <td><?= $gasolina['idpibrai']; ?></td>
        <td><?= $gasolina['anopibrai']; ?></td>
        <td><?= $gasolina['valorpibrai']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_pib.php?idpibrai=<?= $gasolina['idpibrai']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_pib.php?idpibrai=<?= $gasolina['idpibrai']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>