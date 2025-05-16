<section id="hero" style="color: #fff;">
  <div class="container">
    <div class="row">
        <div class="owl-carousel owl-theme">
          <?php foreach($slider as $slider) { ?>
          <div class="item">
            <div class="row">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out" class="slideku">
                  <h1><?php echo $slider->judul_galeri ?></h1>
                  <h4><?php echo $slider->isi ?></h4>
                  <div class="text-center text-lg-left">
                    <a href="https://regol.rifan-financindo-berjangka.co.id/" class="btn-get-started scrollto"><i class=""></i>Registrasi Akun Online</a>
                    <a href="https://demo.rifanberjangka.com/login" class="btn-get-started scrollto"><i class=""></i>Akun Demo</a>
                    <a href="https://etrade.rifanberjangka.com/login" class="btn-get-started scrollto"><i class=""></i>Akun Real</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="300">
                <div class="slideku">
                  <p class="text-center"><img src="{{ asset('public/upload/image/'.$slider->gambar) }}" class="img img-fluid animated" alt="<?php echo $slider->judul_galeri ?>"></p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>
</section>
<!-- End Hero -->

<!-- ======= Top Main Header Area =======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Update</title>
    <style>
        /* CSS untuk market-update-container */
        .market-update-container {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            font-family: "Poppins", sans-serif;
            background-color: #28a745;
            box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.3);
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
            animation: scroll 35s infinite linear;
        }

        .market-update-container ul li {
            white-space: nowrap;
            padding: 10px 24px;
            color: white;
            position: relative;
        }

        .market-update-container ul li::after {
            content:"";
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
</head>
<body>
    <div class="market-update-container">
        <div class="title">
            MARKET UPDATE
        </div>
        <ul>
            <li>
                Latest Quotes: GOLD: 3048.5 +1.8 (0.06%)
            </li>

            <li>
                SILVER: 33.798 + 0.011 (0.03%)
            </li>

            <li>
                HANGSENG: 24472 -262 (-1.07%)
            </li>

            <li>
                NIKKEI 225: 37610 +100 (0.27%)
            </li>

            <li>
                OIL: 71.16 +0.38 (0.54%)
            </li>

            <li>
                EURUSD: 1.0908 +0.0007 (0.06%)
            </li>

            <li>
                USDCHF: 0.8759 -0.0018 (-0.19%)
            </li>

            <li>
                USD/IDR: 16464 -56 (-0.34%)
            </li>
        </ul>
    </div>
</body>
</html> -->

 <!-- Start main -->
<main id="main">
 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-4 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <img src="{{ asset('public/upload/image/'.$site->icon) }}" alt="{{ $site->namaweb }}" class="img img-fluid img-thumbnail">
          </div>

          <div class="col-xl-8 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Selamat Datang di Rifan Financindo Berjangka</h3>
            <?php echo $site->tentang ?>

          </div>
        </div>

      </div>
      <hr>
    </section><!-- End About Section -->

<!-- ======= Apa itu Nitrico? Section ======= -->
<section id="apa-itu-nitrico" class="about">

      
  <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-up">
          <h2>Produk Kami<?php $site->namaweb ?></h2>
          <br><br>
    </div>
        <!-- START -->
    <div class="row">
      <?php  
            if($produks) {
            foreach($produks as $produk) { ?>
            <div class="col-lg-3 col-md-6 col-sm-10 mb-4 produk text-center">
                  <figure class="thumnail">
                    <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                      <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="<?php  echo $produk->nama_produk ?>" class="img-fluid img-thumbnail">
                    </a>
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                          <?php  echo $produk->nama_produk ?>
                        </a>
                      </h3>
                    <p class="harga"> <?php echo $produk->harga_jual; ?></p>
                  </div>
                  <div class="link-produk">
                    <p>
                      <input type="hidden" name="quantity" id="{{ $produk->id_produk }}" value="1" class="quantity">
                      <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                        <!-- <a href="{{ asset('pemesanan?id_produk='.$produk->id_produk) }}" class="btn btn-info btn-sm">
                          <i class="fa fa-shopping-cart"></i> Pesan Produk Ini
                        </a> -->
                    </p>
                </div>
            </div>
            
          <?php } ?>
          <div class="clearfix"></div>
            <div class="col-md-12">
              
               {{ $produks->links() }}
              </div>
        <?php }else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
          </div>
          <?php } ?>
      <hr>
    </div>
    
    <!-- END -->
  </div>
  <hr>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
          <h2>BERITA TERBARU</h2>
          <!-- <p><?php echo $site->namaweb ?></p> -->
        </div>


        <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                      <img src="assets/img/gmbr_berita1.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure>
                  <p class="harga">06 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="https://www.rfbnews.com/index.php/en/economic-news/economy/93578-trump-orders-100-tariff-on-foreign-made-movies-to-save-dying-hollywood">
                          Trump orders 100% tariff on foreign-made movies to save 'dying' Hollywood
                        </a>
                      </h3>
                    <p class="harga">U.S. President Donald Trump on Sunday announced a 100% tariff on movies produced outside the country, saying the American movie industry was dying a "very fast death" due to the incentives that...</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="https://www.rfbnews.com/index.php/en/economic-news/economy/93578-trump-orders-100-tariff-on-foreign-made-movies-to-save-dying-hollywood" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                      <img src="assets/img/gmbr_berita2.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure>
                  <p class="harga">06 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="https://www.rfbnews.com/index.php/en/economic-news/economy/93583-trump-blocks-harvard-from-new-research-funding-in-latest-blow">
                          Trump Blocks Harvard From New Research Funding In Latest Blow
                        </a>
                      </h3>
                    <p class="harga">The Trump administration has declared Harvard University ineligible for new federal research grants in the latest escalation between the White House and the Ivy...</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="The Trump administration has declared Harvard University ineligible for new federal research grants in the latest escalation between the White House and the Ivy..." class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                      <img src="assets/img/gmbr_berita3.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure>
                  <p class="harga">07 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="https://www.rfbnews.com/index.php/en/economic-news/economy/93614-trump-in-no-rush-for-trade-deals-wants-everyone-to-pay-to-shop-in-america">
                          Trump in no rush for trade deals, wants everyone to "pay to shop" in America
                        </a>
                      </h3>
                    <p class="harga">President Trump offered some fresh comments on trade deals Tuesday, suggesting he is in no real hurry to sign any deals despite the clock ticking on the 90-day reciprocal tariff pause....</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="https://www.rfbnews.com/index.php/en/economic-news/economy/93614-trump-in-no-rush-for-trade-deals-wants-everyone-to-pay-to-shop-in-america" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
            </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  <hr>
            
    <hr>
    
  <section id="getstarted" class="section section-text-light section-center" style="background-color: #343a40; margin-top: -40px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div style="margin-bottom: 20px;">
                    <div style="background: #ffffff; width: 100%;">
                        <img src="public/upload/image/web_iso_2025.png" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

