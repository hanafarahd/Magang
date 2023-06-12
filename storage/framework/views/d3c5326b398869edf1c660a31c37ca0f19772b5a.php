

<?php $__env->startSection('content'); ?>
    
<body>
  <h1 class="text-center mb-5 mt-5"> Tambah Post Artikel </h1>

  <div class="container mb-5">
   
    <div class="row justify-content-center">
      <div class="col-8">
          <div class="card">
              <div class="card-body">
                  <form action="/insertpost" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>


                  <div class="">
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
                          <option selected>Select your category</option>
                          <option value="Umum">Umum</option>
                          <option value="Ilmiah">Ilmiah</option>
                        </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tayang</label>
                    <select class="form-select" name="tayang" aria-label="Default select example">
                        <option selected>Select your show</option>
                        <option value="Iya">Iya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Image</label>
                    <input type="file" name="gambar" class="form-control">
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/tambahpost.blade.php ENDPATH**/ ?>