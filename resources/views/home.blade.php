@extends('layouts.app')
@section('content')

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        
        <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert" >
            {{ Session::get('message_sent') }}
        </div>              
        @endif 
        <nav id="navbar" class="navbar order-last order-lg-0">
          {{-- {!! menu('frontend','nav')!!} --}}

          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Principal</a></li>
            <li><a class="nav-link scrollto" href="#about">Quem Somos</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
            {{-- <li><a class="nav-link scrollto" href="#team">Equipe</a></li> --}}
            {{-- <li><a href="blog.html">Blog</a></li> --}}
            <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ url('services/acrilicos') }}">Acrílicos</a></li>              
                <li><a href="{{ url('services/comunicacao_interna') }}">Comunicação Interna</a></li>
                <li><a href="{{ url('services/comunicacao_externa') }}">Comunicação Externa</a></li>
                <li><a href="{{ url('services/envelopamento') }}">Envelopamento</a></li>
                <li><a href="{{ url('services/personalizados') }}">Personalizados</a></li>              
                <li><a href="{{ url('services/impressos') }}">Impressos Gráficos</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        <a href="#contact" class="get-started-btn scrollto">Orçamento</a>
      </div>
    </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          {{-- <h1>Comunicação é o nosso negócio</h1> --}}
          {{-- <h2>We are team of talented designers making websites with Bootstrap</h2> --}}
          {{-- <a href="#about" class="btn-get-started scrollto">Saiba Mais</a> --}}
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
    
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-facebook"></i>
                  <span data-purecounter-start="0" data-purecounter-end="93" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Curtidas</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                  <i class="bi bi-instagram"></i>
                  <span data-purecounter-start="0" data-purecounter-end="302" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Seguidores</p>
                </div>
              </div>

    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="bi bi-cup"></i>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Copos de café</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="bi bi-lightbulb"></i>
                  <span data-purecounter-start="0" data-purecounter-end="515" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Boas ideias</p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>QUEM SOMOS</h3>
              <p>
                Mercado Ativo - Marketing, Comunicação Visual e Gráfica é uma empresa sediada em Marabá, com 5 anos de atuação na área de gestão estratégica de marketing.
              </p>
              <a href="#contact" class="about-btn"><span>Contato</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-timer"></i>
                  <h4>Agora, também</h4>
                  <p>atuando na área de Comunicação Visual, com o intuito de desenvolver trabalhos integrados nos diversos segmentos de comunicação estratégica:</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Planejamento estratégico de marketing;</h4>
                  <p>Design gráfico, Impressos Gráficos, Carimbos, Comunicação Visual.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Nosso objetivo</h4>
                  <p>é atender nossos clientes de forma qualitativa e comprometida.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Especializada em</h4>
                  <p>Impressões digitais e gráfica on</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="section-title">
        <h2>Clientes</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
      </div>
      <div class="container" data-aos="zoom-in">
        <div class="row d-flex flex-row justify-content-center">
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="http://www.acimmaraba.com.br/novosite/" target="_blank"><img src="{{ asset('img/clients/acim.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.facebook.com/amazoniaferroeaco/" target="_blank"><img src="{{ asset('img/clients/amazonia.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="#contact" target="_blank"><img src="{{ asset('img/clients/so_falta_voce.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.banpara.b.br/" target="_blank"><img src="{{ asset('img/clients/banpara.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="http://www.cacss.com.br/" target="_blank"><img src="{{ asset('img/clients/cacss.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://blog.carajasonline.com/" target="_blank"><img src="{{ asset('img/clients/carajas.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.destinarambiental.com.br/" target="_blank"><img src="{{ asset('img/clients/destinar.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.facimpa.edu.br/" target="_blank"><img src="{{ asset('img/clients/faculdade_de_medicina_maraba.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.sebrae.com.br/sites/PortalSebrae" target="_blank"><img src="{{ asset('img/clients/sebrae.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://sindicom.com.br/" target="_blank"><img src="{{ asset('img/clients/sindicom.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.tbl.com.br/" target="_blank"><img src="{{ asset('img/clients/tbl_bertolini.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.facebook.com/Tocarisorvetesmaraba" target="_blank"><img src="{{ asset('img/clients/tocari.png') }}" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 img-fluid clients-wrap m-3">
              <a href="https://www.unimed.coop.br/site/" target="_blank"><img src="{{ asset('img/clients/unimed.png') }}" alt=""></a>
            </div>
        </div>
        {{-- <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide" ><img src="{{ asset('img/clients/acim.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/amazonia.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/banpara.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/cacss.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/carajas.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/destinar.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/faculdade_de_medicina_maraba.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/sebrae.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/sindicom.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/tbl_bertolini.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/tocari.png') }}" style="width:180px" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/unimed.png') }}" style="width:180px" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div> --}}
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Tabs Section ======= -->
    {{-- <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('img/tabs-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/tabs-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/tabs-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/tabs-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serviços</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('img/servicos/envelopamento.png') }}" alt="" style="float:left; max-width:100px;margin-right:10px" >
              <h4><a href="#">Envelopamento</a></h4>
              <p>​​​Possuímos experiência na utilização de adesivos desde a impressão até a aplicação correta do adesivo com a logo da empresa até o envelopamento total do veículo em impressão digital.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('img/servicos/comunicacao_interna.png') }}" alt="" style="float:left; max-width:100px;margin-right:10px" >
              <h4><a href="#">Comunicação interna</a></h4>
              <p>Confeccionados em lona ou tecido, com adesivos recortados ou imagens digitais. Produzimos diversos modelos para utilização interna em eventos, apresentações, promoções ou a própria loja.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('img/servicos/comunicacao_externa.png') }}" alt="" style="float:left; max-width:100px;margin-right:10px" >
              <h4><a href="#">Comunicação externa</a></h4>
              <p>Produzimos a estrutura com barras metalom, tendo iluminação direta ou não, revestidas de lona impressa com impressão digital ou adesivos em recorte eletrônico, podendo ser em chapa galvanizada e ACM.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <img src="{{ asset('img/servicos/personalizados.png') }}" alt="" style="float:left; max-width:100px;margin-right:10px" >
              <h4><a href="#">Personalizados</a></h4>
              <p>Confeccionamos em várias cores e espessuras, utilizando materiais como chapas galvanizadas, isopor, PVC, aço inox, acrílicos, MDF, podendo, tambem, ser iluminadas direta ou indiretamente.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <img src="{{ asset('img/servicos/acrilicos.png') }}" alt="" style="float:left; max-width:100px; margin-right:10px"  >
              <h4><a href="#">Acrílicos</a></h4>
              <p>Produzimos em PVC, acrílico, ACM, MDF, inox ou chapa galvanizada, podendo ser adesivadas em recorte eletrônico, imagens digitais ou em baixo relevo ou lona.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <img src="{{ asset('img/servicos/impressos.png') }}" alt="" style="float:left; max-width:100px; margin-right:10px" >
              <h4><a href="#">Impressos Gráficos</a></h4>
              <p>Impressões de alta qualidade a preços acessíveis. Utilizamos as mais modernas ferramentas do setor para simplificar e agilizar o complexo processo de encomenda de impressos personalizados.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-envelopamento">Envelopamento</li>
              <li data-filter=".filter-comunicacao_interna">Comunicação Interna</li>
              <li data-filter=".filter-comunicacao_externa">Comunicação Externa</li>
              <li data-filter=".filter-personalizados">Personalizados</li>
              <li data-filter=".filter-acrilico">Acrílicos</li>
              <li data-filter=".filter-impressos">Impressos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}"  class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Comunicação Interna</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Comunicação Interna"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Localiza</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Localiza"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/so_falta_voce.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Só falta você</h4>
                <p>Seja cliente</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/so_falta_voce.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Peg Pag"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peg Pag</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Peg Pag"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport Mania</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sport Mania"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Veiculo Longo</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Veiculo Longo"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sk Net</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sk Net"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Consulting</h4>
                <p>Comunicacao_interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Consulting"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

       

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-acrilico">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-10.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Quarto</h4>
                <p>Acrílico</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-10.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Quarto Acrílico"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-11.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-11.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-12.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sul Pará</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-12.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sul Pará"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-13.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>JCB</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-13.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="JCB"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-14.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A1</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-14.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A1"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-15.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SK Net</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-15.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SK Net"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-16.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vivo</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-16.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Vivo"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-17.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MabVida</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-17.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="MabVida"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-18.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MabVida</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-18.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="MabVida"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

       

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-19.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Consulting</h4>
                <p>Comunicacao Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-19.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Consulting"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-20.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-20.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-21.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-21.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

      

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-23.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-23.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-22.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Invest Solar</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-22.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Invest Solar"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-24.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Thiago's</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-24.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Thiago's"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

     

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-25.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Thiago's</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-25.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Thiago's"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-26.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ipiranga</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-26.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ipiranga"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-27.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Performance</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-27.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Performance"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

       

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-28.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Adventure Caça e Pesca</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-28.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Adventure Caça e Pesca"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-29.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Adventure Caça e Pesca</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-29.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Adventure Caça e Pesca"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-30.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tocari</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-30.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tocari"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

       

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-31.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Trifill</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-31.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Trifill"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-comunicacao_interna">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-32.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hall</h4>
                <p>Comunicação Interna</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-32.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hall"><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}"  class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}"  class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}"  class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipe</h2> --}}
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        {{-- </div> --}}

        {{-- <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Team Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contato</h2>
          {{-- <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nosso Endereço</h3>
              <p>Folha 31, quadra 11, lote 02 AV. VP08 - Nova Marabá, Marabá - PA, 68507-630</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>mercadoativo@mercadoativo.com</p>              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p>(94) 9.9282-1103</p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.431571447713!2d-49.0943532847928!3d-5.350915596118568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92c3a0ee18d18ab5%3A0xf46a0391abd2eaad!2sMercado%20Ativo%20-%20Marketing%2C%20Gr%C3%A1fica%20e%20Comunica%C3%A7%C3%A3o%20Visual!5e0!3m2!1spt-BR!2sbr!4v1644591561596!5m2!1spt-BR!2sbr" width="580" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-lg-6">           
            <form action="{{ route('contact.send') }}" method="post" role="form" class="php-email-form" enctype="multpart/form-data">
              @csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6Led9CQgAAAAADECK9dkkn8GUsyFhmtIpFbYG1QM"></div>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada</div>
              </div>



              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection