

<?php $__env->startSection('content'); ?>

<body>
  <br>
  <br>
  <br>
  <h1 class="text-center mb-5 mt-5"> Edit Post Katalog </h1>

  <div class="container mb-5">
   
    <div class="row justify-content-center">
      <div class="col-8">
          <div class="card">
              <div class="card-body">
                  <form action="/insertkatalog" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="<?php echo e($post->title); ?>">
                      </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Summernote
                          </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <textarea id="summernote" name="summernote">
                            <?php echo $post->summernote;?>
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                  <!-- ./row -->

                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category</label>
                      <select class="form-select" name="category" aria-label="Default select example">
                          <option selected>"<?php echo e($post->category); ?>"</option>
                          <option value="Umum">Ensiklopedi</option>
                          <option value="Ilmiah">Ilmiah</option>
                        </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tayang</label>
                    <select class="form-select" name="tayang" aria-label="Default select example">
                        <option selected>"<?php echo e($post->tayang); ?>"</option>
                        <option value="Iya">Iya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Image</label>
                    <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="<?php echo e($post->gambar); ?>">
                  </div>
            
      
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
          </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

<?php $__env->stopSection(); ?>

<!--[NOTES] date 23/02/2023, 
Problem : input Summernote tidak keluar dan ada tulisan error 'files'
setelah di submit pada web. 

Solusi : Insert dalam suatu table dilihat dalam perbaris, isi ada/tidak
harus dilihat perbaris terdiri dari kolom-kolom yang sudah diinput 
dan ketika kolom tersebut ada pilihan NULL/tidak. Ketika NULL itu dicentang
dalam 1 kolom maka kolom tersebut boleh menerima inputan kosongan (tanpa diisi),
ketika ada NULL tidak dicentang maka 1 baris tersebut dalam kolom itu harus diisi
dan fungsinya wajib.
-->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/tampilkatalog.blade.php ENDPATH**/ ?>