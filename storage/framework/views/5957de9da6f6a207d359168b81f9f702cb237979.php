
<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "><?php echo e(__('messages.offer_edit')); ?></h4>
         
            </div>
            <div class="card-body">
                     
              <div class="table-responsive">
              <div class="container-fluid">
 
              <form method="post" action="<?php echo e(route('offer_produtupdate.update',['id'=> $offers->id])); ?>"  enctype="multipart/form-data">
     
            <?php echo csrf_field(); ?>
            <input type="hidden" name="offer_id" value="<?php echo e($offer_id); ?>">
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
            
                       <option  value=" <?php echo e($Product->id); ?>"
                       <?php
                       if($offers->product->id==$Product->id){
echo "selected";
                       }?>
                       > <?php echo e($Product->product_name); ?> </option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select> 
                    </div>
                   </div>
                  </div>
                
                 
                  
                  
                 
                  
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Update')); ?></button>
              </div>
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

<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/offer_edit.blade.php ENDPATH**/ ?>