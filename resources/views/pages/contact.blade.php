@extends('layouts.app')
@section('title', 'Contact - HSRM')
@section('content')

<style>
    .page-header {
        background: linear-gradient(135deg, #0a1628, #1a2d4a);
        color: white;
        padding: 60px 0;
    }
    .contact-icon {
        font-size: 2rem;
        color: #c9a84c;
    }
</style>

<div class="page-header">
    <div class="container text-center">
        <h1 style="color: #c9a84c; font-weight: 800; letter-spacing: 3px;">CONTACT US</h1>
        <p class="text-white-50">Hubungi kami untuk informasi lebih lanjut</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 text-center h-100">
                <div class="contact-icon">🛒</div>
                <h5 class="fw-bold mt-3">Shopee</h5>
                <p class="text-muted">Temukan produk kami di Shopee dengan penawaran terbaik.</p>
                <a href="#" class="btn btn-gold">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 text-center h-100">
                <div class="contact-icon">🎵</div>
                <h5 class="fw-bold mt-3">TikTok Shop</h5>
                <p class="text-muted">Follow dan belanja langsung di TikTok Shop HSRM.</p>
                <a href="#" class="btn btn-gold">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 text-center h-100">
                <div class="contact-icon">📱</div>
                <h5 class="fw-bold mt-3">Instagram</h5>
                <p class="text-muted">Follow Instagram kami untuk update koleksi terbaru.</p>
                <a href="#" class="btn btn-gold">Follow Kami</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h5 class="fw-bold mb-3" style="color: #0a1628;">Informasi Kontak</h5>
                <p><b style="color: #c9a84c;">📧 Email:</b> hsrm.official@gmail.com</p>
                <p><b style="color: #c9a84c;">📱 WhatsApp:</b> +62 85763309446</p>
                <p><b style="color: #c9a84c;">📍 Lokasi:</b> Karawaci, Tangerang</p>
                <p><b style="color: #c9a84c;">⏰ Jam Operasional:</b> Senin - Sabtu, 09.00 - 21.00 WIB</p>
            </div>
        </div>
    </div>
</div>

@endsection