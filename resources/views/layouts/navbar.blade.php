<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="#" class="navbar-brand p-0">
        <h1 class="m-0 text-primary">
            <img src="img/logo.png" height="100px" alt="">
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link  @yield('active-home')">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link @yield('active-about')">A propos</a>
            <a href="{{ route('service') }}" class="nav-item nav-link @yield('active-service')">Nos services</a>
            <a href="#" class="nav-item nav-link">Blog</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link @yield('active-contact')">Nous contacter</a>
        </div>
        <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <a href="#devis" class="btn btn-primary py-2 px-4 ms-3">Demandez un devis</a>
    </div>
</nav>