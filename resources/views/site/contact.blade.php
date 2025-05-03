@extends('site.layouts.master')

@section('title', 'İletişim')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/contact.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{$contact->title ?? 'İletişime Geçin'}}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <p class="lead mb-0">{{$contact->description ?? 'İletişime geçmek için lütfen aşağıdaki formu doldurunuz.'}}</p>
                    </div>
                     <div class="d-flex gap-3">
                        <a href="#contact-form" class="btn btn-primary btn-lg">Mesaj Gönder</a>
                        <a href="#contact-info" class="btn btn-outline-light btn-lg">Ofisimiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section id="contact-info" class="contact-info-section py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">{{$contact->title ?? 'İletişime Geçin'}}</h2>
                    <p class="section-subtitle">{{$contact->description ?? 'İletişime geçmek için lütfen aşağıdaki formu doldurunuz.'}}</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Phone Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Telefon Numaramız</h3>
                        <p>Acil yardım için bizi doğrudan arayın</p>
                        <a href="tel:+15551234567">{{$contact->phone ?? 'Telefon Numaranız'}}</a>
                    </div>
                </div>
                
                <!-- Email Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Adresimiz</h3>
                        <p>Herhangi bir zamanda bize email gönderin</p>
                        <a href="mailto:{{$contact->email ?? 'Email Adresiniz'}}">{{$contact->email ?? 'Email Adresiniz'}}</a>
                    </div>
                </div>
                
                <!-- Address Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Adresimiz</h3>
                        <p>{{$contact->address ?? 'Adresiniz'}}</p>
                    </div>
                </div>
                
                <!-- Working Hours Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Çalışma Saatleri</h3>
                        <p>{{$contact->working_hours ?? 'Çalışma Saatleri'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="contact-form-section py-6">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-container">
                        <h2 class="contact-form-title">İletişime Geçin</h2>
                        <p class="mb-4">Formu doldurun ve en kısa sürede size dönüş yapacağız.</p>
                        
                        <form action="{{route('site.contact.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Adınız *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email Adresiniz *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="description" class="form-control" rows="5" placeholder="Mesajınız *" required></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="kvkkCheck" required>
                                        <label class="form-check-label" for="kvkkCheck">
                                            Kişisel Verilerinizin İşlenmesine İzin Veriyorum
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">Mesaj Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Google Maps -->
                <div class="col-lg-6">
                    <div class="map-container">
                        {!! $contact->iframe ?? 'iframe kodunuz yok' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/contact.js') }}"></script>
@endsection