@extends('layouts.front')

@section('active-contact')
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

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Nous contacter</h1>
            <a href="{{ route('home') }}" class="h4 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('contact') }}" class="h4 text-white">Nous contacter</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Nous contacter</h5>
                        <h1 class="display-6 mb-4">Agissez dès maintenant.</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Notre bureau</h5>
                            <span>Treichville Avenue 16 Rue 42, Abidjan, Côte d'ivoire.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Adresse mail</h5>
                            <span>contact-ci@ap2stechnologies.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Appelez-nous au:</h5>
                            <span>+225 05 45 96 11 34</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <form action="{{ route('contact.post') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" name="nom" class="form-control border-0 bg-light px-4" placeholder="Votre nom complet" value="{{ old('nom') }}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Votre adresse mail" value="{{ old('email') }}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            @error('objet')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" name="objet" class="form-control border-0 bg-light px-4" placeholder="Objet" value="{{ old('objet') }}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.724434429423!2d-4.007156705744768!3d5.305626203222516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebb3c9ee0615%3A0x5f64f59446585716!2sAP2S%20Technologies!5e0!3m2!1sfr!2sci!4v1697620547532!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection