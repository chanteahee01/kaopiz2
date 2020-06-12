<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    </style>
</head>
<body>
    <?php echo $__env->make('layouts.client-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container" style="margin-top:30px"> 
        <?php echo $__env->yieldContent('content'); ?>   
</div>
<footer>
    <?php echo $__env->make('layouts.client-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hocvue\resources\views/layouts/client-master.blade.php ENDPATH**/ ?>