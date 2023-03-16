<?php $__env->startSection('content'); ?>
<?php if(Session::has('token')): ?>
    <script>
     // or
      window.location.href = '<?php echo e(route("index")); ?>'; //using a named route
     </script>
     <?php endif; ?>

<style>
    
    a , h1, h5{
      font-family: 'NotoKufi';
    }
            </style>
              <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('Details.Home')); ?></a>
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('register.Register')); ?></a>
                       
                    </div>
                </div>
            </div>
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
                                                <h1 class="mb-5"><?php echo e(trans('register.Create an Account')); ?></h1>
                                                <p class="mb-30"><?php echo e(trans('register.Already have an account')); ?> <a style="color:#a6d71c" href="<?php echo e(route('login')); ?>"><?php echo e(trans('register.Login')); ?></a></p>
                                            </div>
                                            <form action="<?php echo e(route('register')); ?>" method="post" id="register_form">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <input style="border-radius: 27px;" class="form-control" type="text" required="" id="username" name="username" placeholder="<?php echo e(trans('register.full name')); ?>" />
                                              
                                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span id="usernameError" class="text-danger" style="font-family: 'NotoKufi';"><?php echo e($message); ?></span>
                                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group">
                                                    <input style="border-radius: 27px;" class="form-control" type="text" required="" id="phone" name="phone" placeholder="<?php echo e(trans('register.phone')); ?>" />
                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span id="phoneError" class="text-danger" class="text-danger" style="font-family: 'NotoKufi';"><?php echo e($message); ?></span>
                                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group">
                                                    <input required="" style="border-radius: 27px;" class="form-control" type="password" id="password" name="password" placeholder="<?php echo e(trans('register.Password')); ?>" />
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span id="passwordError" class="text-danger" class="text-danger" style="font-family: 'NotoKufi';"><?php echo e($message); ?></span>
                                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group">
                                                    <input required=""style="border-radius: 27px;" class="form-control" type="password" id="cpassword" name="cpassword" placeholder="<?php echo e(trans('register.Confirm password')); ?>" />
                                                    <?php $__errorArgs = ['cpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span id="cpasswordError" class="text-danger" class="text-danger" style="font-family: 'NotoKufi';"><?php echo e($message); ?></span>
                                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                       <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="1" required checked/>
                                                            <label class="form-check-label" for="exampleCheckbox12"><span><?php echo e(trans('register.I agree to terms & Policy')); ?>.</span></label>
                                                            <?php $__errorArgs = ['checkbox'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span id="checkboxError" class="text-danger" class="text-danger" style="font-family: 'NotoKufi';"><?php echo e($message); ?></span>
                                                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-1 text-muted"></i><?php echo e(trans('register.Lean more')); ?></a>
                                                </div>
                                                <div class="form-group mb-30">
                                                    <button style="font-family: 'NotoKufi';" type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login"><?php echo e(trans('register.Submit & Register')); ?></button>
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

$.validator.addMethod("alpha", function(value, element) {
   // return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    // --                                    or leave a space here ^^

    return this.optional(element) || value == value.match(/^(?:[a-zA\s@,A-ZA\s@,=%$#&_\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDCF\uFDF0-\uFDFF\uFE70-\uFEFF]|(?:\uD802[\uDE60-\uDE9F]|\uD83B[\uDE00-\uDEFF]))+$/);    
    
});




        $( "#register_form" ).validate( {



            rules: {
              
                username: {
                    required: true,
                    minlength: 10,
                    alpha: true ,
                    maxlength:50,
                },
                password: {
                    required: true,
                    minlength: 4
                },
                
                cpassword: {
                    required: true,
                    minlength: 4,
                    equalTo : "#password",
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength:10,
                    digits: true,
                },
                checkbox: {
                    required: true,
                    
                },
            },
            messages: {
               
                username: {
                  required: "<?php echo trans('register.This field is requiered');?> ",
                  alpha : "<?php echo trans('register.This field just Accept character');?> ",
                  minlength:"<?php echo trans('register.This field must contain at least ten characters');?> ",
                  maxlength:"<?php echo trans('register.This field cannot be greater than fifty characters');?> ",

                },	
            password: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
                },
                cpassword: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
              equalTo : "<?php echo trans('register.This field is not match password');?> ",
            },
            
                phone:{
        required:"<?php echo trans('register.This field is requiered');?> ",
        minlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
        maxlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
        digits:"<?php echo trans('register.This field must contain number just');?> ",
      } ,

      checkbox:{
        required:"<?php echo trans('register.This field is requiered');?> ",
     

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
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/register.blade.php ENDPATH**/ ?>