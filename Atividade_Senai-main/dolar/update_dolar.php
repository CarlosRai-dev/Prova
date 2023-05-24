<?php

require_once '../conn.php';

$id_marcio = filter_input(INPUT_GET, 'iddolarrai');

$stmt = $conn->prepare("SELECT * FROM dolarrai WHERE iddolarrai = :ID");

$stmt->bindValue(':ID', $id_dolarrai);

$stmt->execute();

$id_dolarrai = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_dolar.php" method="POST">
  <input type="hidden" name=id_dolarrai value="<?= $id_dolarrai['iddolarrai'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_dolarrai" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_dolarrai" id="ano_dolarrai" value="<?= $id_dolarrai['anodolarrai'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_dolarrai" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_dolarrai" id="valor_dolarrai" value="<?= $id_dolarrai['valordolarrai'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>