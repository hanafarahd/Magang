@extends('layouts.kjawabans')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/kjawabans" style="color: #0f88bd">Back to Kunci Jawaban</a></li>
            <li class="title">{{ $kjawabans->title }}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog" onChange="jawaban()">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">


              <h2 class="title">{{ $kjawabans->title }}</h2>

              @if($kjawabans->password == $pass)
              <?php echo $kjawabans->summernote; ?>
              @else

              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-12 col-lg-4">
                  </div>
              <div class="col-12 col-lg-4">
                <div class="search-form">
                  <span style="font-weight:bold;">Password</span>
                  @if($kjawabans->password == $pass)
                  @else

                  @endif
                  <form action="/{{ $kjawabans->slug }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="display: flex;">
                      <input type="text" id="pass" name="pass" value="{{ $kjawabans->pass }}">
                        <button type="submit" style="background-color:rgb(255, 255, 255)">
                          <span><i class="bi bi-search"></i></span>
                        </button>
                    </div>
                    
                  </form>
                </div>
              </div>
              <div class="col-12 col-lg-4"
            </div>
          </div>
        </div>

        @endif
       


              <div class="meta-top">
                <ul>
                </ul>
              </div><!-- End meta top -->

              <div class="content" id="note">
                
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            

          </div>

          <div class="col-lg-4">

            <div class="sidebar">


              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->


              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-color: #FE8E3D">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/blog" class="logo d-flex align-items-center">
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
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#katalog">Katalog</a></li>
            <li><a href="/blogs_details">Artikel</a></li>
            <li><a href="#contact">Contact</a></li>
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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background-color: #0f88bd"><i class="bi bi-arrow-up-short"></i></a>

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

  <script type="text/javascript">
    function jawaban()
    {
     var chosenoption=document.getElementById("blog").options[document.getElementById("blog").selectedIndex]
     if (chosenoption.value=="$kjawabans->pass"){
      document.getElementById("note").style.display = '';
      
     }
     else if (chosenoption.value=="$kjawabans->summernote"){
      
      document.getElementById("note").style.display = 'none';
     }
     else {
      
     }
    }
  </script>


@endsection