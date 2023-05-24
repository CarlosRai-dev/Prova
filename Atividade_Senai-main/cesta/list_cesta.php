<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM cestarai");
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
    <?php foreach ($list as $cestarai): ?>
    <tbody>
      <tr>
        <td><?= $cestarai['idcestarai']; ?></td>
        <td><?= $cestarai['anocestarai']; ?></td>
        <td><?= $cestarai['valorcestarai']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_cesta.php?idcestarai=<?= $cestarai['idcestarai']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_cesta.php?idcestarai=<?= $cestarai['idcestarai']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>