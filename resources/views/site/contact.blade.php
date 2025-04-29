@extends('site.layouts.master')

@section('title', 'İletişim')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/contact.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Contact Us</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <p class="lead mb-0">We're here to help with your legal needs.</p>
                    </div>
                    <p class="hero-subtitle mb-5">Reach out to our team of experienced attorneys for a consultation or to discuss your case. We're committed to providing responsive and personalized legal services.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact-form" class="btn btn-primary btn-lg">Send a Message</a>
                        <a href="#contact-info" class="btn btn-outline-light btn-lg">Our Office</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section id="contact-info" class="contact-info-section py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="section-subtitle">We're available to assist you through multiple channels</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Phone Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Phone</h3>
                        <p>Call us directly for immediate assistance</p>
                        <a href="tel:+15551234567">(555) 123-4567</a>
                    </div>
                </div>
                
                <!-- Email Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email</h3>
                        <p>Send us an email anytime</p>
                        <a href="mailto:contact@janesmith.law">contact@janesmith.law</a>
                    </div>
                </div>
                
                <!-- Address Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Address</h3>
                        <p>123 Legal Street, Metropolitan Suite No.123</p>
                        <p>New York, NY 10001</p>
                    </div>
                </div>
                
                <!-- Working Hours Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Working Hours</h3>
                        <p>Monday - Friday</p>
                        <p>9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="contact-form-section py-6">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-container">
                        <h2 class="contact-form-title">Send Us a Message</h2>
                        <p class="mb-4">Fill out the form below and we'll get back to you as soon as possible.</p>
                        
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Full Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-md-12">
                                    <select class="form-select">
                                        <option selected>Select Subject</option>
                                        <option value="Consultation">Consultation</option>
                                        <option value="Appointment">Appointment</option>
                                        <option value="Information">Information Request</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Message *" required></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="kvkkCheck" required>
                                        <label class="form-check-label" for="kvkkCheck">
                                            I agree to the processing of my personal data in accordance with the Privacy Policy
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Google Maps -->
                <div class="col-lg-6">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.11976397304903!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2str!4v1650000000000!5m2!1sen!2str" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/contact.js') }}"></script>
@endsection