<?php $__env->startSection('content'); ?>
<?php if(Session::has('token')): ?>
    <script>
     // or
      window.location.href = '<?php echo e(route("index")); ?>'; //using a named route
     </script>
     <?php endif; ?>
     <style>
        
        a , h1, button,h5{
          font-family: 'NotoKufi';
        }
                </style>
                <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('Details.Home')); ?></a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('register.verify account')); ?></a>
                   
                </div>
            </div>
        </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 pr-30 d-none d-lg-block">
                                    <img class="border-radius-15" src="<?php echo e(URL::asset('image/lifestyle.jpg')); ?>" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5"><?php echo e(trans('register.verify account')); ?></h1>
                                         
                                            </div>
                                            <form action="<?php echo e(route('verify')); ?>" method="post">
                                                <div class="form-group">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="text" required="" name="code" placeholder="<?php echo e(trans('register.Your Code')); ?>" />
                                                </div>
                                                <div class="form-group">
                                        
                                                </div>
                                                <div class="login_footer form-group">
                                               <a href="<?php echo e(route('resend')); ?>"><?php echo e(trans('register.Resend Phone')); ?></a>
                                                </div>
                                               
                                                  <div class="form-group mb-30">
                                                    <button style="font-family: 'NotoKufi';" type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="submit"><?php echo e(trans('register.submit')); ?></button>
                                                </div>
                                            </form>
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
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/verify.blade.php ENDPATH**/ ?>