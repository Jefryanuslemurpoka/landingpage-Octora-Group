@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.hero')
    
    <!-- About Section -->
    @include('sections.about')
    
    <!-- Services Section -->
    @include('sections.services')
    
    <!-- Technologies Section -->
    @include('sections.technologies')
    
    <!-- Portfolio Section -->
    @include('sections.portfolio')
    
    <!-- Testimonials Section -->
    @include('sections.testimonials')
    
    <!-- Contact Section -->
    @include('sections.contact')
@endsection

@push('scripts')
<script>
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Navbar Active Link on Scroll
    window.addEventListener('scroll', () => {
        let current = '';
        const sections = document.querySelectorAll('section');
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
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
    
    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    mobileMenuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        mobileMenuToggle.classList.toggle('active');
    });
    
    // Testimonials Carousel
    const carousel = document.getElementById('testimonialCarousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.indicator');
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    let currentIndex = 1;
    
    function updateCarousel(index) {
        testimonialCards.forEach((card, i) => {
            card.classList.remove('active');
            if (i === index) {
                card.classList.add('active');
            }
        });
        
        indicators.forEach((indicator, i) => {
            indicator.classList.remove('active');
            if (i === index) {
                indicator.classList.add('active');
            }
        });
        
        currentIndex = index;
    }
    
    prevBtn.addEventListener('click', () => {
        const newIndex = currentIndex === 0 ? testimonialCards.length - 1 : currentIndex - 1;
        updateCarousel(newIndex);
    });
    
    nextBtn.addEventListener('click', () => {
        const newIndex = currentIndex === testimonialCards.length - 1 ? 0 : currentIndex + 1;
        updateCarousel(newIndex);
    });
    
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            updateCarousel(index);
        });
    });
    
    // Auto-play carousel (optional)
    setInterval(() => {
        const newIndex = currentIndex === testimonialCards.length - 1 ? 0 : currentIndex + 1;
        updateCarousel(newIndex);
    }, 5000);
    
    // Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        
        // Here you can add AJAX submission or just show success message
        alert('Thank you for your message! We will get back to you soon.');
        contactForm.reset();
    });
</script>
@endpush