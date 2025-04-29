@extends('site.layouts.master')

@section('title', 'Hizmetler')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/services.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Our Legal Services</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <p class="lead mb-0">Comprehensive legal solutions tailored to your specific needs.</p>
                    </div>
                    <p class="hero-subtitle mb-5">We offer a wide range of legal services with expertise in various practice areas to address all your legal challenges with precision and care.</p>
                    <div class="d-flex gap-3">
                        <a href="#service-cards" class="btn btn-primary btn-lg">Explore Services</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Contact Us</a>
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
                    <h2 class="section-title">Our Practice Areas</h2>
                    <p class="section-subtitle">We provide expert legal representation across a wide range of practice areas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Family Law</h3>
                            <p>Expert support in family disputes, divorce, custody, and adoption matters. We handle these sensitive cases with compassion and professionalism.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="family-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Criminal Law</h3>
                            <p>Robust defense for individuals facing criminal charges, from misdemeanors to serious felonies. We protect your rights throughout the legal process.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="criminal-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>Real Estate Law</h3>
                            <p>Comprehensive legal services for property transactions, lease agreements, boundary disputes, and zoning issues for both residential and commercial properties.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="real-estate-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <h3>Constitutional Law</h3>
                            <p>Protection of civil rights and liberties, representation in cases involving constitutional rights, and advocacy for fair treatment under the law.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="constitutional-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Labor Law</h3>
                            <p>Representation in employment disputes, workplace discrimination cases, wrongful termination, and workers' compensation claims to protect employee rights.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="labor-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-coins"></i>
                            </div>
                            <h3>Debt Law</h3>
                            <p>Solutions for debt collection, bankruptcy filings, debt restructuring, and foreclosure defense to help clients navigate financial challenges.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="debt-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3>Corporate Law</h3>
                            <p>Legal guidance for businesses of all sizes, including entity formation, contract drafting and review, mergers and acquisitions, and corporate governance.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="corporate-law.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="service-card mb-5">
                        <div class="service-card-content">
                            <div class="service-icon">
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <h3>Personal Injury</h3>
                            <p>Representation for victims of accidents, medical malpractice, and negligence to secure fair compensation for injuries and related damages.</p>
                        </div>
                        <div class="service-btn-container">
                            <a href="personal-injury.html" class="service-btn">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
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
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Discuss Your Legal Needs?</h2>
                <p>Schedule a consultation with our experienced attorneys to discuss your case and explore how we can help you achieve your legal objectives.</p>
                <a href="contact.html" class="cta-btn">
                    <i class="fas fa-calendar-alt"></i>
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/services.js') }}"></script>
@endsection