</section>
<!-- End Apa itu Nitrico? Section -->

 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
          <!-- <h2>PENGUMUMAN</h2>
          <p><?php echo $site->namaweb ?></p> -->
          <p>Pengumuman</p>
        </div>


        <div class="row">

          <?php  
            if($berita) {
            foreach($berita as $berita) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                    <!-- <a href="{{ asset('berita/detail/'.$berita->slug_berita) }}">
                      <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>" class="img-fluid img-thumbnail">
                    </a> -->
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('berita/detail/'.$berita->slug_berita) }}">
                          <?php  echo $berita->judul_berita ?>
                        </a>
                      </h3>
                    <p class="harga"><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 250, $end='...') ?></p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="<?php echo $berita->id_berita;?>" value="1" class="quantity">
                        <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
                  
            </div>
          <?php }}else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
          </div>
          <?php } ?>
          <!-- <div class="col-md-12">
            <hr>
            <p class="text-center">
              <a href="{{ asset('berita') }}" class="btn btn-success btn-smspaper"></i> Lihat berita lainnya...</a>
            </p>
            
          </div> -->
        </div>

      </div>
    </section><!-- End Contact Section -->
    
</main>

<hr>

<div class="slider">
  
    <div class="slide-track">

        <div class="slide">
          <a href="https://www.jfx.co.id/"><img src="public/upload/image/jfx-logo.png" alt=""></a>
        </div>
        <div class="slide">
          <a href="https://www.ptkbi.com/index.php/c_kbi_wppue_01_anggota_mitra#PL"><img src="public/upload/image/kbi-logo.png" alt=""></a>
        </div>
        <div class="slide">
          <a href="https://aspebtindo.org/anggota/daftar-anggota"><img src="public/upload/image/aspebtindo-logo.png" alt=""></a>
        </div>
        <div class="slide">
          <a href="https://bappebti.go.id/"><img src="public/upload/image/bappebti-logo.png" alt=""></a>
        </div>

    </div>

</div>

<style>
  .slider {
    height: 250px;
    margin: auto;
    position: relative;
    width: 90%;
    display: grid;
    place-items: center;
    overflow: hidden;
  }

  .slide-track {
    display: flex;
    width: calc(250px * 4);
  }

  .slide-track {
    display: flex;
    width: calc(250px * 4);
    /* animation: scroll 25s linear infinite; */
  }

  .slide-track:hover {
    animation-play-state: paused;
  } */

  /* @keyframes scroll {
    0% {
        transform: translateX(300px);
    }
    100% {
        transform: translateX(calc(-250px * 2));
    }
  }

  /* @keyframes scroll {
          from {
              transform: translateX(100%);
          }

          to {
              transform: translateX(-115%);
          }
        } */
     
     @keyframes scroll {
          from {
            transform: translateX(100%);
          }

          to {
            transform: translateX(-115%);
          }
        }

  .slide {
    height: 200px;
    width: 250px;
    display: flex;
    align-items: center;
    padding: 15px;
    perspective: 100px;
  }

  img {
    width: 100%;
    transition: transform 1s;
    
  }

  .img:hover {
    transform: translateZ(20px);
  }

  .slider::before,
  .slider::after {
    background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
    content: '';
    height: 100%;
    position: absolute;
    width: 15%;
    z-index: 2;
  }

  .slider::before {
    left: 0;
    top: 0;
  }

  .slider::after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
  }
</style>

<!-- <script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script> -->