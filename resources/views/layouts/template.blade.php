<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="{{ asset('assets/images/logo_abidajn.png') }}" type="image/gif" />

  <title>Port Autonome Abidjan</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="{{ asset('assets/css/ekko-lightbox.css') }}" />

  <!-- font awesome style -->
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('assets/images/logo_abidajn.png') }}" style="width: 70%" alt="">
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="#">Catalogue</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('assets/images/dji_0295.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('assets/images/bateau.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('assets/images/vvvv.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <h1>
            Soumission des réformes
          </h1>
          <p>
           Vous pouvez faire une soumission en cliquant sur le bouton
          </p>
          <div>
            <a href="{{ route('create.reforme') }}" class="slider-link">
                Soumettre
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- about section -->

  <!-- end about section -->

  <!-- gallery section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Transport National & International
              </h5>
              <p>
               Livraison terrestre, maritime et aérienne.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Gestion d'Entrepôt
              </h5>
              <p>
                Stockage, préparation de commandes, inventaire en temps réel.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
              Suivi & Traçabilité des Colis
              </h5>
              <p>
                Plateforme en ligne pour suivre l'avancement des livraisons.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end gallery section -->


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          EXPERTISES
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Expertise 1
              </h5>
              <p>
                Réseau de transport étendu à l'international.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Expertise 2
              </h5>
              <p>
              Plusieurs années d'expérience dans le secteur logistique.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Expertise 2
              </h5>
              <p>
                Partenariats solides avec des transporteurs certifiés.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- footer section -->
  
  <!-- footer section -->


  <!-- jQery -->
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <!-- lightbox Gallery-->
  <script src="{{ asset('assets/js/ekko-lightbox.min.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="copyright-content">
                    <p>© Copyright 2025  |  All Rights Reserved by <a href="https://www.portabidjan.ci/" target="_blank">portautonomeabidjan.ci</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>