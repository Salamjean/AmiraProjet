<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Port-Abidjan</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo_abidajn.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/bootstrap.min.css') }}">

    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/nice-select.css') }}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/font-awesome.min.css') }}">

    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/icofont.css') }}">

    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('asset2/css/slicknav.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/owl-carousel.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/datepicker.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/animate.min.css') }}">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/magnific-popup.css') }}">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('asset2/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('asset2/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset2/css/bootstrap.min.css') }}">

    <style>
        .form-group {
            margin-bottom: 15px;
        }

        textarea {
            width: 100%;
            height: 120px;
        }
    </style>

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row" style="display: flex; justify-content: space-between; align-items: center;">
                        <!-- Logo -->
                        <div class="logo mb-4">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo_abidajn.png') }}" style="width: 60%" alt="#">
                            </a>
                        </div>
                        <!-- Book Appointment Button -->
                        <div class="get-quote ml-10">
                            <a href="{{ route('home') }}" class="btn">Accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Soumission des réformes</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Soumission</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="col-lg-11 mx-auto">
                <div class="contact-us-form">
                    <h2>Soumission</h2>
                    <p>Veuillez renseigner tous les champs pour la soumission de votre réforme</p>
                    <form class="form" method="post" action="{{ route('store.reforme') }}" id="reformeForm">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nom <span style="color:red">*</span></label>
                                    <input type="text" name="name" placeholder="Nom" value="{{ old('name') }}">
                                    @error('name')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Prénoms <span style="color:red">*</span></label>
                                    <input type="text" name="prenom" placeholder="Prénoms" value="{{ old('prenom') }}">
                                    @error('prenom')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Contact <span style="color:red">*</span></label>
                                    <input type="text" name="contact" placeholder="Contact" value="{{ old('contact') }}">
                                    @error('contact')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Matricule <span style="color:red">*</span></label>
                                    <input type="text" name="matricule" placeholder="Matricule" value="{{ old('matricule') }}">
                                    @error('matricule')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Fonction <span style="color:red">*</span></label>
                                    <input type="text" name="fonction" placeholder="Fonction" value="{{ old('fonction') }}">
                                    @error('fonction')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Date d'embauche <span style="color:red">*</span></label>
                                    <input type="date" name="dateEmbauche" id="dateEmbauche" placeholder="Date d'embauche" value="{{ old('dateEmbauche') }}" onchange="calculateAnciennete()">
                                    @error('dateEmbauche')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Ancienneté <span style="color:red">*</span></label>
                                    <input type="text" name="ancien" id="ancien" placeholder="Ancienneté" value="{{ old('ancien') }}" style="background-color: beige" readonly>
                                    @error('ancien')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Immatriculation du véhicule <span style="color:red">*</span></label>
                                    <input type="text" name="immatriculation" placeholder="Immatriculation du véhicule" value="{{ old('immatriculation') }}">
                                    @error('immatriculation')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Marque du véhicule <span style="color:red">*</span></label>
                                    <input type="text" name="marque" placeholder="Marque du véhicule" value="{{ old('marque') }}">
                                    @error('marque')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Date de naissance <span style="color:red">*</span></label>
                                    <input type="date" name="dateNaiss" placeholder="Date de naissance" value="{{ old('dateNaiss') }}">
                                    @error('dateNaiss')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Date de mise en service <span style="color:red">*</span></label>
                                    <input type="date" name="dateServ" placeholder="Date de mise en service" value="{{ old('dateServ') }}">
                                    @error('dateServ')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Montant à proposer <span style="color:red">*</span></label>
                                    <input type="number" name="montant" value="{{ old('montant') }}">
                                    @error('montant')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>Direction Commerciale, Marketing et de la Communication</h3>
                            <p>(+225) 27 21 23 81 71</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>Côte d'ivoire</h3>
                            <p>Abidjan, Treichville</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Heure de disponibilité</h3>
                            <p>Lundi - Mardi : 08h à 17h</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Footer Area -->
    @include('layouts.footer')

    <!-- jquery Min JS -->
    <script src="{{ asset('asset2/js/jquery.min.js') }}"></script>
    <!-- jquery Migrate JS -->
    <script src="{{ asset('asset2/js/jquery-migrate-3.0.0.js') }}"></script>
    <!-- jquery Ui JS -->
    <script src="{{ asset('asset2/js/jquery-ui.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('asset2/js/easing.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('asset2/js/colors.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('asset2/js/popper.min.js') }}"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{ asset('asset2/js/bootstrap-datepicker.js') }}"></script>
    <!-- Jquery Nav JS -->
    <script src="{{ asset('asset2/js/jquery.nav.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('asset2/js/slicknav.min.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('asset2/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect JS -->
    <script src="{{ asset('asset2/js/niceselect.js') }}"></script>
    <!-- Tilt Jquery JS -->
    <script src="{{ asset('asset2/js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('asset2/js/owl-carousel.js') }}"></script>
    <!-- counterup JS -->
    <script src="{{ asset('asset2/js/jquery.counterup.min.js') }}"></script>
    <!-- Steller JS -->
    <script src="{{ asset('asset2/js/steller.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('asset2/js/wow.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('asset2/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Google Map API Key JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
    <!-- Gmaps JS -->
    <script src="{{ asset('asset2/js/gmaps.min.js') }}"></script>
    <!-- Map Active JS -->
    <script src="{{ asset('asset2/js/map-active.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('asset2/js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('asset2/js/main.js') }}"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Fonction pour calculer l'ancienneté
        function calculateAnciennete() {
            const dateEmbauche = document.getElementById('dateEmbauche').value;
            if (!dateEmbauche) {
                document.getElementById('ancien').value = '';
                return;
            }
            const embaucheDate = new Date(dateEmbauche);
            const today = new Date();
            let anciennete = today.getFullYear() - embaucheDate.getFullYear();
            if (today.getMonth() < embaucheDate.getMonth() || 
                (today.getMonth() === embaucheDate.getMonth() && today.getDate() < embaucheDate.getDate())) {
                anciennete--;
            }
            document.getElementById('ancien').value = anciennete ;
        }

        // Gestion des messages SweetAlert2
        $(document).ready(function() {
            @if (Session::has('success1'))
                Swal.fire({
                    icon: 'success',
                    title: 'Suppression réussie',
                    text: '{{ Session::get('success1') }}',
                    showConfirmButton: true,
                    confirmButtonText: 'OK',
                    background: '#ffcccc',
                    color: '#b30000'
                });
            @endif

            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Validation réussie',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: true,
                    confirmButtonText: 'OK',
                    background: 'white',
                    color: '#006600'
                });
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: '{{ Session::get('error') }}',
                    showConfirmButton: true,
                    confirmButtonText: 'OK',
                    background: '#f86750',
                    color: '#ffffff'
                });
            @endif
        });
    </script>
</body>
</html>