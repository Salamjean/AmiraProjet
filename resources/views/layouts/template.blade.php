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

  <title>Port-Abidjan</title>

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

  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- gallery section -->

  <div class="gallery_section layout_padding2">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        <div class=" col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="images/g1.jpg" alt="">
            <a href="images/g1.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="images/g2.jpg" alt="">
            <a href="images/g2.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="images/g3.jpg" alt="">
            <a href="images/g3.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="images/g4.jpg" alt="">
            <a href="images/g4.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="images/g5.jpg" alt="">
            <a href="images/g5.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="images/g6.jpg" alt="">
            <a href="images/g6.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </div>

  <!-- end gallery section -->


  <!-- service section -->

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
                Residential Decoration
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio aspernatur officiis exercitationem asperiores praesentium
              </p>
              <a href="">
                Read More
              </a>
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
                Ecommercial Decoration
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio aspernatur officiis exercitationem asperiores praesentium
              </p>
              <a href="">
                Read More
              </a>
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
                Office Decoration
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio aspernatur officiis exercitationem asperiores praesentium
              </p>
              <a href="">
                Read More
              </a>
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

</body>

</html>