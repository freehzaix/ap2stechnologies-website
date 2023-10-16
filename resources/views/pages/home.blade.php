@extends('layouts.front')

@section('active-home')
    active
@endsection

@section('contenu')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Optimisez votre présence en ligne avec nous</h5>
                            <h2 class="display-1 text-white mb-md-4 animated zoomIn">Obtenez les stratégies de marketing digital pour propulser votre entreprise au sommets.</h2>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Demandez un devis</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Optimisez votre présence en ligne avec nous</h5>
                            <h2 class="display-1 text-white mb-md-4 animated zoomIn">Obtenez les stratégies de marketing digital pour propulser votre entreprise au sommets.</h2>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Demandez un devis</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Heure d'ouverture</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Lun - Ven</h6>
                            <p class="mb-0"> 8h00 - 18h00</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Samedi</h6>
                            <p class="mb-0"> 9h00 - 13h00</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Dimanche</h6>
                            <p class="mb-0"> Fermé &nbsp; &nbsp; &nbsp; </p>
                        </div>
                        <a class="btn btn-light" href="">Demandez un devis</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">A propos de nous</h3>
                        <p class="text-white">
                            <b>Bienvenue chez <u>AP2S Technologies</u></b>
                            <p class="text-white">
                                Nos domaines de compétence:
                                <ul class="text-white">
                                    <li>Gestion de page</li>
                                    <li>Publicité digitale</li>
                                    <li>Création d'application web ou mobile</li>
                                </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Prendre un rdv</h3>
                        <p class="text-white">Optez pour une croissance exponentielle de votre entreprise grâce à notre expertise en marketing digital. Réservez dès maintenant votre consultation téléphonique!</p>
                        <h4 class="text-white mb-0">+225 05 45 96 34 11</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    @include('layouts.about')
    <!-- About End -->

    
    <!-- Appointment End -->

@endsection