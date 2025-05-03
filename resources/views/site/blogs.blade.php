@extends('site.layouts.master')

@section('title', 'Bloglar')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blogs.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero" style="background-image: url('{{ isset($blogSettings->image) ? asset($blogSettings->image) : asset('site-assets/images/hero-bg.jpg') }}');">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{ $blogSettings->title ?? 'Bloglar' }}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-feather-alt"></i>
                        </div>
                        <p class="lead mb-0">{{ $blogSettings->description ?? 'Bloglarımızda size yeni bilgiler sunuyoruz.' }}</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#blog-section" class="btn btn-primary btn-lg">Bloglarımızı Keşfet</a>
                        <a href="#newsletter" class="btn btn-outline-light btn-lg">Abone Ol</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog-section" class="blog-section">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="row">
                        @if($blogs->count() > 0)
                            @foreach($blogs as $blog)
                                <div class="col-md-6 mb-4">
                                    <div class="blog-card">
                                        <div class="blog-image">
                                            <img src="{{ isset($blog->image) ? asset($blog->image) : asset('site-assets/images/default-blog-image.jpg') }}" alt="{{ $blog->title }}">
                                            <div class="blog-category">{{ $blog->category->title }}</div>
                                            <div class="blog-date">{{ $blog->created_at->format('d F Y') }}</div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="blog-meta-item">
                                                    <i class="fas fa-clock"></i>
                                                    <span>{{ $blog->reading_time }} dk okuma süresi</span>
                                                </div>
                                            </div>
                                            <h3 class="blog-title">
                                                <a href="{{ route('site.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h3>
                                            <p class="blog-excerpt">
                                                {!! Str::limit(strip_tags($blog->content), 150) !!}
                                            </p>
                                            <div class="blog-read-more-container">
                                                <a href="{{ route('site.blog.show', $blog->slug) }}" class="blog-read-more">
                                                    Devamını Oku
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-container">
                        <ul class="pagination">
                            @if($blogs->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                            @endif

                            @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if($blogs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Search Widget -->
                        {{-- <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Search</h3>
                            <form class="search-form">
                                <input type="text" class="search-input" placeholder="Search articles...">
                                <button type="submit" class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div> --}}

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Kategoriler</h3>
                            <ul class="category-list">
                                @if($blogCategories->count() > 0)
                                    @foreach($blogCategories as $category)
                                        <li class="category-item">
                                            <a href="#" class="category-link">
                                                <span>{{ $category->title }}</span>
                                                <span class="category-count">{{ $category->blogs->count() }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Son Bloglar</h3>
                            @if($blogs->count() > 0)
                                @foreach($blogs->take(3) as $blog)
                                    <div class="recent-post">
                                        <div class="recent-post-img">
                                            <img src="{{ isset($blog->image) ? asset($blog->image) : asset('site-assets/images/default-blog-image.jpg') }}" alt="{{ $blog->title }}">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4 class="recent-post-title">
                                                <a href="{{ route('site.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h4>
                                            <div class="recent-post-date">{{ $blog->created_at->format('d F Y') }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popüler Etiketler</h3>
                            <div class="tag-cloud">
                                @foreach($blogs->first()->popularTags as $tag)
                                    <a href="#" class="tag-link">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <!--<section id="newsletter" class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Subscribe to Our Newsletter</h2>
                <p>Stay updated with our latest legal insights, articles, and news. We'll send you valuable information directly to your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section> --}}
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/blogs.js') }}"></script>
@endsection

