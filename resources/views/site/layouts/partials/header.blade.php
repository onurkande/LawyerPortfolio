<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('site.index')}}">
                <img src="{{ isset($siteSettings->logo) ? $siteSettings->logo : asset('assets/images/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.index')}}">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.about')}}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.services')}}">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.blogs')}}">Makaleler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.contact')}}">İletişim</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-consultation" href="tel:{{$contact->phone ?? 'Telefon Numaranız'}}">
                            <i class="fas fa-phone-alt"></i>
                            Danışmalık Talebi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>