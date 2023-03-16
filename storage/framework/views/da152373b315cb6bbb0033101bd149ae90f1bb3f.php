<?php $__env->startSection('content'); ?>
<?php if(Session::has('token')): ?>
    <script>
     // or
      window.location.href = '<?php echo e(route("index")); ?>'; //using a named route
     </script>
     <?php endif; ?>
     <style>
        
        a , h1, button,h5 {
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
                                                <h1 class="mb-5"><?php echo e(trans('register.verify account')); ?></h1>
                                         
                                            </div>
                                            <form id="verify_form" action="<?php echo e(route('verify_code_password')); ?>" method="post">
                                                <div class="form-group" >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="text"style="border-radius: 27px;" class="form-control" required="" name="code" placeholder="<?php echo e(trans('register.Your Code')); ?>" />
                                                </div>
                                                <div class="form-group" >
                                                    <a href="<?php echo e(route('resend')); ?>"><?php echo e(trans('register.Resend The Code')); ?></a>
                                                          </div>
                                               
                                                    <button style="font-family: 'NotoKufi';" type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="submit"><?php echo e(trans('register.submit')); ?></button>
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
        $( "#verify_form" ).validate( {
            rules: {
              
               
                code: {
                    required: true,
                    digits: true,
                },
                
               
               
               
            },
            messages: {
               
               
            code: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              digits:"<?php echo trans('register.This field must contain number just');?> ",

                },
                
            

      
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
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/verify_code_password.blade.php ENDPATH**/ ?>