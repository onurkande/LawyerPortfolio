document.addEventListener("DOMContentLoaded", () => {
    // Navbar scroll effect
    const navbar = document.querySelector(".navbar");
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            backToTop.classList.add("active");
        } else {
            navbar.classList.remove("scrolled");
            backToTop.classList.remove("active");
        }
    });

    // Back to top functionality
    backToTop.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            if (this.getAttribute("href") === "#") return;

            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const navbarHeight = document.querySelector(".navbar").offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth",
                });

                // Update active nav link
                document.querySelectorAll(".nav-link").forEach((link) => {
                    link.classList.remove("active");
                });
                this.classList.add("active");
            }
        });
    });

    // Practice Areas Show Details functionality
    document.querySelectorAll('.show-details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const detailsElement = document.getElementById(targetId);
            
            if (detailsElement.classList.contains('show')) {
                detailsElement.classList.remove('show');
                this.classList.remove('active');
            } else {
                detailsElement.classList.add('show');
                this.classList.add('active');
                
                // Add fade-in animation
                detailsElement.querySelector('.practice-details-content').classList.add('fade-in');
            }
        });
    });

    // Testimonial Slider
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const testimonialNavBtns = document.querySelectorAll('.testimonial-nav-btn');
    let currentSlide = 0;

    function showSlide(index) {
        testimonialSlides.forEach(slide => slide.classList.remove('active'));
        testimonialNavBtns.forEach(btn => btn.classList.remove('active'));
        
        testimonialSlides[index].classList.add('active');
        testimonialNavBtns[index].classList.add('active');
    }

    testimonialNavBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Auto slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide + 1) % testimonialSlides.length;
        showSlide(currentSlide);
    }, 10000);

    // Form submission
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            // Add form submission logic here
            alert("Thank you for your message! We will get back to you soon.");
            contactForm.reset();
        });
    }

    // Animate elements on scroll
    const animateElements = () => {
        const elements = document.querySelectorAll(
            ".service-card, .practice-card, .testimonial-card, .about-image, .about-content"
        );

        elements.forEach((element) => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementPosition < windowHeight * 0.85) {
                element.style.opacity = "1";
                element.style.transform = "translateY(0)";
            }
        });
    };

    // Set initial state for animations
    const setInitialAnimationState = () => {
        const elements = document.querySelectorAll(
            ".service-card, .practice-card, .testimonial-card, .about-image, .about-content"
        );

        elements.forEach((element) => {
            element.style.opacity = "0";
            element.style.transform = "translateY(20px)";
            element.style.transition = "opacity 0.5s ease, transform 0.5s ease";
        });
    };

    setInitialAnimationState();
    animateElements(); // Run once on load

    window.addEventListener("scroll", animateElements);

    // Add active class to current nav item based on scroll position
    const updateActiveNavOnScroll = () => {
        const sections = document.querySelectorAll("section[id]");
        const navbarHeight = document.querySelector(".navbar").offsetHeight;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - navbarHeight - 20;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                document.querySelector('.nav-link[href="#' + sectionId + '"]')?.classList.add("active");
            } else {
                document.querySelector('.nav-link[href="#' + sectionId + '"]')?.classList.remove("active");
            }
        });
    };

    window.addEventListener("scroll", updateActiveNavOnScroll);
});