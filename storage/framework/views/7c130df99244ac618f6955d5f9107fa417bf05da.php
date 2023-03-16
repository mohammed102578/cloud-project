

<?php $__env->startSection('content'); ?>


<div class="content">
    <div class="container-fluid">
      <div class="row">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title "> <?php echo e(__('messages.Reports')); ?> </h4>
           
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
                            <a href="<?php echo e(route('sale_order_status')); ?>" class="btn-icon-clipboard"  title="Sells Report">
                    <div>
                      <i class="fa fa-bar-chart-o"></i>
                      <span><?php echo e(__('messages.Report_by_order_status')); ?></span>
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
                            <a href="<?php echo e(route('sale_product')); ?>" class="btn-icon-clipboard"  title="Sells by Product">
                    <div>
                      <i class="fa fa-bar-chart-o"></i>
                      <span><?php echo e(__('messages.Report_by_Product')); ?> </span>
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
                            <a href="<?php echo e(route('sale_location')); ?>" class="btn-icon-clipboard"  title="Sells by Location">
                    <div>
                      <i class="fa fa-bar-chart-o"></i>
                      <span><?php echo e(__('messages.Report_by_Location')); ?> </span>
                    </div>
                  </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>








                </div>
                </div>
           
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
     
      "ajax": {
            "url": "<?php echo e(route('getoffer')); ?>",
            
        },
        "columns": [
          
          { data: 'id', name: 'id', render:function(data, type, row){
    return "<a href='<?php echo e(route('offer.offer_produt')); ?>/"+ row.id +"'>" + row.id + "</a>"
}},

          { "data": 'offer_image',
            render: function(data, type, full, meta){
     return "<img src=\"" + data + "\" height=\"50\"/>";}},

             { "data": "offer_title"}, 
             { "data": "offer_price" },
             
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
   
    
        $.ajax({
            url : "<?php echo e(route('offer.edit')); ?>",
            type : 'get',
            data : {
                id : id,
                _token : "<?php echo e(csrf_token()); ?>"
            },
            success: function (res) {
                $('#id').val(res.data.id)
                $('#nnnnnn').val(res.data.offer_price)
                $('#offer_title').val(res.data.offer_title)
                $('#offer_imagee').val(res.data.offer_image)
              
             
              
            } 
        })
    })

    
    $(document).on('click','.hapus', function () {
        let id = $(this).attr('id')
        $.ajax({
            url : "<?php echo e(route('offer.destroy')); ?>",
            type : 'post',
            data: {
                id: id,
                "_token" : "<?php echo e(csrf_token()); ?>"
            },
            success: function (params) {
                alert(params.text)
                $('#example').DataTable().ajax.reload()
            }
        })
    })

       </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/reports.blade.php ENDPATH**/ ?>