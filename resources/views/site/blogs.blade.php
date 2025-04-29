@extends('site.layouts.master')

@section('title', 'Bloglar')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blogs.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Legal Insights & Articles</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-feather-alt"></i>
                        </div>
                        <p class="lead mb-0">Stay informed with our latest legal perspectives and expert analysis.</p>
                    </div>
                    <p class="hero-subtitle mb-5">Explore our collection of articles covering various aspects of law, from practical advice to in-depth analysis of complex legal issues.</p>
                    <div class="d-flex gap-3">
                        <a href="#blog-section" class="btn btn-primary btn-lg">Browse Articles</a>
                        <a href="#newsletter" class="btn btn-outline-light btn-lg">Subscribe</a>
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
                        <!-- Blog Post 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Family Law">
                                    <div class="blog-category">Family Law</div>
                                    <div class="blog-date">April 15, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Jane Smith</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>5 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">Understanding Child Custody Laws: A Comprehensive Guide</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        Navigating child custody arrangements can be challenging. This guide explains the different types of custody, factors courts consider, and how to prepare for custody hearings.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5668467/pexels-photo-5668467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Criminal Law">
                                    <div class="blog-category">Criminal Law</div>
                                    <div class="blog-date">April 10, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Michael Johnson</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>7 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">Your Rights During a Police Encounter: What You Need to Know</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        Understanding your constitutional rights during interactions with law enforcement is crucial. Learn about search and seizure laws, Miranda rights, and when to request an attorney.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Real Estate Law">
                                    <div class="blog-category">Real Estate</div>
                                    <div class="blog-date">April 5, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Sarah Williams</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>6 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">Essential Legal Considerations When Buying Your First Home</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        Purchasing your first home involves numerous legal considerations. This article covers title searches, property disclosures, contract contingencies, and closing procedures.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Labor Law">
                                    <div class="blog-category">Labor Law</div>
                                    <div class="blog-date">March 28, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Robert Wilson</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>4 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">Workplace Discrimination: Recognizing and Addressing Unlawful Practices</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        Workplace discrimination remains a significant issue. Learn to identify different forms of discrimination, understand your legal protections, and steps to take if you experience discrimination.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 5 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5668858/pexels-photo-5668858.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Constitutional Law">
                                    <div class="blog-category">Constitutional</div>
                                    <div class="blog-date">March 20, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Jane Smith</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>8 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">First Amendment Rights in the Digital Age: Challenges and Considerations</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        The digital landscape has transformed how we exercise our First Amendment rights. This article explores free speech in online platforms, content moderation, and emerging legal issues.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 6 -->
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://images.pexels.com/photos/5669619/pexels-photo-5669619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Debt Law">
                                    <div class="blog-category">Debt Law</div>
                                    <div class="blog-date">March 15, 2025</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-meta-item">
                                            <i class="fas fa-user"></i>
                                            <span>Emily Davis</span>
                                        </div>
                                        <div class="blog-meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>5 min read</span>
                                        </div>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="blog-detail.html">Bankruptcy Basics: Understanding Your Options for Debt Relief</a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        When facing overwhelming debt, bankruptcy may be an option. This guide explains the different types of bankruptcy, eligibility requirements, and the impact on your financial future.
                                    </p>
                                    <div class="blog-read-more-container">
                                        <a href="blog-detail.html" class="blog-read-more">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Search Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Search</h3>
                            <form class="search-form">
                                <input type="text" class="search-input" placeholder="Search articles...">
                                <button type="submit" class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Categories</h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Family Law</span>
                                        <span class="category-count">12</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Criminal Law</span>
                                        <span class="category-count">9</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Real Estate Law</span>
                                        <span class="category-count">8</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Constitutional Law</span>
                                        <span class="category-count">6</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Labor Law</span>
                                        <span class="category-count">7</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Debt Law</span>
                                        <span class="category-count">5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Recent Posts</h3>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Understanding Child Custody Laws</a>
                                    </h4>
                                    <div class="recent-post-date">April 15, 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668467/pexels-photo-5668467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Your Rights During a Police Encounter</a>
                                    </h4>
                                    <div class="recent-post-date">April 10, 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Essential Legal Considerations When Buying Your First Home</a>
                                    </h4>
                                    <div class="recent-post-date">April 5, 2025</div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <div class="tag-cloud">
                                <a href="#" class="tag-link">Family</a>
                                <a href="#" class="tag-link">Criminal</a>
                                <a href="#" class="tag-link">Real Estate</a>
                                <a href="#" class="tag-link">Rights</a>
                                <a href="#" class="tag-link">Divorce</a>
                                <a href="#" class="tag-link">Custody</a>
                                <a href="#" class="tag-link">Employment</a>
                                <a href="#" class="tag-link">Property</a>
                                <a href="#" class="tag-link">Legal Advice</a>
                                <a href="#" class="tag-link">Constitution</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="newsletter-section">
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
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/blogs.js') }}"></script>
@endsection

