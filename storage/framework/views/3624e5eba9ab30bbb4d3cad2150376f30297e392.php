
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
          <!-- Button trigger modal -->


  <!-- end -->
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
            <div class="row align-items-center">
                  <div class="col-8">
                  <h4 class="card-title ">  <?php echo e(__('messages.stock')); ?>  </h4>
                     </div>
                      <div class="col-4 text-right">
         
                    </div>
                  </div>
            </div>
            <div class="card-body">
                              <div class="row">
                
              </div>
              <div class="table-responsive">
                <table  class="display" style="width:100%" id="example">
                  <thead class=" text-block">
                    <tr>
                    <th>
                    <?php echo e(__('messages.id')); ?>  
                    </th>
                    <th>
                    <?php echo e(__('messages.image')); ?>  
                    </th><th>
                    <?php echo e(__('messages.product_name')); ?>  
                    </th>
                  
                    <th>
                    <?php echo e(__('messages.category_name')); ?>

                    </th>
                    <th>
                    <?php echo e(__('messages.stock')); ?>

                    </th>
                   
                    
                  </tr></thead>
                  <tbody>
                 
 <?php $__currentLoopData = $stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      
                       <td><?php echo e($product['product_id']); ?></td>                
                       <td class="">
                                    
                                    <img style="width: 100px;height:100px;" src="<?php echo e($product['product_image']); ?>" alt="#"></td>
                       <td><?php echo e($product['product_name']); ?></td>   
                       <td><?php echo e($product['category']); ?></td>  
                       <td><?php echo e($product['stock']); ?></td>          

                      </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                </table>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </div>
    </div>
  </div>
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/stock.blade.php ENDPATH**/ ?>