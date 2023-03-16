
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
          <!-- Button trigger modal -->
    

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('messages.createOffer')); ?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer.store')); ?>"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
              <h3><?php echo e(__('messages.createOffer')); ?></h3>
                
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
                      <input class="form-control" name="offer_title" id="input-name" type="text" placeholder="<?php echo e(__('messages.OfferTitle')); ?>"  required="true" aria-required="true"/>
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
                      <input class="form-control" name="offer_price" id="input-name" type="number" placeholder="<?php echo e(__('messages.offer_price')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Offer Title')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                 
                 
                  
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.offer type')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                       <select name="type" class="form-control">
                        <option value="0" class="form-control"><?php echo e(__('messages.advertisement')); ?></option>
                        <option value="1" class="form-control"><?php echo e(__('messages.commercial')); ?></option>

                       </select>

                      <?php if($errors->has('type')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>


                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?></label>
                  <div class="col-sm-7 ">
                   
                    <input type="file" class="form-control"
                       name="offer_image" value="<?php echo e(old('offer_image')); ?>"
                       placeholder="offer_image" required="true" aria-required="true">
                      
                   
                   </div>
                  </div>
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Save')); ?></button>
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>
              </div>
            </div>
          </form>
     
   
    </div>
  </div>
</div>

        <!--Edit model  -->
        <!-- Button trigger modal -->

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.UpdateOffer')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer_produtse')); ?>"  enctype="multipart/form-data">
      <input type="text" id="offer_id" name="offer_id"  class="form-control form-control-alternative"  require >

            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              
              <div class="table-responsive">
                <table class="display" style="width:100%" id="example8">
                  <thead class=" text-primary">
                    <tr>
                    
                    <th>
                     <?php echo e(__('messages.id')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.image')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.OfferTitle')); ?>  
                    </th>
                    <th>
                    <?php echo e(__('messages.product_name')); ?>  
                    </th>
                    <th >
                    <?php echo e(__('messages.Actions')); ?> 
                    </th>
                  </tr></thead>
                  <tbody>
                  <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 
                                        
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                </table>
              </div>
                  </div>
             
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Save')); ?></button>
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>
              </div>
            </div>
          </form>
      
     
    </div>
  </div>
</div>

      </div>
      <!-- ende -->
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
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.offer type')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                       <select name="type" class="form-control">
                        <option value="0" class="form-control"><?php echo e(__('messages.advertisement')); ?></option>
                        <option value="1" class="form-control"><?php echo e(__('messages.commercial')); ?></option>

                       </select>

                      <?php if($errors->has('type')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>



                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?></label>
                  <div class="col-sm-7 ">
                   
                   
   <input id="imagee" type="file" name="offer_image" accept="image/*" onchange="readURL(this);">
<input type="hidden" name="hidden_offer_image" id="hidden_image">
                   </div>
                  </div>
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Update')); ?></button>
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>
              </div>
            </div>
          </form>
      
     
    </div>
  </div>
</div>

  
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
            <div class="row align-items-center">
            <div class="col-8">
              <h4 class="card-title "><?php echo e(__('messages.Offer')); ?></h4>
          
            </div>
            <div class="col-4 text-right">
               
               <a href="#" class="btn btn-sm" style="background:#a6d71d; color:#fff"data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('messages.AddOffer')); ?></a>
             </div>
             </div>
            <div class="card-body">
                              <div class="row">
                
              </div>
              <div class="table-responsive">
                <table class="display" style="width:100%" id="example">
                  <thead class=" text-block">
                    <tr>
                    
                    <th >             
                     <?php echo e(__('messages.id')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.image')); ?> 
                    </th>
                    <th>
                    <?php echo e(__('messages.OfferTitle')); ?>  
                    </th>
                    <th>
                    <?php echo e(__('messages.offer_price')); ?>  
                    </th>
                    <th >
                    <?php echo e(__('messages.Actions')); ?> 
                    </th>
                  </tr></thead>
                  <tbody>
                  <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 
                                        
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
                if(res.data.offer_image){ 
$('#imagee').attr('src',res.data.offer_image);
$('#hidden_image').val(res.data.offer_image);
}
             
              
            } 
        })
    })








    $(document).on('click','.hapus-modale', function () {
        let id = $(this).attr('id')
        Swal.fire({
          title             : "<?php echo e(__('messages.Delete Offer')); ?> ",
          text              : "<?php echo e(__('messages.Do you want to delete this itme!')); ?>",
          icon              : "warning",
          showCancelButton  : true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor : "#d33",
          confirmButtonText : " <?php echo e(__('messages.Yes, Delete!')); ?>"
      }) .then((result) => {
          if (result.value) {
        $.ajax({
          url : "<?php echo e(route('offer.destroy')); ?>",
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/offer.blade.php ENDPATH**/ ?>