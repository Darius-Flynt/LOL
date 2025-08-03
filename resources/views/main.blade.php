<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leme Contábil</title>
  <link rel="stylesheet" href="mainstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>
<body>
  <header>
  <div class="menu-container">
    <div class="header-left">
      <img src="logo.png" id="LOGO" alt="Logo">
      <h1>Leme Contábil</h1>
    </div>
    <button class="menu-toggle" onclick="document.querySelector('nav').classList.toggle('show')">
      &#9776;
    </button>
    <nav>
      <a href="#">Início</a>
      <a href="#">Serviços</a>
      <a href="#">Sobre</a>
      <a href="#">Contato</a>
      <button onclick="location.href='/register'">Registrar-se</button>
      <button>Entrar na sua Conta</button>
    </nav>
  </div>

  
</header>
  <!-- SEÇÃO CARROSSEL -->
  <main>
    <section class="carrossel-itau">
      <div class="carrossel-itau-conteudo">
        <div class="carrossel-itau-texto">
          <h2>Contabilidade descomplicada para o seu negócio</h2>
          <p>Modernize sua gestão com soluções digitais e seguras.</p>
          <a href="#" class="btn-cta">Conheça nossos serviços</a>
        </div>
        <div class="carrossel-itau-imagem">
          <img src="carrossel_1.jpg" alt="Imagem destaque" id="imagem-carrossel" />
        </div>
      </div>
    </section>
  </main>

  <!-- PARALLAX 1 -->
  <section class="parallax parallax-1"> 
  <div class="card-grid">
    <div class="card">
      <h3>Abertura de Empresa</h3>
      <p>Comece seu negócio com o suporte de quem entende do assunto.</p>
      <img src="icons/abert.svg">
    </div>
    <div class="card">
      <h3>Contabilidade Digital</h3>
      <p>Tenha controle total com tecnologia e segurança na nuvem.</p>
      <img src="icons/digital.svg">
    </div>
    <div class="card">
      <h3>Consultoria Fiscal</h3>
      <p>Evite riscos e otimize seus impostos com especialistas.</p>
      <img src="icons/consult.svg">
    </div>
  </div>
</section>

  <!-- CONTEÚDO -->
  <section class="conteudo">
    <h2>Transforme sua empresa</h2>
    <p>Oferecemos tecnologia, agilidade e transparência para seu negócio crescer.</p>
  </section>

  <!-- PARALLAX 2 -->
  <section class="parallax parallax-2">
    <div class="overlay-texto">
      <h2>Troca de Contador</h2>
      <p>Deixe para trás a papelada e venha para o digital.</p>
      <img src="icons/troca.svg">
    </div>
  </section>

  <!-- CONTEÚDO -->
  <section class="conteudo">
    <h2>Suporte Contábil Completo</h2>
    <p>De MEI a grandes empresas, temos a solução ideal para você.</p>
  </section>

  <!-- PARALLAX 3 -->
  <section class="parallax parallax-3">
    <div class="overlay-texto">
      <h2>Regularize seu CNPJ</h2>
      <p>Nossa equipe cuida de tudo com rapidez e segurança.</p>
      <img src="icons/regularize.svg">
    </div>
  </section>

  <footer>
    <p>&copy; 2025 STK Software. Todos os direitos reservados.</p>
  </footer>

  <!-- Script do Carrossel -->
  <script>
    const imagens = [
      "carrossel_1.jpg",
      "carrossel_2.jpg",
      "carrossel_3.png"
    ];
    let index = 0;
    const imgElemento = document.getElementById("imagem-carrossel");

    setInterval(() => {
      index = (index + 1) % imagens.length;
      imgElemento.style.opacity = 0;
      setTimeout(() => {
        imgElemento.src = imagens[index];
        imgElemento.style.opacity = 1;
      }, 300);
    }, 10000);
  </script>
</body>
</html>
