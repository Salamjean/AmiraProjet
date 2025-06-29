<!doctype html>
<html class="no-js" lang="fr">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Port Autonome Abidjan, Réforme véhicule, Administration portuaire">
    <meta name="description" content="Formulaire de soumission pour la réforme de véhicules au Port Autonome d'Abidjan">
    <meta name='copyright' content='Port Autonome Abidjan'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Réforme de véhicules | Port Autonome Abidjan</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo_abidajn.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #003366;
            --accent-color: #e67e22;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --border-radius: 8px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #f5f7fa;
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--secondary-color);
        }
        
        .header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            box-shadow: var(--box-shadow);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-inner {
            padding: 10px 0;
        }
        
        .logo img {
            max-height: 70px;
            transition: var(--transition);
        }
        
        .logo img:hover {
            transform: scale(1.05);
        }
        
        .btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .breadcrumbs {
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 86, 179, 0.8)), url('{{asset('assets/images/porr.jpg')}}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .breadcrumbs h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        .bread-list {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
        
        .bread-list li {
            margin: 0 10px;
            font-size: 1.1rem;
        }
        
        .bread-list a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .bread-list a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }
        
        .contact-us {
            padding: 60px 0;
            background-color: white;
        }
        
        .contact-us-form {
            background: white;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 40px;
        }
        
        .contact-us-form h2 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .contact-us-form h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .contact-us-form p {
            margin-bottom: 30px;
            color: #666;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .form-control, input[type="text"], 
        input[type="date"], 
        input[type="number"], 
        select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
            background-color: #f8f9fa;
        }
        
        .form-control:focus, 
        input[type="text"]:focus, 
        input[type="date"]:focus, 
        input[type="number"]:focus, 
        select:focus, 
        textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25);
            outline: none;
            background-color: white;
        }
        
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .custom-radio {
            margin-right: 8px;
            accent-color: var(--primary-color);
        }
        
        .radio-group {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
        }
        
        .login-btn .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .contact-info {
            background-color: var(--secondary-color);
            color: white;
            padding: 40px 0;
            border-radius: var(--border-radius);
            margin-top: 40px;
        }
        
        .single-info {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 0 20px;
        }
        
        .single-info i {
            font-size: 24px;
            color: var(--accent-color);
            margin-right: 15px;
            margin-top: 5px;
        }
        
        .single-info h3 {
            color: white;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .single-info p {
            margin: 0;
            opacity: 0.9;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        
        footer p {
            margin: 0;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .breadcrumbs {
                padding: 40px 0;
            }
            
            .breadcrumbs h2 {
                font-size: 2rem;
            }
            
            .contact-us-form {
                padding: 30px;
            }
            
            .single-info {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .single-info i {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .contact-us-form {
            animation: fadeIn 0.6s ease-out;
        }
        
        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        
        .loader {
            position: relative;
            width: 100px;
            height: 100px;
        }
        
        .loader-outter {
            position: absolute;
            border: 4px solid var(--primary-color);
            border-left-color: transparent;
            border-bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            animation: loader-outter 1s cubic-bezier(.42, .61, .58, .41) infinite;
        }
        
        .loader-inner {
            position: absolute;
            border: 4px solid var(--accent-color);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            left: calc(50% - 30px);
            top: calc(50% - 30px);
            border-right: 0;
            border-top-color: transparent;
            animation: loader-inner 1s cubic-bezier(.42, .61, .58, .41) infinite;
        }
        
        @keyframes loader-outter {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes loader-inner {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(-360deg); }
        }
        
        /* Custom select arrow */
        select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1em;
        }
        
        /* Required field indicator */
        .required-field::after {
            content: '*';
            color: var(--danger-color);
            margin-left: 4px;
        }
        
        /* Error messages */
        .error-message {
            color: var(--danger-color);
            font-size: 14px;
            margin-top: 5px;
        }
        
        /* Readonly fields */
        input[readonly] {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
        
        /* Section divider */
        .section-divider {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 86, 179, 0.75), rgba(0, 0, 0, 0));
            margin: 30px 0;
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
                    <div class="row align-items-center">
                        <div class="col-md-6 col-6">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo_abidajn.png') }}" alt="Port Autonome Abidjan">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-right">
                            <div class="get-quote">
                                <a href="{{ route('home') }}" class="btn">
                                    <i class="fas fa-home mr-2"></i>Accueil
                                </a>
                            </div>
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
                            <li><i class="fas fa-chevron-right mx-2"></i></li>
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
            <div class="col-lg-10 mx-auto">
                <div class="contact-us-form">
                    <h2>Formulaire de Réforme</h2>
                    <p>Veuillez renseigner tous les champs obligatoires pour la soumission de votre demande de réforme de véhicule.</p>
                    
                    <form class="form" method="post" action="{{ route('store.reforme') }}" id="reformeForm">
                        @csrf
                        @method('POST')
                        
                        <div class="row">
                            <!-- Section 1: Informations Personnelles -->
                            <div class="col-12">
                                <h4 class="mb-4" style="color: var(--primary-color); border-bottom: 2px solid var(--accent-color); padding-bottom: 8px;">
                                    <i class="fas fa-user-circle mr-2"></i>Informations Personnelles
                                </h4>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Nom</label>
                                    <input type="text" name="name" class="form-control" placeholder="Votre nom" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Prénoms</label>
                                    <input type="text" name="prenom" class="form-control" placeholder="Vos prénoms" value="{{ old('prenom') }}">
                                    @error('prenom')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Contact</label>
                                    <input type="text" name="contact" class="form-control" placeholder="Votre numéro de téléphone" value="{{ old('contact') }}">
                                    @error('contact')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Matricule</label>
                                    <input type="text" name="matricule" class="form-control" placeholder="Votre matricule" value="{{ old('matricule') }}">
                                    @error('matricule')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Date de naissance</label>
                                    <input type="date" name="dateNaiss" class="form-control" value="{{ old('dateNaiss') }}">
                                    @error('dateNaiss')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fonction</label>
                                    <input type="text" name="fonction" class="form-control" placeholder="Votre fonction" value="{{ old('fonction') }}">
                                    @error('fonction')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Section 2: Informations Professionnelles -->
                            <div class="col-12 mt-4">
                                <h4 class="mb-4" style="color: var(--primary-color); border-bottom: 2px solid var(--accent-color); padding-bottom: 8px;">
                                    <i class="fas fa-briefcase mr-2"></i>Informations Professionnelles
                                </h4>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Catégorie</label>
                                    <select name="categorie" class="form-control">
                                        <option value="">Sélectionnez votre catégorie</option>
                                        <option value="Cardre" {{ old('categorie') == 'Cardre' ? 'selected' : '' }}>Cardre</option>
                                        <option value="Agent de maitrise" {{ old('categorie') == 'Agent de maitrise' ? 'selected' : '' }}>Agent de maitrise</option>
                                        <option value="Employé" {{ old('categorie') == 'Employé' ? 'selected' : '' }}>Employé</option>
                                    </select>
                                    @error('categorie')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Direction</label>
                                    <select name="direction" class="form-control">
                                        <option value="">Sélectionnez votre direction</option>
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
                                    @error('direction')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Date d'embauche</label>
                                    <input type="date" name="dateEmbauche" id="dateEmbauche" class="form-control" value="{{ old('dateEmbauche') }}" onchange="calculateAnciennete()">
                                    @error('dateEmbauche')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Ancienneté (an)</label>
                                    <input type="text" name="ancien" id="ancien" class="form-control" value="{{ old('ancien') }}" readonly>
                                    @error('ancien')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Note Annuelle</label>
                                    <input type="text" name="note" class="form-control" placeholder="Exemple : 1" value="{{ old('note') }}">
                                    @error('note')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Sanction disciplinaire</label>
                                    <div class="radio-group">
                                        <div class="radio-option">
                                            <input type="radio" name="sanction" value="oui" id="sanction-oui" class="custom-radio" {{ old('sanction') == 'oui' ? 'checked' : '' }}>
                                            <label for="sanction-oui">Oui</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" name="sanction" value="non" id="sanction-non" class="custom-radio" {{ old('sanction') == 'non' || !old('sanction') ? 'checked' : '' }}>
                                            <label for="sanction-non">Non</label>
                                        </div>
                                    </div>
                                    @error('sanction')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Section 3: Informations sur le Véhicule -->
                            <div class="col-12 mt-4">
                                <h4 class="mb-4" style="color: var(--primary-color); border-bottom: 2px solid var(--accent-color); padding-bottom: 8px;">
                                    <i class="fas fa-car mr-2"></i>Informations sur le Véhicule
                                </h4>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Type de véhicule</label>
                                    <select name="typeV" id="typeV" class="form-control" onchange="fillVehicleInfo()">
                                        <option value="">Sélectionnez un véhicule</option>
                                        @foreach($vehicules as $vehicule)
                                            <option value="{{ $vehicule->id }}" 
                                                data-immatriculation="{{ $vehicule->immatriculation }}"
                                                data-modeles="{{ $vehicule->modeles }}"
                                                data-types="{{ $vehicule->types }}"
                                                data-date="{{ $vehicule->date }}"
                                                {{ old('typeV') == $vehicule->id ? 'selected' : '' }}>
                                                {{ $vehicule->types }} - {{ $vehicule->immatriculation }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('typeV')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Immatriculation</label>
                                    <input type="text" name="immatriculation" id="immatriculation" class="form-control" placeholder="Exemple : AA-XXXX-AA" value="{{ old('immatriculation') }}" readonly>
                                    @error('immatriculation')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Modèle du véhicule</label>
                                    <input type="text" name="marque" id="marque" class="form-control" placeholder="Marque du véhicule" value="{{ old('marque') }}" readonly>
                                    @error('marque')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="required-field">Date de mise en service</label>
                                    <input type="date" name="dateServ" id="dateServ" class="form-control" value="{{ old('dateServ') }}">
                                    @error('dateServ')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Section 4: Proposition de Réforme -->
                            <div class="col-12 mt-4">
                                <h4 class="mb-4" style="color: var(--primary-color); border-bottom: 2px solid var(--accent-color); padding-bottom: 8px;">
                                    <i class="fas fa-file-signature mr-2"></i>Proposition de Réforme
                                </h4>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="required-field">Montant à proposer</label>
                                    <input type="text" name="montant" class="form-control" placeholder="Ex: 100 000" value="{{ old('montant') }}">
                                    @error('montant')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-paper-plane mr-2"></i>Soumettre la demande
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="content">
                                <h3>Direction Logistique</h3>
                                <p>Département Maritime et Terrestre</p>
                                <p>(+225) 05 00 703 103</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="content">
                                <h3>Localisation</h3>
                                <p>Côte d'Ivoire</p>
                                <p>Abidjan, Treichville Site D'Outillage</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-info">
                            <i class="fas fa-clock"></i>
                            <div class="content">
                                <h3>Heures d'ouverture</h3>
                                <p>Lundi - Vendredi</p>
                                <p>07h30 à 16h30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&copy; {{ date('Y') }} Port Autonome d'Abidjan. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('asset2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset2/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Hide preloader when page is loaded
        $(window).on('load', function() {
            $('.preloader').fadeOut('slow');
        });
        
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
            document.getElementById('ancien').value = anciennete;
        }

        // Fill vehicle information when selected
        function fillVehicleInfo() {
            const select = document.getElementById('typeV');
            const selectedOption = select.options[select.selectedIndex];
            
            if (selectedOption.value !== "") {
                document.getElementById('immatriculation').value = selectedOption.getAttribute('data-immatriculation');
                document.getElementById('marque').value = selectedOption.getAttribute('data-modeles');
                document.getElementById('dateServ').value = selectedOption.getAttribute('data-date');
            } else {
                document.getElementById('immatriculation').value = '';
                document.getElementById('marque').value = '';
                document.getElementById('dateServ').value = '';
            }
        }
        
        // Initialize form with any old values to repopulate fields if validation fails
        $(document).ready(function() {
            // If there are old values, try to calculate anciennete
            if ($('#dateEmbauche').val()) {
                calculateAnciennete();
            }
            
            // SweetAlert2 Messages Handling
            @if (Session::has('success1'))
                Swal.fire({
                    icon: 'success',
                    title: 'Suppression réussie',
                    text: '{{ Session::get('success1') }}',
                    confirmButtonColor: 'var(--primary-color)',
                    background: 'white'
                });
            @endif

            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Validation réussie',
                    text: '{{ Session::get('success') }}',
                    confirmButtonColor: 'var(--primary-color)',
                    background: 'white'
                });
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: '{{ Session::get('error') }}',
                    confirmButtonColor: 'var(--danger-color)'
                });
            @endif
        });
    </script>
</body>
</html>