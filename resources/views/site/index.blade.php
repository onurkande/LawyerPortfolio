@extends('site.layouts.master')

@section('title', 'Ana Sayfa')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/index.css') }}">
@endsection

@section('content')
    <!-- Hero Section - Updated -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Attorney Jane Smith — Trust and Solution in Law</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">We are with you with modern solutions.</p>
                    </div>
                    <p class="hero-subtitle mb-5">Our expertise, trust, and solution-oriented approach makes us stand out in the legal field.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-primary btn-lg">Contact Us</a>
                        <a href="#practice-areas" class="btn btn-outline-light btn-lg">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">How We Can Help You</h2>
                    <p class="section-subtitle">Our approach is focused on providing practical and efficient solutions for all your legal needs</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Professional Legal Counseling</h3>
                        <p>Our legal experts provide customized solutions tailored to your specific needs and circumstances, ensuring optimal results.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Experienced Legal Solutions</h3>
                        <p>Traditional approaches combined with modern solutions - we analyze each case carefully to develop the most effective strategy.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3>Rights and Personal Protection</h3>
                        <p>We specialize in defending individual rights and interests, with particular expertise in managing complex cases efficiently.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section - Updated with Accordion -->
    <section id="about" class="about py-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image">
                        <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Attorney Jane Smith" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="section-title">Attorney Jane Smith</h2>
                        <p class="about-text">Attorney Jane Smith graduated from Harvard Law School with honors. After completing her legal internship in prestigious law firms, she founded her own practice with a vision of providing accessible legal services.</p>
                        <p class="about-text mb-4">With over 15 years of experience, she has successfully represented clients in numerous cases, earning a reputation for her thorough approach, ethical practice, and remarkable success rate in complex legal matters.</p>
                        
                        <h3 class="h5 mb-3">Professional Timeline</h3>
                        <div class="accordion career-accordion" id="careerAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2008">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2008" aria-expanded="false" aria-controls="collapse2008">
                                        2008: Harvard Law School
                                    </button>
                                </h2>
                                <div id="collapse2008" class="accordion-collapse collapse" aria-labelledby="heading2008" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">Graduated from Harvard Law School with honors, specializing in corporate and international law. Received the Dean's Award for Academic Excellence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2010">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2010" aria-expanded="false" aria-controls="collapse2010">
                                        2010: Morris & Partners Law Firm
                                    </button>
                                </h2>
                                <div id="collapse2010" class="accordion-collapse collapse" aria-labelledby="heading2010" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">Joined Morris & Partners as an associate attorney, focusing on corporate litigation and contract law. Quickly rose to become a senior associate within two years.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2015">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                                        2015: Founded Jane Smith Law Firm
                                    </button>
                                </h2>
                                <div id="collapse2015" class="accordion-collapse collapse" aria-labelledby="heading2015" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">Established Jane Smith Law Firm with a focus on providing accessible legal services to individuals and small businesses. Expanded the practice to include family law and real estate law.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2020">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                                        2020: Named Top 100 Attorneys
                                    </button>
                                </h2>
                                <div id="collapse2020" class="accordion-collapse collapse" aria-labelledby="heading2020" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">Recognized as one of the Top 100 Attorneys in the Region by Legal Excellence Magazine. Expanded the firm to include a team of specialized attorneys covering all major practice areas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-primary mt-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practice Areas - Updated with Accordion -->
    <section id="practice-areas" class="practice-areas py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Practice Areas</h2>
                    <p class="section-subtitle">We specialize in various fields of law to provide comprehensive legal services</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Family Law</h3>
                        <p>Family law including divorce, custody, alimony, and other matters related to family relationships.</p>
                        <button class="show-details-btn" data-target="family-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="family-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Divorce and legal separation proceedings</li>
                                    <li>Child custody and visitation arrangements</li>
                                    <li>Alimony and child support calculations</li>
                                    <li>Prenuptial and postnuptial agreements</li>
                                    <li>Adoption and guardianship</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Criminal Law</h3>
                        <p>Criminal cases, defense in investigations and representation during court proceedings.</p>
                        <button class="show-details-btn" data-target="criminal-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="criminal-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Defense against misdemeanor and felony charges</li>
                                    <li>Representation during police investigations</li>
                                    <li>Bail hearings and pretrial motions</li>
                                    <li>Plea negotiations and trial representation</li>
                                    <li>Appeals and post-conviction relief</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Real Estate Law</h3>
                        <p>Real estate law, transactions and disputes related to property matters.</p>
                        <button class="show-details-btn" data-target="realestate-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="realestate-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Residential and commercial property transactions</li>
                                    <li>Lease agreements and negotiations</li>
                                    <li>Property boundary and easement disputes</li>
                                    <li>Landlord-tenant issues</li>
                                    <li>Zoning and land use regulations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3>Constitutional Law</h3>
                        <p>Constitutional rights, public law and administrative proceedings related to constitutional matters.</p>
                        <button class="show-details-btn" data-target="constitutional-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="constitutional-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Civil rights and liberties cases</li>
                                    <li>First Amendment issues</li>
                                    <li>Due process violations</li>
                                    <li>Equal protection claims</li>
                                    <li>Government accountability matters</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Labor Law</h3>
                        <p>Labor law, employment contracts, work accidents and employment related disputes.</p>
                        <button class="show-details-btn" data-target="labor-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="labor-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Employment contract drafting and review</li>
                                    <li>Workplace discrimination and harassment claims</li>
                                    <li>Wrongful termination cases</li>
                                    <li>Workers' compensation claims</li>
                                    <li>Wage and hour disputes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-card">
                        <div class="practice-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3>Debt Law</h3>
                        <p>Debt collection, enforcement proceedings, bankruptcy and debt restructuring solutions.</p>
                        <button class="show-details-btn" data-target="debt-details">
                            View Details
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="practice-details" id="debt-details">
                            <div class="practice-details-content">
                                <ul>
                                    <li>Debt collection and recovery</li>
                                    <li>Bankruptcy filings (Chapter 7, 11, and 13)</li>
                                    <li>Debt restructuring and negotiation</li>
                                    <li>Foreclosure defense</li>
                                    <li>Credit repair and protection</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All Practice Areas</a>
            </div>-->
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Client Reviews</h2>
                    <p class="section-subtitle">What our clients say about our services</p>
                </div>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-slide active">
                    <!-- First set of testimonials -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">John Smith</h5>
                                <span class="testimonial-date">2 weeks ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Exceptional service! Attorney Smith handled my case with professionalism and care. The entire team was supportive throughout the process, and I couldn't be happier with the results.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">Sarah Johnson</h5>
                                <span class="testimonial-date">1 month ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">I was impressed by the level of expertise and attention to detail. They made a complex legal process much easier to understand and navigate. Highly recommended!</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">Michael Brown</h5>
                                <span class="testimonial-date">3 months ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Professional, knowledgeable, and always available to answer questions. They went above and beyond to ensure the best possible outcome for my case.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <!-- Second set of testimonials -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">Emily Davis</h5>
                                <span class="testimonial-date">2 months ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">The team was incredibly supportive during a difficult time. Their expertise and compassion made all the difference in my case. Thank you!</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">Robert Wilson</h5>
                                <span class="testimonial-date">1 week ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Outstanding legal representation! They were thorough, responsive, and achieved excellent results. I would recommend them to anyone seeking legal assistance.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="testimonial-name">Lisa Anderson</h5>
                                <span class="testimonial-date">2 weeks ago</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Professional, efficient, and results-oriented. They handled my case with the utmost care and attention. I'm very satisfied with their services.</p>
                        <div class="testimonial-source">
                            <i class="fab fa-google"></i>
                            <span>Google Review</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-nav">
                    <button class="testimonial-nav-btn active"></button>
                    <button class="testimonial-nav-btn"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog py-6" style="padding-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Latest Legal Insights</h2>
                    <p class="section-subtitle">Stay informed with our latest articles and legal updates</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- First Row -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">March 15, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Understanding Your Rights in Family Law Cases</a></h3>
                            <p class="blog-excerpt">Learn about your rights and options in family law matters, from divorce to child custody arrangements.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">March 10, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Navigating Real Estate Transactions</a></h3>
                            <p class="blog-excerpt">Essential tips and legal considerations for buying or selling property in today's market.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">March 5, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Criminal Defense: Know Your Options</a></h3>
                            <p class="blog-excerpt">Understanding the criminal justice system and your rights when facing charges.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Second Row -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">February 28, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Employment Law Updates 2024</a></h3>
                            <p class="blog-excerpt">Stay informed about the latest changes in employment law and workplace regulations.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">February 20, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Debt Collection Laws Explained</a></h3>
                            <p class="blog-excerpt">Understanding your rights and protections under debt collection laws.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Legal Consultation">
                            <div class="blog-date">February 15, 2024</div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#">Constitutional Rights in Modern Society</a></h3>
                            <p class="blog-excerpt">Exploring the relevance and application of constitutional rights in today's world.</p>
                            <a href="#" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-view-all">
                <a href="#" class="blog-view-all-btn">
                    View All Blogs
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="contact-cta py-6 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title text-white">Let's Discuss Your Case</h2>
                    <p class="contact-text">Schedule a free consultation to discuss your legal needs. We're here to provide the guidance and representation you deserve.</p>
                    <div class="contact-info mt-4">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Legal Street, Metropolitan Suite No.123, New York, NY 10001</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>(555) 123-4567</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>contact@janesmith.law</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form-card">
                        <h3 class="text-dark mb-4">Get In Touch</h3>
                        <form id="contactForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <select class="form-select">
                                    <option selected>Select Practice Area</option>
                                    <option value="Family Law">Family Law</option>
                                    <option value="Criminal Law">Criminal Law</option>
                                    <option value="Real Estate Law">Real Estate Law</option>
                                    <option value="Constitutional Law">Constitutional Law</option>
                                    <option value="Labor Law">Labor Law</option>
                                    <option value="Debt Law">Debt Law</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Brief Description of Your Case" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Send Message</button>
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
                    <h2 class="section-title">Useful Links</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="partners-wrapper">
                        <div class="partner-item">
                            <img src="https://www.alperkagantatar.av.tr/wp-content/uploads/2024/04/anayasa-150x150-1.png" alt="Law Association" class="img-fluid">
                        </div>
                        <div class="partner-item">
                            <img src="https://www.alperkagantatar.av.tr/wp-content/uploads/2024/04/Yargitay_logo.png" alt="Bar Association" class="img-fluid">
                        </div>
                        <div class="partner-item">
                            <img src="https://www.alperkagantatar.av.tr/wp-content/uploads/2024/04/1200px-Seal_of_the_Turkish_Parliament_Turkiye_Buyuk_Millet_Meclisi.svg-300x300.png" alt="Justice Department" class="img-fluid">
                        </div>
                        <div class="partner-item">
                            <img src="https://www.alperkagantatar.av.tr/wp-content/uploads/2024/04/indir-2.png" alt="Legal Aid Society" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/index.js') }}"></script>
@endsection

