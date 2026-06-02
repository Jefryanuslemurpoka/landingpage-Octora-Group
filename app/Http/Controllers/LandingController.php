<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $services = [
            ['icon' => '🌐', 'title' => 'Web Development', 'desc' => 'Membangun aplikasi web modern, responsif, dan scalable sesuai kebutuhan bisnis Anda.'],
            ['icon' => '📱', 'title' => 'Mobile Development', 'desc' => 'Aplikasi Android & iOS native maupun cross-platform dengan performa tinggi.'],
            ['icon' => '🖥️', 'title' => 'Desktop Development', 'desc' => 'Software desktop untuk Windows, Mac, dan Linux yang powerful dan mudah digunakan.'],
            ['icon' => '☁️', 'title' => 'Cloud Solutions', 'desc' => 'Infrastruktur cloud yang aman, scalable, dan siap mendukung pertumbuhan bisnis Anda.'],
            ['icon' => '🔒', 'title' => 'IT Security', 'desc' => 'Audit keamanan sistem dan implementasi solusi proteksi data perusahaan Anda.'],
            ['icon' => '🤝', 'title' => 'IT Consulting', 'desc' => 'Konsultasi teknologi untuk transformasi digital bisnis Anda bersama tim ahli kami.'],
        ];

        $portfolios = [
            ['title' => 'NOKTA - APP', 'category' => 'Web App', 'image' => 'portfolio/hris.jpg'],
            ['title' => 'PORTAL INTERNAL MANAGEMENT', 'category' => 'Web App', 'image' => 'portfolio/ecommerce.jpg'],
            ['title' => 'FANI - RAJUT', 'category' => 'Web App', 'image' => 'portfolio/inventory.jpg'],
            ['title' => 'BEKASI KONSTRUKSI', 'category' => 'Web App', 'image' => 'portfolio/accounting.jpg'],
            ['title' => 'Hospital Management', 'category' => 'Web App', 'image' => 'portfolio/hospital.jpg'],
            ['title' => 'POS System', 'category' => 'Desktop App', 'image' => 'portfolio/pos.jpg'],
        ];

        $team = [
            ['name' => 'Wildan Afifudin', 'role' => 'CEO & Founder', 'photo' => 'team/wildan.jpeg'],
            ['name' => 'Muhammad Ilham Kusumawardhana', 'role' => 'Lead Developer', 'photo' => 'team/kawe.png'],
            ['name' => 'Satria Sukma Yusa', 'role' => 'Head of Legal Affairs', 'photo' => 'team/satria.png'],
            ['name' => 'Almuarif Budiman', 'role' => 'Marketing Manager', 'photo' => 'team/arif.jpg'],
        ];

        return view('landing.index', compact('services', 'portfolios', 'team'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        return back()->with('success', '✅ Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}