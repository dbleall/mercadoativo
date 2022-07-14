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
          <h2>Comunicação Externa</h2>
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



          

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peg Pag</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Peg Pag"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-11.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A Favorita</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-11.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A Favorita"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-18.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MabVida</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-18.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="MabVida"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

       

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-19.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Consulting</h4>
                <p>Comunicacao Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-19.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Consulting"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-20.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-20.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-21.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-21.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

      

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-23.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimed</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-23.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Unimed"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-22.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Invest Solar</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-22.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Invest Solar"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-24.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Thiago's</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-24.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Thiago's"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

     
          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-27.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Performance</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-27.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Performance"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

            

          <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-comunicacao_externa">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/portfolio-31.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Trifill</h4>
                <p>Comunicação Externa</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/portfolio-31.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Trifill"><i class="bx-zoom-in"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection