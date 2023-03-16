
<?php $__env->startSection('content'); ?>
<?php if(App::getLocale() == 'en'): ?>
<style>
  table.dataTable thead > tr > th{
    text-align: left;
  }
  .main-panel > .content {
    padding: 0 27px 30px;
min-height: calc(100vh - 123px);
margin-top: 35px;
margin-left: -12px;
}

.footer {
  margin-left: -9px;
}
</style>  
  <?php else: ?>
<style>
   table.dataTable thead > tr > th{
    text-align: right;
  }
.footer {
  margin-right: 16px;
}
  .main-panel > .content {
  
  margin-right: -40px;
}
</style>   
 <?php endif; ?>
<div class="content">
  <div class="container-fluid">




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.UpdateOffer')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer.update')); ?>"  enctype="multipart/form-data">
      <input type="text" id="id" name="id" hidden class="form-control form-control-alternative"  require >

            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('messages.UpdateOffer')); ?></h4>
              
              </div>
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
                      <input class="form-control" name="offer_title" id="offer_title" type="text" placeholder="<?php echo e(__('messages.OfferTitle')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Offer Title')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer Title')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.offer_price')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      
                      <input class="form-control" name="offer_price" id="nnnnnn" type="text" placeholder="<?php echo e(__('messages.offer_price')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Offer price')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?></label>
                  <div class="col-sm-7 ">
                   
                    <input type="file" id="offer_imagee"class="form-control"
                       name="offer_image" value="<?php echo e(old('offer_image')); ?>"
                       placeholder="offer_image" required="true" aria-required="true">
                      
                   
                   </div>
                  </div>
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.Update')); ?></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>
              </div>
            </div>
          </form>
      
     
    </div>
  </div>
</div>

















    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title "><?php echo e(__('messages.Orders')); ?></h4>
           
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
         
                     </div>
              </div>
              <div class="table-responsive">
                <table class="display" style="width:100%" id="example">
                  <thead class=" text-block">
                    <tr>
                    
                    <th>
                    <?php echo e(__('messages.id')); ?> 
                    </th>
                  
                    <th>
                      
                    <?php echo e(__('messages.order_details')); ?> 
                    
                    </th>
                    <th>
                      
                      <?php echo e(__('messages.order_status')); ?> 
                      
                      </th>
                    <th>
                      
                      <?php echo e(__('messages.user_name')); ?> 
                      
                      </th>
                    <th>
                    <?php echo e(__('messages.location')); ?> 
                    
                    </th>
                    <th>
                    <?php echo e(__('messages.transportation_cost')); ?> 
                    
                    </th>
                    <th>
                    <?php echo e(__('messages.Order_cost')); ?> 
                    
                    </th>
                    <th>
                    <?php echo e(__('messages.prominent_place')); ?> 
                   
                    </th>
                    <th >
                    <?php echo e(__('messages.user_phone')); ?>  
                    </th>
                   
                    
                    <th >
                    <?php echo e(__('messages.Actions')); ?> 
                    </th>
                  </tr></thead>
                  <tbody>
                   
 
                                        
                      </tr>

                    
                                        </tbody>
                </table>
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
<script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
<script>
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '1bc74596-27b2-4d6e-8652-818e0216c84c',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);
</script>
        
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  $(document).ready(function() {
         
         $('#example').DataTable( {
          
           "ajax": {
                 "url": "<?php echo e(route('getorder')); ?>",
                 
             },
             "columns": [
               { data: 'id'},

     { data: 'id', name: 'id', render:function(data, type, row){
         return "<a  href='<?php echo e(route('order_detail.index')); ?>/"+ row.id  +"'  class='btn'  style='background-color:#a6d71d'>" +"<?php echo e(__('messages.order_details')); ?> " + "</a>"
     }}, 
     {
                     data: 'status', 
                     name: 'status', 
                     orderable: true, 
                     searchable: true
                 },
             
               { "data": "name" },
               { "data": "unit_name" },
               { "data": "transportation_cost" },
               { "data": "total_price" },
               { "data": "prominent_place" },
               { "data": "phone" },
              
                 {
                     data: 'action', 
                     name: 'action', 
                     orderable: true, 
                     searchable: true
                 },
                
             ] 
         } );
     } );





     $(document).on('click','.edit-modale', function () {
        let id = $(this).attr('id')
        Swal.fire({
          title             : "<?php echo e(__('messages.Order status!')); ?> ",
          text              : "<?php echo e(__('messages.Do you want to Change Order status?')); ?> ",
          icon              : "info",
          showCancelButton  : true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor : "#d33",
          confirmButtonText : "<?php echo e(__('messages.Yes, Change!')); ?>"
      }) .then((result) => {
          if (result.value) {
        $.ajax({
          url : "<?php echo e(route('order.delivered')); ?>",
            type : 'post',
            data: {
                id: id,
                "_token" : "<?php echo e(csrf_token()); ?>"
            },
            success: function(data) {
     Swal.fire(
      "<?php echo e(__('messages.Order status!')); ?> ",
      "<?php echo e(__('messages.Your order has been changed.')); ?> ",
      'success'
    )
                $('#example').DataTable().ajax.reload()
            }
        })



      }
    })
    })













    

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
          url : "<?php echo e(route('order.destroy')); ?>",
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/order.blade.php ENDPATH**/ ?>