<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
<div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
    <a href="{{route('admin.dashboard')}}" class="logo">
        <img
        src="{{ asset('admin-assets/assets/img/kaiadmin/logo_light.svg') }}"
        alt="navbar brand"
        class="navbar-brand"
        height="20"
        />
    </a>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
        <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
        <i class="gg-menu-left"></i>
        </button>
    </div>
    <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
    </button>
    </div>
    <!-- End Logo Header -->
</div>
<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
    <ul class="nav nav-secondary">
        <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i>
                <p>Anasayfa</p>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#services">
                <i class="fas fa-concierge-bell"></i>
                <p>Hizmet Yönetimi</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.services.*') ? 'show' : '' }}" id="services">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.services.create') }}" class="{{ request()->routeIs('admin.services.create') ? 'active' : '' }}">
                        <span class="sub-item">Hizmet Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.index') ? 'active' : '' }}">
                        <span class="sub-item">Hizmetler</span>
                        </a>

                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.abouts.*') || request()->routeIs('admin.about-features.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#abouts">
                <i class="fas fa-info-circle"></i>
                <p>Hakkımızda</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.abouts.*') || request()->routeIs('admin.about-features.*') ? 'show' : '' }}" id="abouts">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.abouts.index') }}" class="{{ request()->routeIs('admin.abouts.index') ? 'active' : '' }}">
                            <span class="sub-item">Hakkımızda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.about-features.create') }}" class="{{ request()->routeIs('admin.about-features.create') ? 'active' : '' }}">
                            <span class="sub-item">Hakkımızda Özellik Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.about-features.index') }}" class="{{ request()->routeIs('admin.about-features.index') ? 'active' : '' }}">
                            <span class="sub-item">Hakkımızda Özellikleri</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.blogs.*') || request()->routeIs('admin.blog-categories.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#blogs">
                <i class="fas fa-newspaper"></i>
                <p>Blog</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.blogs.*') || request()->routeIs('admin.blog-categories.*') ? 'show' : '' }}" id="blogs">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
                            <span class="sub-item">Bloglar</span>
                        </a>    
                    </li>
                    <li>
                        <a href="{{ route('admin.blog-categories.index') }}" class="{{ request()->routeIs('admin.blog-categories.index') ? 'active' : '' }}">
                            <span class="sub-item">Blog Kategorileri</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.site-settings.*') ? 'active' : '' }}">
            <a href="{{ route('admin.site-settings.index') }}" class="{{ request()->routeIs('admin.site-settings.index') ? 'active' : '' }}">
                <i class="fas fa-cog"></i>
                <p>Site Ayarları</p>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.contacts.*') || request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#contacts">
                <i class="fas fa-phone"></i>
                <p>İletişim</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.contacts.*') || request()->routeIs('admin.contact-messages.*') ? 'show' : '' }}" id="contacts">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}">
                            <span class="sub-item">İletişim</span>
                        </a>    
                    </li>
                    <li>
                        <a href="{{ route('admin.contact-messages.index') }}" class="{{ request()->routeIs('admin.contact-messages.index') ? 'active' : '' }}">
                            <span class="sub-item">Mesajlar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.useful-links.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#useful-links">
                <i class="fas fa-link"></i>
                <p>Faydalı Linkler</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.useful-links.*') ? 'show' : '' }}" id="useful-links">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.useful-links.index') }}" class="{{ request()->routeIs('admin.useful-links.index') ? 'active' : '' }}">
                            <span class="sub-item">Faydalı Linkler</span>
                        </a>    
                    </li>
                    <li>
                        <a href="{{ route('admin.useful-links.create') }}" class="{{ request()->routeIs('admin.useful-links.create') ? 'active' : '' }}">
                            <span class="sub-item">Faydalı Link Ekle</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


        {{-- <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Kullanıcı Yönetimi</p>
            </a>
        </li> --}}
    </ul>
    </div>
</div>
</div>
<!-- End Sidebar -->