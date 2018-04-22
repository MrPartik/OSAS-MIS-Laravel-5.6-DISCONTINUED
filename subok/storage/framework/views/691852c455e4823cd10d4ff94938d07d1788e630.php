<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <?php echo $__env->yieldContent('title'); ?>
        <?php echo $__env->make('Layout.DefaultHeaderLinks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
    </head>
    <body>        
        <?php echo $__env->make('Layout.DefaultFooterLinks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
