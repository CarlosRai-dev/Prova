<?php

require_once '../conn.php';

$id_cestarai = filter_input(INPUT_GET, 'idcestarai');

$stmt = $conn->prepare("SELECT * FROM cestarai WHERE idcestarai = :ID");

$stmt->bindValue(':ID', $id_cestarai);

$stmt->execute();

$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_cesta.php" method="POST">
  <input type="hidden" name=id_cestarai value="<?= $item['idcestarai'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_cestarai" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_cestarai" id="ano_cestarai" value="<?= $item['anocestarai'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_cestarai" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_cestarai" id="valor_cestarai" value="<?= $item['valorcestarai'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>