<section id="contact" class="contact-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header">
            <h2 class="section-title">Let's Connect</h2>
            <p class="section-subtitle">Ready to transform your business? Drop us a message.</p>
        </div>
        
        <!-- Contact Form -->
        <div class="contact-form-wrapper">
            <form action="#" method="POST" class="contact-form" id="contactForm">
                @csrf
                
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <!-- Message Field -->
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>
</section>