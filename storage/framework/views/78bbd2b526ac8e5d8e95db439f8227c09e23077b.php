<?php $__env->startSection('content'); ?>
<?php if(Session::has('token')): ?>
    <script>
     // or
      window.location.href = '<?php echo e(route("index")); ?>'; //using a named route
     </script>
     <?php endif; ?>
     <style>
        
        a , h1, button ,h5{
          font-family: 'NotoKufi';
        }
                </style>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 pr-30 d-none d-lg-block">
                                    <img class="border-radius-15" src="<?php echo e(URL::asset('image/lifestyle.jpg')); ?>" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5"><?php echo e(trans('login.Reset Password')); ?></h1>
                                                <p class="mb-30"><?php echo e(trans('login.Don\'t have an account')); ?> <a style="color:#a6d71c"  href="<?php echo e(route('register')); ?>"><?php echo e(trans('login.Create here')); ?></a></p>
                                            </div>
                                            <form action="<?php echo e(route('forget_password')); ?>" method="post" id="reset_form">
                                                <div class="form-group">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="text" style="border-radius: 27px;" class="form-control" required="" name="phone" placeholder="<?php echo e(trans('register.Your E-mail without Zero')); ?>" />
                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span id="phoneError" class="text-danger"><?php echo e($message); ?></span>
                                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                         
                                                  <div class="form-group mb-30">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login"style="font-family: 'NotoKufi';"><?php echo e(trans('login.Reset Password')); ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


             
<script type="text/javascript">
	

    $( document ).ready( function () {
        $( "#reset_form" ).validate( {
            rules: {
              
               
               
               
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 9,
                    digits: true,
                },
               
            },
            messages: {
               
               
         
            
                phone:{
        required:"<?php echo trans('register.This field is requiered');?> ",
        minlength:"<?php echo trans('register.This field must contain  nine number');?> ",
        maxlength:"<?php echo trans('register.This field must contain  nine number');?> ",
        digits:"<?php echo trans('register.This field must contain number just');?> ",
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

    } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/forget_password.blade.php ENDPATH**/ ?>