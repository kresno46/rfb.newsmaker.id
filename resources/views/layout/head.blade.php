<?php 
$site = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $deskripsi }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $site->namaweb }}">
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('/public/upload/image/rfb_logoo.png') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('public/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/template/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('public/template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/template/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('public/template/assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('public/admin/vendor/jquery/jquery.min.js') }}"></script>
    <!-- JQUERY UI -->
    <link rel="stylesheet" href="{{ asset('public/jquery-ui/jquery-ui.min.css') }}">
    <script src="{{ asset('public/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script src="{{ asset('public/owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- sweetalert -->
    <script src="{{ asset('public/sweetalert/js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/sweetalert/css/sweetalert.css') }}">
    <style type="text/css" media="screen">
      a.orange {
        color: #FFF;
      }
      .belanja {
        padding: 6px;
        min-width: 35px;
        height: 35px;
        border-radius: 6px;
        background-color: #666;
        color: #FFF;
        border: solid 2px #000;
      }
      .nav-menu {
        margin-top: 10px;
      }
      .kotak {
        color: #666 !important;
        background-color: #FFF;
        margin: 2% 0 10% 0;
        padding: 20px 20px 40px 20px;
        border-radius: 20px;
        border: solid 10px #ffcc00;
      }
      .kotak h1 {
        color: #571C5C !important;
        font-size: 22px !important;
      }
      /* Produk */
      h3.reseller {
        font-size: 18px;
      }
      .produk {
        min-height: 300px;
      }
      .produk img:hover {
      background-color: orange;
    }
    .produk .harga {
      color: #d8730e;
    }
    .produk h3, .produk h1 {
      font-size: 18px;
    }
    .produk p, .produk h3 {
      padding: 0 0 5px 0 !important;
      margin: 0 !important;
    }
    .produk .keterangan {
      text-align: center;
    }
    .produk .link-produk {
      padding-top: 10px;
    }
    .produk h1 {
      margin: 0 0 5px 0 !important;
      padding: 0 !important;
      border-bottom: solid thin #EEE;
    }
    #hero h2 {
      color: #000;
    }
    .slideku h2 {
      color: #FFF !important;
    }
    .slideku h1 {
      font-size: 32px !important;
    }
    /* table */
    table.table td, table.table.th {
      padding: 5px 10px;
    }
    a.text-kuning {
      color: yellow;
    }
    a:hover.text-kuning {
      color: #F5F5F5;
    }
    .galeri {
      margin-bottom: 30px;
    }
    /* Popup styles */
    .popup-overlay {
      opacity: 0;
      visibility: hidden;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 9999;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
    }
    .popup-overlay.show {
      opacity: 1;
      visibility: visible;
    }
    .popup-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -70%);
      background: white;
      padding: 20px;
      border-radius: 8px;
      max-width: 500px;
      width: 90%;
      z-index: 10000;
      opacity: 0;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      cursor: default;
    }
    .popup-overlay.show .popup-container {
      transform: translate(-50%, -50%);
      opacity: 1;
    }
    .popup-close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      font-size: 24px;
      color: #666;
    }
    .popup-content {
      text-align: center;
    }
    .popup-content img {
      max-width: 100%;
      height: auto;
      margin-bottom: 15px;
    }
    </style>
<?php echo $site->metatext; ?>
    
    <!-- Popup HTML -->
    <div class="popup-overlay" id="adPopup">
      <div class="popup-container">
        <div class="popup-close" onclick="closePopup()">&times;</div>
        <div class="popup-content">
          <img src="{{ asset('public/upload/image/rfb_logoo.png') }}" alt="Advertisement">
          <h3>Welcome to {{ $site->namaweb }}</h3>
          <p>Join us now and start your trading journey!</p>
          <a href="https://regol.rifan-financindo-berjangka.co.id/" class="btn btn-success">Register Now</a>
        </div>
      </div>
    </div>

    <!-- Popup Script -->
    <script>
      function showPopup() {
        document.getElementById('adPopup').classList.add('show');
      }
      
      function closePopup() {
        document.getElementById('adPopup').classList.remove('show');
      }
      
      // Show popup when page loads with a nice fade effect
      window.addEventListener('load', function() {
        setTimeout(showPopup, 1500); // Increased delay for better user experience
      });

      // Close popup when clicking outside
      document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('adPopup');
        const container = popup.querySelector('.popup-container');
        
        popup.addEventListener('click', function(e) {
          // Close only if clicking outside the container
          if (e.target === popup) {
            closePopup();
          }
        });

        // Prevent clicks inside the container from closing the popup
        container.addEventListener('click', function(e) {
          e.stopPropagation();
        });
      });
    </script>
</head>

<body>