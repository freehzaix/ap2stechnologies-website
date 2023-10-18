@extends('layouts.front')

@section('active-service')
    active
@endsection

@section('contenu')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Nos services</h1>
                <a href="{{ route('home') }}" class="h4 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ route('service') }}" class="h4 text-white">Nos services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Efficacité. Innovation. Excellence.</h5>
                        <h3 class="display-5 mb-0">Expérience digitale complète pour votre réussite en ligne.</h3>
                    </div>
                    <p class="mb-4">
                        Êtes-vous prêt à dominer le monde numérique ? Notre agence offre une gamme complète de services : marketing digital, publicité digitale, création de sites web et gestion de pages. Nous vous aidons à bâtir une présence en ligne puissante, à générer des leads qualifiés et à atteindre vos objectifs commerciaux.
                    </p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Nous contacter</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">+225 05 45 96 34 11</h2>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Compte publicitaire bloqué</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Inaccessibilité</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Restrictions publicitaires</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Processus de résolution</span><i class="fa fa-check text-primary pt-1"></i></div>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Création & gestion de page</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Conception visuelle</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Contenu pertinent</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Interaction et engagement</span><i class="fa fa-check text-primary pt-1"></i></div>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Création de site internet</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Conception et développement</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Contenu et organisation</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Réactivité et adaptation aux appareils</span><i class="fa fa-check text-primary pt-1"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->
@endsection