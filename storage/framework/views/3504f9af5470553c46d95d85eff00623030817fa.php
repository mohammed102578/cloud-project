<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(URL::asset('image/logo.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(URL::asset('image/logo.png')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Extra details for Live View on GitHub Pages -->
    
    <title><?php echo e(trans('login.lifestyle')); ?> </title>

    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/css/paper-dashboard.css?v=2.0.0')); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('admin/assets/demo/demo.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <?php if(App::getLocale() == 'en'): ?>
    <link href="<?php echo e(URL::asset('admin/assets/css/ltr.css')); ?>" rel="stylesheet">


<style>

@font-face {
  font-family:'Aileron' ;
 
  src: url("<?php echo e(asset('assets')); ?>/fonts/Aileron-Regular.otf");
}
@import  url("<?php echo e(asset('assets')); ?>/fonts/Aileron-Regular.otf");

body{
  font-family: 'Aileron';
}

h3,h6,a,span,div{
  font-family: 'Aileron';
}




</style>
    <?php else: ?>
    <link href="<?php echo e(URL::asset('admin/assets/css/rtl.css')); ?>" rel="stylesheet">

<style>
 @font-face {
  font-family:'NotoKufi' ;
 
  src:url("<?php echo e(asset('assets')); ?>/fonts/Noto Kufi Arabic Regular.ttf");
}
            @import  url("<?php echo e(asset('assets')); ?>/fonts/Noto Kufi Arabic Regular.ttf");

body{
  font-family: 'NotoKufi';
}

h3,h6,a,span,div{
  font-family: 'NotoKufi';
}




</style>
    <?php endif; ?>

       
</head>

<body>
<?php if(auth()->guard('admin')->guest()): ?>
<?php echo $__env->make('admin.app.layouts.page_templates.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(auth()->guard('admin')->check()): ?>
<?php echo $__env->make('admin.app.layouts.page_templates.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
  

    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
       
    <script src="<?php echo e(asset('admin/assets/js/core/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
    <script src="<?php echo e(asset('admin/assets/js/plugins/chartjs.min.js')); ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('admin/assets/js/plugins/bootstrap-notify.js')); ?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('admin/assets/js/paper-dashboard.min.js?v=2.0.0')); ?>" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('admin/assets/demo/demo.js')); ?>"></script>
    <!-- Sharrre libray -->
    <script src="<?php echo e(asset('admin/assets/demo/jquery.sharrre.js')); ?>"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>


   
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->make('admin.app.layouts.navbars.fixed-plugin-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</body>

</html>
<?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/app/layouts/app.blade.php ENDPATH**/ ?>