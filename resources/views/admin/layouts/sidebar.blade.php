<ul class="navbar-nav b sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #01aae0">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.admin') }}">
        <div class="sidebar-brand-text mx-3"> <img src="{{ asset('assets/images/logo_abidajn.png') }}" style="width: 40%" alt="#"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de board</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">    
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.reforme') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Toutes les soumissions</span></a>
    </li>   
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Données du port 
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-home"></i>
            <span>Somission prise</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Soumision</h6>
                <a class="collapse-item" href="{{ route('reforme.prise') }}">Liste-Soumisse-Prise</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-home"></i>
            <span>Soumission non prise</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Soumission</h6>
                <a class="collapse-item" href="{{ route('reforme.nonprise') }}">Liste-Soumisse-Non-Prise</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">    
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCatalog"
            aria-expanded="true" aria-controls="collapseCatalog">
            <i class="fas fa-fw fa-table"></i>
            <span>Catalogue </span>
        </a>
        <div id="collapseCatalog" class="collapse" aria-labelledby="headingCatalog"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Catalogue</h6>
                <a class="collapse-item" href="#">Ajout-Catalogue</a>
                <a class="collapse-item" href="#">Liste-Catalogue</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    
</ul>