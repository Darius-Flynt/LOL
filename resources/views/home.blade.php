<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contabilidade Digital</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-left">
        <h1>Leme Contábil</h1>
    <img src="Logo.png" id="LOGO">
    </div>
    
    <nav>
      <a href="#">Dashboard</a>
      <a href="#">Receita</a>
      <a href="#">Impostos</a>
      <button>Nova Transação</button>
    </nav>
  </header>

  <!-- <div class="carrossel">
    <div class="slides">
        <img src="carrossel_1.jpg" alt="Imagem 1">
        <img src="carrossel_2.jpg" alt="Imagem 2">
        <img src="carrossel_3.png" alt="Imagem 3">
    </div>
   </div> -->

  <main class="grid">
    <div class="card">
      <img src="icons/cloud.svg" alt="Dashboard">
      <p>Dashboard</p>
    </div>
    <div class="card">
      <img src="icons/bar.svg" alt="Receita">
      <p>Receita</p>
    </div>
    <div class="card">
      <img src="icons/tax.svg" alt="Impostos">
      <p>Impostos</p>
    </div>
    <div class="card">
      <img src="icons/handshake.svg" alt="Relatórios">
      <p>Relatórios</p>
    </div>
  </main>


  <div class="destaques">
    <div class="card destaque">
        <h3>Receita Mensal</h3>
        <p class="valor">R$12.500</p>
    </div>

    <div class="card destaque">
        <h3>Declaração de Impostos</h3>
        <p class="entregue">Entregue</p>
        <button>Visualizar Declaração</button>
    </div>

    <div class="seguranca">
        <img src="icons/shield.svg" alt="Segurança">
        <p>Assinatura:<br>Plano Normal</p>
    </div>
  </div>
</body>
</html>
