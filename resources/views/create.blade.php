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
    <title>Port Autonome Abidjan</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo_abidajn.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- CSS Links -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .form-group {
            margin-bottom: 15px;
        }

        textarea {
            width: 100%;
            height: 120px;
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>

    <!-- Header Area -->
    <header class="header">
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
    </header>

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

    <!-- Contact Us Section -->
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
                            <!-- Input Fields -->
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


                            <div class="col-lg-6 ">
                                <div class="form-group">
                                    <!-- Label placed above the select -->
                                    <label for="categorie">Catégorie <span style="color:red">*</span></label>
                                    
                                    <!-- Select element -->
                                    <select name="categorie" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                        <option value="Cardre">Cardre</option>
                                        <option value="Agent de maitrise">Agent de maitrise</option>
                                        <option value="Employé">Employé</option>
                                    </select>
                                    
                                    <!-- Error message for validation -->
                                    @error('direction')
                                        <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Additional Fields -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <!-- Label placed above the select -->
                                    <label for="direction">Direction <span style="color:red">*</span></label>
                                    
                                    <!-- Select element -->
                                    <select name="direction" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                        <option value="DL">DG</option>
                                        <option value="DOMSE">DOMSE</option>
                                        <option value="DRH">DRH</option>
                                        <option value="DSIN">DL</option>
                                        <option value="DL">DAAJC</option>
                                        <option value="DL">DEESP</option>
                                        <option value="DL">DDP</option>
                                        <option value="DL">DTP</option>
                                        <option value="DL">DIMO</option>
                                        <option value="DL">DCMC</option>
                                        <option value="DL">DCAQ</option>
                                        <option value="DL">DFC</option>
                                        <option value="DL">DAGS</option>
                                        <option value="DL">DSIN</option>
                                        <option value="DL">AUTRES</option>
                                        
                                    </select>
                                    
                                    <!-- Error message for validation -->
                                    @error('direction')
                                        <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Fonction</label>
                                    <input type="text" name="fonction" placeholder="Fonction" value="{{ old('fonction') }}">
                                    @error('fonction')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Note Annuelle <span style="color:red">*</span></label>
                                    <input type="text" name="note" placeholder="Exemple : 1" value="{{ old('note') }}">
                                    @error('note')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Label for Sanction -->
                                <label for="" style="display: block; margin-bottom: 10px;">Sanction disciplinaire <span style="color:red">*</span></label>
                                
                                <!-- Container for the radio buttons -->
                                <div class="form-group d-flex align-items-center">
                                    <!-- Oui Radio Button -->
                                    <div class="d-flex align-items-center mr-3">
                                        <input type="radio" name="sanction" value="oui" id="sanction-oui" class="custom-radio" style="transform: scale(1.2); margin-right: 5px;">
                                        <label for="sanction-oui" style="margin-right: 20px;">Oui</label>
                                    </div>

                                    <!-- Non Radio Button -->
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="sanction" value="non" id="sanction-non" class="custom-radio" style="transform: scale(1.2); margin-right: 5px;">
                                        <label for="sanction-non">Non</label>
                                    </div>
                                </div>

                                <!-- Error message for sanction -->
                                @error('sanction')
                                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Date Fields -->
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

                            <!-- Vehicle Details -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Immatriculation du véhicule <span style="color:red">*</span></label>
                                    <input type="text" name="immatriculation" placeholder="Exemple : AA-XXXX-AA" value="{{ old('immatriculation') }}">
                                    @error('immatriculation')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Type de véhicule <span style="color:red">*</span></label>
                                    <input type="text" name="typeV" placeholder="Marque du véhicule" value="{{ old('typeV') }}">
                                    @error('typeV')
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

                            <!-- More Fields -->
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

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Montant à proposer <span style="color:red">*</span></label>
                                    <input type="text" name="montant" placeholder="Ex: 100 000" value="{{ old('montant') }}">
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

        <!-- Contact Info -->
        <div class="contact-info">
            <div class="row">
                <!-- Single Info -->
                <div class="col-lg-4 col-12">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>Direction Logistique, Département Maritime et Terrestre</h3>
                            <p>(+225) 05 00 703 103</p>
                        </div>
                    </div>
                </div>
                <!--/ End single-info -->

                <div class="col-lg-4 col-12">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>Côte d'Ivoire</h3>
                            <p>Abidjan, Treichville Site D'Outillage</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Heure de disponibilité</h3>
                            <p>Lundi - Vendredi : 07h30 à 16h3O</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JavaScript -->
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
    <script src="{{ asset('asset2/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('asset2/js/map-active.js') }}"></script>
    <script src="{{ asset('asset2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset2/js/main.js') }}"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Calculate Seniority
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

        // SweetAlert2 Messages Handling
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
