

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Post Kunci Jawaban</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post Kunci Jawaban</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <a href="/tambahkuncijawaban" class="nav-link">
      <i class="fas fa-folder-plus" style="font-size:30px;color:rgb(87, 151, 248)"></i>
    </a>
    <div class="row">
        
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e($message); ?>

            </div>
            <?php endif; ?>
        
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Tayang</th>
                  <th scope="col">Password</th>
                  <th scope="col">Dibuat</th>
                  <th scope="col" style="display:flex; justify-content: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
        
              <?php
                $no = 1;
              ?>
        
              <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="post"><?php echo e($no++); ?></th>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->tayang); ?></td>
                <td><?php echo e($post->password); ?></td>
                <td><?php echo e($post->created_at->format('D M Y')); ?></td>
                <td style="display: flex; justify-content: center;">
                  
                  <a href="/tampilkankuncijawaban/<?php echo e($post->id); ?>" class="nav-link">
                    <i class="fas fa-edit"></i>
                  </a>

                  <a href="/deletekuncijawaban/<?php echo e($post->id); ?>" class="nav-link">
                    <i class="fas fa-trash-alt"></i>
                  </a>
        
                  <a href="/<?php echo e($post->slug); ?>" class="nav-link">
                    <i class="fas fa-eye"></i>
                  </a>

                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/kuncijawaban.blade.php ENDPATH**/ ?>