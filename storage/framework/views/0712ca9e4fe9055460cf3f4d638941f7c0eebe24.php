

<?php $__env->startSection('content'); ?>

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="">
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
              <li><a href="/blog" style="color: #0f88bd">Home</a></li>
              <li>Contact</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
  
   <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact</h2>
      </div>

      <div class="row gx-lg-0 gy-4">
        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center" style="background-color: #0f88bd">
            <div class="info-item d-flex" style="background-color: #0097D8">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Jl. Karah Agung No.45, Karah, Kec. Jambangan, Kota SBY, Jawa Timur 60232
                </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" style="background-color: #0097D8">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>redaksi.jpbooks@gmail.com   marketing.jpbooks@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" style="background-color: #0097D8">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>031-8289999</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" style="background-color: #0097D8">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 8AM - 17PM</p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <form action="/insertcontact" method="post" role="form" class="php-email-form">
           <?php echo csrf_field(); ?>
            <div class="row">
              
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" style="background-color: #0097D8">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2><strong>Kantor Cabang</strong></h2>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-lg-12">
  
              <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      Cabang Nganjuk
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Jl. Raya Ngajrek Km 10 Sambirejo Kec. Tanjung Anom – Nganjuk. Telp : (0858)773500 Fax : (0858)773300.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Cabang Jember
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Jl. Imam Bonjol 129 Tegal Besar Kec. Kaliwates – Jember. Telp (0331)320300 Fax : (0331)320190.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      Cabang Malang
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Jl. Raya Sawojajar No. 107C, Sawojajar – Malang.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      Cabang Lombok
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Bale Lumbung Residence 2, Blok V 10 No.8 Lombok Barat.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
  
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
          
        </div>
      </div>
  
    </footer><!-- End Footer -->
    <!-- End Footer -->
  
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background-color: #0097D8"><i class="bi bi-arrow-up-short"></i></a>
  
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('impact/assets/vendor/php-email-form/validate.js')); ?>"></script>
  
    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('impact/assets/js/main.js')); ?>"></script>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/contact.blade.php ENDPATH**/ ?>