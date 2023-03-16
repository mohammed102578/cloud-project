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
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.Shop')); ?></a> <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('login.About')); ?></a>
                    </div>
                </div>
            </div>
            <div class="page-content pt-50 pb-50">
                <div class="container">







                   
                        <div class="col-lg-10 m-auto">
                            <div class="row">


<div class="card" style="height: auto">
<?php if(isset($about)): ?>
    <div class="card-header">
        <h4 class="text-body pull-left"><?php echo e($about->about); ?></h4>

        <img src="<?php echo e($about->company_image); ?>" class="rounded-circle pull-right" alt="Cinque Terre" style="  width: 68px; height: 78px;"> 
    </div>

    <div class="card-body">
    <div class="row">
        <div class="form-group col-md-12">
            <label > <?php echo e(trans('profile.Name')); ?>: <span class="required"></span></label>
            <span><?php echo e($about->about); ?></span>
        </div>
        
        <div class="form-group col-md-12">
            <label> <?php echo e(trans('profile.Phone')); ?> :<span class="required"></span></label>
            <?php echo e($about->phone); ?></span>
        </div>
        <div class="form-group col-md-12">
            <label> <?php echo e(trans('profile.Whats App')); ?> :<span class="required"></span></label>
            <?php echo e($about->watsapphone); ?></span>
        </div>
                              
        <div class="form-group col-md-12">
            <label> <?php echo e(trans('login.About')); ?> :<span class="required"></span></label>
            <?php echo e($about->about_company); ?></span>
        </div>

<?php endif; ?>



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
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/about.blade.php ENDPATH**/ ?>