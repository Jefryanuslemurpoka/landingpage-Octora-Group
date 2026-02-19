// ==========================================
// SMOOTH SCROLL
// ==========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            
            // Close mobile menu if open
            const navMenu = document.getElementById('navMenu');
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            }
        }
    });
});

// ==========================================
// NAVBAR SCROLL EFFECT
// ==========================================
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    
    // Add shadow on scroll
    if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.2)';
    } else {
        navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
    }
    
    // Active link based on scroll position
    let current = '';
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });
    
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// ==========================================
// MOBILE MENU TOGGLE
// ==========================================
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const navMenu = document.getElementById('navMenu');

if (mobileMenuToggle && navMenu) {
    mobileMenuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        mobileMenuToggle.classList.toggle('active');
        
        // Animate hamburger icon
        const spans = mobileMenuToggle.querySelectorAll('span');
        if (mobileMenuToggle.classList.contains('active')) {
            spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });
}

// ==========================================
// TESTIMONIALS CAROUSEL
// ==========================================
const carousel = document.getElementById('testimonialCarousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const indicators = document.querySelectorAll('.indicator');
const testimonialCards = document.querySelectorAll('.testimonial-card');
let currentIndex = 1;
let autoPlayInterval;

function updateCarousel(index) {
    // Remove active class from all cards
    testimonialCards.forEach((card, i) => {
        card.classList.remove('active');
        if (i === index) {
            card.classList.add('active');
        }
    });
    
    // Update indicators
    indicators.forEach((indicator, i) => {
        indicator.classList.remove('active');
        if (i === index) {
            indicator.classList.add('active');
        }
    });
    
    currentIndex = index;
}

// Previous button
if (prevBtn) {
    prevBtn.addEventListener('click', () => {
        const newIndex = currentIndex === 0 ? testimonialCards.length - 1 : currentIndex - 1;
        updateCarousel(newIndex);
        resetAutoPlay();
    });
}

// Next button
if (nextBtn) {
    nextBtn.addEventListener('click', () => {
        const newIndex = currentIndex === testimonialCards.length - 1 ? 0 : currentIndex + 1;
        updateCarousel(newIndex);
        resetAutoPlay();
    });
}

// Indicators click
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        updateCarousel(index);
        resetAutoPlay();
    });
});

// Auto-play carousel
function startAutoPlay() {
    autoPlayInterval = setInterval(() => {
        const newIndex = currentIndex === testimonialCards.length - 1 ? 0 : currentIndex + 1;
        updateCarousel(newIndex);
    }, 5000);
}

function resetAutoPlay() {
    clearInterval(autoPlayInterval);
    startAutoPlay();
}

// Start auto-play on page load
if (testimonialCards.length > 0) {
    startAutoPlay();
}

// Pause auto-play on hover
if (carousel) {
    carousel.addEventListener('mouseenter', () => {
        clearInterval(autoPlayInterval);
    });
    
    carousel.addEventListener('mouseleave', () => {
        startAutoPlay();
    });
}

// ==========================================
// CONTACT FORM HANDLING
// ==========================================
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            message: formData.get('message')
        };
        
        // Disable submit button
        const submitBtn = contactForm.querySelector('.btn-submit');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        try {
            // Simulate API call (replace with actual endpoint)
            await new Promise(resolve => setTimeout(resolve, 1500));
            
            // Show success message
            alert('Thank you for your message! We will get back to you soon.');
            
            // Reset form
            contactForm.reset();
            
        } catch (error) {
            alert('Oops! Something went wrong. Please try again.');
        } finally {
            // Re-enable submit button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });
    
    // Form validation styling
    const inputs = contactForm.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('blur', () => {
            if (input.value.trim() === '') {
                input.style.borderColor = '#ef4444';
            } else {
                input.style.borderColor = '#10b981';
            }
        });
        
        input.addEventListener('focus', () => {
            input.style.borderColor = '#0047AB';
        });
    });
}

// ==========================================
// SCROLL ANIMATIONS (FADE IN)
// ==========================================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.service-card, .portfolio-card, .tech-card');
    
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// ==========================================
// BACK TO TOP BUTTON (Optional Enhancement)
// ==========================================
const backToTopBtn = document.createElement('button');
backToTopBtn.innerHTML = '↑';
backToTopBtn.className = 'back-to-top';
backToTopBtn.style.cssText = `
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: #0047AB;
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 999;
    box-shadow: 0 4px 15px rgba(0, 71, 171, 0.3);
`;

document.body.appendChild(backToTopBtn);

window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        backToTopBtn.style.opacity = '1';
        backToTopBtn.style.visibility = 'visible';
    } else {
        backToTopBtn.style.opacity = '0';
        backToTopBtn.style.visibility = 'hidden';
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

backToTopBtn.addEventListener('mouseenter', () => {
    backToTopBtn.style.transform = 'scale(1.1)';
});

backToTopBtn.addEventListener('mouseleave', () => {
    backToTopBtn.style.transform = 'scale(1)';
});

// ==========================================
// CONSOLE WELCOME MESSAGE
// ==========================================
console.log('%c Octora Group Indonesia ', 'background: #0047AB; color: white; font-size: 20px; padding: 10px;');
console.log('%c Digital Solutions for Your Business ', 'color: #0047AB; font-size: 14px;');
console.log('%c Website developed with ❤️ ', 'color: #666; font-size: 12px;');