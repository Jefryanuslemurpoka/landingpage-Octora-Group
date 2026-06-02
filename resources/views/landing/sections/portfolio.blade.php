<section id="portfolio" class="relative py-16 md:py-20 lg:py-28 overflow-hidden" style="background:#f8f7ff;">

    {{-- Mesh orbs --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">

        <div class="absolute rounded-full hidden md:block"
             style="width:600px;
             height:600px;
             top:-100px;
             left:-100px;
             background:rgba(139,92,246,0.18);
             filter:blur(90px);
             animation:portOrb 14s ease-in-out infinite;">
        </div>

        <div class="absolute rounded-full hidden md:block"
             style="width:500px;
             height:500px;
             bottom:-80px;
             right:-80px;
             background:rgba(109,40,217,0.14);
             filter:blur(90px);
             animation:portOrb 10s ease-in-out infinite 4s;">
        </div>
    </div>

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:radial-gradient(circle, rgba(109,40,217,0.06) 1.5px, transparent 1.5px);
         background-size:28px 28px;">
    </div>

    {{-- Content --}}
    <div class="relative z-10 w-full px-5 sm:px-8 md:px-12 lg:px-20">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-4">

            <div style="width:36px;
                        height:2px;
                        background:linear-gradient(90deg,#7c3aed,#4f46e5);
                        border-radius:2px;">
            </div>

            <span style="font-size:11px;
                         font-weight:700;
                         letter-spacing:0.15em;
                         text-transform:uppercase;
                         color:#7c3aed;">

                Portfolio
            </span>
        </div>

        {{-- Header --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-10 mb-10 md:mb-12">

            <h2 class="font-black"
                style="font-size:clamp(30px,5vw,48px);
                line-height:1.06;
                letter-spacing:-0.03em;
                color:#1a0533;">

                Proyek yang Telah<br class="hidden sm:block">

                <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);
                      -webkit-background-clip:text;
                      -webkit-text-fill-color:transparent;
                      background-clip:text;">

                    Kami Kerjakan
                </span>
            </h2>

            <p class="text-sm sm:text-[15px]"
               style="color:#64748b;
               line-height:1.7;
               max-width:320px;
               flex-shrink:0;">

                Beberapa karya terbaik kami yang telah membantu klien
                bertransformasi secara digital.
            </p>
        </div>

        {{-- Bento Grid --}}
        <div class="port-bento">

            @php
            $bentoConfig = [
                ['class' => 'b1', 'num' => '01', 'img' => 'nokta.jpeg'],
                ['class' => 'b2', 'num' => '02', 'img' => 'portalinternal.jpeg'],
                ['class' => 'b3', 'num' => '03', 'img' => 'fanirajut.jpeg'],
                ['class' => 'b4', 'num' => '04', 'img' => 'bekasikonstruksi.jpeg'],
                ['class' => 'b5', 'num' => '05', 'img' => ''],
                ['class' => 'b6', 'num' => '06', 'img' => ''],
            ];
            @endphp

            @foreach($portfolios as $i => $item)

            @php $cfg = $bentoConfig[$i] ?? $bentoConfig[0]; @endphp

            <div class="port-bcard {{ $cfg['class'] }} group">

               {{-- BG Image --}}
                <div class="port-bcard-bg absolute inset-0 transition-transform duration-500 group-hover:scale-105"

                    @if(!empty($cfg['img']))
                    style="
                        background-image:url('{{ asset('images/' . $cfg['img']) }}');
                        background-size:cover;
                        background-position:center;
                    "
                    @endif>

                </div>

                {{-- Dots --}}
                <div class="absolute inset-0 pointer-events-none"
                     style="background-image:radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
                     background-size:22px 22px;">
                </div>

                {{-- Bottom gradient --}}
                <div class="absolute inset-0"
                     style="background:linear-gradient(to top,
                     rgba(0,0,0,0.65) 0%,
                     rgba(0,0,0,0.15) 50%,
                     transparent 100%);">
                </div>

                {{-- Hover overlay --}}
                <div class="absolute inset-0 z-10 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300"
                     style="background:rgba(109,40,217,0.5);">

                    <div class="port-hover-btn">
                        Lihat Detail →
                    </div>
                </div>

                {{-- Number badge --}}
                <div class="absolute z-10"
                     style="top:20px;
                     left:20px;
                     width:32px;
                     height:32px;
                     border-radius:10px;
                     background:rgba(255,255,255,0.12);
                     border:1px solid rgba(255,255,255,0.2);
                     display:flex;
                     align-items:center;
                     justify-content:center;
                     font-size:12px;
                     font-weight:800;
                     color:rgba(255,255,255,0.8);
                     backdrop-filter:blur(8px);">

                    {{ $cfg['num'] }}
                </div>

                {{-- Icon --}}
                <div class="absolute z-10"
                     style="top:20px;
                     right:20px;
                     font-size:28px;
                     opacity:0.9;">

                    @if($item['category'] === 'Mobile App') 📱
                    @elseif($item['category'] === 'Desktop App') 🖥️
                    @else 🌐
                    @endif
                </div>

                {{-- Content --}}
                <div class="absolute bottom-0 left-0 right-0 z-10 p-5 sm:p-6">

                    <div class="port-bcard-tag">
                        {{ $item['category'] }}
                    </div>

                    <div class="port-bcard-title">
                        {{ $item['title'] }}
                    </div>
                </div>
            </div>

            @endforeach
        </div>

        {{-- CTA --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5 mt-10 md:mt-12">

            <div class="text-sm"
                 style="color:#64748b;">

                Tertarik bekerja sama?
                <strong style="color:#1a0533;">
                    Kami siap membantu Anda.
                </strong>
            </div>

            <a href="#contact"
               class="inline-flex items-center justify-center gap-2 text-white font-bold rounded-2xl transition-all duration-300 hover:-translate-y-1 w-full sm:w-auto"
               style="font-size:14px;
               padding:14px 32px;
               background:linear-gradient(135deg,#7c3aed,#4f46e5);
               box-shadow:0 8px 28px rgba(124,58,237,0.35);">

                Diskusikan Proyek Anda

                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2.5"
                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<style>

    @keyframes portOrb{
        0%,100%{
            transform:translate(0,0) scale(1);
        }
        50%{
            transform:translate(30px,-20px) scale(1.06);
        }
    }

    .port-bento{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        grid-template-rows:320px 260px;
        gap:16px;
    }

    .b1{
        grid-column:1/2;
        grid-row:1/2;
    }

    .b2{
        grid-column:2/4;
        grid-row:1/2;
    }

    .b3{
        grid-column:1/3;
        grid-row:2/3;
    }

    .b4{
        grid-column:3/4;
        grid-row:2/3;
    }

    .b5{
        grid-column:1/2;
        grid-row:3/4;
        display:none;
    }

    .b6{
        grid-column:2/4;
        grid-row:3/4;
        display:none;
    }

    .port-bcard{
        position:relative;
        border-radius:24px;
        overflow:hidden;
        cursor:default;

        transition:all 0.4s cubic-bezier(0.4,0,0.2,1);

        border:1px solid rgba(109,40,217,0.1);
        box-shadow:0 8px 32px rgba(109,40,217,0.08);

        min-height:260px;
    }

    .port-bcard:hover{
        transform:translateY(-6px);

        box-shadow:0 24px 64px rgba(109,40,217,0.18);

        border-color:rgba(124,58,237,0.3);
    }

    .port-hover-btn{
        display:inline-flex;
        align-items:center;
        gap:8px;

        background:rgba(255,255,255,0.15);
        border:1px solid rgba(255,255,255,0.3);

        color:#fff;
        font-size:13px;
        font-weight:700;

        padding:10px 22px;
        border-radius:100px;

        transform:translateY(8px);
        transition:transform 0.3s;
    }

    .port-bcard:hover .port-hover-btn{
        transform:translateY(0);
    }

    .port-bcard-tag{
        display:inline-block;

        font-size:10px;
        font-weight:700;

        padding:4px 12px;
        border-radius:100px;

        margin-bottom:10px;

        letter-spacing:0.06em;
        text-transform:uppercase;

        background:rgba(255,255,255,0.15);
        color:rgba(255,255,255,0.9);

        border:1px solid rgba(255,255,255,0.25);
        backdrop-filter:blur(8px);
    }

    .port-bcard-title{
        font-size:18px;
        font-weight:800;
        color:#ffffff;
        letter-spacing:-0.01em;
        line-height:1.3;
    }

    .b2 .port-bcard-title{
        font-size:22px;
    }

    .b3 .port-bcard-title{
        font-size:20px;
    }

    /* TABLET */
    @media (max-width:1024px){

        .port-bento{
            grid-template-columns:1fr 1fr;
            grid-template-rows:auto;
        }

        .b1,
        .b2,
        .b3,
        .b4{
            grid-column:auto;
            grid-row:auto;
        }

    }

    /* MOBILE */
    @media (max-width:640px){

        .port-bento{
            grid-template-columns:1fr;
            gap:14px;
        }

        .port-bcard{
            min-height:240px;
            border-radius:22px;
        }

        .port-bcard:hover{
            transform:none;
        }

        .port-bcard-title,
        .b2 .port-bcard-title,
        .b3 .port-bcard-title{
            font-size:18px;
        }

        #portfolio br{
            display:none;
        }

    }

</style>