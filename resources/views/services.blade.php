@extends('app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="subheading text-navy">- LAYANAN KAMI -</p>
            <h1 class="heading-uppercase">Katalog Produk Cetak</h1>
        </div>
        <div class="row g-4">
            @foreach($portfolios as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100 d-flex flex-column">
                    <img src="{{ asset($item->image) }}" class="w-100 object-fit-cover border-bottom border-dark border-2" alt="{{ $item->name }}" style="height: 250px;">
                    <div class="p-4 d-flex flex-column flex-grow-1">
                        <div class="mb-3">
                            <span class="badge-sticker">{{ $item->category }}</span>
                        </div>
                        <h3 class="fw-bold">{{ $item->name }}</h3>
                        <p class="mb-3 flex-grow-1">{{ $item->description }}</p>
                        
                        <div class="d-flex flex-column gap-2 mb-4 small fw-semibold">
                            <div>Bahan: {{ $item->material }}</div>
                            <div>Ukuran: {{ $item->size }}</div>
                            <div>Min. Order: {{ $item->min_order }} pcs</div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top border-dark">
                            <span class="fs-5 fw-bold text-navy">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            <a href="{{ route('contact') }}" class="btn btn-custom px-4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection