<footer style="background:#080c14;font-family:'DM Sans',sans-serif;color:#8b96a8;overflow:hidden;position:relative;">

    {{-- Gradient top line --}}
    <div style="height:1px;
                background:linear-gradient(90deg,transparent,#1e6bff44,#00d4aa44,transparent);">
    </div>

    {{-- Glow effect --}}
    <div class="footer-glow"
         style="position:absolute;
         top:-80px;
         left:50%;
         transform:translateX(-50%);
         width:600px;
         height:160px;
         background:radial-gradient(ellipse,#1e6bff0d 0%,transparent 70%);
         pointer-events:none;">
    </div>

    <div class="footer-container"
         style="max-width:1200px;
         margin:0 auto;
         padding:48px 32px 32px;">

        {{-- Main Grid --}}
        <div class="footer-grid"
             style="display:grid;
             grid-template-columns:2fr 1fr 1fr 1fr;
             gap:40px;
             margin-bottom:40px;">

            {{-- Brand --}}
            <div>

                <div style="display:flex;
                            align-items:center;
                            gap:10px;
                            margin-bottom:16px;">

                    <div style="width:36px;
                                height:36px;
                                background:linear-gradient(135deg,#1e6bff,#00d4aa);
                                border-radius:8px;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                flex-shrink:0;">

                        <img src="{{ asset('images/logo_octora.png') }}"
                             alt="Octora"
                             style="width:20px;
                             height:20px;
                             object-fit:contain;
                             filter:brightness(0) invert(1);">
                    </div>

                    <span style="font-family:'Syne',sans-serif;
                                 font-size:15px;
                                 font-weight:700;
                                 color:#fff;
                                 letter-spacing:0.02em;">

                        Octora Group
                    </span>
                </div>

                <p style="font-size:13px;
                          line-height:1.7;
                          color:#5a6478;
                          margin:0 0 20px;
                          max-width:220px;">

                    Membangun infrastruktur digital yang andal
                    untuk bisnis modern Indonesia.
                </p>

            </div>

            {{-- Layanan --}}
            <div>

                <p style="font-family:'Syne',sans-serif;
                          font-size:11px;
                          font-weight:600;
                          color:#fff;
                          letter-spacing:0.12em;
                          text-transform:uppercase;
                          margin-bottom:16px;">

                    Layanan
                </p>

                <ul style="list-style:none;
                           padding:0;
                           margin:0;
                           display:flex;
                           flex-direction:column;
                           gap:10px;">

                    @foreach([
                        'Cloud Infrastructure',
                        'Pengembangan Aplikasi',
                        'Keamanan Siber',
                        'Konsultasi IT',
                        'Managed Services'
                    ] as $item)

                    <li>
                        <a href="#"
                           class="footer-link"
                           style="font-size:13px;
                           color:#5a6478;
                           text-decoration:none;">

                            {{ $item }}
                        </a>
                    </li>

                    @endforeach
                </ul>
            </div>

            {{-- Perusahaan --}}
            <div>

                <p style="font-family:'Syne',sans-serif;
                          font-size:11px;
                          font-weight:600;
                          color:#fff;
                          letter-spacing:0.12em;
                          text-transform:uppercase;
                          margin-bottom:16px;">

                    Perusahaan
                </p>

                <ul style="list-style:none;
                           padding:0;
                           margin:0;
                           display:flex;
                           flex-direction:column;
                           gap:10px;">

                    @foreach([
                        'Tentang Kami',
                        'Tim & Karir',
                        'Portofolio',
                        'Blog & Insight',
                        'Kontak'
                    ] as $item)

                    <li>
                        <a href="#"
                           class="footer-link"
                           style="font-size:13px;
                           color:#5a6478;
                           text-decoration:none;">

                            {{ $item }}
                        </a>
                    </li>

                    @endforeach
                </ul>
            </div>

            {{-- Kontak --}}
            <div>

                <p style="font-family:'Syne',sans-serif;
                          font-size:11px;
                          font-weight:600;
                          color:#fff;
                          letter-spacing:0.12em;
                          text-transform:uppercase;
                          margin-bottom:16px;">

                    Kontak
                </p>

                <div style="display:flex;
                            flex-direction:column;
                            gap:14px;
                            font-size:13px;">

                    <div>

                        <span style="font-size:11px;
                                     color:#3d4a5c;
                                     display:block;
                                     text-transform:uppercase;
                                     letter-spacing:0.08em;
                                     margin-bottom:2px;">

                            Email
                        </span>

                        <a href="mailto:octoragroup@gmail.com"
                           style="color:#5a6478;
                           text-decoration:none;
                           word-break:break-word;">

                            octoragroup@gmail.com
                        </a>
                    </div>

                    <div>

                        <span style="font-size:11px;
                                     color:#3d4a5c;
                                     display:block;
                                     text-transform:uppercase;
                                     letter-spacing:0.08em;
                                     margin-bottom:2px;">

                            Telepon
                        </span>

                        <a href="tel:+62895384266670"
                           style="color:#5a6478;
                           text-decoration:none;">

                            +62 895-3842-66670
                        </a>
                    </div>

                    <div>

                        <span style="font-size:11px;
                                     color:#3d4a5c;
                                     display:block;
                                     text-transform:uppercase;
                                     letter-spacing:0.08em;
                                     margin-bottom:2px;">

                            Lokasi
                        </span>

                        <span style="color:#5a6478;">
                            Bekasi, Jawa Barat Indonesia
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div style="height:1px;
                    background:#111827;
                    margin-bottom:24px;">
        </div>

        {{-- Bottom Bar --}}
        <div class="footer-bottom"
             style="display:flex;
             align-items:center;
             justify-content:space-between;
             flex-wrap:wrap;
             gap:12px;">

            <p style="font-size:12px;
                      color:#3d4a5c;
                      margin:0;">

                © {{ date('Y') }} PT Octora Group Indonesia.
                All rights reserved.
            </p>

            <div style="display:flex;
                        gap:8px;
                        flex-wrap:wrap;">

                <span style="font-size:11px;
                             color:#00d4aa99;
                             border:1px solid #00d4aa22;
                             background:#00d4aa08;
                             padding:3px 10px;
                             border-radius:4px;">

                    <span style="display:inline-block;
                                 width:6px;
                                 height:6px;
                                 background:#00d4aa;
                                 border-radius:50%;
                                 margin-right:5px;
                                 box-shadow:0 0 6px #00d4aa88;
                                 vertical-align:middle;">
                    </span>

                    All systems operational
                </span>

                <span style="font-size:11px;
                             color:#3d4a5c;
                             border:1px solid #1a2035;
                             padding:3px 10px;
                             border-radius:4px;">

                    ISO 27001
                </span>

                <span style="font-size:11px;
                             color:#3d4a5c;
                             border:1px solid #1a2035;
                             padding:3px 10px;
                             border-radius:4px;">

                    SOC 2
                </span>
            </div>
        </div>
    </div>
</footer>

<style>

    .footer-link{
        transition:all 0.2s ease;
    }

    .footer-link:hover{
        color:#ffffff !important;
    }

    /* TABLET */
    @media (max-width:1024px){

        .footer-grid{
            grid-template-columns:1fr 1fr !important;
            gap:36px !important;
        }

        .footer-container{
            padding:44px 28px 28px !important;
        }

    }

    /* MOBILE */
    @media (max-width:640px){

        .footer-grid{
            grid-template-columns:1fr !important;
            gap:32px !important;
        }

        .footer-container{
            padding:40px 20px 24px !important;
        }

        .footer-bottom{
            flex-direction:column;
            align-items:flex-start !important;
        }

        .footer-glow{
            width:320px !important;
        }

    }

</style>