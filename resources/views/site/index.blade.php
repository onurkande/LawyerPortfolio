@extends('site.layouts.master')

@section('title', 'Ana Sayfa')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/index.css') }}">
@endsection

@section('content')
    <!-- Hero Section - Updated -->
    <section id="home" class="hero" style="background-image: url('{{ isset($siteSettings->hero_image) ? asset('storage/'.$siteSettings->hero_image) : asset('assets/images/hero-bg.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{$siteSettings->hero_title ?? 'Başlık yok'}}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">{{$siteSettings->hero_description ?? 'Açıklama yok'}}</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{route('site.contact')}}" class="btn btn-primary btn-lg">İletişim</a>
                        <a href="{{route('site.services')}}" class="btn btn-outline-light btn-lg">Hizmetlerimiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    @if($services->count() > 0)
        <section id="services" class="services py-6">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">{{$serviceSettings->title ?? 'hizmet başlığı yok'}}</h2>
                        <p class="section-subtitle">{{$serviceSettings->description ?? 'hizmet açıklama yok'}}</p>
                    </div>
                </div>
                <div class="row g-4">
                    @if($services->count() > 0)
                        @foreach($services as $service)
                            <div class="col-md-4">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="{{$service->icon}}"></i>
                                    </div>
                                    <h3>{{$service->title}}</h3>
                                    <p>{!! Str::limit($service->content, 100) !!}</p>
                                    <a href="{{route('site.service.show', $service->slug)}}" class="service-link">
                                        Daha Fazla
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12">
                            <div class="alert alert-warning">
                                Henüz hizmet bulunmamaktadır.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif

    <!-- About Section - Updated with Accordion -->
    @if($abouts)
        <section id="about" class="about py-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-image">
                            <img src="{{isset($abouts->image) ? asset('storage/'.$abouts->image) : url('https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" alt="Attorney Jane Smith" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="section-title">{{$abouts->title}}</h2>
                            <p class="about-text mb-4">{!! Str::limit($abouts->content, 300) !!}</p>
                            
                            @if($aboutFeatures->count() > 0)
                            <h3 class="h5 mb-3">Profesyonel Zaman Çizelgesi</h3>
                                <div class="accordion career-accordion" id="careerAccordion">
                                    @foreach($aboutFeatures as $feature)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{$feature->id}}">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$feature->id}}" aria-expanded="false" aria-controls="collapse{{$feature->id}}">
                                                    {{$feature->title}}
                                                </button>
                                            </h2>
                                            <div id="collapse{{$feature->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$feature->id}}" data-bs-parent="#careerAccordion">
                                                <div class="accordion-body">
                                                    <p class="mb-0">{!! $feature->description !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            
                            <a href="{{route('site.about')}}" class="btn btn-primary mt-4">Hakkımızda</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

   

    <!-- Blog Section -->
    @if($blogs->count() > 0 && $blogSettings)
        <section id="blog" class="blog py-6" style="padding-top: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">{{$blogSettings->title}}</h2>
                        <p class="section-subtitle">{{$blogSettings->description}}</p>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="{{isset($blog->image) ? asset('storage/'.$blog->image) : url('https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" alt="{{$blog->title}}">
                                    <div class="blog-date">{{$blog->created_at->format('d F Y')}}</div>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="{{route('site.blog.show', $blog->slug)}}">{{strip_tags($blog->title)}}</a></h3>
                                    <p class="blog-excerpt">{{strip_tags(Str::limit($blog->content, 100))}}</p>
                                    <a href="{{route('site.blog.show', $blog->slug)}}" class="blog-read-more">
                                        Devamını Oku
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="blog-view-all">
                    <a href="{{route('site.blogs')}}" class="blog-view-all-btn">
                        Tüm Bloglar
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    @endif

     <!-- Testimonials Section -->
     <section id="testimonials" class="testimonials py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Müşteri Yorumları</h2>
                    <p class="section-subtitle">Müşterilerimizin bizimle ilgili yorumları</p>
                </div>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-slide active">
                    <!-- First set of testimonials -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocJxsnN8vDGWrUnkepQ0VsQvi87CaQQMnMJoY9SpmAGqfZ5scw=w72-h72-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/WGCbmZJ34p942tsW9" target="_blank"> Bunyamin Yigit </a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Malatya’dan tanıdık aracılığı ile görüştüm kendisi ile sağolsun bilgili ve ilgili bir şekilde ilgilendi Antalya’dan derdimi çözdü Başarılarının devamını diliyorum Malatya’dan selamlar</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjWzBd_eBojoC8VE7ejHAVbRpCFGLBEYYuoQtsruIen4Wrh76uo-=w36-h36-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/JW1LU1osS9yFKFw37" target="_blank">uğur özdemir</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Öylesine herhangi bir konu için aradığımızda bile saolsun çok yardımcı oluyor, bilgi ve tecrübe farkını ortaya koyuyor, kendisine ilgi ve alakası için çok teşekkür ederim</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocKokSPxr1_Axq971dVgB6MWaJLdPG1JyDa9lLEkbuM7ZhiWdw=w36-h36-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/c6zVAXcaVsAJrmrG9" target="_blank">Mücahit Sülü</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Hem insan olarak iyi biri hilal hanım hemde mesleki olarak gayet donanımlı. Size yardımcı olmak için elinden gelenin fazlasını yapacaktır emin olun 👍</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <!-- Second set of testimonials -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjUHSoO0rNAiAV9HgKsRu_rS3GmE8AArz_PWMgCf8uLSby2xvNZ3=w36-h36-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/DHW1raKnSmVLQVeSA" target="_blank">Mevlüt AKKAŞ</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Meslek bilgisiyle işinde başarılı
                            saygılı kibar bir hanımefendi
                            Tavsiye ederim.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocIWzaLC2bI5ydf0SsJUBTJpTz75yuXIFcJnfzITnggX0lYoFQ=w36-h36-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/a3sJtKkCy1N5vuq17" target="_blank">Mansur Vasip</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Eline gelenin en iyisini yapmaya çalışan biri. Gönül rahatlığıyla tercih edebilirsiniz</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjXcnlib6PMO95uYNUUku8geFZW3KlfxzXAYw6Y6ROHMz0_37N0=w36-h36-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/cKJKYv9FSqvU68yh6" target="_blank">Serkan Gür</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Gayet başarılı ve işinde uzman bir Avukat Hanım.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <!-- Second set of testimonials -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocJpWik9ya48o__LSNJ1A_6lrAPDkH9KUn96dJxegZv7Q_60Jw=w72-h72-p-rp-mo-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/mRszRsuYRJqZXaTm7" target="_blank">Meriç Yetkin</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">İşinde uzman kesinlikle tavsiye ederim 👍 …</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjVsHGLfunmuF2lSvgpdW4BEpfEek79JyqR6w_C5611qzDQraa2x=w72-h72-p-rp-mo-ba1-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/6pyypTFqoRoo6t8P9" target="_blank">Muhammed Ali SAYICI</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">İşinin ehli her konuda yardımcı olabilecek birisi</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjUp1rPbBsSGDI6f0Dlr7otL_6whoYqfyrE6T3hgLKlkm5EYYOPphg=w72-h72-p-rp-mo-ba1-br100" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name"><a href="https://maps.app.goo.gl/n5d5iPNZi6XFtWDWA" target="_blank">osman imir</a></h5>
                                <span class="testimonial-date">1 Yıl Önce</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">İşinde uzman kesinlikle tavsiye ederim</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google İncelemesi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-nav">
                    <button class="testimonial-nav-btn active"></button>
                    <button class="testimonial-nav-btn"></button>
                    <button class="testimonial-nav-btn"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="contact-cta py-6 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title text-white">{{$contact->title ?? 'İletişime Geçin'}}</h2>
                    <p class="contact-text">{{$contact->description ?? 'İletişime geçmek için lütfen aşağıdaki formu doldurunuz.'}}</p>
                    <div class="contact-info mt-4">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>{{$contact->address ?? 'Adresiniz'}}</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>{{$contact->phone ?? 'Telefon Numaranız'}}</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>{{$contact->email ?? 'Email Adresiniz'}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form-card">
                        <h3 class="text-dark mb-4">İletişime Geçin</h3>
                        <form action="{{route('site.contact.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Adınız" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Adresiniz" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız">
                            </div>
                            <div class="mb-3">
                                <textarea name="description" class="form-control" rows="4" placeholder="Mesajınız" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Mesaj Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Useful Links -->
    <section class="useful-links py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Faydalı Linkler</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="partners-wrapper">
                        @foreach($usefulLinks as $link)
                            <div class="partner-item">
                                <img src="{{ asset('storage/'.$link->image) }}" alt="Useful Link" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/index.js') }}"></script>
@endsection

