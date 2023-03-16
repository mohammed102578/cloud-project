<?php $__env->startSection('content'); ?>
    <style>

 

          </style>



        <!--End header-->
        <main class="main pages">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('profile.Home')); ?></a>
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.Shop')); ?></a> <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.My Account')); ?></a>
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">







                   
                        <div class="col-lg-10 m-auto">
                            <div class="row">


<div class="card" style="height: auto">
    <div class="card-header">
        <h4 class="text-body pull-left"><?php echo e(auth()->user()->name); ?></h4>

        <img src="<?php echo e(auth()->user()->image); ?>" class="rounded-circle pull-right" alt="Cinque Terre" style="  width: 68px; height: 78px;"> 
    </div>

    <div class="card-body">
    <div class="row">
                                <div class="col-md-4">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">


                                            <li class="nav-item">
                                                <a style="" class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#user-detail" role="tab" aria-controls="user-detail" aria-selected="true"><i class="fa fa-user mr-10"></i><?php echo e(trans('profile.User details')); ?></a>
                                            </li>

                                              <li class="nav-item">
                                                <a class="nav-link"style="" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fa fa-edit mr-10"></i><?php echo e(trans('profile.Account Update')); ?></a>
                                            </li>
                                            

                                            <li class="nav-item">
                                                <a class="nav-link"style="" id="changeImage-detail-tab" data-bs-toggle="tab" href="#changeImage" role="tab" aria-controls="changeImage" aria-selected="true"><i class="fa fa-camera mr-10"></i><?php echo e(trans('profile.Change Picture')); ?></a>
                                            </li>


                                            <li class="nav-item">
                                                <a class="nav-link"style="" id="changePassword-detail-tab" data-bs-toggle="tab" href="#changePassword" role="tab" aria-controls="changePassword" aria-selected="true"><i class="fa fa-key mr-10"></i><?php echo e(trans('profile.Change Password')); ?></a>
                                            </li>
            
                                           
                                          
                                            <li class="nav-item">
                                                <a class="nav-link" style=""href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out mr-10"></i><?php echo e(trans('profile.Logout')); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-md-7 col-sm-12" >
                                    <div class="tab-content account dashboard-content pt-10" >
                                        
                                        
                                         
                                       
                                      
                                       
                                        <div class="tab-pane fade active show"  style=""id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6><?php echo e(trans('profile.Account Update')); ?></h6>
                                                </div>
                                                <div class="card-body">
                                                   
                                                    <form method="post" action="<?php echo e(route('update_profile')); ?>" id="update_user">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="row">
                                                       



                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Name')); ?> <span class="required"></span></label>
                                                                <input required="" class="form-control" name="name"  value="<?php echo e(auth()->user()->name); ?>" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Phone')); ?> <span class="required"></span></label>
                                                                <input required="" class="form-control" name="phone"  value="<?php echo e(auth()->user()->phone); ?>" type="text" />
                                                            </div>
                                                             <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.email')); ?> <span class="required"></span></label>
                                                                <input required="" class="form-control" name="email" value="<?php echo e(auth()->user()->email); ?>" type="email" />
                                                            </div>
                                                           
                                                          
                                                            <div class="col-md-12">
                                                                <button style="" type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit"><?php echo e(trans('profile.Account Update')); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane fade" id="changeImage" role="tabpanel" aria-labelledby="changeImage-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6><?php echo e(trans('profile.Change Picture')); ?></h6>
                                                </div>
                                                <div class="card-body">
                                                   
      
                                                        <form class="form" action="<?php echo e(route('Add_picture')); ?>"
                                                        method="POST"
                                                        enctype="multipart/form-data" id="ChangingImage">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="token" value="<?php echo e(Session::get('token')); ?>">
                                                        <div class="row">
                                                          
                                                           
                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Upload')); ?> <span class="required"></span></label>
                                                                <input type="file" class="form-control"  name="image" style="padding-right: 36px;" multiple required/>
                                                            </div>


                                                            <div class="col-md-12">
                                                                <button type="submit" style="" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit"><?php echo e(trans('profile.Add Picture')); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>






                                        <div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="changePassword-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6><?php echo e(trans('profile.Change Password')); ?></h6>
                                                </div>
                                                <div class="card-body">
                                                   
      
                                                        <form class="form" action="<?php echo e(route('updatePassword')); ?>"
                                                        method="POST" id="ChangePassword">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="token" value="<?php echo e(Session::get('token')); ?>">
                                                        <div class="row">
                                                          

                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.old_password')); ?> <span class="required"></span></label>
                                                                <input type="text" class="form-control"  name="old_password" required />
                                                                <?php if($errors->has('old_password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('old_password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                                            </div>



                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Password')); ?> <span class="required"></span></label>
                                                                <input type="password" class="form-control"  name="password" id="password"  required/>
                                                                <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>                                                            </div>


                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Confirm password')); ?> <span class="required"></span></label>
                                                                <input type="password" class="form-control"  name="c_password"  required/>
                                                                <?php if($errors->has('c_password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('c_password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                                            </div>

                                                            
                                                              
                                                            <div class="col-md-12">
                                                                <button  style=""  type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit"><?php echo e(trans('profile.Change Password')); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                

                                        <div class="tab-pane fade " id="user-detail" role="tabpanel" aria-labelledby="user-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <img src="<?php echo e(auth()->user()->image); ?>" class="rounded-circle pull-center" alt="Cinque Terre" style="  width: 68px; height: 78px;"> 
                                                </div>
                                                <div class="card-body">
                                                   
                                                   
                                                        <div class="row">
                                                          
                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Name')); ?>: <span class="required"></span></label>
                                                                <span><?php echo e(auth()->user()->name); ?></span>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Phone')); ?>: <span class="required"></span></label>
                                                                <span><?php echo e(auth()->user()->phone); ?></span>
                                                            </div>
                                                             <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.email')); ?> :<span class="required"></span></label>
                                                                <?php echo e(auth()->user()->email); ?></span>
                                                            </div>
                                                           
                                                          
                                                            
                                                        </div>
                                                   
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div>







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
                    minlength: 4,
                },
                old_password: {
                    required: true,
                    minlength: 4,
                },
                
                c_password: {
                    required: true,
                    minlength: 4,
                    equalTo : "#password",
                },
                
            },
            messages: {
               
                
                password: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
                },
                old_password: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
                },
                c_password: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
              equalTo : "<?php echo trans('register.This field is not match password');?> ",
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



        //



    } );
