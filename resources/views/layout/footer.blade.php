<?php
use Illuminate\Support\Facades\DB;
$site       = DB::table('konfigurasi')->first();
?>
<!-- End #main --><script type="text/javascript">
  $(document).ready(function(){
    // Add
    $('.add_cart').click(function(){
      var product_id    = $(this).data("productid");
      var product_name  = $(this).data("productname");
      var product_price = $(this).data("productprice");
      var quantity      = $('#' + product_id).val();
      var pengalihan    = $('#' + product_id).val();
      $.ajax({
        url : "{{ asset('/') }}keranjang/tambah",
        method : "POST",
        data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity,pengalihan:pengalihan},
        success: function(data){
          window.location.href = "{{ asset('/') }}keranjang";
        }
      });
    });
    // Remove
    $(document).on('click','.romove_cart',function(){
      var row_id=$(this).attr("id"); 
      $.ajax({
        url : "{{ asset('/') }}keranjang/hapus",
        method : "POST",
        data : {row_id : row_id},
        success :function(data){
          window.location.href = "{{ asset('/') }}keranjang";
        }
      });
    });
    
  });
</script>
<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      items: 1,
      autoHeight: true,
      loop: false,
      center: true,
      margin: 5,
      callbacks: true,
      URLhashListener: true,
      autoplayHoverPause: true,
      startPosition: 'URLHash'
    });
  })
</script>
<script>
  
</script>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <!-- <h3><?php echo $site->namaweb?></h3> -->
               <h3>PERHATIAN!</h3>
              <div class="pb-3">
                <?php echo $site->deskripsi ?>
              </div>
              <div class="social-links mt-3">
                <a href="<?php echo $site->facebook ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?php echo $site->instagram ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="<?php echo $site->twitter ?>" class="google-plus"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/') }}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('produk') }}">Lihat Produk</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('pemesanan') }}">Pemesanan Produk</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('pembayaran') }}">Cara Pembayaran</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('kontak') }}">Kontak</a></li>
              <br><br>
              <h4 style="margin-bottom: 15px; color: #28a745; text-align: center;">
                Download Aplikasi Pro Trader
              </h4>
              <li style="margin-top: 10px; text-align: center;">
                <div>
                  <a href="https://apps.apple.com/id/app/pro-trader-royalassetindo/id6502900138?l=id" target="_blank" class="download-btn">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store" style="height: 45px; width: 155px;">
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.royalassetindo.protrader&hl=en&pli=1" target="_blank" class="download-btn">
                    <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" style="height: 65px; width: 155px ;">
                  </a>
                </div>
                <style>
                  .download-btn:hover img {
                    transform: scale(1.05);
                  }
                  @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.05); }
                    100% { transform: scale(1); }
                  }
                </style>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Pemesanan</h4> -->
            <p>
              <strong><?php echo strtoupper($site->namaweb) ?></strong>
              <br><?php echo nl2br($site->alamat) ?>
              <br>Email: <?php echo $site->email ?>
              <br>Telepon: <?php echo $site->telepon ?>
              <br>HP <i class="fab fa-whatsapp"></i>: <?php echo $site->hp ?>
              <br>Layanan pengaduan: <?php echo $site->email ?>
            </p>
            <br>
              <div style="display: flex; align-items: center; gap: 20px;">
                <img src="{{ asset('public/upload/image/NewsMaker_qrcode.png') }}" style="height: 125px; width: auto;" alt="QR Code">
                <a href="https://www.newsmaker.id/index.php/en/" target="_blank">
                  <img src="{{ asset('public/upload/image/NewsMaker23-logo-white.png') }}" style="height: auto; width: 175px;" alt="Logo">
                </a>
              </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2025, <strong><span><?php echo $site->namaweb ?></span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
        Developed by <a href="https://javawebmedia.com/">Java Web Media</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script>
$( ".datepicker" ).datepicker({
  inline: true,
  changeYear: true,
  changeMonth: true,
  dateFormat: "yy-mm-dd",
  yearRange: "1920:2020"
});

$( ".tanggal" ).datepicker({
  inline: true,
  changeYear: true,
  changeMonth: true,
  dateFormat: "dd-mm-yy",
  yearRange: "1920:2020"
});
</script>
  <script src="{{ asset('public/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/template/assets/vendor/aos/aos.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('public/template/assets/js/main.js') }}"></script>
</body>
</html>