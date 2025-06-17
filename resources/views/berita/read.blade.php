<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row"> 
            
            <div class="col-md-12">
              <h1 class="text-center"><?php echo $title ?></h1>
              <hr>
            </div>
              
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4 berita">
              <div class="row">
                  <style>
                    .keterangancol-md-8 {
                      text-align: center;
                      padding-left: 60px;
                      padding-right: 60px;
                    }
                    .gambar-flex {
                      display: flex;
                      justify-content: center;
                      flex-wrap: wrap;
                      gap: 20px;
                      margin-top: 30px;
                    }
                    .gambar-flex img {
                      width: 200px;
                      height: auto;
                      border-radius: 10px;
                      object-fit: cover;
                    }
                    .slider {
                      height: 250px;
                      margin: 30px auto;
                      position: relative;
                      width: 90%;
                      display: grid;
                      place-items: center;
                      overflow: hidden;
                    }
                    .slide-track {
                      display: flex;
                      width: calc(250px * 3);
                      justify-content: center;
                    }
                    .slide {
                      height: 200px;
                      width: 250px;
                      display: flex;
                      align-items: center;
                      padding: 15px;
                      perspective: 100px;
                    }
                    .slide img {
                      width: 100%;
                      transition: transform 1s;
                    }
                    .slide img:hover {
                      transform: translateZ(20px);
                    }
                  </style>
                  <div class="keterangancol-md-8">
                    <?php echo $berita->isi ?>
                  </div>

                  <!-- Member Logos Section -->
                  <div class="col-md-12">
                    <h4 class="text-center mt-4">Member of:</h4>
                    <div class="slider">
                      <div class="slide-track">
                        <div class="slide">
                          <a href="https://bappebti.go.id/"><img src="{{ asset('public/upload/image/jfx-logo.png') }}" alt="JFX"></a>
                        </div>
                        <div class="slide">
                          <a href="https://www.jfx.co.id/"><img src="{{ asset('public/upload/image/kbi-logo.png') }}" alt="KBI"></a>
                        </div>
                        <div class="slide">
                          <a href="https://www.ptkbi.com/index.php/c_kbi_wppue_01_anggota_mitra#PL"><img src="{{ asset('public/upload/image/aspebtindo-logo.png') }}" alt="Aspebtindo"></a>
                        </div>
                        <div class="slide">
                          <a href="https://bappebti.go.id/"><img src="{{ asset('public/upload/image/bappebti-logo.png') }}" alt="Bappebti"></a>
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

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero -->
