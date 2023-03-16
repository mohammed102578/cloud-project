
<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "><?php echo e(__('messages.attridutes')); ?></h4>
         
            </div>
            <div class="card-body">
                     
              <div class="table-responsive">
              <div class="container-fluid">
 
              <form method="post" action="<?php echo e(route('attridutes.create',['id'])); ?>"  enctype="multipart/form-data">
     
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
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.OfferTitle')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="attridutes" id="offer_title" type="text" placeholder="<?php echo e(__('messages.OfferTitle')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Offer Title')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer Title')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                
                 
            
                
              </div>
                
                 
                  
                  
                 
                  
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-warning"><?php echo e(__('messages.Save')); ?></button>
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
<?php $__env->startPush('js'); ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
<?php $__env->stopPush(); ?>
<?php echo $__env->make('app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/attridutes.blade.php ENDPATH**/ ?>