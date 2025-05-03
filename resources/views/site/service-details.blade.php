@extends('site.layouts.master')

@section('title', 'Hizmet Detayları')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/service-details.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero" style="background-image: url('{{ isset($service->image) ? asset($service->image) : url("https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1") }}');">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="{{$service->icon}}"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{$service->title}}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">{{$service->description}}</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#service-detail" class="btn btn-primary btn-lg">Daha Fazla</a>
                        <a href="{{route('site.contact')}}" class="btn btn-outline-light btn-lg">İletişim</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Detail Content -->
    <section id="service-detail" class="service-detail">
        <div class="container" style="max-width: 1300px;">
            <div class="service-detail-content">
                {!! $service->content !!}
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <section class="related-services py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">İlgili Hukuk Hizmetleri</h2>
                    <p class="section-subtitle">Diğer hukuk alanlarını keşfedin</p>
                </div>
            </div>
            <div class="row g-4">
                @if($services->count() > 0)
                    @foreach($services as $service)
                        <div class="col-md-4">
                            <div class="related-service-card">
                                <div class="related-service-icon">
                                    <i class="{{$service->icon}}"></i>
                                </div>
                                <h3>{{$service->title}}</h3>
                                <p>{{$service->description}}</p>
                                <a href="{{route('site.service.show', $service->slug)}}" class="related-service-link">
                                    Daha Fazla
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            Henüz ilgili hukuk hizmeti bulunmamaktadır.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="subscription">
        <div class="container">
            <div class="subscription-content">
                <h2>Stay Informed</h2>
                <p>Subscribe to our newsletter for the latest legal insights, tips, and updates on family law matters.</p>
                <form class="subscription-form">
                    <input type="email" class="form-control" placeholder="Your Email Address" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/service-details.js') }}"></script>
@endsection

