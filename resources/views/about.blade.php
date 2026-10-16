@extends('layouts.app')

@section('content')
<section class="py-5 bg-white border-bottom border-dark border-2">
    <div class="container my-5">
        <h1 class="display-5 text-uppercase fw-bold text-navy mb-5 text-center">TIDAK PERNAH <span class="bg-yellow px-2 fst-italic text-navy">LEPAS TANGAN</span></h1>
        
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <div class="fs-5 text-secondary" style="line-height: 1.8;">
                    <p class="mb-4">Di PIXELINDIE, kami terobsesi dengan hal-hal nerdy yang sering diabaikan oleh tempat lain. Kami mengkalibrasi mesin cetak kami hampir setiap hari, menjaga suhu dan kelembapan ruang penyimpanan kertas dengan ketat, dan melatih teknisi kami untuk "membaca" file-mu sebelum mereka berani menekan tombol Print.</p>
                    <p class="mb-0">Kami tidak sekadar memindahkan tinta ke atas kertas; kami bekerja keras untuk memastikan layar digitalmu dan hasil fisik berbicara dalam bahasa yang persis sama.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden border border-dark border-2 shadow-sm bg-offwhite" style="height: 400px;">
                    <img src="{{ asset('images/pixelindie.jpg') }}" alt="PIXELINDIE Workshop" class="w-100 h-100" style="object-fit: cover; image-rendering: -webkit-optimize-contrast;">
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5 pt-3">
            <div class="col-lg-10">
                <p class="fs-5 text-secondary text-center mb-5" style="line-height: 1.8;">
                    Namun, di balik semua mesin canggih dan SOP ketat tersebut, kami tetaplah manusia. Kami sadar bahwa kesempurnaan 100% adalah mitos, dan terkadang human error atau kendala produksi bisa saja terjadi.
                </p>
                
                <!-- Kotak dengan Desain Balance & Clean -->
                <div class="p-4 p-md-5 bg-offwhite border border-dark border-2 rounded-4 shadow-sm mb-5 position-relative">
                    <p class="mb-0 text-navy text-center" style="line-height: 1.9; font-size: 1.15rem;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="letter-spacing: 1.5px;">Tapi inilah janji kami:</span> 
                        Kami <span class="bg-yellow px-2 fw-bold text-navy">tidak pernah lepas tangan</span>. Ketika terjadi kesalahan, kami tidak akan membuang waktu untuk mencari alasan. Kami akan langsung fokus berdiskusi denganmu untuk mencari solusi terbaik, merombak ulang jika perlu, dan memastikan karyamu tetap terselamatkan.
                    </p>
                </div>
                
                <p class="mb-0 fw-bold fs-3 fst-italic text-navy text-center">Your peace of mind is our priority.</p>
            </div>
        </div>
    </div>
</section>
@endsection