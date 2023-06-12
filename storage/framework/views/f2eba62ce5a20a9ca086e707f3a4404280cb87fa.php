

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pegawai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pegawai</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <a href="/tambahdata" class="btn btn-success">Tambah +</a>
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
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">No telp</th>
            <th scope="col">Dibuat</th>
            <th scope="col" style="display:flex; justify-content: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
  
        <?php
          $no = 1;
        ?>
  
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="data"><?php echo e($no++); ?></th>
          <td><?php echo e($data->name); ?></td>
          <td><?php echo e($data->gender); ?></td>
          <td>0<?php echo e($data->notelp); ?></td>
          <td><?php echo e($data->created_at->format('D M Y')); ?></td>
          <td style="display: flex; justify-content: center;">
            
            <a href="/tampilkandata/<?php echo e($data->id); ?>" class="nav-link">
              <i class="fas fa-edit"></i>
            </a>

            <a href="/delete/<?php echo e($data->id); ?>" class="nav-link">
              <i class="fas fa-trash-alt"></i>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/datapegawai.blade.php ENDPATH**/ ?>