<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <form class="form" method="POST" action="<?php echo e(route('admin.store_login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card card-login">
                        <div class="card-header ">
                            <div class="card-header ">
                                <h3 class="header text-center"><?php echo e(trans('messages.Login')); ?></h3>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="input-group">
                                
                                <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('messages.Email')); ?>" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-group">
                               
                                <input class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(__('messages.password')); ?>" type="password" required>
                                
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                     <label class="form-check-label">
                                        <input class="form-check-input" name="remember" type="checkbox" value="" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <span class="form-check-sign"></span>
                                        <?php echo e(__('messages.Remember me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-round mb-3"><?php echo e(__('messages.Sign in')); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
              
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>