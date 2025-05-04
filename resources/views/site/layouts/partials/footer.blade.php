<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-top py-5">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-logo mb-4">
                        <div class="logo">
                            <img src="{{ isset($siteSettings->logo) ? asset('storage/'.$siteSettings->logo) : asset('assets/images/logo.png') }}" alt="Logo" class="logo-img" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                    <p class="footer-about">{{$siteSettings->hero_description ?? 'Açıklama yok'}}</p>
                    {{-- <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div> --}}
                </div>
                <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                    <h4 class="footer-heading">Hızlı Linkler</h4>
                    <ul class="footer-links">
                        <li><a href="{{route('site.index')}}">Ana Sayfa</a></li>
                        <li><a href="{{route('site.about')}}">Hakkımızda</a></li>
                        <li><a href="{{route('site.services')}}">Hizmetlerimiz</a></li>
                        <li><a href="{{route('site.blogs')}}">Makaleler</a></li>
                        <li><a href="{{route('site.contact')}}">İletişim</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                    <h4 class="footer-heading">Hizmet Alanları</h4>
                    <ul class="footer-links">
                        @foreach ($services as $service)
                            <li><a href="{{route('site.service.show', $service->slug)}}">{{$service->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4">
                    <h4 class="footer-heading">İletişim Bilgileri</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{$contact->address ?? 'adres yok'}}</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>{{$contact->phone ?? 'telefon yok'}}</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>{{$contact->email ?? 'email yok'}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">{{$siteSettings->bottom_description ?? 'alt bölüm açıklama yok'}}</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        {{$siteSettings->bottom_info ?? 'alt bölüm bilgisi yok'}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>