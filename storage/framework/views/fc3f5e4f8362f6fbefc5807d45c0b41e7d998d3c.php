
<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "><?php echo e(__('messages.order_edit')); ?></h4>
         
            </div>
            <div class="card-body">
                     
              <div class="table-responsive">
              <div class="container-fluid">
 
              <form method="post" action="<?php echo e(route('order_update.update',['id'=> $ofers->id])); ?>"  enctype="multipart/form-data">
     
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            
              <div class="card-body ">
                <?php if(session('status')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e(session('status')); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                
                <div class="row">
                <label class="col-sm-2 col-form-label"><?php echo e(__('messages.product_name')); ?></label>
                   <div class="col-sm-7">
                    <div class="form-group">
                    <select class="form-control" id="product_id"name="product_id" required>
                           <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                       <option  value=" <?php echo e($Product->id); ?>"> <?php echo e($Product->product_name); ?> </option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select> 
                    </div>
                   </div>
                  </div>
                
                 
                  
                  
                 
                  
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-warning"><?php echo e(__('messages.Update')); ?></button>
                 </div>
            </div>
          </form>
      
     
    </div>
       <!-- Modal -->

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
   
         <script>
            CKEDITOR.replace( 'about' );
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/order_edit.blade.php ENDPATH**/ ?>