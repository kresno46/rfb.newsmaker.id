<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1><?php echo $title ?></h1>
              <hr>
            </div>

            <!-- Info Kantor + Google Map -->
            <div class="col-md-12">
              <div style="display: flex; gap: 20px; flex-wrap: wrap; align-items: flex-start; justify-content: center;">
                <!-- Informasi Kantor -->
                <div style="flex: 1; min-width: 300px;">
                  <h1>KANTOR PUSAT</h1>
                  <strong>JAKARTA</strong>
                  <!-- <br><?php echo nl2br($site->alamat) ?> -->
                    <style>
                      .alamat-link {
                        color: inherit;
                        text-decoration: none;
                      }
                      .alamat-link:hover,
                      .alamat-link:active {
                        color: #28a745;
                        text-decoration: underline;
                      }
                    </style>
                  <br><a href="https://maps.google.com/?q=<?php echo urlencode($site->alamat); ?>" class="alamat-link" target="_blank">AXA Tower Kuningan City Lt. 23, 25, 30 & 35 Jl. Prof. DR. Satrio Kav. 18, Kuningan Setiabudi, Jakarta 12940</a>
                  <br>Telepon : <?php echo $site->telepon ?>
                  <br>Email : <?php echo $site->email ?>
                  <hr>
                  <!-- Link Pengaduan -->
                  <p style="color: #28a745;">
                    <a href="https://pengaduan.bappebti.go.id/"><strong>PENGADUAN ONLINE</strong></a>
                  </p>
                  <p style="color: #28a745;">
                    <a href="mailto:corporate@rifan-financindo-berjangka.co.id"><strong>PENYAMPAIAN KELUHAN ONLINE</strong></a>
                  </p> 
                </div>

                <!-- Google Map -->
                <div style="width: auto;">
                  <style type="text/css" media="screen">
                    iframe {
                      width: auto;
                      height: 250px;
                      border: 0;
                    }
                  </style>
                  <div class="kotak" style="border: solid 3px #eee; padding: 10px; border-radius: 5px; background-color: #F5F5F5;">
                    <?php echo $site->google_map ?>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Daftar Kantor Cabang -->
            <div class="col-md-12">
              <h1>KANTOR CABANG</h1>

              <style>
                .alamat-link {
                  color: inherit;
                  text-decoration: none;
                }
                .alamat-link:hover,
                .alamat-link:active {
                  color: #28a745;
                  text-decoration: underline;
                }
              </style>

              <?php
              $cabang = [
                ['nama' => 'MEDAN', 'alamat' => 'Best & Grow Tower (J.W.MARRIOT) Lt. 12, Unit #1205-1209 Jl. Putri Hijau No. 10, Medan 20111', 'telp' => '(061) 414 0575', 'fax' => '(061) 414 0576', 'maps' => 'https://maps.google.com/?q=Best+%26+Grow+Tower+Medan'],
                ['nama' => 'PALEMBANG', 'alamat' => 'Kompleks Pertokoan Palembang Square Unit 112.113.115 Jl. Kampus POM IX, Palembang 30137', 'telp' => '(0711) 380 555', 'fax' => '(0711) 380 666', 'maps' => 'https://maps.google.com/?q=Palembang+Square+Kompleks+Pertokoan'],
                ['nama' => 'SEMARANG', 'alamat' => 'Ruko S. Parman Corner Unit 5 & 6 Jl. S. Parman No. 47A, Semarang 50231', 'telp' => '(024) 850 8868', 'fax' => '(024) 850 8869', 'maps' => 'https://maps.google.com/?q=Jl.+S.+Parman+No.+47A,+Semarang'],
                ['nama' => 'JAKARTA', 'alamat' => 'DBS Bank Tower LT. 14 & 20, CIPUTRA WORLD I Jl. Prof. DR. Satrio Kav. 3-5, Jakarta Selatan 12940', 'telp' => '(021) 2988 8700', 'fax' => '(021) 2988 8701', 'maps' => 'https://maps.google.com/?q=DBS+Bank+Tower+Jakarta'],
                ['nama' => 'SURABAYA', 'alamat' => 'Ciputra World Office Tower - Lantai 32 Kawasan Ciputra World, Jl. Mayjen Sungkono 89, Surabaya 60224', 'telp' => '(031) 6000 9800', 'fax' => '(031) 6000 7800', 'maps' => 'https://maps.google.com/?q=Jl.+Mayjen+Sungkono+89,+Surabaya'],
                ['nama' => 'PEKANBARU', 'alamat' => 'Jl. Jend. Sudirman No. 453, Pekanbaru - Riau 28116', 'telp' => '(0761) 7870018', 'fax' => '(0761) 7870019', 'maps' => 'https://maps.google.com/?q=Jl.+Jend.+Sudirman+No.+453,+Pekanbaru'],
                ['nama' => 'BANDUNG', 'alamat' => 'Jl. Pajajaran No. 94, Bandung Jawa Barat 40173', 'telp' => '(022) 20599899', 'fax' => '(022) 20599919', 'maps' => 'https://maps.google.com/?q=Jl.+Pajajaran+No.+94,+Bandung'],
                ['nama' => 'SOLO', 'alamat' => 'Jl. Adisucipto No. 86, Surakarta, Jawa Tengah 57144', 'telp' => '(0271) 738 111', 'fax' => '(0271) 738 222', 'maps' => 'https://maps.google.com/?q=Jl.+Adisucipto+No.+86,+Surakarta'],
                ['nama' => 'YOGYAKARTA', 'alamat' => 'Malioboro City, Jl. Laksda Adisucipto KM.8, Yogyakarta 55281', 'telp' => '(0274) 280 3111', 'fax' => '(0274) 280 3222', 'maps' => 'https://maps.google.com/?q=Malioboro+City+Yogyakarta'],
                ['nama' => 'BALIKPAPAN', 'alamat' => 'Jl. Jend. Sudirman No. 47, Balikpapan 76114', 'telp' => '(0542) 731 627', 'fax' => '(0542) 731 513', 'maps' => 'https://maps.google.com/?q=Jl.+Jend.+Sudirman+No.+47,+Balikpapan'],
                ['nama' => 'SURABAYA II', 'alamat' => 'Pakuwon Tower - Lantai 26, Jl. Embong Malang No. 21 - 31, Surabaya 60261', 'telp' => '(031) 992 54889', 'fax' => '(031) 992 49600', 'maps' => 'https://maps.google.com/?q=Pakuwon+Tower+Embong+Malang,+Surabaya']
              ];

              foreach ($cabang as $k) {
                echo '<p>';
                echo '<strong>' . $k['nama'] . '</strong><br>';
                echo '<a href="' . $k['maps'] . '" class="alamat-link" target="_blank">';
                echo nl2br($k['alamat']);
                echo '</a><br>';
                echo 'Telepon : ' . $k['telp'] . ', Fax : ' . $k['fax'];
                echo '</p>';
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero -->