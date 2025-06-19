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

          <!-- {{-- Slide tambahan dengan background perhatian.jpg --}} -->
        <div class="item" style="background: url('{{ asset('public/upload/image/perhatian.jpeg') }}') center center / cover no-repeat; color: white;">
          <div class="row" style="min-height: 500px; display: flex; flex-direction: column; justify-content: flex-start; padding: 60px 30px;">

            <!-- {{-- Konten tambahan bisa ditaruh di bawah sini --}} -->
            <div class="col-lg-12 text-center mt-auto">
            <!-- {{-- Anda bisa menambahkan tombol atau keterangan lain di sini --}} -->
            </div>

          </div>
        </div>

        <style>
          .item {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            width: 100%;
            min-height: 500px;
          }

          @media (max-width: 768px) {
            .item {
              background-size: cover;
              background-position: center center;
              min-height: 400px; 
              padding: 30px 15px;
            }
          }
        </style>

      </div>
    </div>
  </div>

  <style>
    .hero-img img {
      display: block;
      margin: 0 auto;
    }

    .slideku {
      text-align: center;
      margin-top: 20px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .slideku .text-center.text-lg-left {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }

    .slideku .btn-get-started {
      min-width: 140px;
      text-align: center;
    }
  </style>

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
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6">
    <?php if ($produks): ?>
        <?php foreach ($produks as $produk): ?>
            <div class="col mb-4">
                <div class="produk text-center">
                    <figure class="thumbnail">
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                            <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="img-fluid img-thumbnail">
                        </a>
                    </figure>
                    <div class="keterangan">
                        <h3>
                            <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                                {{ $produk->nama_produk }}
                            </a>
                        </h3>
                        <p class="harga">{{ $produk->harga_jual }}</p>
                    </div>
                    <!-- <div class="link-produk">
                        <p>
                            <input type="hidden" name="quantity" id="{{ $produk->id_produk }}" value="1" class="quantity">
                            <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                        </p>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-md-12">
            {{ $produks->links() }}
        </div>
    <?php else: ?>
        <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
        </div>
    <?php endif; ?>
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
                  <!-- <figure class="thumnail">
                      <img src="\official\rfb-official\public\upload\image\gmbr_berita1.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure> -->
                  <p class="harga">06 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('wakil_pialang/berita1') }}">
                          Trump orders 100% tariff on foreign-made movies to save 'dying' Hollywood
                        </a>
                      </h3>
                    <p class="harga">U.S. President Donald Trump on Sunday announced a 100% tariff on movies produced outside the country, saying the American movie industry was dying a "very fast death" due to the incentives that...</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="{{ asset('wakil_pialang/berita1') }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <!-- <figure class="thumnail">
                      <img src="\official\rfb-official\public\upload\image\gmbr_berita2.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure> -->
                  <p class="harga">06 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('wakil_pialang/berita1') }}">
                          Trump Blocks Harvard From New Research Funding In Latest Blow
                        </a>
                      </h3>
                    <p class="harga">The Trump administration has declared Harvard University ineligible for new federal research grants in the latest escalation between the White House and the Ivy...</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="{{ asset('wakil_pialang/berita1') }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <!-- <figure class="thumnail">
                      <img src="\official\rfb-official\public\upload\image\gmbr_berita3.jpg" alt="" class="img-fluid img-thumbnail">
                  </figure> -->
                  <p class="harga">07 MAY 2025</p>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('wakil_pialang/berita1') }}">
                          Trump in no rush for trade deals, wants everyone to "pay to shop" in America
                        </a>
                      </h3>
                    <p class="harga">President Trump offered some fresh comments on trade deals Tuesday, suggesting he is in no real hurry to sign any deals despite the clock ticking on the 90-day reciprocal tariff pause....</p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="" value="1" class="quantity">
                        <a href="{{ asset('wakil_pialang/berita1') }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
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

<div class="container">
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
    width: 100%;
  }
  
  .slide {
    height: 200px;
    width: auto;
    display: flex;
    align-items: center;
    padding: 15px;
  }

  img {
    width: 100%;
  }

</style>