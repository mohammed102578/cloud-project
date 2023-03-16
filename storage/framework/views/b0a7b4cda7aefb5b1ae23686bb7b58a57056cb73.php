
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
              <h4 class="card-title ">  <?php echo e(__('messages.Sells_Report')); ?> </h4>
           
            </div> 
<div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
         
      
                </div>
              </div>
              
<div class="w3-container">
<div class="container">
<form Action ="<?php echo e(route('sealesj')); ?>" method="post" > 
<?php echo csrf_field(); ?>
    <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
<label class="form-control-label" for="input-username"><?php echo e(__('messages.Date_From')); ?></label>
        <input type='date' id="fro" name='from' class="form-control form-control-alternative" value="">
</div>
</div>
<div class="col-lg-6">
                    <div class="form-group">
        <label class="form-control-label" for="input-username"><?php echo e(__('messages.Until')); ?> </label>
        <input type='date' id="to" name='to' class="form-control form-control-alternative" value >
        </div>
</div>
<?php echo csrf_field(); ?>
<div class="col-lg-6">
                    <div class="form-group">
        <input type="submit" class="btn btn-success" name="submit" value="<?php echo e(__('messages.Search')); ?>">
        </div>
        <?php echo csrf_field(); ?>
</div>
</div>
            </form>
            <div class="table-responsive">
            <table id="example"class="display" style="width:100%">
                <thead  class=" text-warning">
              
                    <tr>
                        <th><?php echo e(__('messages.order_id')); ?></th>
                        <th> <?php echo e(__('messages.Product_ID')); ?></th>
                        <th> <?php echo e(__('messages.client_name')); ?> </th>
                        <th> <?php echo e(__('messages.product_name')); ?> </th>
                        <th><?php echo e(__('messages.product_price')); ?></th>
                        <th><?php echo e(__('messages.Date')); ?></th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               

                    <tr>
                        <td class="id"><?php echo e($value->id); ?></td>
                        <td class="Product ID"><?php echo e($value->product_id); ?></td>
                        <td class="Clinte Name"><?php echo e($value->client_name); ?></td>
                        <td class="Product Name"><?php echo e($value->product_name); ?></td>
                        <td class="Product Price"><?php echo e($value-> product_price); ?></td>
                        <td class="Date"><?php echo e($value->created_at); ?></td>
                       
                       
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>  
            <script>
            $(document).ready(function () {
    $('#example').DataTable();
});
</script>
        </div>
<div class="container">


        <?php $__env->stopSection(); ?>
        

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
<?php echo $__env->make('app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/seales.blade.php ENDPATH**/ ?>