<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Testimonials</h2>
            <p class="section-subtitle">What People Say's About Us</p>
        </div>
        
        <div class="testimonials-wrapper">
            <button class="carousel-btn prev" id="prevBtn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="#0047AB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            
            <div class="testimonials-carousel" id="testimonialCarousel">
                @foreach($testimonials as $index => $testimonial)
                <div class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                    <div class="testimonial-header">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($testimonial['name']) }}&background=0047AB&color=fff&size=60&rounded=true" alt="{{ $testimonial['name'] }}" class="testimonial-avatar">
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">{{ $testimonial['name'] }}</h4>
                            <p class="testimonial-position">{{ $testimonial['position'] }}</p>
                        </div>
                    </div>
                    <p class="testimonial-message">{{ $testimonial['message'] }}</p>
                </div>
                @endforeach
            </div>
            
            <button class="carousel-btn next" id="nextBtn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="#0047AB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        
        <div class="carousel-indicators">
            @foreach($testimonials as $index => $testimonial)
            <span class="indicator {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></span>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.testimonial-card');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let current = 0;

        function goTo(index) {
            cards.forEach(c => c.classList.remove('active'));
            indicators.forEach(i => i.classList.remove('active'));

            if (index < 0) index = cards.length - 1;
            if (index >= cards.length) index = 0;

            current = index;
            cards[current].classList.add('active');
            indicators[current].classList.add('active');
        }

        prevBtn.addEventListener('click', () => goTo(current - 1));
        nextBtn.addEventListener('click', () => goTo(current + 1));

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => goTo(i));
        });
    });
</script>
@endpush