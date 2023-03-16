
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
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('messages.Add_Product')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('Product.store')); ?>"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
              
                
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
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.product_name')); ?>  </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_name" id="input-name" type="text" placeholder=" <?php echo e(__('messages.product_name')); ?>  "  required="true" aria-required="true"/>
                      <?php if($errors->has('ProductName')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('ProductName')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label">  <?php echo e(__('messages.product_description')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="product_description" id="product_description" placeholder="  <?php echo e(__('messages.product_description')); ?> "type="text" required />
                      <?php if($errors->has('product_description')): ?>
                        <span id="email-error" class="error text-danger" for="input-email"><?php echo e($errors->first('product_description')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.Category_Name')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('category_id') ? ' has-danger' : ''); ?>">
                    <select class="form-control" id="category_id"name="category_id" required>
                                   <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                                    <option  value=" <?php echo e($category->id); ?>"> <?php echo e($category->category_name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select> 
                      <?php if($errors->has('category_id')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('category_id')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.product_price')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('product_price') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_price" id="input-name" min="1" type="number" placeholder =" <?php echo e(__('messages.product_price')); ?> "  required="true" aria-required="true"/>
                      <?php if($errors->has('product_price')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('product_price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label">   <?php echo e(__('messages.product_price_old')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('product_price_old') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_price_old" id="input-name" min="1" type="number" placeholder="<?php echo e(__('product_price_old')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('product_price_old')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('product_price_old')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.stock')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('stock') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="stock" id="input-name"  type="number" placeholder =" <?php echo e(__('messages.stock')); ?> "  required="true" aria-required="true"/>
                      <?php if($errors->has('stock')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('stock')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>



                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.product status')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                       <select name="available" class="form-control">
                        <option value="1" class="form-control"><?php echo e(__('index.available')); ?></option>
                        <option value="0" class="form-control"><?php echo e(__('index.Un available')); ?></option>

                       </select>

                      <?php if($errors->has('available')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>



                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?> </label>
                  <div class="col-sm-7 ">
                   
                    <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       name="image" value="<?php echo e(old('image')); ?>"
                       placeholder="image"  aria-required="true">
                      
                   
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
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.Update_Product')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form method="post" action="<?php echo e(route('Product.update')); ?>"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
         
            <input type="text" id="id" name="id" hidden class="form-control form-control-alternative"  require >

            <div class="card ">
              <div class="card-header card-header-primary">
                
                
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
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_name" id="product_name" type="text" placeholder="<?php echo e(__('messages.product_name')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('ProductName')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('ProductName')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.product_description')); ?>  </label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="product_description" id="product_description2" placeholder="<?php echo e(__('messages.product_description')); ?> "type="text" required />
                      <?php if($errors->has('product_description')): ?>
                        <span id="email-error" class="error text-danger" for="input-email"><?php echo e($errors->first('product_description')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.category_name')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('category_id') ? ' has-danger' : ''); ?>">
                    <select class="form-control" id="category2" name="category_id" required>
                                 
                    <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <option  value=" <?php echo e($category->id); ?>" > <?php echo e($category->category_name); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                        </select> 
                      <?php if($errors->has('category_id')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('category_id')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.product_price')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('product_price') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_price" id="product_price2"  min="1" type="number" placeholder=" <?php echo e(__('messages.product_price')); ?> "  required="true" aria-required="true"/>
                      <?php if($errors->has('product_price')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('product_price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.product_price_old')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('product_price_old') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="product_price_old" id="product_price_old"min="1" type="number" placeholder=" <?php echo e(__('messages.product_price_old')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('product_price_old')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('product_price_old')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                   
                  <div class="row">
                  <label class="col-sm-2 col-form-label"> <?php echo e(__('messages.stock')); ?> </label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('stock') ? ' has-danger' : ''); ?>">
                      <input class="form-control" name="stock" id="stock"  type="number" placeholder =" <?php echo e(__('messages.stock')); ?> "  required="true" aria-required="true"/>
                      <?php if($errors->has('stock')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('stock')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>

                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.product status')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                       <select name="available" class="form-control">
                        <option value="1" class="form-control"><?php echo e(__('index.available')); ?></option>
                        <option value="0" class="form-control"><?php echo e(__('index.Un available')); ?></option>

                       </select>

                      <?php if($errors->has('available')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Offer price')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>



                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.image')); ?></label>
                  <div class="col-sm-7 ">
                   
                    
                      

   <input id="imagee" type="file" name="image" accept="image/*" onchange="readURL(this);">
<input type="hidden" name="hidden_image" id="hidden_image">

                   
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

      </div>
      
        <!--Edit model  --> 
        <!-- Button trigger modal -->

      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
            <div class="row align-items-center">
                  <div class="col-8">
                  <h4 class="card-title ">  <?php echo e(__('messages.Product')); ?>  </h4>
                     </div>
                      <div class="col-4 text-right">
         
                      <a  class="btn btn-sm" style="background:#a6d71d; color:#fff"data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('messages.Add_Product')); ?></a>
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
                    
                    <?php echo e(__('messages.product_description')); ?>  
                    </th>
                    <th>
                    <?php echo e(__('messages.category_name')); ?>

                    </th>
                    <th>
                    <?php echo e(__('messages.product_price')); ?>

                    </th>
                    <th>
                    <?php echo e(__('messages.product_price_old')); ?>

                    </th>
                   
                   
                    
                    <th >
                    <?php echo e(__('messages.Actions')); ?> 
                    </th>
                  </tr></thead>
                  <tbody>
                 
 
                                        <tr>
                                       
                      </tr>

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
            "url": "<?php echo e(route('getProduct')); ?>",
            
        },
        "columns": [
          { data: 'id', name: 'id', render:function(data, type, row){
    return "<a href='<?php echo e(route('products_images' )); ?>/"+ row.id +"'>" + row.id + "</a>"
}},
          { "data": 'image',
            render: function(data, type, full, meta){
     return "<img src=\"" + data + "\" height=\"50\"/>";}},
             { "data": "product_name" },
            { "data": "product_description" },
            { "data": "category_name" },
            { "data": "product_price" },
            { "data": "product_price_old" },
          
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
               
               
               
             
        ] 
    } );
} );






//start edit modale
$(document).on('click','.edit-modale', function () {
    let id = $(this).attr('id')
    //offers-Product]
    $.ajax({
                    type: "GET",
                    url: "",
                    success: function(res) {

                        if (res) {

                               $.each(res, function(key, value) {
                               
                                    $("#offerid2").append('<option value="' + key + '">' + value +
                                    '</option>');
                                   
                            });

                            
                         
                      
                         }
                     else {

                            $("#branche_id").empty();
                        }

                    }
                });
    //{'categorys-Product') }}
    $.ajax({
                    type: "GET",
                  //  url: "",
                    success: function(res) {

                        if (res) {

                               $.each(res, function(key, value) {
                               
                                    $("#category2").append('<option value="' + key + '">' + value +
                                    '</option>');
                                   
                            });

                            
                         
                      
                         }
                     else {

                            $("#branche_id").empty();
                        }

                    }
                });
    
        $.ajax({
            url : "<?php echo e(route('Product.edit')); ?>",
            type : 'get',
            data : {
                id : id,
                _token : "<?php echo e(csrf_token()); ?>"
            },
            success: function (res) {
                $('#id').val(res.data.id)
                $('#product_name').val(res.data.product_name)
                $('#product_description2').val(res.data.product_description)
                $('#category2 option[value="' +res.data.category_id+ '"]').prop('selected', true);
                $('#product_price2').val(res.data.product_price)
                $('#product_price_old').val(res.data.product_price_old)
                $('#offer_price').val(res.data.offer_price)
                $('#offerid2').val(res.data.offer_id)
                $('#stock').val(res.data.stock)
                $('#product_description').val(res.data.product_description)
if(res.data.image){ 
$('#imagee').attr('src',res.data.image);
$('#hidden_image').val(res.data.image);
}
            }
        })
    })






















    $(document).on('click','.add-modale', function () {
    let id = $(this).attr('id')
   
    
        $.ajax({
            url : "<?php echo e(route('Product.edit')); ?>",
            type : 'get',
            data : {
                id : id,
                _token : "<?php echo e(csrf_token()); ?>"
            },
            success: function (res) {
                $('#idadd').val(res.data.id)
               
             
              
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
          url : "<?php echo e(route('Product.destroys')); ?>",
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/Product.blade.php ENDPATH**/ ?>