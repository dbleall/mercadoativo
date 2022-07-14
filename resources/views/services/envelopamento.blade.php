@extends('layouts.app')
@section('content')
  <main id="main">
     <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/') }}#hero">Principal</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#about">Quem Somos</a></li>
          <li><a class="nav-link scrollto " href="{{ url('/') }}#clients">Clientes</a></li>
          <li><a class="nav-link scrollto " href="{{ url('/') }}#portfolio">Portfolio</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Equipe</a></li> --}}
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li class="dropdown active"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
              <li><a href="{{ url('services/acrilicos') }}">Acrílicos</a></li>              
              <li><a href="{{ url('services/comunicacao_interna') }}">Comunicação Interna</a></li>
              <li><a href="{{ url('services/comunicacao_externa') }}">Comunicação Externa</a></li>
              <li><a href="{{ url('services/envelopamento') }}">Envelopamento</a></li>
              <li><a href="{{ url('services/personalizados') }}">Personalizados</a></li>              
              <li><a href="{{ url('services/impressos') }}">Impressos Gráficos</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/') }}#contact" class="get-started-btn scrollto">Orçamento</a>
    </div>
  </header><!-- End Header -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Envelopamento</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              {{-- <li data-filter=".filter-envelopamento">Envelopamento</li>
              <li data-filter=".filter-comunicacao_interna">Comunicação Interna</li>
              <li data-filter=".filter-comunicacao_externa">Comunicação Externa</li>
              <li data-filter=".filter-personalizados">Personalizados</li>
              <li data-filter=".filter-acrilico">Acrílicos</li>
              <li data-filter=".filter-impressos">Impressos</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">



          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport Mania</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sport Mania"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Veiculo Longo</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Veiculo Longo"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

         
          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sk Net</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sk Net"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-12.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sul Pará</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-12.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sul Pará"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-13.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>JCB</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-13.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="JCB"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-14.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A1</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-14.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A1"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-envelopamento">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-15.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SK Net</h4>
                <p>Envelopamento</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-15.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SK Net"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection