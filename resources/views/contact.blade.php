@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container my-4">
        <div class="text-center mb-5">
            <p class="subheading text-navy fw-bold text-uppercase tracking-wider mb-2" style="letter-spacing: 2px;">KONTAK KAMI</p>
            <h1 class="display-5 text-uppercase fw-bold text-navy">Mari Terhubung</h1>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Kolom Kiri: Workshop & Jam Buka -->
            <div class="col-md-5">
                <div class="card-custom p-4 p-lg-5 h-100 bg-white border border-dark border-2 shadow-sm">
                    <h4 class="fw-bold text-navy text-uppercase mb-4" style="font-size: 1.2rem;">Mampir ke Workshop</h4>
                    <p class="mb-1 fw-bold fs-5 text-navy">PIXELINDIE Print Shop</p>
                    <p class="text-secondary mb-4" style="line-height: 1.6;">Ruko Neo Arcade, Gading Serpong, Blok A33<br>Klp. Dua, Kecamatan Kelapa Dua, Kabupaten Tangerang</p>
                    
                    <h4 class="fw-bold text-navy text-uppercase mb-3 mt-5" style="font-size: 1.2rem;">Jam Buka</h4>
                    <p class="mb-1 fw-semibold text-secondary">Senin - Jumat: 09:00 - 21:00</p>
                    <p class="mb-1 fw-semibold text-secondary">Sabtu: 09:00 - 16:00</p>
                    <p class="mb-0 fw-semibold text-secondary">Minggu: 11:00 - 18:00</p>
                </div>
            </div>

            <!-- Kolom Kanan: 2 Opsi Jalur Kontak (B2B & Customer) dengan Tombol Biru Gelap -->
            <div class="col-md-5">
                <div class="card-custom p-4 p-lg-5 h-100 bg-yellow border border-dark border-2 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="fw-bold text-navy text-uppercase mb-3" style="font-size: 1.2rem;">Pilih Jalur Diskusi</h4>
                        <p class="text-navy small mb-4" style="line-height: 1.6;">Punya kebutuhan cetak satuan, custom merchandise, atau mau kontrak kerja sama jangka panjang? Pilih tombol di bawah sesuai kebutuhan lo.</p>
                        
                        <!-- Opsi 1: Customer / Kreator (Tombol Biru Gelap / Navy) -->
                        <div class="mb-3">
                            <span class="d-block fw-bold text-navy small text-uppercase mb-1">Order Retail / Kreator & UMKM</span>
                            <a href="https://wa.me/6280000000000?text=Halo%20Admin%20PIXELINDIE,%20saya%20mau%20konsultasi%20cetak%20project." target="_blank" class="btn text-white w-100 text-uppercase fw-bold py-2 shadow-sm mb-1" style="background-color: #0d1b2a; font-size: 0.9rem; transition: opacity 0.2s;">
                                Chat WhatsApp Order &rarr;
                            </a>
                            <span class="text-navy" style="font-size: 0.75rem;">Konsultasi bahan, file, & cetak tanpa minimum order.</span>
                        </div>

                        <!-- Opsi 2: Mitra B2B (Tombol Outline Biru Gelap) -->
                        <div class="mb-4">
                            <span class="d-block fw-bold text-navy small text-uppercase mb-1">Kemitraan & Kolaborasi B2B</span>
                            <a href="https://wa.me/6280000000000?text=Halo%20Tim%20PIXELINDIE,%20saya%20tertarik%20untuk%20kerja%20sama%20B2B%20/%20corporate." target="_blank" class="btn w-100 text-uppercase fw-bold py-2 shadow-sm mb-1 bg-white" style="color: #0d1b2a; border: 2px solid #0d1b2a; font-size: 0.9rem;">
                                Kolaborasi B2B &rarr;
                            </a>
                            <span class="text-navy" style="font-size: 0.75rem;">Vendor rutin, event organizer, & pengadaan agency.</span>
                        </div>
                        
                    </div>
                    
                    <div>
                        <h5 class="fw-bold text-navy text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 0.5px;">METODE PEMBAYARAN</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">QRIS</span>
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">GoPay</span>
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">OVO</span>
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">DANA</span>
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">ShopeePay</span>
                            <span class="chip bg-white border border-dark px-2 py-1 small fw-bold">BCA VA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection