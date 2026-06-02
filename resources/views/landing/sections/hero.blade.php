<section id="home" class="relative w-full overflow-hidden" style="background:#ffffff;">

    {{-- Base gradient --}}
    <div class="absolute inset-0" style="background:linear-gradient(135deg,#ffffff 0%,#faf8ff 35%,#ede9fe 65%,#c4b5fd 100%);"></div>

    {{-- Organic purple shape --}}
    <div class="absolute hero-purple-shape pointer-events-none" style="background:linear-gradient(145deg,#a78bfa 0%,#8b5cf6 45%,#7c3aed 100%);"></div>

    {{-- Glows --}}
    <div class="absolute pointer-events-none" style="top:5%;right:2%;width:35%;height:45%;background:radial-gradient(ellipse,rgba(196,181,253,0.5) 0%,transparent 70%);"></div>
    <div class="absolute pointer-events-none" style="bottom:10%;right:15%;width:25%;height:35%;background:radial-gradient(ellipse,rgba(139,92,246,0.4) 0%,transparent 70%);filter:blur(20px);"></div>

    {{-- Dot grids --}}
    <div class="absolute inset-y-0 left-0 pointer-events-none" style="width:52%;background-image:radial-gradient(circle,rgba(109,40,217,0.07) 1.5px,transparent 1.5px);background-size:28px 28px;"></div>
    <div class="absolute inset-y-0 right-0 pointer-events-none" style="width:52%;background-image:radial-gradient(circle,rgba(255,255,255,0.1) 1px,transparent 1px);background-size:30px 30px;"></div>

    {{-- Accent bar --}}
    <div class="absolute left-0 hero-accent-bar pointer-events-none" style="width:3px;background:linear-gradient(to bottom,transparent,#7c3aed,#4f46e5,transparent);border-radius:0 3px 3px 0;"></div>

    {{-- Floating IT Objects --}}
    <div class="absolute hero-obj hero-rocket pointer-events-none">🚀</div>
    <div class="absolute hero-obj hero-laptop pointer-events-none">💻</div>
    <div class="absolute hero-obj hero-db pointer-events-none">🗄️</div>
    <div class="absolute hero-obj hero-code pointer-events-none" style="font-weight:900;color:rgba(255,255,255,0.55);font-family:monospace;letter-spacing:-2px;">&lt;/&gt;</div>
    <div class="absolute hero-obj hero-chip pointer-events-none">🔌</div>
    <div class="absolute hero-obj hero-cloud pointer-events-none">☁️</div>
    <div class="absolute hero-obj hero-gear pointer-events-none">⚙️</div>
    <div class="absolute hero-obj hero-dot1 pointer-events-none" style="border-radius:50%;background:rgba(255,255,255,0.35);"></div>
    <div class="absolute hero-obj hero-dot2 pointer-events-none" style="border-radius:50%;background:rgba(255,255,255,0.25);"></div>
    <div class="absolute hero-obj hero-dot3 pointer-events-none" style="border-radius:50%;background:rgba(255,255,255,0.3);"></div>

    {{-- ══ MAIN GRID ══ --}}
    <div class="hero-main-grid">

        {{-- LEFT --}}
        <div class="relative z-10 flex flex-col justify-center hero-left">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 w-fit px-4 py-1.5 rounded-full text-xs font-semibold" style="background:rgba(109,40,217,0.08);border:1px solid rgba(109,40,217,0.2);color:#6d28d9;margin-bottom:28px;">
                <span class="hero-badge-dot w-2 h-2 rounded-full" style="background:#16a34a;"></span>
                Software House Terpercaya di Indonesia
            </div>

            {{-- Heading --}}
            <h1 class="font-black hero-heading" style="line-height:1.02;letter-spacing:-0.04em;color:#1a0533;margin-bottom:20px;">
                Wujudkan Ide<br>Digital Anda<br>
                <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">
                    Bersama Kami
                </span>
            </h1>

            {{-- Desc --}}
            <p class="hero-desc" style="line-height:1.78;color:#64748b;margin-bottom:30px;">
                PT Octora Group membangun solusi software berkualitas tinggi, Web, Mobile, dan Desktop yang mengakselerasi pertumbuhan bisnis Anda.
            </p>

            {{-- CTA --}}
            <div class="flex flex-wrap items-center hero-cta" style="gap:14px;margin-bottom:36px;">
                <a href="#services" class="inline-flex items-center gap-2 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="font-size:15px;padding:14px 28px;background:linear-gradient(135deg,#6d28d9,#4f46e5);box-shadow:0 8px 28px rgba(109,40,217,0.38);">
                    Lihat Layanan Kami
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#portfolio" class="inline-flex items-center font-semibold rounded-2xl transition-all duration-300" style="font-size:15px;padding:14px 28px;color:#6d28d9;border:1.5px solid rgba(109,40,217,0.28);">
                    Lihat Portfolio
                </a>
            </div>

            {{-- Trust strip --}}
            <div style="margin-bottom:28px;">
                <p style="font-size:10px;color:#94a3b8;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;margin-bottom:10px;">Dipercaya oleh</p>
                <div class="flex flex-wrap items-center" style="gap:10px;">
                    @foreach([['🏢','Startup'],['🏭','Enterprise'],['🏛️','Pemerintah'],['🎓','Pendidikan']] as $client)
                    <div class="inline-flex items-center gap-1.5" style="font-size:11px;font-weight:700;color:#94a3b8;padding:5px 12px;border-radius:8px;border:1px solid rgba(109,40,217,0.12);background:rgba(255,255,255,0.7);">
                        <span style="font-size:13px;">{{ $client[0] }}</span> {{ $client[1] }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:linear-gradient(90deg,rgba(109,40,217,0.12),transparent);margin-bottom:24px;"></div>

            {{-- Stats --}}
            <div class="flex flex-wrap" style="gap:24px;">
                @foreach([['50+','Proyek Selesai'],['30+','Klien Puas'],['5+','Tahun Pengalaman']] as $stat)
                <div>
                    <div class="font-black" style="font-size:30px;letter-spacing:-0.03em;background:linear-gradient(135deg,#6d28d9,#4f46e5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">{{ $stat[0] }}</div>
                    <div style="font-size:11px;color:#94a3b8;margin-top:3px;font-weight:500;">{{ $stat[1] }}</div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="relative z-10 hero-right">
            <div class="relative hero-cards-wrap" style="display:flex;align-items:center;justify-content:center;">

                {{-- Rings --}}
                <div class="absolute rounded-full hero-ring1" style="border:1px solid rgba(255,255,255,0.15);top:50%;left:50%;transform:translate(-50%,-50%);"></div>
                <div class="absolute rounded-full hero-ring2" style="border:1px dashed rgba(255,255,255,0.1);top:50%;left:50%;transform:translate(-50%,-50%);"></div>
                <div class="absolute rounded-full hero-ring3" style="border:1px solid rgba(255,255,255,0.06);top:50%;left:50%;transform:translate(-50%,-50%);"></div>

                {{-- Card 1: Tingkat Kepuasan --}}
                <div class="hero-fc hero-fc-1" style="--tx:-50%;animation-delay:0s;">
                    <div class="hero-fc-icon" style="background:rgba(22,163,74,0.1);">✅</div>
                    <div class="hero-fc-lbl">Tingkat Kepuasan</div>
                    <div class="hero-fc-val">99%</div>
                    <div class="hero-fc-bar-bg"><div class="hero-fc-bar" style="width:99%;background:linear-gradient(90deg,#16a34a,#22c55e);"></div></div>
                    <div class="hero-fc-sub" style="color:#16a34a;">↑ Klien selalu puas</div>
                </div>

                {{-- Card 2: Proyek Selesai --}}
                <div class="hero-fc hero-fc-2" style="--tx:0;animation-delay:2s;">
                    <div class="hero-fc-icon" style="background:rgba(109,40,217,0.1);">📁</div>
                    <div class="hero-fc-lbl">Proyek Selesai</div>
                    <div class="hero-fc-val">50+</div>
                    <div style="display:flex;gap:5px;margin-top:8px;flex-wrap:wrap;">
                        <span class="hero-fc-pill" style="background:rgba(79,70,229,0.1);color:#4f46e5;border:1px solid rgba(79,70,229,0.2);">Web</span>
                        <span class="hero-fc-pill" style="background:rgba(109,40,217,0.1);color:#6d28d9;border:1px solid rgba(109,40,217,0.2);">Mobile</span>
                        <span class="hero-fc-pill" style="background:rgba(139,92,246,0.1);color:#7c3aed;border:1px solid rgba(139,92,246,0.2);">Desktop</span>
                    </div>
                </div>

                {{-- Card 3: On-time Delivery --}}
                <div class="hero-fc hero-fc-3" style="--tx:0;animation-delay:4s;">
                    <div class="hero-fc-icon" style="background:rgba(79,70,229,0.1);">⚡</div>
                    <div class="hero-fc-lbl">On-time Delivery</div>
                    <div class="hero-fc-val">100%</div>
                    <div class="hero-fc-bar-bg"><div class="hero-fc-bar" style="width:100%;background:linear-gradient(90deg,#6d28d9,#4f46e5);"></div></div>
                    <div class="hero-fc-sub" style="color:#94a3b8;">Tepat waktu, selalu</div>
                </div>

                {{-- Card 4: Tim Developer --}}
                <div class="hero-fc hero-fc-4" style="--tx:0;animation-delay:1s;">
                    <div class="hero-fc-icon" style="background:rgba(245,158,11,0.1);">👥</div>
                    <div class="hero-fc-lbl">Tim Developer</div>
                    <div class="hero-fc-val">15+</div>
                    <div style="display:flex;margin-top:8px;">
                        @foreach([['#7c3aed','A'],['#4f46e5','B'],['#0891b2','C'],['#16a34a','D']] as $av)
                        <div style="width:22px;height:22px;border-radius:50%;border:2px solid #fff;background:{{ $av[0] }};display:flex;align-items:center;justify-content:center;font-size:8px;font-weight:900;color:#fff;margin-left:-5px;">{{ $av[1] }}</div>
                        @endforeach
                        <div style="width:22px;height:22px;border-radius:50%;border:2px solid #fff;background:#94a3b8;display:flex;align-items:center;justify-content:center;font-size:7px;font-weight:900;color:#fff;margin-left:-5px;">+11</div>
                    </div>
                    <div class="hero-fc-sub" style="color:#94a3b8;">Expert & berpengalaman</div>
                </div>

                {{-- Card 5: Rating Klien --}}
                <div class="hero-fc hero-fc-5" style="--tx:0;animation-delay:3s;">
                    <div class="hero-fc-icon" style="background:rgba(245,158,11,0.1);">⭐</div>
                    <div class="hero-fc-lbl">Rating Klien</div>
                    <div class="hero-fc-val">4.9</div>
                    <div style="display:flex;gap:2px;margin-top:6px;">
                        @for($i=0;$i<5;$i++)<span style="font-size:12px;color:#f59e0b;">★</span>@endfor
                        <span style="font-size:10px;color:#94a3b8;margin-left:4px;align-self:center;font-weight:600;">/ 5.0</span>
                    </div>
                    <div class="hero-fc-sub" style="color:#94a3b8;">Dari 30+ ulasan</div>
                </div>

            </div>
        </div>
    </div>

    {{-- Scroll hint --}}
    <div class="absolute hero-scroll-hint flex flex-col items-center gap-2 pointer-events-none" style="bottom:28px;color:rgba(109,40,217,0.3);">
        <span style="font-size:10px;letter-spacing:0.18em;font-weight:600;">SCROLL</span>
        <div style="width:1px;height:32px;background:linear-gradient(to bottom,transparent,rgba(109,40,217,0.25));"></div>
    </div>

</section>

<style>
/* ══════════════════════════════════════
   DESKTOP 1024px+
══════════════════════════════════════ */
.hero-main-grid {
    display:grid; grid-template-columns:1fr 1fr;
    min-height:100vh; position:relative; z-index:1;
}
.hero-left    { padding:100px 60px 80px 80px; }
.hero-right   { display:flex; align-items:center; justify-content:center; padding:80px 40px; }
.hero-heading { font-size:clamp(38px,4vw,58px); }
.hero-desc    { font-size:15px; max-width:430px; }

.hero-purple-shape {
    top:-15%; right:-6%; width:56%; height:130%;
    border-radius:45% 0 0 55% / 55% 0 0 45%;
}
.hero-accent-bar { top:20%; bottom:20%; }
.hero-scroll-hint { left:25%; transform:translateX(-50%); }

/* Floating objects - desktop */
.hero-rocket { top:10%; right:38%; font-size:36px; }
.hero-laptop { top:5%;  right:8%;  font-size:30px; }
.hero-db     { top:55%; right:1%;  font-size:28px; }
.hero-code   { bottom:30%; right:40%; font-size:26px; }
.hero-chip   { top:20%; right:20%; font-size:26px; }
.hero-cloud  { top:25%; right:1%;  font-size:28px; }
.hero-gear   { bottom:18%; right:16%; font-size:24px; }
.hero-dot1   { top:15%; right:28%; width:10px; height:10px; }
.hero-dot2   { top:42%; right:15%; width:7px;  height:7px;  }
.hero-dot3   { bottom:25%; right:35%; width:8px; height:8px; }

/* Cards - desktop */
.hero-cards-wrap { width:100%; height:460px; }
.hero-ring1  { width:260px; height:260px; }
.hero-ring2  { width:360px; height:360px; }
.hero-ring3  { width:440px; height:440px; }
.hero-fc-1   { position:absolute; top:10px;    left:50%;    min-width:195px; }
.hero-fc-2   { position:absolute; bottom:20px; left:350px;  min-width:175px; }
.hero-fc-3   { position:absolute; bottom:30px; right:100px; min-width:175px; }
.hero-fc-4   { position:absolute; top:50px;    right:100px; min-width:155px; }
.hero-fc-5   { position:absolute; top:20%;     left:100px;  min-width:148px; }

/* ══ Shared Styles ══ */
.hero-badge-dot {
    box-shadow:0 0 0 3px rgba(22,163,74,0.15);
    animation:heroBadgePulse 2s ease-in-out infinite;
}
@keyframes heroBadgePulse {
    0%,100%{box-shadow:0 0 0 3px rgba(22,163,74,0.15);}
    50%    {box-shadow:0 0 0 6px rgba(22,163,74,0.07);}
}

.hero-fc {
    background:rgba(255,255,255,0.97);
    border:1px solid rgba(255,255,255,0.85); border-radius:22px;
    padding:18px 22px;
    box-shadow:0 20px 60px rgba(0,0,0,0.15),0 4px 16px rgba(0,0,0,0.07);
    animation:heroFcFloat 6s ease-in-out infinite;
}
.hero-fc-icon { width:38px;height:38px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:18px;margin-bottom:10px; }
.hero-fc-lbl  { font-size:9px;color:#94a3b8;text-transform:uppercase;letter-spacing:0.1em;font-weight:700;margin-bottom:4px; }
.hero-fc-val  { font-size:24px;font-weight:900;color:#1a0533;letter-spacing:-0.02em; }
.hero-fc-sub  { font-size:10px;margin-top:5px;font-weight:500; }
.hero-fc-pill { font-size:9px;font-weight:700;padding:3px 9px;border-radius:100px;display:inline-block; }
.hero-fc-bar-bg { height:5px;border-radius:3px;background:rgba(109,40,217,0.1);margin-top:8px;overflow:hidden; }
.hero-fc-bar    { height:100%;border-radius:3px; }

@keyframes heroFcFloat {
    0%,100%{transform:translateY(0) translateX(var(--tx,0));}
    50%    {transform:translateY(-12px) translateX(var(--tx,0));}
}

.hero-obj    { z-index:5;filter:drop-shadow(0 4px 12px rgba(0,0,0,0.15)); }
.hero-rocket { animation:rocketFly 8s ease-in-out infinite; }
@keyframes rocketFly {
    0%  {transform:translateY(0) translateX(0) rotate(-30deg);opacity:0.9;}
    25% {transform:translateY(-18px) translateX(10px) rotate(-28deg);opacity:1;}
    50% {transform:translateY(-8px) translateX(18px) rotate(-32deg);opacity:0.9;}
    75% {transform:translateY(-22px) translateX(6px) rotate(-29deg);opacity:1;}
    100%{transform:translateY(0) translateX(0) rotate(-30deg);opacity:0.9;}
}
.hero-laptop { animation:objBob 7s ease-in-out infinite 0.5s; }
.hero-db     { animation:objBob 9s ease-in-out infinite 2s; }
.hero-code   { animation:objBob 6s ease-in-out infinite 1s,codePulse 3s ease-in-out infinite; }
@keyframes codePulse{0%,100%{opacity:0.45;}50%{opacity:0.75;}}
.hero-chip   { animation:objSpin 10s ease-in-out infinite 3s; }
@keyframes objSpin{0%,100%{transform:translateY(0) rotate(0deg);}33%{transform:translateY(-12px) rotate(15deg);}66%{transform:translateY(-6px) rotate(-10deg);}}
.hero-cloud  { animation:cloudDrift 11s ease-in-out infinite 1.5s; }
@keyframes cloudDrift{0%,100%{transform:translateX(0) translateY(0);}33%{transform:translateX(12px) translateY(-8px);}66%{transform:translateX(-8px) translateY(-14px);}}
.hero-gear   { animation:gearSpin 12s linear infinite; }
@keyframes gearSpin{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}
@keyframes objBob{0%,100%{transform:translateY(0);}50%{transform:translateY(-14px);}}
.hero-dot1{animation:objBob 5s ease-in-out infinite 0.3s;}
.hero-dot2{animation:objBob 7s ease-in-out infinite 1.2s;}
.hero-dot3{animation:objBob 6s ease-in-out infinite 2.5s;}

/* ══════════════════════════════════════
   TABLET 768px - 1024px
══════════════════════════════════════ */
@media (max-width:1024px) {
    .hero-main-grid  { grid-template-columns:1fr; min-height:auto; }
    .hero-left       { padding:110px 48px 40px; text-align:center; align-items:center; }
    .hero-desc       { max-width:560px; margin-left:auto; margin-right:auto; }
    .hero-cta        { justify-content:center; }
    .hero-right      { padding:16px 40px 60px; }
    .hero-accent-bar { display:none; }
    .hero-scroll-hint{ left:50%; }

    .hero-purple-shape {
        top:auto; bottom:-5%; right:-10%;
        width:85%; height:42%;
        border-radius:50% 50% 0 0 / 60% 60% 0 0;
    }

    /* Objects - tablet */
    .hero-db    { display:none; }
    .hero-cloud { display:none; }
    .hero-dot3  { display:none; }
    .hero-rocket{ top:5%; right:10%; font-size:28px; }
    .hero-laptop{ top:3%; right:2%;  font-size:24px; }
    .hero-chip  { top:12%; right:28%; font-size:22px; }
    .hero-gear  { top:7%; right:44%; font-size:18px; }
    .hero-code  { top:5%; right:56%; font-size:20px; }
    .hero-dot1  { top:9%; right:18%; width:8px; height:8px; }
    .hero-dot2  { top:9%; right:63%; width:6px; height:6px; }

    /* Cards - tablet */
    .hero-cards-wrap { height:360px; }
    .hero-ring1 { width:200px; height:200px; }
    .hero-ring2 { width:285px; height:285px; }
    .hero-ring3 { width:350px; height:350px; }
    .hero-fc-1  { top:0;    left:50%;  min-width:185px; }
    .hero-fc-2  { bottom:0; left:20px; min-width:165px; }
    .hero-fc-3  { bottom:0; right:20px; min-width:165px; }
    .hero-fc-4  { top:55px; right:15px; min-width:148px; }
    .hero-fc-5  { top:55px; left:15px;  min-width:140px; }
}

/* ══════════════════════════════════════
   MOBILE < 768px
══════════════════════════════════════ */
@media (max-width:767px) {
    .hero-main-grid   { grid-template-columns:1fr; }
    .hero-left        { padding:90px 20px 28px; text-align:center; align-items:center; }
    .hero-heading     { font-size:30px !important; }
    .hero-desc        { font-size:14px; max-width:100%; }
    .hero-cta         { justify-content:center; }
    .hero-cta a       { font-size:13px !important; padding:12px 18px !important; }
    .hero-right       { padding:8px 12px 48px; }
    .hero-accent-bar  { display:none; }
    .hero-scroll-hint { display:none; }

    .hero-purple-shape {
        top:auto; bottom:0; right:-20%;
        width:110%; height:32%;
        border-radius:50% 50% 0 0 / 70% 70% 0 0;
    }

    /* Objects - mobile (minimal) */
    .hero-laptop{ display:none; }
    .hero-db    { display:none; }
    .hero-code  { display:none; }
    .hero-chip  { display:none; }
    .hero-cloud { display:none; }
    .hero-gear  { display:none; }
    .hero-dot1  { display:none; }
    .hero-dot2  { display:none; }
    .hero-dot3  { display:none; }
    .hero-rocket{ top:3%; right:4%; font-size:22px; }

    /* Cards - mobile (3 cards only) */
    .hero-cards-wrap { height:300px; }
    .hero-ring1 { width:140px; height:140px; }
    .hero-ring2 { width:200px; height:200px; }
    .hero-ring3 { width:260px; height:260px; }
    .hero-fc    { padding:12px 14px; border-radius:16px; }
    .hero-fc-val{ font-size:19px; }
    .hero-fc-icon{ width:30px; height:30px; font-size:15px; }
    .hero-fc-1  { top:0;    left:50%;  min-width:150px; }
    .hero-fc-2  { bottom:0; left:2px;  min-width:138px; }
    .hero-fc-3  { bottom:0; right:2px; min-width:138px; }
    .hero-fc-4  { display:none; }
    .hero-fc-5  { display:none; }
}

/* ══════════════════════════════════════
   SMALL MOBILE < 400px
══════════════════════════════════════ */
@media (max-width:400px) {
    .hero-left    { padding:85px 16px 24px; }
    .hero-heading { font-size:26px !important; }
    .hero-cards-wrap { height:270px; }
    .hero-ring1 { width:120px; height:120px; }
    .hero-ring2 { width:175px; height:175px; }
    .hero-ring3 { width:225px; height:225px; }
    .hero-fc-1  { min-width:130px; }
    .hero-fc-2  { min-width:120px; }
    .hero-fc-3  { min-width:120px; }
    .hero-fc-val{ font-size:17px; }
}
</style>