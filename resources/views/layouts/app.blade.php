<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIXELINDIE Print Shop</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom border-dark border-2 py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-round-BaHrJ_GJ.png') }}" alt="PIXELINDIE Logo" height="36" class="rounded-circle">
                <!-- Tambahin class text-navy di sini biar warnanya biru gelap -->
                <span class="heading-uppercase fs-5 mb-0 text-navy fw-bold">PIXELINDIE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('portfolio') }}">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-navy text-white pt-5 pb-4 mt-5">
        <div class="container text-center">
            <h3 class="heading-uppercase mb-4">Punya project seru? Mari ngobrol!</h3>
            <a href="{{ route('contact') }}" class="btn btn-custom mb-5">Hubungi Kami</a>
            <hr class="border-secondary">
            <p class="mt-4 mb-0 fw-semibold fs-4">PIXEL<span class="text-yellow">INDIE</span></p>
            <p class="small text-white-50 mt-2">Teman desainer, business owner, dan UMKM sejak 2012.</p>
        </div>
    </footer>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>