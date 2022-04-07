@extends('layouts.outer')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem-vindo ao <span>Projeto Favor</span></h2>
          <p class="animate__animated animate__fadeInUp">O Projeto Favor é o site ideal caso precise de ajuda ou simplesmente quer ajudar alguém</p>
          <a href="/about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Contribuir para um favor</h2>
          <p class="animate__animated animate__fadeInUp">"Uma mão lava a outra" é a melhor maneira para descrever este site. Logo caso queria um favor primeiro precisa de fazer um favor a alguém.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contribuir</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Pedir um favor </h2>
          <p class="animate__animated animate__fadeInUp">Caso precise de um favor basta clicar no botão a baixo</p>
          <a href="/search" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pedir</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Sobre nós</h2>
          <p>Quem nós somos</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <ul>
              <li><i class="ri-check-double-line"></i> </li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Perguntas frequentes</p>
        </div>

        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Como posso ganhar pontos? <i class="bi bi-chevron-down icon-show"></i>
              <i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Quando cria a sua conta automaticamente ganha 1 ponto, para obter mais pontos é necessário ajudar outras pessoas e quando o favor estiver acabado o utilizador que ajudou irá confirmar que o ajudou e assim recebe 1 ponto.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Como posso ajudar outras pessoas? <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Para ajudar outras pessoas basta continuar para baixo.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quantos pontos tenho? <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Para saber a quantidade de pontos que tem basta abrir o seu <a href="">perfil</a>.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End F.A.Q Section -->

  </main>
  <!-- End #main -->
@endsection
