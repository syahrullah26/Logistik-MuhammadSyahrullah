<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/images/IMG_8945.png') }}" rel="icon">
    <link href="{{ asset('assets/images/IMG_8945.png') }}" rel="apple-touch-icon">
    <link rel="icon" href="{{ asset('assets/images/IMG_8945.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/IMG_8945.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/IMG_8945.png') }}">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/styleProduct.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
  <link href="{{ asset('assets/css/styleNav.css') }}" rel="stylesheet">

</head>
<style>
     #full-width-main {
    margin-top: 60px;
    /* Adjust top margin if needed */
    padding: 20px;
    width: 100%;
    /* Ensure main takes full width */
  }

  @media (max-width: 1199px) {
    #full-width-main {
      padding: 20px;
      margin-left: 0;
      /* Ensure full width on smaller screens */
    }
  }

  @media (min-width: 1200px) {
    #full-width-main {
      margin-left: 0;
      /* Ensure full width on larger screens as well */
    }
  }
</style>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between w-100">
          <a href="index.php?page=beranda" class="logo d-flex align-items-center">

            <span class="d-none d-lg-block">LOGISTIK</span>
          </a>
          <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
          </button>
        </div><!-- End Logo -->
      
        <nav class="nav">
          <ul>
            <li class="nav-link">
              <a href="index.php?page=beranda">Home</a>
            </li>
            <li class="nav-link">
              <a href="/history">History</a>
            </li>
          </ul>
        </nav>
        <script>
          document.querySelector('.nav-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav').classList.toggle('active');
          });
        </script>
      </header>

      <section class="section dashboard">
        <div class="container">
            <div class="row">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
      </section>

    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      <strong><span>Logistik MuhammadSyahrullah</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
      Create by <a href="https://www.instagram.com/muhammadsyahrullah26/"> Muhammad Syahrullah</a>
    </div>
  </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <!-- Skrip Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

  
</html>

