

<?php $__env->startSection('container'); ?>
    
    <h1 class="mb-5"><?php echo e($posts->title); ?></h1>
    
    

    <p>By. Hana Farah in <a href="/categories/<?php echo e($posts->category->slug); ?>"><?php echo e($posts->category->name); ?></a></p>
    <?php echo $posts->excerpt; ?>


    <a href="/posts" class="d-block mt-3">Back to Posts</a>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/post.blade.php ENDPATH**/ ?>