<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 ml-auto ">
                    <div class="info-area info-horizontal mt-5">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-tv-2"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title"><?php echo e(__('Marketing')); ?></h5>
                            <p class="description">
                                <?php echo e(__('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-html5"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title"><?php echo e(__('Fully Coded in HTML5')); ?></h5>
                            <p class="description">
                                <?php echo e(__('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal">
                        <div class="icon icon-info">
                            <i class="nc-icon nc-atom"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title"><?php echo e(__('Built Audience')); ?></h5>
                            <p class="description">
                                <?php echo e(__('There is also a Fully Customizable CMS Admin Dashboard for this product.')); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mr-auto " style="margin-top: -2.286rem">
                    <div class="card card-signup text-center">
                        <div class="card-header ">
                            <h4 class="card-title"><?php echo e(__('messages.Register')); ?></h4>
                            <div class="social">
                                <button class="btn btn-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button class="btn btn-icon btn-round btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </button>
                                <button class="btn btn-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body ">
                            <form class="form" method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="input-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="<?php echo e(__('messages.Name')); ?>" value="<?php echo e(old('name')); ?>" required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-email-85"></i>
                                        </span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="<?php echo e(__('messages.Email')); ?>" required value="<?php echo e(old('email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="input-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="<?php echo e(__('messages.password')); ?>" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="<?php echo e(__('messages.confirmation password')); ?>" required>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-check text-left">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="agree_terms_and_conditions" type="checkbox">
                                        <span class="form-check-sign"></span>
                                            <?php echo e(__('messages.I agree to the')); ?>

                                        <a href="#something"><?php echo e(__('messages.terms and conditions')); ?></a>.
                                    </label>
                                    <?php if($errors->has('agree_terms_and_conditions')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('agree_terms_and_conditions')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-info btn-round"><?php echo e(__('messages.Get Started')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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

<?php echo $__env->make('app.layouts.app', [
    'class' => 'register-page',
    'backgroundImagePath' => 'img/bg/jan-sendereks.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/auth/register.blade.php ENDPATH**/ ?>