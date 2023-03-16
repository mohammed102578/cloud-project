
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
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('messages.offer_produt')); ?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer_produtse')); ?>"  enctype="multipart/form-data">
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
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?></label>
                  <div class="col-sm-7 ">
                   
                    <input type="file" class="form-control <?php $__errorArgs = ['offer_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.UpdateOffer')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer_produtupdate.update')); ?>"  enctype="multipart/form-data">
      <input type="text" id="color_id" name="id"  class="form-control form-control-alternative"  require >

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
                <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Update')); ?></button>
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>
              </div>
            </div>
          </form>
      
     
    </div>
  </div>
</div>

      <!-- add modal -->
      <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.AddOffer')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('offer_produtse')); ?>"  enctype="multipart/form-data">
     
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('messages.AddOffer')); ?></h4>
              
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
                 
                    <input type="hidden" name="offer_id" value="<?php echo e($offer_id); ?>">
                   
                 
                  
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
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title "><?php echo e(__('messages.offer_produt')); ?></h4>
          
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
         
                  <a href="#" class="btn btn-sm" style="background:#a6d71d; color:#fff"data-bs-toggle="modal" data-bs-target="#exampleModal2"><?php echo e(__('messages.AddOffer')); ?></a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table" style="width:100%" >
                  <thead class=" text-block">
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
                  <?php $__currentLoopData = $offer_produts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer_produt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  <tr>
                    
                  <td><?php echo e($offer_produt->id); ?></td>
                    <td>
                    <img src="<?php echo e($offer_produt->product->image); ?>" alt="no picture"
                        
                        class="img-tumbnail" width="100" height="90">
                    </td>
                    <td><?php echo e($offer_produt->offer->offer_title); ?></td>
                    <td><?php echo e($offer_produt->product->product_name); ?></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item edit-modale " href="<?php echo e(route('offerprodut_edit',['id'=> $offer_produt->id])); ?>" >Edit</a>
                          <a class="dropdown-item" href="<?php echo e(route('post.destroy',['id'=> $offer_produt->id])); ?>">Delete <i class="fas  fa-2x fa-trash-alt"></i>
                        </div>
                      </div>
                    </td>  
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
          
      
$(document).on('click','.add-modale', function () {
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
        
   
        
         
       }
   })
              });
 $('body').on('click', 'edit-modale', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('offer_edit/' + id + '/', function (data) {
    
     $('#color_id').val(data.data.id);
     
 })
});


       </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/offer_product.blade.php ENDPATH**/ ?>