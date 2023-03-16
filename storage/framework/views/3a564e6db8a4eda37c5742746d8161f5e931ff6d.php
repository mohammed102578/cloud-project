<?php $__env->startSection('content'); ?>
    <div class="content">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('password_status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('password_status')); ?>

            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        
                        <img src="<?php
                            if (auth('admin')->user()->image !== null){
                                echo auth('admin')->user()->image;
                             }else{
echo asset('uploade/profile/cover.jpg');
                             }
                            
                            ?>" alt="">
                     </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="<?php
                            if (auth('admin')->user()->cover_image !== null){
                                echo auth('admin')->user()->cover_image;
                             }else{
echo asset('uploade/profile/cover.jpg');
                             }
                            
                            ?>" alt="">

                                <h5 class="title"><?php echo e(__(auth('admin')->user()->admin_name)); ?></h5>
                            </a>
                            <p class="description">
                            @ <?php echo e(__(auth('admin')->user()->admin_name)); ?>

                            </p>
                        </div>
                        <p class="description text-center">
                            <?php echo e(__('I like the way you work it')); ?>

                            <br> <?php echo e(__('No diggity')); ?>

                            <br> <?php echo e(__('I wanna bag it up')); ?>

                        </p>
                    </div>
                    
                </div>
               
                <div class="card card-user">
                <form  action="<?php echo e(route('profile.image')); ?>" method="POST" enctype="multipart/form-data" id="edit_photo">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                  
                        <div class="card-header">
                            <h5 class="title"><?php echo e(__('Edit Profile')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Cover Image')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control"required id="image">
                                    </div>
                                    <?php if($errors->has('image')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('image')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Profile')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="file" name="cover_image" class="form-control"  required>
                                    </div>
                                    <?php if($errors->has('cover_image')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('cover_image')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-info btn-round" value="<?php echo e(__('Save Changes')); ?>">
                                </div>
                            </div>
                        </div>
                   
                </form>
             </div>
            </div>
            <div class="col-md-8 text-center">
                <form id="update_profile" class="col-md-12" action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title"><?php echo e(__('Edit Profile')); ?></h5>
                        </div>
                        <input type="hidden" value="auth('admin')->user()->id" name="id">
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Name')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(auth('admin')->user()->admin_name); ?>" required>
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Email')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(auth('admin')->user()->email); ?>" required>
                                    </div>
                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-round"><?php echo e(__('Save Changes')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="col-md-12" action="<?php echo e(route('profile.password')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title"><?php echo e(__('Change Password')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Old Password')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="old_password" class="form-control" placeholder="Old password" required>
                                    </div>
                                    <?php if($errors->has('old_password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('old_password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('New Password')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Password Confirmation')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                                    </div>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-round"><?php echo e(__('Save Changes')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





<script type="text/javascript">
	
    $( document ).ready( function () {
        
        $("#edit_photo").validate( {
    rules: {
      
       
        image: {
            required: true,
            extension: "jpg|jpeg|png|ico|bmp",
        },
        cover_image: {
            required: true,
            extension: "jpg|jpeg|png|ico|bmp",
        },
       
        
    },
    messages: {
       
        
    image: {
      required:console.log('This field is requiered'),
      extension:console.log('This field is requiered'),
    

    },
    cover_image: {
      required:console.log('This field is requiered'),
      extension: console.log('This field is requiered'),
    

    }

    },
    errorElement: "h5",
    errorPlacement: function ( error, element ) {
        // Add the `invalid-feedback` class to the error element
        error.addClass( "invalid-feedback" );

        
        if (element.is("select")) {
error.insertAfter(element.parent());
        } else {
            error.insertAfter( element );
        }
    },
    highlight: function ( element, errorClass, validClass ) {
        $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
        $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
} );


        //



    } );




    $(document).ready(function() {
    $ ('#image').bind('change', function() {
        var fileSize = this.files[0].size/1024/1024;
        if (fileSize > 2) { // 2M
            alert('Your custom message for max file size exceeded');
            $('#image').val('');
        }
    });
});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/profile/edit.blade.php ENDPATH**/ ?>