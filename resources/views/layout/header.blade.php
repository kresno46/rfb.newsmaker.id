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
    /* General Styles */
    body {
        font-family: "Poppins", sans-serif;
    }

    /* Header Styles */
    #header {
        padding-top: 30px;
        position: relative;
     
    }

    .world-time {
        color: white;
        padding: 5px 15px;
        font-size: 12px;
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        gap: 15px;
        z-index: 1000;
        align-items: center;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .world-time span {
        display: inline-flex;
        align-items: center;
    }

    .world-time .label {
        font-weight: bold;
        margin-right: 3px;
    }

    .world-time .date-info {
        display: flex;
        align-items: center;
        margin-right: 15px;
    }

    .world-time .date-info i {
        margin-right: 5px;
    }

    /* Market Update Styles */
    .market-update-container {
        display: flex;
        align-items: center;
        background-color: #28a745;
        padding: 0;
        color: white;
        overflow: hidden;
    }

    .market-update-container .title {
        background: red;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 0 24px;
        font-weight: bold;
        z-index: 200;
        margin: 0;
    }

    .market-update-container ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding-left: 150px;
        animation: scroll 55s infinite linear;
    }

    .market-update-container ul li {
        white-space: nowrap;
        padding: 10px 24px;
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

    /* Language Selector Styles */
    .language-selector {
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1000;
        height: 27px;
        display: flex;
        align-items: center;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background: transparent;
        color: white;
        padding: 5px 10px;
        font-size: 12px;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .dropbtn img {
        width: 20px;
        height: 15px;
        object-fit: cover;
    }

    .dropbtn i {
        font-size: 10px;
        margin-left: 3px;
    }

    @media (max-width: 768px) {
        .dropbtn span {
            display: none;
        }
        .dropbtn {
            padding: 5px;
        }
        .dropbtn img {
            margin-right: 0;
        }
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 140px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 4px;
    }

    .dropdown-content a {
        color: black;
        padding: 8px 12px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
    }

    .dropdown-content img {
        width: 16px;
        height: 12px;
        object-fit: cover;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        opacity: 0.8;
    }
</style>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="world-time">
        <span class="date-info">
            <i class="fas fa-calendar-alt"></i>
            <span id="current-date">Loading...</span>
        </span>
        <span><span class="label">JKT</span> <span id="jakarta-time">00:00</span></span>
        <span><span class="label">TKY</span> <span id="tokyo-time">00:00</span></span>
        <span><span class="label">HK</span> <span id="hongkong-time">00:00</span></span>
        <span><span class="label">NY</span> <span id="newyork-time">00:00</span></span>
    </div>
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
                        <li><a href="{{ asset('wakil_pialang/legalitasbisnis') }}">Legalitas Bisnis</a></li>
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
                        <li><a href="{{ asset('wakil_pialang/news') }}">Berita</a></li>
                        <li><a href="{{ asset('wakil_pialang/economic_calendar') }}">Economic Calendar</a></li>
                        <li><a href="{{ asset('wakil_pialang/historical_data') }}">Historical Data</a></li>
                        <li><a href="{{ asset('wakil_pialang/pivot') }}">Pivot & Fibonacci</a></li>
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
</header>

<!-- Market Update (Running Text) -->
<div class="market-update-container">
    <div class="title">MARKET UPDATE</div>
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

<!-- Language Selector -->
<div class="language-selector">
    <div class="dropdown">
        <button class="dropbtn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Language">
            <span>BAHASA</span>
            <i class="fas fa-chevron-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#" data-lang="id">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian">
                Indonesia
            </a>
            <a href="#" data-lang="en">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English">
                English
            </a>
            <a href="#" data-lang="zh-CN">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg" alt="Chinese">
                中文
            </a>
            <a href="#" data-lang="ja">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg" alt="Japanese">
                日本語
            </a>
        </div>
    </div>
</div>

<!-- Google Translate Element -->
<div id="google_element" style="display:none;"></div>
<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<script>
    function loadGoogleTranslate() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'id,en,zh-CN,ja',
            autoDisplay: false
        }, 'google_element');
    }

    // Ubah bahasa saat tautan diklik
    document.querySelectorAll('.dropdown-content a').forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const lang = this.getAttribute('data-lang');
            changeLanguage(lang);
        });
    });

    function changeLanguage(lang) {
        const interval = setInterval(() => {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
                clearInterval(interval);
            }
        }, 100);
    }
</script>
