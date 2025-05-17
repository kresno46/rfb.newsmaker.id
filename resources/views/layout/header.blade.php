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
<style>
    /* Styling Market Update */
    .market-update-container {
        position: relative;
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
        padding-left: 150px;
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
</style>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ asset('/') }}"><span>
                <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="Nitrico" style="height: auto; width: 280px;">
            </span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class=""><a href="{{ asset('/') }}">Beranda</a></li>
                <li class="drop-down"><a href="{{ asset('profil') }}review">Profil</a>
                    <ul>
                        <?php foreach($nav_profil as $nav_profil) { ?>
                        <li><a href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}">Profil Perusahaan</a></li>
                        <li><a href="{{ asset('wakil_pialang') }}">Wakil Pialang</a></li>
                        <li><a href="{{ asset('galeri') }}">Legalitas Bisnis</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{ asset('produk') }}">Produk</a>
                     <ul>
                        @foreach($nav_kategori_produk as $nkp)
                        <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}">{{ $nkp->nama_kategori_produk }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Analisis</a>
                    <ul>
                        <li><a href="">Berita</a></li>
                        <li><a href="{{ asset('wakil_pialang/economic_calendar') }}">Economic Calendar</a></li>
                        <li><a href="{{ asset('wakil_pialang/historical_data') }}">Historical Data</a></li>
                        <li><a href="">Pivot & Fibonacci</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Prosedur Investasi</a>
                     <ul>
                        <li><a href="{{ asset('wakil_pialang/prosedur_registrasi_online') }}">Prosedur Registrasi Online</a></li>
                        <li><a href="{{ asset('wakil_pialang/prosedur_penarikan') }}">Prosedur Penarikan</a></li>
                        <li><a href="{{ asset('wakil_pialang/petunjuk_transaksi') }}">Petunjuk Transaksi</a></li>
                        <li><a href="https://www.rf-berjangka.com/images/content/spa_rfb_feb_2023_2.pdf">Specimen Agreement</a></li>
                     </ul>
                </li>
                <li class="drop-down"><a href="#">Informasi</a>
                    <ul>
                        <li><a href="{{ asset('berita') }}">Umum</a></li>
                        <li><a href="{{ asset('video') }}">Video Umum</a></li>
                    </ul>
                </li>
                <li class=""><a href="{{ asset('kontak') }}">Hubungi Kami</a></li>
            </ul>
        </nav>
    </div>

    <!-- Google Translate with Flags -->
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,id',
                autoDisplay: false
            }, 'google_element');
        }

        function changeLanguage(language) {
            var selectElement = document.querySelector('.goog-te-combo');
            if (selectElement) {
                selectElement.value = language;
                selectElement.dispatchEvent(new Event('change'));
            }
        }
    </script>

    <div class="flag-container" onclick="changeLanguage('en')" style="cursor: pointer; margin-right: 10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English" width="30" height="20">
    </div>
    <div class="flag-container" onclick="changeLanguage('id')" style="cursor: pointer; margin-right: 10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian" width="30" height="20">
    </div>

    <div id="google_element" style="display:none;"></div>
</header>

<!-- Market Update (Running Text) -->
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