</script>





























<script type="text/javascript">
	

    $( document ).ready( function () {
        $.validator.addMethod("alpha", function(value, element) {
   // return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    // --                                    or leave a space here ^^

    return this.optional(element) || value == value.match(/^(?:[a-zA\s@,A-ZA\s@,=%$#&_\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDCF\uFDF0-\uFDFF\uFE70-\uFEFF]|(?:\uD802[\uDE60-\uDE9F]|\uD83B[\uDE00-\uDEFF]))+$/);    
});


        $( "#update_user" ).validate( {
            rules: {
              
               
                name: {
                    required: true,
                    minlength: 3,
                    alpha: true ,
                    maxlength:50,
              },
              
              phone: {
        required: true,
        minlength: 10,
        maxlength:10,
        digits: true,
    },
              email: {
                  required: true,
                 
                  email: true,
              },
              
          },
          messages: {
             
              
            name: {
                required: "<?php echo trans('register.This field is requiered');?> ",
                  alpha : "<?php echo trans('register.This field just Accept character');?> ",
                  minlength:"<?php echo trans('register.This field must contain at least ten characters');?> ",
                  maxlength:"<?php echo trans('register.This field cannot be greater than fifty characters');?> ",

              },
             
              phone:{
required:"<?php echo trans('register.This field is requiered');?> ",
minlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
maxlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
digits:"<?php echo trans('register.This field must contain number just');?> ",
} ,
              email:{
      required:"<?php echo trans('register.This field is requiered');?> ",
      email:"<?php echo trans('register.please enter valid email');?> ",
     
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











<script type="text/javascript">
	
    
    $( document ).ready( function () {
        $( "#ChangingImage" ).validate( {
    rules: {
      
       
        image: {
            required: true,
            extension: "jpg|jpeg|png|ico|bmp",
        },
        
       
        
    },
    messages: {
       
        
    image: {
      required:"<?php echo trans('register.This field is requiered');?> ",
      extension: "<?php echo trans('register.This File not Acceptable');?> ",
    

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
</script>













       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/profile.blade.php ENDPATH**/ ?>