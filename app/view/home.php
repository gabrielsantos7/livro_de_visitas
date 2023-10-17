  <?php require VIEW . "/header.php" ?>

  <h2 id="h2">Cadastro de Visitantes</h2>

  <form action=" salvar" method="POST" id="form">
  <label for="name">Nome completo:</label>
  <input type="text" id="name" name="name" required>
  <p id="p-alert" class="invisible">O nome deve conter pelo menos 3 caracteres.</p><br><br>

    <label for="rating">Nota do Evento:</label>
    <div class="rating">
      <input type="radio" id="star5" class="star" name="rating" value="5">
      <label for="star5">☆</label>

      <input type="radio" id="star4" class="star" name="rating" value="4">
      <label for="star4">☆</label>

      <input type="radio" id="star3" class="star" name="rating" value="3">
      <label for="star3">☆</label>

      <input type="radio" id="star2" class="star" name="rating" value="2">
      <label for="star2">☆</label>
      
      <input type="radio" id="star1" class="star" name="rating" value="1">
      <label for="star1">☆</label>

    </div>

    <button type="submit">Enviar</button>
  </form>

  <?php require VIEW . "/footer.php" ?>