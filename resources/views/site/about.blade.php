@extends('site.layouts.master')

@section('title', 'Hakkımızda')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/about.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero" style="background-image: url('{{ isset($about->image) ? asset($about->image) : url('https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') }}');">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{$about->title ?? 'Hakkımızda'}}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">{{$about->description ?? 'Hakkımızda'}}</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#mission-vision" class="btn btn-primary btn-lg">Misyonumuz</a>
                        <a href="#expertise" class="btn btn-outline-light btn-lg">Hizmetlerimiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- About Content Section -->
    <section id="about-content" class="about-content">
        <div class="container" style="max-width: 1700px;">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h1 class="section-title">{{$about->title ?? 'Hakkımızda'}}</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{ isset($about->image) ? asset($about->image) : url('https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') }}" alt="{{$about->title ?? 'Hakkımızda'}}">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-text-content">
                        {!! $about->content ?? 'Hakkımızda' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section id="mission-vision" class="mission-vision py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">{{$about->title ?? 'Hakkımızda'}}</h2>
                    <p class="section-subtitle">{{$about->description ?? 'Hakkımızda'}}</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Misyonumuz</h3>
                        <p>{!! $about->mission ?? 'Hakkımızda' !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Vizyonumuz</h3>
                        <p>{!! $about->vision ?? 'Hakkımızda' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="expertise py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">{{$about->title ?? 'Hakkımızda'}}</h2>
                    <p class="section-subtitle">{{$about->description ?? 'Hakkımızda'}}</p>
                </div>
            </div>
            <div class="row g-4">
                @if($services->count() > 0)
                    @foreach($services as $service)
                        <div class="col-md-6 col-lg-4">
                            <div class="expertise-card">
                                <div class="expertise-icon">
                                    <i class="{{$service->icon}}"></i>
                                </div>
                                <h3>{{$service->title}}</h3>
                                <p>{{$service->description}}</p>
                                <a href="{{route('site.service.show', $service->slug)}}" class="expertise-link">
                                    Daha Fazla
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Henüz hizmet bulunmamaktadır.</p>
                    </div>
                @endif
            </div>
            <div class="text-center mt-5">
                <a href="{{route('site.services')}}" class="btn btn-outline-primary">Hizmetleri Keşfet</a>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="location py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Konumumuz</h2>
                    <p class="section-subtitle">Ziyaret etmek için lütfen bize ulaşın</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="location-map">
                        {!! $contact->iframe ?? 'iframe kodunuz yok' !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="location-info">
                        <h3>İletişim Bilgileri</h3>
                        <div class="location-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>{{$contact->address}}</p>
                        </div>
                        <div class="location-item">
                            <i class="fas fa-phone"></i>
                            <p>{{$contact->phone}}</p>
                        </div>
                        <div class="location-item">
                            <i class="fas fa-envelope"></i>
                            <p>{{$contact->email}}</p>
                        </div>
                        <div class="location-hours">
                            <h4>Ofis Saatleri</h4>
                            <div class="hours-item">
                                <span class="hours-day">{{$contact->office_hours}}</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{route('site.contact')}}" class="btn btn-primary">İletişime Geç</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/about.js') }}"></script>
@endsection