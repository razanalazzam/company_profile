<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'The Most Innovative Print Solutions Provider',
                'slug' => 'innovative-print-solutions',
                'category' => 'Penghargaan',
                'description' => 'Bawa pulang piala bergengsi level nasional. Ini bukti nyata kalau nge-print itu bukan cuma soal menekan tombol mesin, tapi berinovasi ngasih solusi cerdas buat tiap masalah cetak lo.',
                'highlight' => 'National Award Winner',
                'year' => '2022',
                'image' => 'images/portofolios/1.png',
            ],
            [
                'title' => 'Creative Paper Experience',
                'slug' => 'creative-paper-experience',
                'category' => 'Pameran',
                'description' => 'Nampang bareng raksasa kertas. PIXELINDIE diundang khusus buat unjuk gigi di event eksklusif yang diinisiasi langsung oleh Surya Palace Jaya, Fedrigoni, dan Paper Gallery.',
                'highlight' => 'Exclusive Exhibitor',
                'year' => '2026',
                'image' => 'images/portofolios/2.jpg',
            ],
            [
                'title' => 'Nusantara Packaging Experience Awards',
                'slug' => 'npea-2026',
                'category' => 'Event',
                'description' => 'Ikut ambil bagian di event NPEA 2026 garapan Hovarlay. Ngebuktiin ke audiens luas kalau kualitas packaging lokal juga bisa pamer taring di level atas dan ngasih unboxing experience maksimal.',
                'highlight' => 'NPEA 2026 Participant',
                'year' => '2026',
                'image' => 'images/portofolios/3.webp',
            ],
            [
                'title' => 'Swatchbook Eksklusif Kertas Pilihan',
                'slug' => 'swatchbook-kertas',
                'category' => 'Inovasi',
                'description' => 'Koleksi lengkap sampel fisik mulai dari Standard, Creative, Fancy, Special, Super, hingga Sticker Paper. Memudahkan kreator meraba dan memilih tekstur terbaik secara langsung.',
                'highlight' => 'Katalog Swatchbook',
                'year' => '2025',
                'image' => 'images/portofolios/4.jpg',
            ],
            [
                'title' => 'Ekosistem Kolaborasi Kreatif',
                'slug' => 'kolaborasi-kreatif',
                'category' => 'Kolaborasi',
                'description' => 'Kita menolak jadi sekadar vendor. PIXELINDIE sukses ngebangun ekosistem seru yang nge-link-in supplier kertas premium, pabrikan mesin canggih, dan ide-ide liar kalian para kreator.',
                'highlight' => 'Creative Hub',
                'year' => '2026',
                'image' => 'images/portofolios/5.jpg',
            ],
            [
                'title' => 'Kepercayaan Brand Ternama',
                'slug' => 'brand-ternama',
                'category' => 'Klien',
                'description' => 'Dari startup hype yang lagi bakar duit sampai korporat multinasional yang super strict, banyak brand besar udah berani percayain urusan visual cetak mereka ke tangan dingin tim PIXELINDIE.',
                'highlight' => 'Trusted by Giants',
                'year' => '2012 - Sekarang',
                'image' => 'images/portofolios/6.jpg',
            ],
            [
                'title' => '99% FSC Certified Paper',
                'slug' => 'fsc-certified',
                'category' => 'Sustainability',
                'description' => 'Nge-print jalan terus, tapi bumi tetap harus aman. Hampir seluruh kertas yang masuk ke mesin kita udah tersertifikasi FSC. Sebuah bentuk tanggung jawab nyata buat lingkungan.',
                'highlight' => 'Eco-Friendly Standard',
                'year' => '2025',
                'image' => 'images/portofolios/7.jpg',
            ],
            [
                'title' => 'Cara Order di PIXELINDIE: Dari Pilih Bahan Sampai Bayar',
                'slug' => 'cara-order-di-pixelindie',
                'category' => 'Edukasi',
                'description' => 'Pertama kali order cetak online? Gampang kok. Ini alurnya langkah demi langkah biar kamu nggak bingung mulai dari konsultasi, pilih bahan, sampai pelunasan.',
                'highlight' => 'Panduan Order',
                'year' => '2026',
                'image' => 'images/portofolios/8.jpg',
            ],
            [
                'title' => 'Foil, Spot UV, Emboss: Bikin Cetakan Keliatan Mahal',
                'slug' => 'foil-spot-uv-emboss-bikin-cetakan-keliatan-mahal',
                'category' => 'Tips & Trik',
                'description' => 'Beda tipis antara cetakan biasa dan cetakan yang bikin orang "wah". Rahasianya ada di finishing mewah seperti efek kilau foil, tekstur emboss timbul, dan aksen Spot UV.',
                'highlight' => 'Finishing Cetak',
                'year' => '2026',
                'image' => 'images/portofolios/9.png',
            ],
            [
                'title' => 'Panduan Cepat Milih Kertas buat Cetakan Bisnis',
                'slug' => 'panduan-cepat-milih-kertas-buat-cetakan-bisnis',
                'category' => 'Material',
                'description' => 'Kertas yang salah bisa bikin desain bagus keliatan murah. Ini cara gampang milih bahan sesuai kebutuhan — dari kartu nama, buku katalog, sampai kemasan produk.',
                'highlight' => 'Pilihan Kertas',
                'year' => '2026',
                'image' => 'images/portofolios/10.jpg',
            ]
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}