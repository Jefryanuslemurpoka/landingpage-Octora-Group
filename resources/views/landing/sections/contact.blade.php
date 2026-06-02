<section id="contact" class="relative py-16 md:py-20 lg:py-28 overflow-hidden" style="background:#f8f7ff;">

    {{-- Mesh orbs --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">

        <div class="absolute rounded-full hidden md:block"
             style="width:700px;
             height:700px;
             top:-200px;
             right:-150px;
             background:rgba(139,92,246,0.15);
             filter:blur(100px);
             animation:contactOrb 14s ease-in-out infinite;">
        </div>

        <div class="absolute rounded-full hidden md:block"
             style="width:500px;
             height:500px;
             bottom:-100px;
             left:-80px;
             background:rgba(109,40,217,0.12);
             filter:blur(90px);
             animation:contactOrb 10s ease-in-out infinite 4s;">
        </div>

        <div class="absolute rounded-full hidden lg:block"
             style="width:350px;
             height:350px;
             top:40%;
             left:35%;
             background:rgba(167,139,250,0.1);
             filter:blur(80px);
             animation:contactOrb 12s ease-in-out infinite 7s;">
        </div>
    </div>

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:radial-gradient(circle, rgba(109,40,217,0.06) 1.5px, transparent 1.5px);
         background-size:28px 28px;">
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

                Hubungi Kami
            </span>
        </div>

        {{-- Header --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-10 mb-10 md:mb-14 lg:mb-16">

            <h2 class="font-black"
                style="font-size:clamp(32px,5vw,56px);
                line-height:1.0;
                letter-spacing:-0.04em;
                color:#1a0533;">

                Siap Memulai<br class="hidden sm:block">

                <span style="background:linear-gradient(135deg,#7c3aed,#4f46e5);
                      -webkit-background-clip:text;
                      -webkit-text-fill-color:transparent;
                      background-clip:text;">

                    Proyek Anda?
                </span>
            </h2>

            <p class="text-sm sm:text-[15px]"
               style="color:#64748b;
               line-height:1.7;
               max-width:360px;
               flex-shrink:0;">

                Ceritakan kebutuhan Anda kepada kami.
                Tim kami siap memberikan konsultasi gratis
                dan solusi terbaik untuk bisnis Anda.
            </p>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            {{-- LEFT --}}
            <div class="flex flex-col gap-5 lg:gap-6">

                {{-- Contact info cards --}}
                @foreach([
                    ['📧', 'Email', 'octoragroup@gmail.com', 'Balas dalam 24 jam'],
                    ['📱', 'WhatsApp', '+62 895-3842-66670', 'Respon cepat'],
                    ['📍', 'Lokasi', 'Bekasi, Jawa Barat, Indonesia', 'Melayani seluruh Indonesia'],
                ] as $info)

                <div class="ctc-info-card">

                    <div class="ctc-info-icon">
                        {{ $info[0] }}
                    </div>

                    <div style="min-width:0;">

                        <div style="font-size:11px;
                                    font-weight:700;
                                    color:#94a3b8;
                                    letter-spacing:0.08em;
                                    text-transform:uppercase;
                                    margin-bottom:3px;">

                            {{ $info[1] }}
                        </div>

                        <div class="break-all sm:break-normal"
                             style="font-size:15px;
                             font-weight:700;
                             color:#1a0533;
                             margin-bottom:2px;">

                            {{ $info[2] }}
                        </div>

                        <div style="font-size:12px;
                                    color:#7c3aed;
                                    font-weight:500;">

                            {{ $info[3] }}
                        </div>
                    </div>
                </div>

                @endforeach

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-3 sm:gap-4 mt-2">

                    @foreach([['50+','Proyek'],['99%','Klien Puas'],['24h','Response']] as $s)

                    <div class="ctc-stat">

                        <div style="font-size:clamp(22px,3vw,26px);
                                    font-weight:900;
                                    letter-spacing:-0.02em;
                                    background:linear-gradient(135deg,#7c3aed,#4f46e5);
                                    -webkit-background-clip:text;
                                    -webkit-text-fill-color:transparent;
                                    background-clip:text;">

                            {{ $s[0] }}
                        </div>

                        <div style="font-size:11px;
                                    color:#94a3b8;
                                    margin-top:3px;
                                    font-weight:500;">

                            {{ $s[1] }}
                        </div>
                    </div>

                    @endforeach
                </div>

                {{-- Trust badges --}}
                <div class="flex flex-wrap gap-2">

                    @foreach(['✅ Konsultasi Gratis', '⚡ Fast Response', '🔒 Data Aman', '🤝 Terpercaya'] as $badge)

                    <span class="ctc-badge">
                        {{ $badge }}
                    </span>

                    @endforeach
                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div class="ctc-form-wrap">

                <div style="margin-bottom:28px;">

                    <div style="font-size:11px;
                                font-weight:700;
                                letter-spacing:0.12em;
                                text-transform:uppercase;
                                color:#7c3aed;
                                margin-bottom:8px;">

                        Form Kontak
                    </div>

                    <h3 style="font-size:22px;
                               font-weight:800;
                               color:#1a0533;
                               letter-spacing:-0.02em;">

                        Ceritakan Proyek Anda
                    </h3>
                </div>

                <div class="flex flex-col gap-4">

                    {{-- Name + Email --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div>
                            <label class="ctc-label">Nama Lengkap</label>
                            <input type="text"
                                   id="ctc_name"
                                   placeholder="Nama Anda"
                                   class="ctc-input">
                        </div>

                        <div>
                            <label class="ctc-label">Email</label>
                            <input type="email"
                                   id="ctc_email"
                                   placeholder="nama@email.com"
                                   class="ctc-input">
                        </div>
                    </div>

                    <div>
                        <label class="ctc-label">
                            No. WhatsApp
                            <span style="color:#94a3b8; font-weight:400;">
                                (opsional)
                            </span>
                        </label>

                        <input type="text"
                               id="ctc_phone"
                               placeholder="+62 xxx-xxxx-xxxx"
                               class="ctc-input">
                    </div>

                    <div>
                        <label class="ctc-label">Jenis Layanan</label>

                        <select id="ctc_service" class="ctc-input">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="Web Development">🌐 Web Development</option>
                            <option value="Mobile Development">📱 Mobile Development</option>
                            <option value="Desktop Development">🖥️ Desktop Development</option>
                            <option value="Cloud Solutions">☁️ Cloud Solutions</option>
                            <option value="IT Security">🔒 IT Security</option>
                            <option value="IT Consulting">🤝 IT Consulting</option>
                        </select>
                    </div>

                    <div>
                        <label class="ctc-label">
                            Pesan / Detail Proyek
                        </label>

                        <textarea id="ctc_message"
                                  rows="4"
                                  placeholder="Ceritakan kebutuhan proyek Anda secara singkat..."
                                  class="ctc-input ctc-textarea"></textarea>
                    </div>

                    <button type="button"
                            onclick="kirimKeWA()"
                            class="ctc-submit">

                        <svg width="18"
                            height="18"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M20.52 3.48A11.8 11.8 0 0012.04 0C5.52 0 .24 5.28.24 11.8c0 2.08.56 4.12 1.6 5.92L0 24l6.48-1.68a11.72 11.72 0 005.56 1.44h.04c6.52 0 11.8-5.28 11.8-11.8 0-3.16-1.24-6.12-3.36-8.48zm-8.48 18.2h-.04a9.84 9.84 0 01-5-1.36l-.36-.2-3.84 1 1.04-3.72-.24-.4a9.82 9.82 0 01-1.52-5.24c0-5.44 4.44-9.88 9.92-9.88 2.64 0 5.12 1.04 6.96 2.92a9.8 9.8 0 012.88 6.96c0 5.48-4.44 9.92-9.8 9.92zm5.44-7.4c-.28-.16-1.68-.84-1.92-.92-.28-.12-.44-.16-.64.16-.2.28-.72.92-.88 1.12-.16.2-.32.24-.6.08-.28-.16-1.16-.44-2.2-1.4-.8-.72-1.36-1.64-1.52-1.92-.16-.28 0-.44.12-.6.12-.12.28-.32.4-.48.12-.16.16-.28.24-.48.08-.16.04-.36-.04-.48-.08-.12-.64-1.56-.88-2.12-.24-.6-.48-.52-.64-.52h-.56c-.2 0-.52.08-.8.36-.28.32-1.04 1-.96 2.44.08 1.44 1.04 2.8 1.2 3 .16.2 2.04 3.12 4.96 4.28.68.28 1.24.44 1.68.56.72.24 1.36.2 1.88.12.56-.08 1.68-.68 1.92-1.32.24-.68.24-1.24.16-1.36-.04-.12-.24-.2-.52-.36z"/>
                        </svg>

                        Kirim via WhatsApp
                    </button>

                    <p style="text-align:center;
                              font-size:11px;
                              color:#94a3b8;
                              margin-top:-8px;">

                        Pesan akan langsung terbuka di WhatsApp Anda
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function kirimKeWA() {

        const nama    = document.getElementById('ctc_name').value.trim();
        const email   = document.getElementById('ctc_email').value.trim();
        const phone   = document.getElementById('ctc_phone').value.trim();
        const service = document.getElementById('ctc_service').value;
        const pesan   = document.getElementById('ctc_message').value.trim();

        if (!nama || !email || !pesan) {
            alert('Mohon isi Nama, Email, dan Pesan terlebih dahulu.');
            return;
        }

        const template =
`Halo *Octora Group*

Saya ingin berkonsultasi mengenai proyek saya.

*DATA DIRI*
- Nama     : ${nama}
- Email    : ${email}
- No. WA   : ${phone || '-'}

*DETAIL PROYEK*
- Layanan  : ${service || 'Belum dipilih'}
- Pesan    :
${pesan}

Mohon info lebih lanjut mengenai solusi yang dapat Octora Group berikan. Terima kasih.`;
    }
</script>

<style>

    @keyframes contactOrb{
        0%,100%{
            transform:translate(0,0) scale(1);
        }
        33%{
            transform:translate(30px,-20px) scale(1.06);
        }
        66%{
            transform:translate(-20px,30px) scale(0.94);
        }
    }

    .ctc-info-card{
        display:flex;
        align-items:center;
        gap:16px;

        background:#ffffff;
        border:1px solid rgba(109,40,217,0.08);

        border-radius:20px;
        padding:20px 22px;

        box-shadow:0 4px 16px rgba(109,40,217,0.06);

        transition:all 0.25s;
    }

    .ctc-info-card:hover{
        border-color:rgba(109,40,217,0.2);

        box-shadow:0 8px 28px rgba(109,40,217,0.1);

        transform:translateX(4px);
    }

    .ctc-info-icon{
        width:48px;
        height:48px;

        border-radius:14px;
        flex-shrink:0;

        background:rgba(109,40,217,0.08);
        border:1px solid rgba(109,40,217,0.12);

        display:flex;
        align-items:center;
        justify-content:center;

        font-size:22px;
    }

    .ctc-stat{
        background:#ffffff;
        border:1px solid rgba(109,40,217,0.08);

        border-radius:16px;
        padding:18px 14px;

        text-align:center;

        box-shadow:0 4px 12px rgba(109,40,217,0.05);
    }

    .ctc-badge{
        font-size:11px;
        font-weight:600;

        padding:6px 14px;

        border-radius:100px;

        background:rgba(109,40,217,0.07);
        color:#6d28d9;

        border:1px solid rgba(109,40,217,0.15);
    }

    .ctc-form-wrap{
        background:#ffffff;

        border-radius:28px;
        padding:36px;

        border:1px solid rgba(109,40,217,0.08);

        box-shadow:
            0 20px 60px rgba(109,40,217,0.1),
            0 4px 16px rgba(0,0,0,0.04);
    }

    .ctc-label{
        display:block;

        font-size:12px;
        font-weight:600;

        color:#475569;

        margin-bottom:8px;

        letter-spacing:0.01em;
    }

    .ctc-input{
        width:100%;

        border:1px solid #e2e8f0;
        border-radius:14px;

        padding:12px 16px;

        font-size:14px;
        color:#1a0533;

        background:#f8f7ff;

        outline:none;
        transition:all 0.2s;

        font-family:inherit;
    }

    .ctc-input:focus{
        border-color:#7c3aed;

        box-shadow:0 0 0 3px rgba(124,58,237,0.1);

        background:#ffffff;
    }

    .ctc-input::placeholder{
        color:#94a3b8;
    }

    .ctc-input-err{
        border-color:#f87171 !important;
    }

    .ctc-textarea{
        resize:none;
    }

    .ctc-err-msg{
        font-size:11px;
        color:#ef4444;
        margin-top:4px;
    }

    .ctc-submit{
        width:100%;

        display:flex;
        align-items:center;
        justify-content:center;
        gap:8px;

        padding:15px;

        border-radius:16px;
        border:none;

        cursor:pointer;

        font-size:15px;
        font-weight:700;
        color:#ffffff;

        font-family:inherit;

        background:linear-gradient(135deg,#7c3aed,#4f46e5);

        box-shadow:0 8px 28px rgba(109,40,217,0.3);

        transition:all 0.25s;
    }

    .ctc-submit:hover{
        transform:translateY(-2px);

        box-shadow:0 16px 40px rgba(109,40,217,0.4);
    }

    /* TABLET */
    @media (max-width:1024px){

        .ctc-form-wrap{
            padding:30px;
        }

    }

    /* MOBILE */
    @media (max-width:640px){

        #contact br{
            display:none;
        }

        .ctc-form-wrap{
            padding:24px 20px;
            border-radius:24px;
        }

        .ctc-info-card{
            padding:18px;
            border-radius:18px;
        }

        .ctc-submit:hover{
            transform:none;
        }

        .ctc-stat{
            padding:16px 10px;
        }

    }

</style>