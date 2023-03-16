<style>
.ffoter{
position: relative;
  width: 87px;
  min-height: 1px;
  padding-left: 0px;
  padding-right: 15px;
}
.breadcrumb span {
  position: relative;
  text-align: center;
  padding: 0 10px;
  color: #fff;
}
@media  screen and (min-width:991px){
#downloadApk{
 
}
}


@media  screen and (max-width:568px){
#download{
  margin-top:20px;
  float: center;
 
}
}


</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/+249966137539?text=I'm%20interested%20in%20your%20car%20for%20sale" class="float" target="_blank" style="


position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:30px;
    box-shadow: 2px 2px 3px #999;
  z-index:100;


">
<i class="fa fa-whatsapp my-float" style="margin-top:16px;"></i>
</a>

          <footer>
            
            <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                
                <div class="row align-items-center">
                    <div class="col-12 mb-30">
                        <div class="footer-bottom"></div>
                    </div>






                    <div class="page-header breadcrumb-wrap">
                        <div class="container">
                            <div class="breadcrumb col-lg-12" style="background-color: #a6d71c">
                                <div class="col-sm-4 col-lg-6 col-md-6  text-center">
                                    <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('home')); ?>" rel="nofollow"><?php echo e(trans('category.Home')); ?></a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i>
                                <a href="<?php echo e(route('about_auth')); ?>"><?php echo e(trans('login.About')); ?></a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i> <a href="<?php echo e(route('Term_Service_auth')); ?>" > <?php echo e(trans('login.Terms and Service')); ?></a>
                                    <?php endif; ?>
                                    <?php if(auth()->guard()->guest()): ?>

                                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><?php echo e(trans('category.Home')); ?></a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i>
                                <a href="<?php echo e(route('about')); ?>"><?php echo e(trans('login.About')); ?></a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i> <a href="<?php echo e(route('Term_Service')); ?>" > <?php echo e(trans('login.Terms and Service')); ?></a>
                                    <?php endif; ?>
                                </div>
                            

                            </div>
                        </div>
                    </div>














                    <div class="col-sm-4 col-lg-6 col-md-6 text-center">
                        <p class="font-sm mb-0">&copy; <?php echo e(Date('Y')); ?><?php echo e(trans('login.All rights reserved')); ?>, <strong class="text-brand"><?php echo e(trans('login.lifestyle')); ?></strong> 
                            

                        </p>
                    </div>
                   
                    <div class="col-sm-4 col-lg-6 col-md-6 text-center">
                        <img style="width:200px;" src="<?php echo e(URL::asset('image/lifestyle.jpg')); ?>" class="rounded" alt="Cinque Terre">        
                 
                    </div>

                    
                </div>
            </div>
        </footer>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        
                        <img style="width:50px;height:50px;" src="<?php echo e(asset('assets')); ?>/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div>
  
 <!-- cdn -->
<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>




 <!-- cdn -->
 <script src="<?php echo e(URL::asset('/js/toastr.js')); ?>"></script>
 <script src="<?php echo e(asset('assets')); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/slick.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/jquery.syotimer.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/waypoints.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/wow.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/perfect-scrollbar.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/magnific-popup.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/select2.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/counterup.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/jquery.countdown.min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/images-loaded.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/isotope.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/scrollup.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/jquery.vticker-min.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/jquery.theia.sticky.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/plugins/jquery.elevatezoom.js"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/jquery.validate.js"></script>

        
        <!-- Template  JS -->
        <script src="<?php echo e(asset('assets')); ?>/js/main.js?v=4.0"></script>
        <script src="<?php echo e(asset('assets')); ?>/js/shop.js?v=4.0"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>


    
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/includes/footer.blade.php ENDPATH**/ ?>