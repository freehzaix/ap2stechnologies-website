<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AP2S Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Mon fichier CSS -->
    <link rel="stylesheet" href="css/luc.css">

</head>

<body>
    <!-- Spinner Start -->
    @include('layouts.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    @yield('contenu')

    <div id="devis"></div>
    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Obtenez un devis gratuit dès maintenant et concrétisez vos projets !</h1>
                        <p class="text-white mb-0">
                            Une bonne visibilité sur les moteurs de recherche est essentielle pour atteindre votre public cible, augmenter votre notoriété et générer des opportunités d'affaires. Ne sous-estimez pas son importance !
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Demandez un devis</h1>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <form action="{{ route('devis.post') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Selectionnez un service</option>
                                        <option value="Création de site internet">Création de site internet</option>
                                        <option value="Gestion de page">Gestion de page</option>
                                        <option value="Publicité Facebook">Publicité Facebook</option>
                                        <option value="Création d'application web">Création d'application web</option>
                                        <option value="Création d'application mobile">Création d'application mobile</option>
                                    </select>
                                    @error('service')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <input name="nom" type="text" class="form-control bg-light border-0" placeholder="Nom" style="height: 55px;">
                                    @error('nom')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="prenom" type="text" class="form-control bg-light border-0" placeholder="Prénom" style="height: 55px;">
                                    @error('prenom')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input name="email" type="email" class="form-control bg-light border-0" placeholder="Adresse mail" style="height: 55px;">
                                        @error('email')
                                            <div class="alert alert-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" name="telephone" class="form-control bg-light border-0" placeholder="Numéro de téléphone" style="height: 55px;">
                                        @error('telephone')
                                            <div class="alert alert-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Demandez un devis</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="7.7s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">J'ai été impressionné par le professionnalisme de l'équipe. Grâce à leur expertise, mon entreprise a connu une croissance rapide et une visibilité accrue. Je recommande vivement leurs services de marketing digital.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Mamadou Koné</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">La création de mon site web par cette agence a été un succès total. Ils ont su capturer l'essence de mon activité et créer une plateforme attrayante et conviviale. Je suis extrêmement satisfait de leur travail et je les recommande sans hésitation.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Olivier Konaté</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Lien rapide</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="{{ route('home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="{{ route('about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
                        <a class="text-light mb-2" href="{{ route('service') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Nos services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                        <a class="text-light" href="{{ route('contact') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Nous contacter</a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-white mb-4">Contact rapide</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Treichville Avenue 15 Rue 42, Abidjan, Côte d'ivoire.</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>contact-ci@ap2stechnologies.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+225 05 45 96 11 34</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Suivez-nous</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">Copyright &copy; <a class="text-white border-bottom" href="#">AP2S Technologies</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="#">Axel Emmanuel & Jean-Luc</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/wow/wow.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/waypoints/waypoints.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/tempusdominus/js/moment.min.js"></script>
    <script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./lib/twentytwenty/jquery.event.move.js"></script>
    <script src="./lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="./js/main.js"></script>
</body>

</html>