<section id="home" class="hero-section">
    <div class="container">
        <div class="hero-content">
            <!-- Left Content -->
            <div class="hero-text">
                <h1 class="hero-title">{{ $hero['title'] }}</h1>
                <p class="hero-description">{{ $hero['description'] }}</p>
                <a href="#contact" class="btn-primary">{{ $hero['cta_text'] }}</a>
                
                <!-- Thumbnail Images -->
                <div class="hero-thumbnails">
                    <div class="thumbnail">
                        <img src="{{ asset('images/hero/herokiri.png') }}" alt="Team Meeting">
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('images/hero/herokanan.png') }}" alt="Team Discussion">
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Hero Image -->
            <div class="hero-image">
                <img src="{{ asset('images/hero/heroutama.png') }}" alt="Digital Solutions Team">
            </div>
        </div>
    </div>
</section>