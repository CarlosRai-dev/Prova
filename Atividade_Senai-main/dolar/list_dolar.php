<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM dolarrai");
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
    <?php foreach ($list as $dolarrai): ?>
    <tbody>
      <tr>
        <td><?= $dolarrai['iddolarrai']; ?></td>
        <td><?= $dolarrai['anodolarrai']; ?></td>
        <td><?= $dolarrai['valordolarrai']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_dolar.php?iddolarrai=<?= $dolarrai['iddolarrai']; ?>">Editar </a>
            <a class="btn btn-dark"  style="background-color: #7d677e;" href="delete_dolar.php?iddolarrai=<?= $dolarrai['iddolarrai']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>