<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Mots-clés du site ici">
		<meta name="description" content="Description du site ici">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>Port-Abidjan</title>

		<!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/logo_abidajn.png') }}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Styles CSS -->
		<link rel="stylesheet" href="{{ asset('asset2/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('asset2/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/icofont.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset2/css/owl-carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/datepicker.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset2/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('asset2/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('asset2/style.css') }}">

        <!-- Custom Styles -->
		<style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f4f7f9; /* Couleur de fond de secours */
                background-image: url('{{ asset('assets/images/back.jpg') }}'); /* Remplacez avec le chemin de votre image de fond */
                background-size: cover; /* Pour couvrir tout l'écran */
                background-position: center; /* Pour centrer l'image */
                background-repeat: no-repeat; /* Pour éviter la répétition de l'image */
                /* background-attachment: fixed; /* Optionnel: pour fixer l'image pendant le défilement */ */
            }

            .contact-us.section {
                padding: 20px;
            }

            .contact-us-form {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                max-width: 500px;
                width: 100%;
                text-align: center; /* Centrer le contenu du formulaire par défaut */
            }

            .form-logo {
                margin-bottom: 20px; /* Espacement entre le logo et le titre */
                max-width: 150px; /* Ajustez la taille du logo si nécessaire */
                height: auto; /* Garder le ratio d'aspect du logo */
                display: block; /* Pour pouvoir centrer avec margin auto */
                margin-left: auto;
                margin-right: auto;
            }


            .contact-us-form h2 {
                text-align: center;
                margin-bottom: 25px;
                color: #333;
            }

            .form-group {
                margin-bottom: 20px;
                text-align: left; /* Réaligner le texte à gauche pour les champs de formulaire */
            }

            .form-group input[type="email"],
            .form-group input[type="password"] {
                width: 100%;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
            }

            .form-group .btn {
                width: 100%;
                padding: 12px;
                border: none;
                border-radius: 4px;
                background-color: #007bff;
                color: white;
                font-size: 18px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .form-group .btn:hover {
                background-color: #0056b3;
            }

            .error-message {
                color: red;
                font-size: 14px;
                margin-top: 5px;
            }
        </style>

        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    </head>
    <body>
        <section class="contact-us section">
            <div class="container">
                <div class="col-lg-11 mx-auto">
                    <div class="contact-us-form">
                        <img src="{{ asset('assets/images/logo_abidajn.png') }}" alt="Logo Port-Abidjan" class="form-logo"> <!-- Ajout du logo ici -->
                        <h2>Se connecter</h2>
                        <form class="form" method="post" action="{{ route('handleLogin.admin') }}" id="reformeForm">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" >
                                        @error('email')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Mot de passe" >
                                        @error('password')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Se connecter</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

		<!-- Scripts JS -->
        <script src="{{ asset('asset2/js/jquery.min.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery-migrate-3.0.0.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('asset2/js/easing.js') }}"></script>
		<script src="{{ asset('asset2/js/colors.js') }}"></script>
		<script src="{{ asset('asset2/js/popper.min.js') }}"></script>
		<script src="{{ asset('asset2/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery.nav.js') }}"></script>
		<script src="{{ asset('asset2/js/slicknav.min.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery.scrollUp.min.js') }}"></script>
		<script src="{{ asset('asset2/js/niceselect.js') }}"></script>
		<script src="{{ asset('asset2/js/tilt.jquery.min.js') }}"></script>
		<script src="{{ asset('asset2/js/owl-carousel.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('asset2/js/steller.js') }}"></script>
		<script src="{{ asset('asset2/js/wow.min.js') }}"></script>
		<script src="{{ asset('asset2/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
		<script src="{{ asset('asset2/js/gmaps.min.js') }}"></script>
		<script src="{{ asset('asset2/js/map-active.js') }}"></script>
		<script src="{{ asset('asset2/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('asset2/js/main.js') }}"></script>

        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
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