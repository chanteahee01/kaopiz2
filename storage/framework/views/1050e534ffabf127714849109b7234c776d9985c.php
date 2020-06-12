<?php $__env->startSection('title', "Trang chủ"); ?>
<?php $__env->startSection('content'); ?>

				<div class="row">
					<div class="col-sm-3"></div>
					<?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>
					<?php if(Session::has('thanhcong')): ?>
						<div class="alert alert-success"><?php echo e(Session::get('thanhcong')); ?></div>
					<?php endif; ?>
 <center>
    <form action="<?php echo e(route('post.create')); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="text" name="title" size="40"><br><br>
       <textarea name="content" id="" cols="42" rows="5"></textarea>
         <center> <input type="submit" name="Thêm"></center>
      </form>
 </center>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hocvue\resources\views/Post/index.blade.php ENDPATH**/ ?>