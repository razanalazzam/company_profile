@extends('layouts.app')

@section('content')
<section class="py-5 bg-white border-bottom border-dark border-2">
    <div class="container my-4">
        <div class="mb-4">
            <a href="{{ route('portfolio') }}" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-uppercase small">
                &larr; Kembali ke Portofolio
            </a>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="mb-3 d-flex align-items-center gap-2">
                    <span class="chip bg-offwhite px-3 py-1 border border-dark">{{ $portfolio->category }}</span>
                    <span class="fw-bold text-navy text-uppercase tracking-wider" style="letter-spacing: 1px;">{{ $portfolio->highlight }}</span>
                    <span class="badge bg-yellow text-navy px-2 py-1 fw-bold">{{ $portfolio->year }}</span>
                </div>

                <h1 class="display-6 fw-bold text-navy text-uppercase mb-4" style="line-height: 1.2;">
                    {{ $portfolio->title }}
                </h1>

                <p class="text-secondary fs-5 mb-4" style="line-height: 1.8;">
                    {{ $portfolio->description }}
                </p>

                <div class="p-4 bg-offwhite border border-dark border-2 rounded-3">
                    <h5 class="fw-bold text-navy text-uppercase mb-2">Punya ide liar untuk project berikutnya?</h5>
                    <p class="text-secondary small mb-4">Jangan cuma dibayangin. Mari kolaborasi wujudkan visual cetak terbaik buat brand lo bareng tim kita.</p>
                    <div class="text-start">
                        <a href="{{ route('contact') }}" class="btn bg-yellow text-navy border border-dark border-2 text-uppercase fw-bold px-4 py-2 shadow-sm" style="transition: all 0.2s;">
                            Mulai Konsultasi &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="border border-dark border-2 rounded-4 overflow-hidden shadow-sm bg-navy" style="max-height: 450px;">
                    <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-100 h-100" style="object-fit: cover; max-height: 450px; image-rendering: -webkit-optimize-contrast;">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection