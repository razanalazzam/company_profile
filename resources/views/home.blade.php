@extends('layouts.app')

@section('content')
<section class="py-5 bg-white border-bottom border-dark border-2">
    <div class="container my-4">
        <div class="mb-4">
            <h1 class="display-5 text-uppercase fw-normal mb-3">TENTANG <span class="bg-yellow px-2 fst-italic fw-bold text-navy">PIXELINDIE</span></h1>
            <p class="fs-5 text-secondary" style="max-width: 800px; line-height: 1.6;">
                Sejak 2012, PIXELINDIE bantu ribuan brand, UMKM, dan kreator mewujudkan ide jadi cetakan nyata. Digital printing, large format, fancy paper, sticker, sampai finishing &mdash; semua di satu tempat. Urusan cetak loe, jadi urusan gue.
            </p>
        </div>
        
        <!-- Foto Home Berhasil Dipasang -->
        <div class="rounded-4 border border-dark border-2 shadow-sm mb-5 bg-offwhite overflow-hidden" style="height: 400px; width: 100%;">
            <img src="{{ asset('images/home.jpg') }}" alt="Tentang PIXELINDIE" class="w-100 h-100" style="object-fit: cover; image-rendering: -webkit-optimize-contrast;">
        </div>
    </div>
</section>

<section class="py-5 bg-offwhite">
    <div class="container my-4">
        <div class="mb-5">
            <h2 class="h1 text-uppercase fw-normal mb-4">CERITA <span class="fst-italic fw-bold text-navy">singkat</span></h2>
            <div class="text-secondary fs-6" style="max-width: 800px; line-height: 1.8;">
                <p class="mb-4">Mulai dari satu mesin cetak dan obsesi sama detail, PIXELINDIE tumbuh jadi rumah cetak yang dipercaya buat pekerjaan yang harus rapi: undangan pernikahan, kartu nama founder, packaging produk UMKM, sampai banner event yang harus kelihatan dari jauh.</p>
                <p class="mb-0">Kita percaya kertas dan finishing yang tepat bisa bikin desain biasa jadi berkesan &mdash; dan desain hebat jadi tak terlupakan. Makanya kita simpan seribu lebih pilihan bahan, dari yang paling ekonomis sampai fine paper impor. Sekarang PIXELINDIE jadi bagian dari INDIE Group.</p>
            </div>
        </div>

        <div class="mt-5 pt-4">
            <h2 class="h1 text-uppercase fw-normal mb-4">YANG KITA <span class="fst-italic fw-bold text-navy">pegang</span></h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">◎</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">HASIL, BUKAN JANJI</h4>
                        <p class="text-secondary small mb-0">Kita nggak jual omong. Tiap cetakan dicek dulu sebelum sampai ke tangan kamu.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">🏷️</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">HARGA TRANSPARAN</h4>
                        <p class="text-secondary small mb-0">Diskon qty kepotong otomatis, nggak ada biaya siluman. Yang kamu lihat, itu yang kamu bayar.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">📚</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">1000+ PILIHAN BAHAN</h4>
                        <p class="text-secondary small mb-0">Dari HVS harian sampai fine paper langka. Bingung? CS bantu pilihin yang pas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">⚡</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">CEPAT & RESPONSIF</h4>
                        <p class="text-secondary small mb-0">Banyak item ready, cetak selesai hitungan hari. CS fast response di WhatsApp.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">📦</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">TANPA MINIMUM ORDER</h4>
                        <p class="text-secondary small mb-0">Butuh bikin dummy dulu sebelum cetak massal? Atau order dikit buat tes pasar? Gas, kita layanin tanpa syarat ribet.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-pegang p-4 h-100 bg-white">
                        <div class="icon-circle mb-3 border border-dark d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px;">
                            <span class="fs-5">🎨</span>
                        </div>
                        <h4 class="fw-normal fs-5 text-uppercase mb-2">WARNA PRESISI, FILE AMAN</h4>
                        <p class="text-secondary small mb-0">Mesin dikalibrasi harian. Kalau resolusi pecah atau margin mepet, tim prepress pasti bawel ngabarin duluan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection