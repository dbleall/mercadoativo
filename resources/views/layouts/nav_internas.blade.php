@section('nav_internas')
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}#hero">Principal</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#about">Quem Somos</a></li>
          <li><a class="nav-link scrollto " href="{{ url('/') }}#portfolio">Portfolio</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Equipe</a></li> --}}
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
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
              <li><a href="{{ url('services/personalizados') }}">Personaliados</a></li>              
              <li><a href="{{ url('services/impressos') }}">Impressos Gráficos</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/') }}#contact" class="get-started-btn scrollto">Orçamento</a>
    </div>
  </header><!-- End Header -->
@endsection