<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 py-4 px-6">
    <div id="navbar-inner"
         class="max-w-7xl mx-auto flex items-center justify-between px-6 py-3 rounded-2xl transition-all duration-500"
         style="background: rgba(8, 5, 30, 0.75);
                backdrop-filter: blur(28px);
                -webkit-backdrop-filter: blur(28px);
                border: 1px solid rgba(255,255,255,0.10);
                box-shadow: 0 8px 40px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.08);">

        {{-- Logo --}}
        <a href="#home" class="flex items-center gap-3 group flex-shrink-0">
            <img src="{{ asset('images/logo_octora.png') }}" alt="Octora Group"
                 class="h-8 w-auto transition-all duration-300 group-hover:scale-105"
                 style="filter: drop-shadow(0 0 8px rgba(255,255,255,0.3));">
        </a>

        {{-- Desktop Menu --}}
        <ul class="hidden md:flex items-center gap-1">
            @foreach(['home' => 'Beranda', 'about' => 'Tentang', 'services' => 'Layanan', 'portfolio' => 'Portfolio', 'team' => 'Tim', 'contact' => 'Kontak'] as $id => $label)
            <li>
                <a href="#{{ $id }}"
                   data-section="{{ $id }}"
                   class="nav-link relative px-4 py-2 text-sm font-medium rounded-xl transition-all duration-200"
                   style="color: rgba(255,255,255,0.75);">
                    {{ $label }}
                </a>
            </li>
            @endforeach
        </ul>

        {{-- CTA --}}
        <a href="#contact"
           class="hidden md:inline-flex items-center gap-2 text-sm font-semibold px-5 py-2.5 rounded-xl
                  text-white transition-all duration-300 flex-shrink-0
                  hover:shadow-lg hover:shadow-indigo-500/25 hover:-translate-y-0.5"
           style="background: linear-gradient(135deg, rgba(99,102,241,0.9), rgba(124,58,237,0.9));
                  border: 1px solid rgba(255,255,255,0.2);
                  box-shadow: 0 4px 15px rgba(99,102,241,0.3);">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            Konsultasi Gratis
        </a>

        {{-- Hamburger --}}
        <button id="menu-toggle"
                class="md:hidden w-9 h-9 flex flex-col items-center justify-center gap-1.5 rounded-xl
                       hover:bg-white/10 transition-all duration-200">
            <span id="bar1" class="block w-5 h-0.5 bg-white rounded-full transition-all duration-300 origin-center"></span>
            <span id="bar2" class="block w-4 h-0.5 bg-white/60 rounded-full transition-all duration-300"></span>
            <span id="bar3" class="block w-5 h-0.5 bg-white rounded-full transition-all duration-300 origin-center"></span>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
         class="md:hidden overflow-hidden transition-all duration-300 max-h-0 opacity-0">
        <div class="max-w-7xl mx-auto mt-2 rounded-2xl overflow-hidden"
             style="background: rgba(8, 5, 35, 0.85);
                    backdrop-filter: blur(24px);
                    -webkit-backdrop-filter: blur(24px);
                    border: 1px solid rgba(255,255,255,0.1);
                    box-shadow: 0 20px 60px rgba(0,0,0,0.4);">
            <div class="px-3 py-3 space-y-1">
                @foreach(['home' => 'Beranda', 'about' => 'Tentang', 'services' => 'Layanan', 'portfolio' => 'Portfolio', 'team' => 'Tim', 'contact' => 'Kontak'] as $id => $label)
                <a href="#{{ $id }}"
                   class="mobile-link flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium
                          text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200">
                    <span class="w-1 h-1 rounded-full bg-indigo-400 flex-shrink-0"></span>
                    {{ $label }}
                </a>
                @endforeach
            </div>
            <div class="px-3 pb-3">
                <div style="height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.08),transparent);" class="mb-3"></div>
                <a href="#contact"
                   class="mobile-link flex items-center justify-center gap-2 w-full py-3 rounded-xl
                          text-sm font-semibold text-white transition-all duration-200"
                   style="background: linear-gradient(135deg, rgba(99,102,241,0.9), rgba(124,58,237,0.9));
                          border: 1px solid rgba(255,255,255,0.15);">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
.nav-link:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(255, 255, 255, 0.10) !important;
}
</style>

<script>
(function () {
    const navbarInner = document.getElementById('navbar-inner');
    const toggle      = document.getElementById('menu-toggle');
    const mobileMenu  = document.getElementById('mobile-menu');
    const bar1 = document.getElementById('bar1');
    const bar2 = document.getElementById('bar2');
    const bar3 = document.getElementById('bar3');

    let menuOpen = false;

    /* ── Scroll ─────────────────────────────────────── */
    function onScroll() {
        navbarInner.style.background    = 'rgba(8, 5, 30, 0.75)';
        navbarInner.style.backdropFilter = 'blur(28px)';
        navbarInner.style.webkitBackdropFilter = 'blur(28px)';
        navbarInner.style.border        = '1px solid rgba(255,255,255,0.10)';
        navbarInner.style.boxShadow     = '0 8px 40px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.08)';
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ── Hamburger toggle ────────────────────────────── */
    function openMenu() {
        menuOpen = true;
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 200 + 'px';
        mobileMenu.style.opacity = '1';
        bar1.style.transform = 'translateY(8px) rotate(45deg)';
        bar2.style.opacity = '0';
        bar2.style.width = '0';
        bar3.style.transform = 'translateY(-8px) rotate(-45deg)';
    }

    function closeMenu() {
        menuOpen = false;
        mobileMenu.style.maxHeight = '0';
        mobileMenu.style.opacity = '0';
        bar1.style.transform = 'none';
        bar2.style.opacity = '1';
        bar2.style.width = '1rem';
        bar3.style.transform = 'none';
    }

    toggle.addEventListener('click', () => menuOpen ? closeMenu() : openMenu());
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    /* ── Smooth scroll ───────────────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    /* ── Active link highlight ───────────────────────── */
    const sections = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    const isActive = link.dataset.section === entry.target.id;
                    link.style.color      = isActive ? '#ffffff' : '';
                    link.style.background = isActive ? 'rgba(255,255,255,0.12)' : '';
                });
            }
        });
    }, { threshold: 0.45 });

    sections.forEach(s => observer.observe(s));
})();
</script>