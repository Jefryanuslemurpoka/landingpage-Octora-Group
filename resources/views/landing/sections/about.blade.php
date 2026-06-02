<section id="about" class="relative py-16 md:py-20 lg:py-24 overflow-hidden" style="background:#ffffff;">

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:radial-gradient(circle, rgba(109,40,217,0.05) 1.5px, transparent 1.5px); background-size:28px 28px;">
    </div>

    {{-- Tech badges kiri --}}
    <div class="about-badge hidden lg:flex" style="top:8%; left:20%; animation-delay:0s;">🌐 Web Development</div>
    <div class="about-badge hidden lg:flex" style="top:22%; left:0%; animation-delay:1.5s;">📱 Mobile App</div>
    <div class="about-badge hidden lg:flex" style="bottom:5%; left:1%; animation-delay:3s;">☁️ Cloud Solutions</div>
    <div class="about-badge hidden lg:flex" style="bottom:8%; left:20%; animation-delay:4.5s;">🔧 IT Support</div>

    {{-- Tech badges kanan --}}
    <div class="about-badge hidden lg:flex" style="top:6%; right:20%; animation-delay:0.8s;">🖥️ Desktop App</div>
    <div class="about-badge hidden lg:flex" style="top:28%; right:0%; animation-delay:2.3s;">⚡ Fast Delivery</div>
    <div class="about-badge hidden lg:flex" style="bottom:2%; right:1%; animation-delay:3.8s;">🔒 IT Security</div>
    <div class="about-badge hidden lg:flex" style="bottom:8%; right:20%; animation-delay:5s;">🤝 IT Consulting</div>

    {{-- Content --}}
    <div class="relative z-10 w-full px-5 sm:px-8 md:px-12 lg:px-20">

        {{-- Section label --}}
        <div class="flex items-center gap-3 mb-10 md:mb-14 lg:mb-16">
            <div style="width:36px; height:2px; background:linear-gradient(90deg,#7c3aed,#4f46e5); border-radius:2px;"></div>
            <span style="font-size:11px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#7c3aed;">
                Tentang Kami
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            {{-- LEFT: Visual card --}}
            <div class="relative">

                <div class="relative rounded-[28px] overflow-hidden"
                     style="background:linear-gradient(160deg, #a78bfa 0%, #7c3aed 30%, #5b21b6 65%, #3730a3 100%);
                     padding:24px;
                     box-shadow:0 40px 80px rgba(109,40,217,0.35), 0 8px 32px rgba(0,0,0,0.15);">

                    {{-- Noise --}}
                    <div class="absolute inset-0 pointer-events-none"
                         style="opacity:0.05;
                         background-image:url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E\");
                         background-size:150px;">
                    </div>

                    {{-- Dot grid --}}
                    <div class="absolute inset-0 pointer-events-none"
                         style="background-image:radial-gradient(circle, rgba(255,255,255,0.08) 1px, transparent 1px);
                         background-size:22px 22px;">
                    </div>

                    {{-- Glow --}}
                    <div class="absolute pointer-events-none"
                         style="top:-80px; right:-60px; width:250px; height:250px; border-radius:50%;
                         background:rgba(196,181,253,0.5); filter:blur(60px);">
                    </div>

                    <div class="absolute pointer-events-none"
                         style="bottom:-60px; left:-40px; width:200px; height:200px; border-radius:50%;
                         background:rgba(67,56,202,0.6); filter:blur(50px);">
                    </div>

                    {{-- Header --}}
                    <div class="relative z-10 flex items-center gap-4 pb-6 mb-6"
                         style="border-bottom:1px solid rgba(255,255,255,0.15);">

                        <div class="flex-shrink-0 flex items-center justify-center"
                             style="width:52px; height:52px; border-radius:16px;
                             background:rgba(255,255,255,0.15);
                             border:1px solid rgba(255,255,255,0.25);
                             box-shadow:0 4px 16px rgba(0,0,0,0.1);">

                            <img src="{{ asset('images/logo_octora.png') }}"
                                 alt="Octora"
                                 style="width:34px; height:34px; object-fit:contain;">
                        </div>

                        <div>
                            <div style="font-size:14px; font-weight:700; color:#fff; line-height:1.3;">
                                PT Octora Group
                            </div>

                            <div style="font-size:11px; color:rgba(255,255,255,0.5); margin-top:2px;">
                                Software House Terpercaya
                            </div>
                        </div>
                    </div>

                    {{-- Stats --}}
                    <div class="relative z-10 grid grid-cols-3 gap-3 mb-5">

                        @foreach([['50+','Proyek'],['30+','Klien'],['5+','Tahun']] as $s)

                        <div class="text-center rounded-2xl"
                             style="padding:16px 8px;
                             background:rgba(255,255,255,0.1);
                             border:1px solid rgba(255,255,255,0.15);
                             backdrop-filter:blur(10px);">

                            <div class="text-lg sm:text-xl md:text-2xl"
                                 style="font-weight:900; color:#fff; letter-spacing:-0.02em;">
                                {{ $s[0] }}
                            </div>

                            <div style="font-size:10px;
                                 color:rgba(255,255,255,0.5);
                                 margin-top:3px;
                                 font-weight:600;
                                 letter-spacing:0.05em;
                                 text-transform:uppercase;">

                                {{ $s[1] }}
                            </div>
                        </div>

                        @endforeach
                    </div>

                    {{-- Services --}}
                    <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 gap-3">

                        @foreach([['🌐','Web Dev'],['📱','Mobile Dev'],['🖥️','Desktop Dev'],['☁️','Cloud']] as $item)

                        <div class="flex items-center gap-3 rounded-2xl"
                             style="padding:14px 16px;
                             background:rgba(255,255,255,0.08);
                             border:1px solid rgba(255,255,255,0.12);">

                            <span style="font-size:22px;">{{ $item[0] }}</span>

                            <span style="font-size:12px;
                                  font-weight:600;
                                  color:rgba(255,255,255,0.9);">

                                {{ $item[1] }}
                            </span>
                        </div>

                        @endforeach
                    </div>
                </div>

                {{-- Floating since card --}}
                <div class="absolute z-20 hidden sm:block"
                     style="bottom:-20px; right:-10px;
                     background:#fff;
                     border-radius:20px;
                     padding:16px 22px;
                     box-shadow:0 20px 60px rgba(109,40,217,0.2),
                     0 4px 16px rgba(0,0,0,0.08);
                     border:1px solid rgba(109,40,217,0.1);">

                    <div style="font-size:10px;
                         font-weight:700;
                         letter-spacing:0.08em;
                         text-transform:uppercase;
                         color:#94a3b8;
                         margin-bottom:4px;">

                        Berdiri Sejak
                    </div>

                    <div style="font-size:28px;
                         font-weight:900;
                         letter-spacing:-0.03em;
                         background:linear-gradient(135deg,#7c3aed,#4f46e5);
                         -webkit-background-clip:text;
                         -webkit-text-fill-color:transparent;
                         background-clip:text;">

                        2019
                    </div>

                    <div style="font-size:11px; color:#94a3b8; margin-top:3px;">
                        5+ Tahun Pengalaman
                    </div>
                </div>

                {{-- Blob --}}
                <div class="absolute pointer-events-none"
                     style="top:-16px; left:-16px;
                     width:80px; height:80px;
                     border-radius:50%;
                     background:rgba(139,92,246,0.12);
                     filter:blur(20px);">
                </div>
            </div>

            {{-- RIGHT CONTENT --}}
            <div class="flex flex-col gap-7">

                <h2 class="font-black leading-tight"
                    style="font-size:clamp(30px,5vw,46px);
                    letter-spacing:-0.03em;
                    color:#1a0533;">

                    Kami Hadir untuk Membuat<br>

                    <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);
                          -webkit-background-clip:text;
                          -webkit-text-fill-color:transparent;
                          background-clip:text;">

                        Bisnis Anda Lebih Digital
                    </span>
                </h2>

                <div>
                    <p class="text-sm sm:text-[15px]"
                       style="line-height:1.8;
                       color:#64748b;
                       margin-bottom:12px;">

                        PT Octora Group adalah perusahaan software house yang berfokus pada pengembangan solusi teknologi custom untuk berbagai industri.
                    </p>

                    <p class="text-sm sm:text-[15px]"
                       style="line-height:1.8; color:#64748b;">

                        Dengan tim yang berpengalaman dan pendekatan yang berorientasi pada hasil,
                        kami siap menjadi mitra teknologi jangka panjang untuk bisnis Anda.
                    </p>
                </div>

                {{-- Values --}}
                <div class="flex flex-col gap-3">

                    @foreach([
                        ['✅','Kualitas Terjamin','Setiap produk melewati quality assurance yang ketat sebelum diserahkan ke klien.'],
                        ['⚡','Delivery Tepat Waktu','Komitmen penuh pada timeline yang telah disepakati bersama klien.'],
                        ['🔧','Support Purna Jual','Layanan maintenance dan support aktif setelah produk berhasil live.'],
                    ] as $v)

                    <div class="flex items-start gap-4 transition-all duration-200 hover:-translate-y-0.5"
                         style="background:#faf8ff;
                         border:1px solid rgba(109,40,217,0.08);
                         border-radius:20px;
                         padding:18px 20px;">

                        <div class="flex-shrink-0 flex items-center justify-center text-xl"
                             style="width:42px;
                             height:42px;
                             border-radius:13px;
                             background:rgba(109,40,217,0.08);">

                            {{ $v[0] }}
                        </div>

                        <div>
                            <div style="font-size:14px;
                                 font-weight:700;
                                 color:#1a0533;
                                 margin-bottom:3px;">

                                {{ $v[1] }}
                            </div>

                            <div style="font-size:13px;
                                 color:#94a3b8;
                                 line-height:1.6;">

                                {{ $v[2] }}
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

                {{-- CTA --}}
                <div class="flex items-center flex-wrap gap-4">

                    <a href="#contact"
                       class="inline-flex items-center justify-center gap-2 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-0.5 w-full sm:w-auto"
                       style="font-size:14px;
                       padding:14px 26px;
                       background:linear-gradient(135deg,#6d28d9,#4f46e5);
                       box-shadow:0 8px 28px rgba(109,40,217,0.35);">

                        Mulai Konsultasi Gratis

                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2.5"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    <a href="#portfolio"
                       class="inline-flex items-center gap-2 font-semibold transition-all duration-200"
                       style="font-size:14px; color:#6d28d9;">

                        Lihat Portfolio

                        <span class="inline-flex items-center justify-center"
                              style="width:24px;
                              height:24px;
                              border-radius:50%;
                              background:rgba(109,40,217,0.1);
                              font-size:12px;">

                            →
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

    .about-badge{
        position:absolute;
        pointer-events:none;
        display:flex;
        align-items:center;
        gap:8px;
        background:rgba(255,255,255,0.92);
        border:1px solid rgba(109,40,217,0.15);
        border-radius:100px;
        padding:8px 16px;
        box-shadow:0 4px 20px rgba(109,40,217,0.1);
        font-size:13px;
        font-weight:600;
        color:#4c1d95;
        white-space:nowrap;
        z-index:5;
        animation:aboutBadgeFloat 7s ease-in-out infinite;
    }

    .about-code{
        position:absolute;
        pointer-events:none;
        z-index:5;
        background:rgba(15,5,40,0.88);
        border:1px solid rgba(139,92,246,0.3);
        border-radius:12px;
        padding:10px 16px;
        font-family:'Courier New', monospace;
        font-size:12px;
        font-weight:600;
        line-height:1.8;
        box-shadow:0 8px 24px rgba(0,0,0,0.15);
        animation:aboutBadgeFloat 9s ease-in-out infinite;
    }

    @keyframes aboutBadgeFloat{
        0%,100%{
            transform:translateY(0);
        }
        50%{
            transform:translateY(-10px);
        }
    }

    @media (max-width:640px){

        #about{
            overflow:hidden;
        }

        #about br{
            display:none;
        }

    }

</style>