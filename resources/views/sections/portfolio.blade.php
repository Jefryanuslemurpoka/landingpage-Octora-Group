<section id="portfolio" class="portfolio-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header">
            <h2 class="section-title">Our Portfolio</h2>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="portfolio-grid">
            @foreach($portfolio as $project)
            <div class="portfolio-card">
                <div class="portfolio-image">
                    <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}">
                </div>
                <div class="portfolio-content">
                    <h3 class="portfolio-title">{{ $project['title'] }}</h3>
                    <p class="portfolio-description">{{ $project['description'] }}</p>
                    <a href="#" class="portfolio-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" fill="#0047AB"/>
                            <path d="M12 8L16 12L12 16M16 12H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>