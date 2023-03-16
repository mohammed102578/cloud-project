
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
  

      </div>
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "><?php echo e(__('messages.order_cline')); ?></h4>
           
            </div>
            <div class="card-body">
                              <div class="row">
                
              </div>
              <div class="table-responsive">
                <table class="table" style="width:100%" id="example">
                  <thead class=" text-block">
                    <tr>
                    
                    <th>
                    <?php echo e(__('messages.id')); ?> 
                    </th>
                  
                    <th>
                    <?php echo e(trans('messages.Quantity')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.product_name')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.product_price')); ?>   
                    </th>
                    <th>
                    <?php echo e(__('messages.image')); ?> 
                    </th>
                    <th >
                    <?php echo e(__('messages.Actions')); ?> 
                    </th>
                  </tr></thead>
                  <tbody>
                  <?php $__currentLoopData = $Order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 
                                        
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
                  let id = $(this).attr('id')
         $('#example').DataTable( {
          
           "ajax": {
                 "url": "<?php echo e(route('get_order_detail',$id)); ?>",
                 
             },
             "columns": [
                { "data": "id" },
                { "data": "quantity" },
                { "data": "product_name" },
               { "data": "product_price" },
            
            
              
               { "data": 'image',
            render: function(data, type, full, meta){
     return "<img src=\"" + data + "\" height=\"50\"/>";}},
           
                 {
                     data: 'action', 
                     name: 'action', 
                     orderable: true, 
                     searchable: true
                 },
                    
                    
                    
                 
             ] 
         } );



        } );











    
    $(document).on('click','.hapus-modale', function () {
        let id = $(this).attr('id')
        Swal.fire({
          title             : "<?php echo e(__('messages.Delete Order')); ?> ",
          text              : "<?php echo e(__('messages.Do you want to delete this itme!')); ?>",
          icon              : "warning",
          showCancelButton  : true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor : "#d33",
          confirmButtonText : " <?php echo e(__('messages.Yes, Delete!')); ?>"
      }) .then((result) => {
          if (result.value) {
        $.ajax({
          url : "<?php echo e(route('order_details.destroy')); ?>",
       type : 'post',
            data: {
                id: id,
                "_token" : "<?php echo e(csrf_token()); ?>"
            },
            success: function(data) {
     Swal.fire(
      "<?php echo e(__('messages.Deleted!')); ?>",
      "<?php echo e(__('messages.Your file has been deleted.')); ?>",
      'success'
    )
                $('#example').DataTable().ajax.reload()
            }
        })



      }
    })
    })









       </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/order_detail.blade.php ENDPATH**/ ?>