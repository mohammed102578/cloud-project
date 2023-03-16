
<?php $__env->startSection('content'); ?>
    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
            <div class="row align-items-center">
            <div class="col-8">
              <h4 class="card-title "><?php echo e(__('messages.Users')); ?></h4>
              
            </div>
            
                </div>
            <div class="card-body">
                              <div class="row">
                
              </div>
              <div class="table-responsive">
                <table class="display" style="width:100%" id="example">
                  <thead>
                    <tr><th>
                    <?php echo e(__('messages.id')); ?>

                    </th>
                    <th>
                    <?php echo e(__('messages.Name')); ?>  
                    </th>
                    <th>
                    <?php echo e(__('messages.Email')); ?>   
                    </th>
                    <th>
                    <?php echo e(__('messages.phone')); ?>   
                    </th>
                    <th>
                    <?php echo e(__('messages.Creation_date')); ?>  
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> <?php echo e(__('messages.Register')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form" method="POST" action="<?php echo e(route('User.store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong><?php echo e(__('messages.Register')); ?></strong></h4>
            <div class="social-line">
            
            </div>
          </div>
          <div class="card-body ">
            
            <div class="bmd-form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('messages.Name')); ?>" value="<?php echo e(old('name')); ?>" >
              </div>
              <?php if($errors->has('name')): ?>
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong><?php echo e($errors->first('name')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('messages.Email')); ?>" value="<?php echo e(old('email')); ?>" >
              </div>
              <?php if($errors->has('email')): ?>
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('messages.password')); ?>" >
              </div>
              <?php if($errors->has('password')): ?>
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password_confirmation') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="<?php echo e(__('messages.password_confirmation')); ?>" >
              </div>
              <?php if($errors->has('password_confirmation')): ?>
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" <?php echo e(old('policy', 1) ? 'checked' : ''); ?> >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                <?php echo e(__('messages.I_agree_with_the')); ?> <a href="#"><?php echo e(__('messages.Privacy_Policy')); ?></a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Create_account')); ?></button>
            <button type="button" class="btn btn-secondary btn-link btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>

          </div>
        </div>
      </form>
     
   
    </div>
  </div>
</div>
<!-- model edit -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('messages.Update')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form" method="POST" action="<?php echo e(route('User.store')); ?>">

        <?php echo csrf_field(); ?>
        <input type="hidden" id="id" name="id" value="<?php echo e(old('name')); ?>">

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong><?php echo e(__('messages.Update')); ?></strong></h4>
            <div class="social-line">
             
            </div>
          </div>
          <div class="card-body ">
          
            <div class="bmd-form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name"id="namesed" class="form-control" placeholder="<?php echo e(__('messages.Name')); ?>" value="<?php echo e(old('name')); ?>" >
              </div>
              <?php if($errors->has('name')): ?>
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong><?php echo e($errors->first('name')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" id="email"class="form-control" placeholder="<?php echo e(__('messages.Email')); ?>" value="<?php echo e(old('email')); ?>" >
              </div>
              <?php if($errors->has('email')): ?>
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('messages.password')); ?>" >
              </div>
              <?php if($errors->has('password')): ?>
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password_confirmation') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmatione" class="form-control" placeholder="<?php echo e(__('messages.password_confirmation')); ?>" >
              </div>
              <?php if($errors->has('password_confirmation')): ?>
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-lg" style="background:#a6d71d; color:#fff"><?php echo e(__('messages.Update_account')); ?></button>
            <button type="button" class="btn btn-secondary btn-link btn-lg" data-bs-dismiss="modal"><?php echo e(__('messages.Close')); ?></button>

          </div>
        </div>
      </form>
     
   
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
            "url": "<?php echo e(route('getUser')); ?>",
            
        },
        "columns": [
          { "data": "id" },
          { "data": 'name',},
          { "data": 'email',},
          { "data": 'phone',},
          { "data": "created_at", },
          
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
            url : "<?php echo e(route('User.edit')); ?>",
            type : 'get',
            data : {
                id : id,
                _token : "<?php echo e(csrf_token()); ?>"
            },
            success: function (res) {
                $('#id').val(res.data.id)
                $('#namesed').val(res.data.name)
                $('#email').val(res.data.email)
                $('#password_confirmatione').val(res.data.password_confirmation)
                $('#policye').val(res.data.policy)
             
              
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
          url : "<?php echo e(route('User.destroy')); ?>",
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
    'class' => '',
    'elementActive' => 'profile'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/user.blade.php ENDPATH**/ ?>