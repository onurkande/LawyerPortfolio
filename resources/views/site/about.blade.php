@extends('site.layouts.master')

@section('title', 'Hakkımızda')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/about.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Get to Know Us</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">Dedicated to providing exceptional legal services with integrity and professionalism.</p>
                    </div>
                    <p class="hero-subtitle mb-5">Learn about our firm's history, values, and the dedicated team of legal professionals who work tirelessly to serve our clients.</p>
                    <div class="d-flex gap-3">
                        <a href="#mission-vision" class="btn btn-primary btn-lg">Our Mission</a>
                        <a href="#expertise" class="btn btn-outline-light btn-lg">Our Expertise</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- About Content Section -->
    <section id="about-content" class="about-content">
        <div class="container" style="max-width: 1700px;">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h1 class="section-title">Our Story</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Our Law Firm">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-text-content">
                        <h3>A Legacy of Legal Excellence</h3>
                        <p class="about-text">
                            Founded with a vision to provide exceptional legal services, our firm has grown to become a trusted name in the legal community. Our journey began with a simple yet powerful mission: to deliver justice and protect the rights of our clients with unwavering dedication and professionalism.
                        </p>
                        <p class="about-text">
                            Over the years, we have built a reputation for excellence through our commitment to client satisfaction, innovative legal solutions, and a team of highly skilled attorneys. Our approach combines traditional legal expertise with modern strategies to address the evolving needs of our clients in an ever-changing legal landscape.
                        </p>
                        <p class="about-text">
                            What sets us apart is our unwavering commitment to our clients' success. We understand that each case is unique and requires a personalized approach. Our attorneys take the time to understand your specific needs and circumstances, ensuring that we provide tailored solutions that achieve the best possible outcomes.
                        </p>
                        <ul class="about-features">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Over 20 years of combined legal experience</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Dedicated to client success and satisfaction</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Innovative legal solutions and strategies</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Strong track record of successful cases</span>
                            </li>
                        </ul>
                        <p class="about-text">
                            Our firm's success is built on a foundation of trust, integrity, and excellence. We believe in maintaining the highest ethical standards while providing aggressive representation for our clients. Our team of experienced attorneys brings diverse expertise and perspectives to every case, ensuring comprehensive and effective legal solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section id="mission-vision" class="mission-vision py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Mission & Vision</h2>
                    <p class="section-subtitle">Guided by our core values, we strive to provide exceptional legal services to all our clients</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To provide equal justice services to everyone. We are committed to delivering high-quality legal representation with integrity, professionalism, and a client-centered approach. We strive to achieve the best possible outcomes for our clients while maintaining the highest ethical standards.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To be the most reliable legal consultancy firm in Türkiye. We aim to be recognized for our excellence in legal services, innovative solutions, and unwavering commitment to our clients' success. We envision a practice that continuously evolves to meet the changing needs of our clients and the legal landscape.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="expertise py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Areas of Expertise</h2>
                    <p class="section-subtitle">We specialize in various fields of law to provide comprehensive legal services</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Family Law</h3>
                        <p>We handle all aspects of family law with sensitivity and care, including divorce, child custody, alimony, and adoption matters. Our approach focuses on protecting your rights while minimizing emotional stress.</p>
                        <a href="family-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Criminal Law</h3>
                        <p>Our criminal defense team provides robust representation for clients facing charges, from misdemeanors to serious felonies. We work diligently to protect your rights throughout the legal process.</p>
                        <a href="criminal-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Real Estate Law</h3>
                        <p>We assist with all real estate matters, including property transactions, lease agreements, boundary disputes, and zoning issues. Our expertise ensures smooth and legally sound property dealings.</p>
                        <a href="real-estate-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3>Constitutional Law</h3>
                        <p>We handle cases involving constitutional rights, civil liberties, and government accountability. Our team is dedicated to protecting fundamental rights and ensuring fair treatment under the law.</p>
                        <a href="constitutional-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Labor Law</h3>
                        <p>Our labor law practice covers employment contracts, workplace discrimination, wrongful termination, and workers' compensation claims. We advocate for fair treatment in all employment matters.</p>
                        <a href="labor-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card">
                        <div class="expertise-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3>Debt Law</h3>
                        <p>We provide solutions for debt collection, bankruptcy filings, debt restructuring, and foreclosure defense. Our team works to find the best financial path forward for our clients.</p>
                        <a href="debt-law.html" class="expertise-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="services.html" class="btn btn-outline-primary">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="location py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Location</h2>
                    <p class="section-subtitle">Visit our office for a consultation or contact us to schedule an appointment</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.2186254137726!2d28.977549376688282!3d41.04224491781104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7650656bd63%3A0x8ca058b28c20b6c3!2zVGFrc2ltIFNxdWFyZSwgR8O8bcO8xZ9zdXl1LCDEsHN0YW5idWwsIFTDvHJraXll!5e0!3m2!1sen!2sus!4v1682424536089!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="location-info">
                        <h3>Contact Information</h3>
                        <div class="location-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Legal Street, Metropolitan Suite No.123, New York, NY 10001</p>
                        </div>
                        <div class="location-item">
                            <i class="fas fa-phone"></i>
                            <p>(555) 123-4567</p>
                        </div>
                        <div class="location-item">
                            <i class="fas fa-envelope"></i>
                            <p>contact@janesmith.law</p>
                        </div>
                        <div class="location-hours">
                            <h4>Office Hours</h4>
                            <div class="hours-item">
                                <span class="hours-day">Monday - Friday</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="hours-day">Saturday</span>
                                <span>10:00 AM - 2:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="hours-day">Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="contact.html" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/about.js') }}"></script>
@endsection