<?php

require_once '../conn.php';

$id_pibrai = filter_input(INPUT_GET, 'idpibrai');

$stmt = $conn->prepare("SELECT * FROM pibrai WHERE idpibrai= :ID");

$stmt->bindValue(':ID', $id_pibrai);

$stmt->execute();

$id_pibrai = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_pib.php" method="POST">
  <input type="hidden" name=id_pibrai value="<?= $id_pibrai['idpibrai'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_pibrai" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_pibrai" id="ano_pibrai" value="<?= $id_pibrai['anopibrai'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_pibrai" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_pibrai" id="valor_pibrai" value="<?= $id_pibrai['valorpibrai'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>