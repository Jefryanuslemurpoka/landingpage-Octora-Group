<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'hero' => [
                'title' => 'Effortless Digital Solutions for Your Business',
                'description' => 'We help businesses navigate digital transformation by crafting tailored, scalable, and intelligent IT solutions that simplify complexity and drive results.',
                'cta_text' => 'Get In Touch'
            ],
            
            'about' => [
                'title' => 'Who We Are',
                'description' => 'We are a software house and IT consultancy focused on delivering tailored technology solutions to drive your business forward.'
            ],
            
            'services' => [
                [
                    'icon' => 'uiux-icon.png',
                    'title' => 'UI/UX Design',
                    'description' => 'Custom Web & Mobile Solutions For Seamless User Experiences'
                ],
                [
                    'icon' => 'web-icon.png',
                    'title' => 'Web Development',
                    'description' => 'Efficient And Adaptive Web Development For All Platforms'
                ],
                [
                    'icon' => 'mobile-icon.png',
                    'title' => 'Mobile App Development',
                    'description' => 'Innovative Mobile App Development For Seamless User Experience'
                ],
                [
                    'icon' => 'database-icon.png',
                    'title' => 'Database Management',
                    'description' => 'Secure And Reliable Database Management For Your Business'
                ],
                [
                    'icon' => 'it-task-icon.png',
                    'title' => 'IT Task Assistance',
                    'description' => 'Comprehensive IT Support To Handle All Your Quick Needs'
                ],
                [
                    'icon' => 'consulting-icon.png',
                    'title' => 'IT Consulting',
                    'description' => 'Expert IT Consulting Solutions Tailored To Meet Your Needs'
                ]
            ],
            
            'portfolio' => [
                [
                    'title' => 'Landing Page Jasa Suruh',
                    'description' => 'Landing page to download the Jasa Suruh app, simplifying your transactions.',
                    'image' => 'jasa-suruh-landing.png'
                ],
                [
                    'title' => 'Landing Page Notaris',
                    'description' => 'notary landing page for notary purposes.',
                    'image' => 'landingpage-notaris.png'
                ],
                [
                    'title' => 'Warehouses Octora',
                    'description' => 'Octora Warehouse Dashboard, efficiently managing stock and shipments.',
                    'image' => 'warehouse-dashboard.png'
                ],
                [
                    'title' => 'E-notaris OC-NOT',
                    'description' => 'E-notary OC-NOT, is a word add-ins application to facilitate the needs of notaries in making notarial deeds.',
                    'image' => 'enotaris.png'
                ]
            ],
            
            'testimonials' => [
                [
                    'name' => 'Andi',
                    'position' => 'Perciful Associate HR',
                    'avatar' => 'avatar-andi.jpg',
                    'message' => 'Gila produk user angel sam CMD, lekecing gymnaise Leigh magh moda eeck etext Macek Lecter cana yang meles pork morgh.'
                ],
                [
                    'name' => 'Rina',
                    'position' => 'Pemilik Toko Fashion Online',
                    'avatar' => 'avatar-rina.jpg',
                    'message' => 'Sejak pakai dashboard Mengantar, semua pesanan jadi lebih mudah dimonitor. Beda COD beda non COD jadi lebih jelas lepasan penjualan langsung terlihat. Sayu pah hemat waktu untuk cuss kirana.'
                ],
                [
                    'name' => 'Edi',
                    'position' => 'Owner Skincare Shop',
                    'avatar' => 'avatar-edi.jpg',
                    'message' => 'Hub coding our angel skin mills selecing griming bergan magna elencanod nau ereser socio mass prote online wins eloni.'
                ]
            ]
        ];
        
        return view('home', $data);
    }
}