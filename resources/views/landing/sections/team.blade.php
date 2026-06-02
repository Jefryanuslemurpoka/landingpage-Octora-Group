<section id="team" class="relative py-16 md:py-20 lg:py-28 overflow-hidden" style="background:#ffffff;">

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:radial-gradient(circle, rgba(109,40,217,0.05) 1.5px, transparent 1.5px);
         background-size:28px 28px;">
    </div>

    {{-- Glow blobs --}}
    <div class="absolute pointer-events-none hidden md:block"
         style="top:-100px;
         right:-100px;
         width:400px;
         height:400px;
         border-radius:50%;
         background:rgba(139,92,246,0.08);
         filter:blur(80px);">
    </div>

    <div class="absolute pointer-events-none hidden md:block"
         style="bottom:-80px;
         left:-80px;
         width:350px;
         height:350px;
         border-radius:50%;
         background:rgba(109,40,217,0.07);
         filter:blur(70px);">
    </div>

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

                Tim Kami
            </span>
        </div>

        {{-- Header --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-10 mb-10 md:mb-14 lg:mb-16">

            <h2 class="font-black"
                style="font-size:clamp(30px,5vw,48px);
                line-height:1.06;
                letter-spacing:-0.03em;
                color:#1a0533;">

                Orang-Orang di Balik<br class="hidden sm:block">

                <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);
                      -webkit-background-clip:text;
                      -webkit-text-fill-color:transparent;
                      background-clip:text;">

                    Octora Group
                </span>
            </h2>

            <p class="text-sm sm:text-[15px]"
               style="color:#64748b;
               line-height:1.7;
               max-width:320px;
               flex-shrink:0;">

                Tim profesional kami berdedikasi penuh untuk menghadirkan
                solusi terbaik bagi setiap klien.
            </p>
        </div>

        {{-- Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            @foreach($team as $i => $member)

            <div class="team-card group">

                {{-- Top accent bar --}}
                <div class="team-card-bar"></div>

                {{-- Number --}}
                <div style="font-size:11px;
                            font-weight:800;
                            color:rgba(109,40,217,0.2);
                            letter-spacing:0.1em;
                            margin-bottom:20px;">

                    {{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}
                </div>

                {{-- Avatar --}}
                <div class="team-avatar-wrap">

                    <div class="team-avatar">

                        @if(!empty($member['photo']))

                        <img src="{{ asset('images/' . $member['photo']) }}"
                             alt="{{ $member['name'] }}"
                             style="width:100%;
                             height:100%;
                             object-fit:cover;
                             object-position:top;
                             border-radius:16px;">

                        @else

                        <div class="team-avatar-inner">
                            👤
                        </div>

                        @endif

                    </div>

                    {{-- Online dot --}}
                    <div class="team-online-dot"></div>
                </div>

                {{-- Info --}}
                <div class="mt-5">

                    <h3 style="font-size:16px;
                               font-weight:800;
                               color:#1a0533;
                               letter-spacing:-0.01em;
                               margin-bottom:4px;">

                        {{ $member['name'] }}
                    </h3>

                    <p style="font-size:12px;
                              font-weight:600;
                              color:#7c3aed;
                              letter-spacing:0.03em;">

                        {{ $member['role'] }}
                    </p>
                </div>

                {{-- Divider --}}
                <div style="height:1px;
                            background:linear-gradient(90deg,rgba(109,40,217,0.1),transparent);
                            margin:16px 0;">
                </div>

                
            </div>

            @endforeach
        </div>

        {{-- Bottom CTA --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5"
             style="margin-top:60px;
             padding-top:40px;
             border-top:1px solid rgba(109,40,217,0.08);">

            <div>

                <div style="font-size:18px;
                            font-weight:800;
                            color:#1a0533;
                            margin-bottom:4px;">

                    Bergabung dengan Tim Kami?
                </div>

                <div style="font-size:14px;
                            color:#64748b;">

                    Kami selalu mencari talenta terbaik untuk berkembang bersama.
                </div>
            </div>

            <a href="#contact"
               class="inline-flex items-center justify-center gap-2 font-bold rounded-2xl transition-all duration-300 hover:-translate-y-0.5 w-full sm:w-auto"
               style="font-size:14px;
               padding:13px 28px;
               color:#7c3aed;
               border:1.5px solid rgba(109,40,217,0.25);
               background:rgba(109,40,217,0.04);">

                Lihat Karir

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

    .team-card{
        position:relative;
        border-radius:24px;
        padding:28px 24px;

        background:#ffffff;
        border:1px solid rgba(109,40,217,0.08);

        box-shadow:0 4px 20px rgba(109,40,217,0.06);

        transition:all 0.35s cubic-bezier(0.4,0,0.2,1);

        overflow:hidden;
        height:100%;
    }

    .team-card:hover{
        transform:translateY(-8px);

        border-color:rgba(124,58,237,0.25);

        box-shadow:0 20px 60px rgba(109,40,217,0.14);
    }

    /* Top accent */
    .team-card-bar{
        position:absolute;
        top:0;
        left:0;
        right:0;
        height:3px;

        background:linear-gradient(90deg,#7c3aed,#4f46e5);

        transform:scaleX(0);
        transform-origin:left;

        transition:transform 0.4s ease;

        border-radius:0 0 4px 4px;
    }

    .team-card:hover .team-card-bar{
        transform:scaleX(1);
    }

    /* Avatar */
    .team-avatar-wrap{
        position:relative;
        width:100%;
    }

    .team-avatar{
        width:100%;
        max-width:160px;
        aspect-ratio:1/1;

        border-radius:16px;

        background:linear-gradient(135deg,#7c3aed,#4f46e5);

        overflow:hidden;

        box-shadow:0 8px 24px rgba(109,40,217,0.3);

        transition:all 0.35s;
    }

    .team-card:hover .team-avatar{
        transform:scale(1.02);

        box-shadow:0 12px 32px rgba(109,40,217,0.4);
    }

    .team-avatar-inner{
        width:100%;
        height:100%;

        display:flex;
        align-items:center;
        justify-content:center;

        font-size:42px;
        color:#fff;
    }

    /* Online dot */
    .team-online-dot{
        position:absolute;
        bottom:4px;
        right:-4px;

        width:14px;
        height:14px;

        border-radius:50%;

        background:#16a34a;
        border:2px solid #fff;

        box-shadow:0 0 0 2px rgba(22,163,74,0.2);
    }

    /* Social btn */
    .team-social-btn{
        width:32px;
        height:32px;
        min-width:32px;
        min-height:32px;
        flex-shrink:0;

        border-radius:10px;

        background:rgba(109,40,217,0.06);
        border:1px solid rgba(109,40,217,0.1);

        color:#7c3aed;

        display:inline-flex;
        align-items:center;
        justify-content:center;

        cursor:pointer;
        transition:all 0.2s;
        text-decoration:none;
    }

    .team-social-btn:hover{
        background:linear-gradient(135deg,#7c3aed,#4f46e5);

        color:#fff;
        border-color:transparent;

        box-shadow:0 4px 12px rgba(109,40,217,0.3);
    }

    /* TABLET */
    @media (max-width:1024px){

        .team-card{
            padding:24px 20px;
        }

    }

    /* MOBILE */
    @media (max-width:640px){

        #team br{
            display:none;
        }

        .team-card{
            border-radius:22px;
        }

        .team-card:hover{
            transform:none;
        }

        .team-avatar{
            max-width:140px;
        }

    }

</style>