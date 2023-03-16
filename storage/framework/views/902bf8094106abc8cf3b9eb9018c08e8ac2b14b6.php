<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo e(trans('login.lifestyle')); ?> </title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets')); ?>/imgs/theme/favicon.svg" />

        <!-- Template CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/6.2.1/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/plugins/animate.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/main.css?v=4.0" />
        <!-- Style css -->

        <script src="<?php echo e(asset('assets')); ?>/js/jquery.validate.js"></script>

        <script src="<?php echo e(asset('assets')); ?>/js/jquery.validate.js"></script>


        <?php if(App::getLocale() == 'en'): ?>
            <link href="<?php echo e(URL::asset('css/ltr.css')); ?>" rel="stylesheet">
            <style>
            .product-cart-wrap .product-card-bottom .add-cart .add {
            padding: 8px;
             
            }
            </style>




<style>

@font-face {
  font-family:'Aileron' ;
 
  src: url("<?php echo e(asset('assets')); ?>/fonts/Aileron-Regular.otf");
}
@import  url("<?php echo e(asset('assets')); ?>/fonts/Aileron-Regular.otf");

body{
  font-family: 'Aileron';
}

h3,h6,a,span,div,button{
  font-family: 'Aileron';
}

</style>
        <?php else: ?>
            <link href="<?php echo e(URL::asset('css/rtl.css')); ?>" rel="stylesheet">
            <style>
            .product-cart-wrap .product-card-bottom .add-cart .add {
            padding: 8px;
             margin-left: 23px;
            }

            @font-face {
  font-family:'NotoKufi' ;
 
  src:url("<?php echo e(asset('assets')); ?>/fonts/Noto Kufi Arabic Regular.ttf");
}
            @import  url("<?php echo e(asset('assets')); ?>/fonts/Noto Kufi Arabic Regular.ttf");

      
body{
  font-family: 'NotoKufi';
}

h3,h6,a,span,div,button{
  font-family: 'NotoKufi';
}


</style>

        <?php endif; ?>
        <style>
   @media  only screen and (max-width: 768px){
.product-cart-wrap .product-img-action-wrap .product-action-1 {
  min-width: 30px;
}

      }


#add:hover {
  background-color:#fff;
  color: #fff;
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
  -webkit-box-shadow: 5px 5px 15px#fff;
  box-shadow: 5px 5px 15px #fff;
}

.product-cart-wrap .product-card-bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: normal;
  margin-top: 15px;
}
        </style>
    </head>
    
   
    <body>
      
<?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/includes/headnotauth.blade.php ENDPATH**/ ?>