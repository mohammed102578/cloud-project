

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
          <!-- Button trigger modal -->
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
            <div class="row align-items-center">
                  <div class="col-10">
              <h4 class="card-title "> <?php echo e(__('messages.term_of_service')); ?> </h4>
             
            </div>
            
       <div class="col-sm-12">  
            <form method="post" action="<?php echo e(route('term_of_service.update')); ?> " enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
          
                              <div class="row">
                             
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.term_of_service')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                    <textarea  class="mt-3 form-control" name="term_of_service" value="<?php echo e($setting->term_of_service); ?>" required><?php echo e($setting->term_of_service ?? ''); ?></textarea>
            
                        
              
                  
            
              <button type="submit" class="mt-2 col-sm-3 btn  btn-block btn-flat" style="background:#a6d71d; color:#fff"> <?php echo e(__('messages.Save')); ?></button>
          
              </form>
              
              
             
      </div>
      </div>    </div>    </div>    </div>    </div></div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
     
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/term_of_service.blade.php ENDPATH**/ ?>