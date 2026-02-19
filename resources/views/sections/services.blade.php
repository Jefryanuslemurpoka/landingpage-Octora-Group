<section id="services" class="services-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header">
            <h2 class="section-title">What We Offer</h2>
        </div>
        
        <!-- Services Grid -->
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-icon">
                    <img src="{{ asset('images/services/' . $service['icon']) }}" alt="{{ $service['title'] }}">
                </div>
                <h3 class="service-title">{{ $service['title'] }}</h3>
                <p class="service-description">{{ $service['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>