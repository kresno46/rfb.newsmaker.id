<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myproduk->nav_profil();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Update</title>
    <style>
        /* Styling Market Update */
        .market-update-container {
            position: relative; /* Tidak fixed agar tidak menempel di atas */
            top: 0;
            left: 0;
            right: 0;
            font-family: "Poppins", sans-serif;
            background-color: #28a745;
            box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .market-update-container .title {
            position: absolute;
            background: red;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 24px;
            color: white;
            font-weight: bold;
            z-index: 200;
        }

        .market-update-container ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding-left: 150px; /* Memberikan ruang untuk judul */
            animation: scroll 35s infinite linear;
        }

        .market-update-container ul li {
            white-space: nowrap;
            padding: 10px 24px;
            color: white;
            position: relative;
        }

        .market-update-container ul li::after {
            content: "";
            width: 1px;
            height: 100%;
            background: white;
            position: absolute;
            top: 0;
            right: 0;
        }

        .market-update-container ul li:last-child::after {
            display: none;
        }

        @keyframes scroll {
          from {
              transform: translateX(100%);
          }

          to {
              transform: translateX(-160%);
          }
        }

        /* Tambahkan padding agar header tidak menutupi konten */
        body {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ asset('/') }}"><span>
                <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="Nitrico" style="min-height: 50px; width: auto;">
            </span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ asset('/') }}">Beranda</a></li>
                <li class="drop-down"><a href="#">Berita</a>
                    <ul>
                        <!-- <li><a href="https://www.rfbnews.com/index.php/en/economic-news/economy">Economy</a></li>
                        <li><a href="https://www.rfbnews.com/index.php/en/economic-news/fiscal-moneter">Fiscal & Moneter</a></li>
                        <li><a href="https://www.rfbnews.com/index.php/en/market-news/index">Index</a></li>
                        <li><a href="https://www.rfbnews.com/index.php/en/market-news/commodity">Commodity</a></li>
                        <li><a href="https://www.rfbnews.com/index.php/en/market-news/currencies">Currencies</a></li>
                        <li><a href="https://www.rfbnews.com/index.php/en/component/marketcalendar/marketcalendar">Economic Calendar</a></li> -->
                        <li><a href="http://localhost/official/rfb-official/wakil_pialang/economic_calendar">Economic Calendar</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{ asset('profil') }}review">Profil</a>
                    <ul>
                        <?php foreach($nav_profil as $nav_profil) { ?>
                        <li><a href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}"><?php echo $nav_profil->judul_berita ?></a></li>
                        <!-- <li><a href="#">Penghargaan</a></li> -->
                        <li><a href="{{ asset('galeri') }}">Legalitas Bisnis</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <!-- <li class="drop-down"><a href="{{ asset('produk') }}">Produk</a>
                    <ul>
                        <?php foreach($nav_kategori_produk as $nkp) { ?>
                        <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) ?>"><?php echo $nkp->nama_kategori_produk ?></a></li>
                        <?php } ?>
                        <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                        <li><a href="{{ asset('produk') }}">Semua Produk</a></li>
                    </ul>
                </li> -->
                <li class="drop-down"><a href="{{ asset('produk') }}">Produk</a>
                     <ul>
                        @foreach($nav_kategori_produk as $nkp)
                        <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}">{{ $nkp->nama_kategori_produk }}</a></li>
                        @endforeach
                        <!-- <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                        <li><a href="{{ asset('produk') }}">Semua Produk</a></li> -->
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Informasi</a>
                    <ul>
                        <li><a href="{{ asset('berita') }}">Pengumuman</a></li>
                        <li><a href="{{ asset('video') }}">Video Youtube</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Kontak</a>
                    <ul>
                        <li><a href="{{ asset('kontak') }}">Hubungi Kami</a></li>
                        <li><a href="{{ asset('wakil_pialang') }}">Wakil Pialang</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>

    <!-- ======= Google Translate with Flags ======= -->
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        // Fungsi untuk memuat Google Translate
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Bahasa default
                includedLanguages: 'en,id', // Bahasa yang diizinkan
                autoDisplay: false, // Menonaktifkan tampilan auto dari dropdown
                // layout: google.translate.TranslateElement.InlineLayout.SIMPLE // Menjadikan tampilan lebih sederhana
            }, 'google_element');
        }

        // Fungsi untuk mengganti bahasa melalui bendera
        function changeLanguage(language) {
            var selectElement = document.querySelector('.goog-te-combo');
            if (selectElement) {
                selectElement.value = language; // Mengubah nilai dropdown
                selectElement.dispatchEvent(new Event('change')); // Men-trigger perubahan bahasa
            }
        }
    </script>

    <!-- Bendera untuk pemilihan bahasa -->
    <div class="flag-container" onclick="changeLanguage('en')" style="cursor: pointer; margin-right: 10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English" width="30" height="20">
    </div>
    <div class="flag-container" onclick="changeLanguage('id')" style="cursor: pointer; margin-right: 10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian" width="30" height="20">
    </div>

    <!-- Menyembunyikan elemen dropdown Google Translate -->
    <div id="google_element" style="display:none;"></div>

    <!-- End Google Translate -->

</header><!-- End Header -->

<!-- ======= Market Update (Running Text) ======= -->
<div class="market-update-container">
    <div class="title">MARKET UPDATE</div>
    <div id="news-content" class="news-content"></div>
    <ul>
        <li>GOLD: 3048.5 +1.8 (0.06%)</li>
        <li>SILVER: 33.798 + 0.011 (0.03%)</li>
        <li>HANGSENG: 24472 -262 (-1.07%)</li>
        <li>NIKKEI 225: 37610 +100 (0.27%)</li>
        <li>OIL: 71.16 +0.38 (0.54%)</li>
        <li>EURUSD: 1.0908 +0.0007 (0.06%)</li>
        <li>USDCHF: 0.8759 -0.0018 (-0.19%)</li>
        <li>USD/IDR: 16464 -56 (-0.34%)</li>
    </ul>
</div>
<!-- End Market Update -->

</body>
</html>
<!-- ======= Hero Section ======= -->