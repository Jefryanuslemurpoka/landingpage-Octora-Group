<section id="services" class="relative py-16 md:py-20 lg:py-24 overflow-hidden" style="background:#ffffff;">

    {{-- Animated mesh orbs --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">

        <div class="svc-orb hidden md:block"
             style="width:700px; height:700px; top:-200px; left:-150px; background:rgba(139,92,246,0.2); animation-delay:0s;">
        </div>

        <div class="svc-orb hidden md:block"
             style="width:600px; height:600px; top:40%; right:-100px; background:rgba(109,40,217,0.18); animation-delay:3s;">
        </div>

        <div class="svc-orb hidden lg:block"
             style="width:500px; height:500px; bottom:-100px; left:30%; background:rgba(167,139,250,0.18); animation-delay:6s;">
        </div>

        <div class="svc-orb hidden lg:block"
             style="width:450px; height:450px; top:20%; left:45%; background:rgba(79,70,229,0.14); animation-delay:9s;">
        </div>

        {{-- Grid lines --}}
        <div class="absolute inset-0 svc-grid"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 w-full px-5 sm:px-8 md:px-12 lg:px-20">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-4">
            <div style="width:36px; height:2px; background:linear-gradient(90deg,#7c3aed,#4f46e5); border-radius:2px;"></div>

            <span style="font-size:11px;
                         font-weight:700;
                         letter-spacing:0.15em;
                         text-transform:uppercase;
                         color:#7c3aed;">

                Layanan Kami
            </span>
        </div>

        {{-- Header --}}
        <div class="mb-12 md:mb-16">

            <h2 class="font-black"
                style="font-size:clamp(30px,5vw,48px);
                line-height:1.08;
                letter-spacing:-0.03em;
                color:#1a0533;
                margin-bottom:16px;">

                Solusi Software untuk<br class="hidden sm:block">

                <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);
                      -webkit-background-clip:text;
                      -webkit-text-fill-color:transparent;
                      background-clip:text;">

                    Semua Kebutuhan Bisnis
                </span>
            </h2>

            <p class="text-sm sm:text-base"
               style="color:#64748b;
               line-height:1.7;
               max-width:520px;">

                Kami menyediakan layanan pengembangan software end-to-end
                dengan teknologi terkini dan tim yang berpengalaman.
            </p>
        </div>

        {{-- Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            @foreach($services as $service)

            <div class="svc-card group relative cursor-default">

                {{-- Dot indicator --}}
                <div class="svc-dot"></div>

                {{-- Icon --}}
                <div class="svc-icon-wrap">
                    <span style="font-size:26px;">
                        {{ $service['icon'] }}
                    </span>
                </div>

                {{-- Content --}}
                <h3 style="font-size:17px;
                           font-weight:800;
                           color:#1a0533;
                           margin-bottom:10px;
                           letter-spacing:-0.01em;">

                    {{ $service['title'] }}
                </h3>

                <p style="font-size:14px;
                          color:#64748b;
                          line-height:1.7;">

                    {{ $service['desc'] }}
                </p>

                {{-- Link --}}
                <div class="svc-link">
                    Pelajari lebih lanjut

                    <span class="svc-arrow">
                        →
                    </span>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

<style>

    /* Orb animation */
    .svc-orb{
        position:absolute;
        border-radius:50%;
        filter:blur(90px);
        animation:svcMeshMove 12s ease-in-out infinite;
    }

    @keyframes svcMeshMove{
        0%,100%{
            transform:translate(0,0) scale(1);
        }
        25%{
            transform:translate(40px,-30px) scale(1.08);
        }
        50%{
            transform:translate(-30px,40px) scale(0.93);
        }
        75%{
            transform:translate(30px,25px) scale(1.05);
        }
    }

    /* Grid lines animation */
    .svc-grid{
        background-image:
            linear-gradient(rgba(109,40,217,0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(109,40,217,0.06) 1px, transparent 1px);

        background-size:60px 60px;
        animation:svcGridShift 20s linear infinite;
    }

    @keyframes svcGridShift{
        0%{
            background-position:0 0;
        }
        100%{
            background-position:60px 60px;
        }
    }

    /* Card */
    .svc-card{
        position:relative;
        border-radius:24px;
        padding:28px 24px;
        background:rgba(255,255,255,0.85);
        border:1px solid rgba(109,40,217,0.08);
        backdrop-filter:blur(20px);
        box-shadow:0 4px 24px rgba(109,40,217,0.06);
        transition:all 0.35s cubic-bezier(0.4,0,0.2,1);
        overflow:hidden;
        height:100%;
    }

    .svc-card::before{
        content:'';
        position:absolute;
        inset:0;
        border-radius:inherit;

        background:linear-gradient(
            135deg,
            rgba(139,92,246,0) 0%,
            rgba(139,92,246,0.07) 50%,
            rgba(139,92,246,0) 100%
        );

        opacity:0;
        transition:opacity 0.35s;
    }

    .svc-card::after{
        content:'';
        position:absolute;
        inset:0;
        border-radius:inherit;
        border:1.5px solid rgba(124,58,237,0.35);
        opacity:0;
        transition:opacity 0.35s;
    }

    .svc-card:hover{
        transform:translateY(-8px);
        box-shadow:
            0 24px 60px rgba(109,40,217,0.15),
            0 4px 16px rgba(109,40,217,0.08);

        border-color:rgba(109,40,217,0.15);
    }

    .svc-card:hover::before{
        opacity:1;
    }

    .svc-card:hover::after{
        opacity:1;
    }

    /* Dot */
    .svc-dot{
        position:absolute;
        top:20px;
        right:20px;
        width:8px;
        height:8px;
        border-radius:50%;
        background:rgba(109,40,217,0.2);
        transition:all 0.35s;
    }

    .svc-card:hover .svc-dot{
        background:#7c3aed;
        box-shadow:0 0 0 5px rgba(124,58,237,0.15);
    }

    /* Icon wrap */
    .svc-icon-wrap{
        width:56px;
        height:56px;
        border-radius:16px;
        margin-bottom:20px;
        background:rgba(109,40,217,0.08);
        border:1px solid rgba(109,40,217,0.1);

        display:flex;
        align-items:center;
        justify-content:center;

        transition:all 0.35s;
    }

    .svc-card:hover .svc-icon-wrap{
        background:linear-gradient(
            135deg,
            rgba(109,40,217,0.15),
            rgba(79,70,229,0.1)
        );

        border-color:rgba(109,40,217,0.2);
        transform:scale(1.1);
    }

    /* Link */
    .svc-link{
        display:inline-flex;
        align-items:center;
        gap:6px;

        margin-top:20px;
        font-size:13px;
        font-weight:700;
        color:#7c3aed;

        transition:gap 0.2s;
    }

    .svc-card:hover .svc-link{
        gap:10px;
    }

    .svc-arrow{
        width:22px;
        height:22px;
        border-radius:50%;

        background:rgba(109,40,217,0.1);

        display:inline-flex;
        align-items:center;
        justify-content:center;

        font-size:11px;
        transition:all 0.2s;
    }

    .svc-card:hover .svc-arrow{
        background:rgba(109,40,217,0.2);
    }

    /* RESPONSIVE */
    @media (max-width:768px){

        .svc-card{
            padding:24px 20px;
            border-radius:22px;
        }

        .svc-icon-wrap{
            width:52px;
            height:52px;
        }

        .svc-card:hover{
            transform:none;
        }

    }

    @media (max-width:640px){

        #services br{
            display:none;
        }

        .svc-grid{
            background-size:40px 40px;
        }

        .svc-link{
            margin-top:16px;
        }

    }

</style>