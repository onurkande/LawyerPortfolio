@extends('site.layouts.master')

@section('title', 'Hizmetler')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/services.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero" style="background-image: url('{{ isset($serviceSettings->image) ? asset('storage/'.$serviceSettings->image) : url("https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1") }}');">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{$serviceSettings->title ?? 'Hizmetler'}}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <p class="lead mb-0">{{$serviceSettings->description ?? 'Hizmetler'}}</p>
                    </div>
                    <p class="hero-subtitle mb-5">{!! $serviceSettings->subtitle ?? 'Hizmetler' !!}</p>
                    <div class="d-flex gap-3">
                        <a href="#service-cards" class="btn btn-primary btn-lg">Hizmetleri Keşfet</a>
                        <a href="{{route('site.contact')}}" class="btn btn-outline-light btn-lg">İletişim</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Cards Section -->
    <section id="service-cards" class="service-section">
        <div class="container" style="max-width: 1700px;">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">{{$serviceSettings->title ?? 'Hizmetler'}}</h2>
                    <p class="section-subtitle">{!! $serviceSettings->subtitle ?? 'Hizmetler' !!}</p>
                </div>
            </div>
            <div class="row">
                @if($services->count() > 0)
                    @foreach($services as $service)
                        <div class="col-md-6 col-lg-3 mb-5">
                            <div class="service-card mb-5">
                                <div class="service-card-content">
                                    <div class="service-icon">
                                        <i class="{{$service->icon}}"></i>
                                    </div>
                                    <h3>{{$service->title}}</h3>
                                    <p>{{$service->description}}</p>
                                </div>
                                <div class="service-btn-container">
                                    <a href="{{route('site.service.show', $service->slug)}}" class="service-btn">
                                        Daha Fazla <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Henüz hizmet bulunmamaktadır.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    {{-- <section class="why-choose-us">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p class="section-subtitle">We are committed to providing exceptional legal services with integrity and dedication</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Experienced Attorneys</h4>
                        <p>Our team consists of highly skilled attorneys with extensive experience in their respective practice areas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Client-Centered Approach</h4>
                        <p>We prioritize your needs and work closely with you to develop tailored legal strategies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4>Ethical Practice</h4>
                        <p>We maintain the highest ethical standards in all our legal representations and client interactions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Proven Results</h4>
                        <p>Our track record demonstrates our commitment to achieving favorable outcomes for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Hukuki İhtiyaçlarınızı Görüşmeye Hazır mısınız?</h2>
                <p>Davanızı görüşmek ve yasal hedeflerinize ulaşmanıza nasıl yardımcı olabileceğimizi keşfetmek için benimle iletişime geçin.</p>
                <a href="{{route('site.contact')}}" class="cta-btn">
                    <i class="fas fa-phone"></i>
                    İletişime Geç
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/services.js') }}"></script>
@endsection
