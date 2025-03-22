<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Inventory Management</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('/favicon.ico')); ?>" />
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/fontawesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/toastify.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('js/toastify-js.js')); ?>"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.3/axios.min.js"></script>
    <script src="<?php echo e(asset('js/config.js')); ?>"></script>
</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
<div class="Line-Progress">
    <div class="indeterminate"></div>
</div>
</div>

<div>
    <?php echo $__env->yieldContent('content'); ?>
</div>
<script>

</script>

<script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\laravel_project_ostad\M16_Project\Inventory\resources\views/layouts/app.blade.php ENDPATH**/ ?>