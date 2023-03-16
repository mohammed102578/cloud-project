<?php $__env->startSection('content'); ?>
    <style>
a,h6 ,span ,th ,button,h5,h4 {
    font-family: 'NotoKufi';
  }

label{
    font-size: medium;
}
 

          </style>



        <!--End header-->
        <main class="main pages">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('profile.Home')); ?></a>
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.Shop')); ?></a> <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('login.Terms and Service')); ?></a>
                    </div>
                </div>
            </div>
            <div class="page-content pt-50 pb-50">
                <div class="container">







                   
                        <div class="col-lg-10 m-auto">
                            <div class="row">


<div class="card" style="height: auto">
    <div class="card-header">
        <h4 class="text-body text-center"><?php echo e(trans('login.Terms and Service')); ?></h4>

        
    </div>

    <div class="card-body">
    <div class="row">
        
<p><?php


   if($Term_Service ==null){
    echo "";
   }else{
    echo $Term_Service->term_of_service;
   }



?></p>



    </div>
                            </div> 
                        </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

     













       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/term_service.blade.php ENDPATH**/ ?>