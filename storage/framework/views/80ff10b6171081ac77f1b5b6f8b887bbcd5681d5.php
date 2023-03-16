
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
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('messages.stats')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('states_add')); ?>"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('messages.create_stats')); ?></h4>
          
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
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.stats_Name')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="state_name" type="text" placeholder="<?php echo e(__('messages.stats_Name')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Unit Name')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Unit Name')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                  
                  

                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.states_Code')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="state_code" id="add_state_code" type="text" placeholder="<?php echo e(__('messages.states_Code')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('state_code')): ?>
                        <span id="state_code-error" class="error text-danger" for="state_code"><?php echo e($errors->first('state_code')); ?></span>
                      <?php endif; ?>
                    </div>
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
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.Update_stats')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="post" action="<?php echo e(route('states.update')); ?>"  enctype="multipart/form-data">
      <input type="text" id="state_id" name="id"hidden  class="form-control form-control-alternative"  require >

            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('messages.Update_stats')); ?></h4>

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
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.stats_Name')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="state_name" id="state_name" type="text" placeholder="<?php echo e(__('messages.stats_Name')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('Unit Name')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('Unit Name')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                
                 

                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.states_Code')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="state_code" id="state_code" type="text" placeholder="<?php echo e(__('messages.states_Code')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('state_code')): ?>
                        <span id="state_code-error" class="error text-danger" for="state_code"><?php echo e($errors->first('state_code')); ?></span>
                      <?php endif; ?>
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

      </div>
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary"> 
            <div class="row align-items-center">
                  <div class="col-8">
              <h4 class="card-title "> <?php echo e(__('messages.stats')); ?></h4>
             
            </div>
            <div class="col-4 text-right">
         
         <a href="#" class="btn btn-sm "style="background:#a6d71d; color:#fff" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('messages.add_stats')); ?></a>
       </div>
     </div>
            <div class="card-body">
                              <div class="row">
                
              </div>
              <div class="table-responsive">
                <table class="display" style="width:100%" id="example">
                  <thead class=" text-block">
                    <tr>
                    
                    <th>
                    <?php echo e(__('messages.id')); ?>

                    </th>
                    
                    <th>
                    <?php echo e(__('messages.stats_Name')); ?>   
                    </th>
                    <th>
                    <?php echo e(__('messages.Code')); ?>   
                    </th>
                  
      
<th >
                    <?php echo e(__('messages.Actions')); ?>

                    </th>
                  </tr></thead>
                  <tbody>
                  <?php $__currentLoopData = $Units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 
                                        
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
            "url": "<?php echo e(route('statesGET')); ?>",
            
        },
        "columns": [
          { "data": "id" },
         
             { "data": "states_name" },
             { "data": "code" },
          
       
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
            url : "<?php echo e(route('states.edit')); ?>",
            type : 'get',
            data : {
                id : id,
                _token : "<?php echo e(csrf_token()); ?>"
            },
            success: function (res) {
                $('#state_id').val(res.data.id)
                $('#state_name').val(res.data.states_name)
                $('#state_code').val(res.data.code)
               
             
              
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
          url : "<?php echo e(route('states.destroy')); ?>",
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/states.blade.php ENDPATH**/ ?>