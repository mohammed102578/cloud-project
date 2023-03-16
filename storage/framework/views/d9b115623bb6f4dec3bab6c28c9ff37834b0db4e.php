
<?php $__env->startSection('content'); ?>

<?php if(App::getLocale() == 'en'): ?>
<style>
  div > span {
  font-size: 16px;
  color: #5e5c59;
}
div > i {
  color: #5e5c59;
}


</style>
 <?php else: ?>

 <style>

div > span {
  font-size: 16px;
  color: #5e5c59;
}
div > i {
  color: #5e5c59;
}
  
  </style>
    <?php endif; ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "> <?php echo e(__('messages.Settings')); ?> </h4>
           
            </div> 
<div class="card-body">
<div class="card-body ">
<div class="middlebar " >
<div class="bg-gradient-success">
  <div class="w3-container w3-section ">

  
</div>
</div>

<div class="w3-container">

          <div class="card-body"> 
              <div class="row">






              



              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('admin_consultation')); ?>" class="btn-icon-clipboard">
                    <div>
                    <i class="material-icons">
                    category</i>
                    <span >
                        <?php echo e(__('profile.Consultations')); ?>

                     </span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>








            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('offer')); ?>" class="btn-icon-clipboard">
                    <div>
                      
                 <i class="material-icons">local_offer</i>
                      <span><?php echo e(__('messages.Offers')); ?> </span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>













            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                 </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('product.stock')); ?>" class="btn-icon-clipboard">
                    <div>
                    <i class="material-icons">stock</i>
                      <span><?php echo e(__('messages.stock')); ?></span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

















            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('about.admin')); ?>" class="btn-icon-clipboard" >
                    <div>
                    <i class="material-icons">
                    store</i>
                    <span >
                        <?php echo e(__('messages.About')); ?>

                     </span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>





























            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('states')); ?>" class="btn-icon-clipboard"  >
 <div>
 <i class="material-icons">
 roundabout_left</i>
 <span >
     <?php echo e(__('messages.stats')); ?>

  </span>
 </div>
    </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>












            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                           
                                <div class="icon-big text-center icon-primary">
                                
                                </div>
                          
                            <div class="col-7 col-md-12">
                            <a href="<?php echo e(route('term_of_service')); ?>" class="btn-icon-clipboard"  >
                    <div>
                    <i class="material-icons">
                    key</i>
                    <span >
                        <?php echo e(__('messages.term_of_service')); ?>

                     </span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


                
          




               
                     
                
                  

                  </div>
                  <!--  -->
                  <br>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
 

      
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/Setting.blade.php ENDPATH**/ ?>