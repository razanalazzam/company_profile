@extends('layouts.app')

@section('content')
<section class="py-5 bg-white border-bottom border-dark border-2">
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 text-uppercase fw-bold text-navy mb-3">BUKAN CUMA NGEPRINT, <span class="bg-yellow px-2 fst-italic text-navy">KITA BIKIN IMPACT</span></h1>
            <p class="fs-5 text-secondary mx-auto" style="max-width: 800px; line-height: 1.8;">
                Sejak 2012, perjalanan PIXELINDIE bukan cuma soal nambah jumlah mesin atau ngumpulin orderan. Ini soal pencapaian, inovasi, dan kolaborasi gila yang bikin kita ada di titik sekarang.
            </p>
        </div>
    </div>
</section>

<section class="py-5 bg-offwhite">
    <div class="container my-4">
        <div class="row g-4 g-lg-5">
            @foreach($portfolios as $item)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('portfolio.detail', $item->slug) }}" class="text-decoration-none">
                    <div class="card-custom h-100 d-flex flex-column bg-white shadow-sm">
                        <div class="position-relative">
                            <div class="w-100 bg-navy" style="height: 220px; border-bottom: 2px solid var(--navy); overflow: hidden;">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="w-100 h-100" style="object-fit: cover; object-position: center; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                            </div>
                            <div class="position-absolute" style="bottom: -15px; right: 20px;">
                                <span class="badge-sticker fs-6 shadow-sm">{{ $item->year }}</span>
                            </div>
                        </div>
                        
                        <div class="p-4 d-flex flex-column flex-grow-1 mt-2">
                            <div class="mb-3 d-flex align-items-center gap-2">
                                <span class="chip bg-offwhite">{{ $item->category }}</span>
                                <span class="small fw-bold text-navy text-uppercase tracking-wider" style="letter-spacing: 1px;">{{ $item->highlight }}</span>
                            </div>
                            
                            <h3 class="fw-bold text-navy text-uppercase mb-3" style="font-size: 1.3rem;">{{ $item->title }}</h3>
                            
                            <p class="text-secondary flex-grow-1 mb-0" style="line-height: 1.7;">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection