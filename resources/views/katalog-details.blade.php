@extends('layouts.katalog')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-color: #FE8E3D">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Katalog</h2>
              <p>Welcome to Katalog.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/blog" style="color: #0f88bd">Home</a></li>
            <li>Katalog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">


        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2 class="title">{{ $katalog->title }}</h2>

              <div class="content">
                <p class="post-summernote">{!! $katalog->summernote !!}</p>
              </div><!-- End post content -->
              

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              
              <ul>
                
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-color: #FE8E3D">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Kantor Pusat</span>
          </a>
          <p>PT. JEPE PRESS MEDIA UTAMA</p>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/JPBooks.id/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/jpbooksid/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCH-zcTpzZm7oA00GWaFKUeg" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="#katalog">Katalog</a></li>
            <li><a href="/blogs_details">Artikel</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jl. Karah Agung I No.45  <br>
            Surabaya, SBY 60232 <br>
            Jawa Timur <br><br>
            <strong>Phone:</strong> 031-8289999 (ext: 303) <br>
            <strong>Fax:</strong> 031-8281004 <br>
            <strong>Jam Kerja:</strong> 08.00-17.00 <br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background-color: #0097D8"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('impact/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('impact/assets/js/main.js') }}"></script>


  @endsection