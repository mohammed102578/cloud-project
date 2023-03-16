<?php $__env->startSection('content'); ?>
<?php if(Session::has('token')): ?>
    <script>
     // or
      window.location.href = '<?php echo e(route("index")); ?>'; //using a named route
     </script>
     <?php endif; ?>

<style>
    
    a , h1,h5{
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
                                                <h1 class="mb-5"><?php echo e(trans('register.Update Password')); ?></h1>
                                              
                                            </div>
                                            <form action="<?php echo e(route('update_new_password')); ?>" method="post" id="ChangePassword">
                                                <?php echo csrf_field(); ?>
                                               
                                                <div class="form-group">
                                                    <input type="text" style="border-radius: 27px;" class="form-control" required="" id="phone" name="phone" placeholder="<?php echo e(trans('register.phone')); ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <input required="" style="border-radius: 27px;" class="form-control" type="password" id="password" name="password" placeholder="<?php echo e(trans('register.Password')); ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <input required="" style="border-radius: 27px;" class="form-control" type="password" id="cpassword" name="cpassword" placeholder="<?php echo e(trans('register.Confirm password')); ?>" />
                                                </div>
                                                       <div class="login_footer form-group mb-50">
                                                 
                                                </div>
                                                <div class="form-group mb-30">
                                                    <button style="font-family: 'NotoKufi';" type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login"><?php echo e(trans('register.Update Password')); ?></button>
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
                $( "#ChangePassword" ).validate( {
                    rules: {
                      
                       
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
                        
                    },
                    messages: {
                       
                        
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
        </script>
        
             <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/new_password.blade.php ENDPATH**/ ?>