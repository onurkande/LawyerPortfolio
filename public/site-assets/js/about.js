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
            }
        });
    });

    // Animate elements on scroll
    const animateElements = () => {
        const elements = document.querySelectorAll(
            ".mission-card, .expertise-card, .team-card, .location-map, .location-info"
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
            ".mission-card, .expertise-card, .team-card, .location-map, .location-info"
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
});