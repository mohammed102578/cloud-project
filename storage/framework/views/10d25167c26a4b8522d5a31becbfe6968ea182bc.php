
<?php $__env->startSection('content'); ?>    


<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src=https://code.jquery.com/jquery-3.5.1.js></script> 
<script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script> 
<script src=https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js></script> 
<div class="content">
    <div class="container-fluid">
      <div class="row">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "> <?php echo e(__('messages.Sells_by_Location')); ?></h4>
           
            </div>
<div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
         
      
                </div>
              </div>
              
<div class="w3-container">
<div class="container">
<form Action ="<?php echo e(route('sale_location')); ?>" method="post" > 
<?php echo csrf_field(); ?>
    <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
<label class="form-control-label" for="input-username"><?php echo e(__('messages.Date_From')); ?></label>
        <input type='date' id="fro" name='from' class="form-control form-control-alternative" value="" required>
</div>
</div>
<div class="col-lg-6">
                    <div class="form-group">
        <label class="form-control-label" for="input-username"> <?php echo e(__('messages.Until')); ?></label>
        <input type='date' id="to" name='to' class="form-control form-control-alternative" required >
        </div>
</div>
<?php echo csrf_field(); ?>
<div class="col-lg-6">


<label class="form-control-label" for="input-username"><?php echo e(__('messages.Select_order_location')); ?></label>
                    <select class="form-control form-control-alternative" id="location" name="localaty_id">
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($result->localaty_id); ?>"><?php


                           if($result->localaty!== null){
echo $result->localaty->localaty_name;
                           }else{
echo trans('messages.from store');
                           }
                        
                        
                        
                       ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                        </select>   



                    <div class="form-group">
                    <input type="submit" class="btn btn-lg" style="background:#a6d71d" name="submit" value="<?php echo e(__('messages.Search')); ?>">
        </div>
        <?php echo csrf_field(); ?>
</div>
</div>
            </form>
            <div class="table-responsive">
            <table id="example"class="display" style="width:100%">
                <thead  class=" text-block">
              
                    <tr>
                    <th>#<?php echo e(__('messages.index')); ?></th>
                        <th> <?php echo e(__('messages.Order Status')); ?></th>
                        <th> <?php echo e(__('messages.client name')); ?> </th>
                        <th> <?php echo e(__('messages.clinet Phone')); ?> </th>
                        <th><?php echo e(__('messages.Order Price')); ?></th>
                        <th><?php echo e(__('messages.Date')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($reports)): ?>
                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="index"><?php echo e($value->id); ?></td>
                        <td class="Order Status"><?php
                           if( $value->active==0){
                            echo "not deliverd";
                           }else{
                            echo "delevired";
                           }
                        
                        
                        
                        
                        
                        ?></td>
                      <td class="clinet Phone"><?php echo e($value->user->name); ?></td>

                        <td class="clinet Phone"><?php echo e($value->user->phone); ?></td>
                        <td class="Order Price"><?php echo e($value-> total_price); ?></td>
                        <td class="Date"><?php echo e($value->created_at); ?></td>
                       
                       
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
            </div> </div> </div> </div>


</div> </div> </div> </div>


        <?php $__env->stopSection(); ?>
        <?php $__env->startPush('js'); ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         
        <script>
       $(document).ready(function() {
    $('#example').DataTable( {
     
      
} );
 
} );


       </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/sale_location.blade.php ENDPATH**/ ?>