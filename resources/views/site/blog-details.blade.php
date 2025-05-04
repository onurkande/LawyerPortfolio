@extends('site.layouts.master')

@section('title', 'Blog Detayları')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog-details.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero" style="background-image: url('{{ isset($blog->image) ? asset('storage/'.$blog->image) : asset('site-assets/images/hero-bg.jpg') }}');">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h1 class="display-3 fw-bold">{{ $blog->title ?? 'Blog Detayları' }}</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">{{ $blog->description ?? 'Blog Detayları' }}</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#blog-content" class="btn btn-primary btn-lg">Bloğu Oku</a>
                        <a href="{{ route('site.blogs') }}" class="btn btn-outline-light btn-lg">Bloglarımızı Keşfet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Detail Section -->
    <section id="blog-content" class="blog-detail-section">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="blog-content-wrapper">
                        <div class="blog-header">
                            <span class="blog-category">{{ $blog->category->title ?? 'Kategori Yok' }}</span>
                            <h1 class="blog-title">{{ $blog->title ?? 'Blog Detayları' }}</h1>
                            <div class="blog-meta">
                                <div class="blog-meta-item">
                                    <i class="fas fa-user"></i>
                                    <span>{{ $blog->author->name ?? 'Yazar Yok' }}</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>{{ $blog->created_at->format('d F Y') }}</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>{{ $blog->reading_time }} dk okuma süresi</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-featured-image">
                            <img src="{{ isset($blog->image) ? asset('storage/'.$blog->image) : asset('site-assets/images/default-blog-image.jpg') }}" alt="{{ $blog->title ?? 'Blog Detayları' }}">
                        </div>

                        <div class="blog-content">
                            {!! $blog->content !!}

                            @if($blog->tags)
                            <div class="blog-tags">
                                @foreach(explode(',', $blog->tags) as $tag)
                                    <a href="#" class="blog-tag">{{ $tag }}</a>
                                @endforeach
                            </div>
                            @endif

                            <div class="blog-share">
                                <h4 class="blog-share-title">Bu makaleyi paylaş</h4>
                                <div class="blog-share-links">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="blog-share-link"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="blog-share-link"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($blog->title) }}" target="_blank" class="blog-share-link"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->url()) }}&media={{ urlencode(asset('storage/'.$blog->image)) }}&description={{ urlencode($blog->title) }}" target="_blank" class="blog-share-link"><i class="fab fa-pinterest"></i></a>
                                    <a href="mailto:?subject={{ urlencode($blog->title) }}&body={{ urlencode(request()->url()) }}" class="blog-share-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <div class="related-posts">
                        <h2 class="related-posts-title">İlgili Makaleler</h2>
                        <div class="row g-4">
                            @if($relatedBlogs->count() > 0)
                                @foreach($relatedBlogs as $relatedBlog)
                                    <div class="col-md-4">
                                        <div class="related-post-card">
                                            <div class="related-post-image">
                                                <img src="{{ isset($relatedBlog->image) ? asset('storage/'.$relatedBlog->image) : asset('site-assets/images/default-blog-image.jpg') }}" alt="{{ $relatedBlog->title ?? 'İlgili Makaleler' }}">
                                                <div class="related-post-category">{{ $relatedBlog->category->title ?? 'Kategori Yok' }}</div>
                                                <div class="related-post-date">{{ $relatedBlog->created_at->format('d F Y') }}</div>
                                            </div>
                                            <div class="related-post-content">
                                                <h3 class="related-post-title">
                                                    <a href="{{ route('site.blog.show', $relatedBlog->slug) }}">{{ $relatedBlog->title }}</a>
                                                </h3>
                                                <p class="related-post-excerpt">
                                                    {!! Str::limit(strip_tags($relatedBlog->content), 150) !!}
                                                </p>
                                                <a href="{{ route('site.blog.show', $relatedBlog->slug) }}" class="related-post-link">
                                                    Devamını Oku <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">

                        <!-- Categories Widget -->
                        @if($blogCategories->count() > 0)
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Kategoriler</h3>
                                <ul class="category-list">
                                    @foreach($blogCategories as $category)
                                        <li class="category-item">
                                            <a href="#" class="category-link">
                                                <span>{{ $category->title }}</span>
                                                <span class="category-count">{{ $category->blogs->count() }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Recent Posts Widget -->
                        @if($blogs->count() > 0)
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Son Makaleler</h3>
                                @foreach($blogs as $blog)
                                    <div class="recent-post">
                                        <div class="recent-post-img">
                                            <img src="{{ isset($blog->image) ? asset('storage/'.$blog->image) : asset('site-assets/images/default-blog-image.jpg') }}" alt="{{ $blog->title ?? 'Son Makaleler' }}">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4 class="recent-post-title">
                                                <a href="{{ route('site.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h4>
                                            <div class="recent-post-date">{{ $blog->created_at->format('d F Y') }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Tags Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popüler Etiketler</h3>
                            <div class="tag-cloud">
                                @foreach($blog->popularTags as $tag)
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
    </section>-->
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/blog-details.js') }}"></script>
@endsection

