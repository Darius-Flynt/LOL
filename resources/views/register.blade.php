<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leme Contábil</title>
  <link rel="stylesheet" href="registerstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>
<body>
  <header>
    <div class="header-left">
      <img src="Logo.png" id="LOGO" alt="Logo Leme" />
      <h1>Leme Contábil</h1>
    </div>
    <nav>
      <a href="/main">Inicio</a>
      <a href="#">Ajuda</a>
      <a href="#">Sobre Nós</a>
      <button>Registrar-se</button>
      <button>Acessar Sua Conta</button>
    </nav>
  </header>

  <!-- formualrio de registro -->
  <main>
    <section class="registro">
      <h2>Crie sua Conta</h2>
      <form action="/register" method="POST">
        <!-- Laravel CSRF, se estiver usando Blade -->
        <!-- @csrf -->

        <div class="form-group">
          <label for="nome">Nome completo</label>
          <input type="text" id="nome" name="nome" required />
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" required />
        </div>

        <div class="form-group">
          <label for="confirmar">Confirmar Senha</label>
          <input type="password" id="confirmar" name="confirmar" required />
        </div>

        <button type="submit" class="btn-registro">Registrar-se</button>
        <p>Já possui uma conta? <a href="/login">Acesse aqui</a></p> 
      </form>
    </section>

  </main>
</body>
</html>
