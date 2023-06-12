

<?php $__env->startSection('content'); ?>
    
<body>

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="zoom-out">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Produk Pilihan</h2>
      </div>

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
      <?php $__currentLoopData = $katalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $katalogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide">
          <img src="<?php echo e(asset('imagekatalog/'.$katalogs->image)); ?>" class="img-fluid"  alt="">
        </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Portfolio Section ======= -->
<section id="katalog" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Katalog</h2>
      
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

      <div>
        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-books">Books</li>
        </ul><!-- End Portfolio Filters -->
      </div>

      <div class="row gy-4 portfolio-container">

        <?php $__currentLoopData = $katalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $katalogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
          
          <div class="portfolio-wrap">

            <div class="d-flex justify-content-center align-items-center">
              <a href="<?php echo e(asset('imagekatalog/'.$katalogs->image)); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="<?php echo e(asset('imagekatalog/'.$katalogs->image)); ?>" class="img-fluid" alt="" style="height: 300px;">
              </a>
            </div>
            
            <div class="portfolio-info">

              <p class="post-category"><?php echo e($katalogs->category); ?></p>

            <h2 class="title">
              <a href="<?php echo e(url('/katalog_details/'.$katalogs->slug)); ?>"><?php echo e($katalogs->title); ?></a>
            </h2>

            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div><!-- End Portfolio Container -->

    </div>

  </div>
</section><!-- End Portfolio Section -->


  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Artikel Pilihan</h2>
        <p></p>
      </div>
      
      <div class="row gy-4">
        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-gambar">
              <img src="<?php echo e(asset('imagepost/'.$blogs->image)); ?>" alt="" class="img-fluid">
            </div>
            
            <p class="post-category"><?php echo e($blogs->category); ?></p>

            <h2 class="title">
              <a href="<?php echo e(url('/blog_details/'.$blogs->slug)); ?>"><?php echo e($blogs->title); ?></a>
            </h2>

            <div class="d-flex align-items-center">
              <div class="post-meta">
                <p class="post-date">
                  <time datetime="2022-01-01"><?php echo e($blogs->created_at); ?></time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->


</body>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/blog.blade.php ENDPATH**/ ?>