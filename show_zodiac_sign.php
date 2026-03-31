<?php include 'layouts/header.php'; ?>

<main class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="flashcard text-center p-5">
    <?php
    $data_input = $_POST['data_nascimento'] ?? null;

    if ($data_input) {
      $xml = simplexml_load_file("signos.xml");

      // Criamos um objeto de data apenas com o dia e mês do usuário
      $data_user = DateTime::createFromFormat('Y-m-d', $data_input);
      $dia_mes_user = $data_user->format('m-d');

      $signo_encontrado = null;

      foreach ($xml->signo as $s) {
        // Converte as datas do XML (ex: 21/03) para formato comparável (03-21)
        $d_ini = DateTime::createFromFormat('d/m', (string)$s->dataInicio)->format('m-d');
        $d_fim = DateTime::createFromFormat('d/m', (string)$s->dataFim)->format('m-d');

        // Lógica para signos que viram o ano (Capricórnio)
        if ($d_ini > $d_fim) {
          if ($dia_mes_user >= $d_ini || $dia_mes_user <= $d_fim) {
            $signo_encontrado = $s;
            break;
          }
        } else {
          if ($dia_mes_user >= $d_ini && $dia_mes_user <= $d_fim) {
            $signo_encontrado = $s;
            break;
          }
        }
      }

      if ($signo_encontrado): ?>
        <span class="text-uppercase tracking-widest text-secondary">Você é:</span>
        <h2 class="display-3 my-3 fw-bold text-purple-light"><?= $signo_encontrado->signoNome ?></h2>
        <hr class="mx-auto w-50 border-purple">
        <p class="lead text-white opacity-90 italic">"<?= $signo_encontrado->descricao ?>"</p>
        <div class="essence-box p-3 mt-4">
          <strong class="text-purple-light">Caracteristicas:</strong>
          <span class="text-white"><?= $signo_encontrado->caracteristica ?></span>
        </div>
      <?php else: ?>
        <p class="alert alert-danger">erro de conexão. Tente novamente.</p>
    <?php endif;
    } ?>

    <div class="mt-5">
      <a href="index.php" class="btn btn-outline-purple px-5">Voltar ao Início</a>
    </div>
  </div>
</main>
</body>

</html>