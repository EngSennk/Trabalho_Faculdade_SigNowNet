<?php include('layouts/header.php'); ?>

<main class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow-lg p-4 text-center custom-card" style="max-width: 500px;">
    <h1 class="mb-3">SigNowNet</h1>
    <p class="text-light opacity-75">Descubra o que o seu signo diz sobre você.</p>

    <form action="show_zodiac_sign.php" method="POST" class="text-start">
      <div class="mb-4">
        <label for="data_nascimento" class="form-label fw-bold text-light">Sua data de nascimento:</label>
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
      </div>
      <button type="submit" class="btn btn-purple w-100">Descobrir Meu Signo</button>
    </form>
  </div>
</main>

</body>

</html>