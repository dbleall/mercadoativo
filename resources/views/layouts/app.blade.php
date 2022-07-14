<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mercado Ativo - Página Principal</title>
  <meta content="Mercado Ativo - Marketing, Comunicação Visual e Gráfica é uma empresa sediada em Marabá, com 5 anos de atuação na área de gestão estratégica de marketing." name="description">
  <meta content="Mercado ativo, gráfica, marketing, impressão, impressões, comunicação visual, marabá, pará " name="keywords">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-D88L5LTYZ9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-D88L5LTYZ9');
  </script>

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/glightbox.min.css') }}"  rel="stylesheet">
  <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.7.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  #hero {

    background: url("{{ asset('img/hero-bg.jpg') }}") top center no-repeat;

  }

</style>
<body>



    @yield('content')

    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Endereço<span>.</span></h3>
            <p>
              Folha 31, quadra 11,<br>
              lote 02 AV. VP08 - Nova Marabá, <br>
              Marabá - PA, 68507-630<br><br>
              <strong>Phone:</strong> (94) 9.9282-1103<br>
              <strong>Email:</strong> vendas@mercadoativo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Mapa do site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Principal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Quem Somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Equipe</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Contato</a></li>              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Envelopamento</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Comunicação externa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Comunicação interna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Personalizados</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Acrílicos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Impressos Gráficos</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Carreiras</h4>
            <p>Para trabalhar conosco, por favor envie seu currículo e informação para: mercadoativo@mercativo.com.br</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Desenvolvido por <strong><span>Novaz</span></strong>. Todos os direitos reservados
        </div>
        {{-- <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">       
        <a href="https://www.facebook.com/mercadoativoComunicVisual/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/mercado_ativo/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

<!-- Vendor JS Files -->
<script src="{{ asset('js/purecounter.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/glightbox.min.js') }}" ></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}" ></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}" ></script>
  
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


</html>