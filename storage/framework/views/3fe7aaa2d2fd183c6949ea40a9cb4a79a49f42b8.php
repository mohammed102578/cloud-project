<?php $__env->startSection('content'); ?>
    <style>
a,h6 ,span ,th ,button,h5,h4 {
    font-family: 'NotoKufi';
  }


  @media  only screen and (max-width: 600px){
#card {
    box-shadow: 1px 1px 15px #fff;
}
#card_body{

padding-left: -5px;
padding-right: -5px;
}

#row{


margin-left: -35px;
margin-right: -35px;

}
  }
  @media  only screen and (max-width: 600px) {
    
}

@media  only screen and (min-width: 601px) {
    #card_body{
        padding-left: 3.25rem;
        padding-right: 3.25rem;

}
}



@media  only screen and (max-width: 600px) {
    #card_body1{

padding-left: -5px;
padding-right: -5px;
}
}



@media  only screen and (min-width: 601px) {
    #card_body1{
        padding-left: 3.25rem;
        padding-right: 3.25rem;

}
}
          </style>



        <!--End header-->
        <main class="main pages">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('profile.Home')); ?></a>
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.Shop')); ?></a> <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('profile.Consultations')); ?></a>
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">







                   
                        <div class="col-lg-12 m-auto">
                            <div class="row" id="row">


<div class="card" id="card" style="height: auto">
    <div class="card-header">
        <h4 class="text-body pull-left"><?php echo e(auth()->user()->name); ?></h4>

        <img src="<?php echo e(auth()->user()->image); ?>" class="rounded-circle pull-right" alt="Cinque Terre" style="  width: 68px; height: 78px;"> 
    </div>

    <div class="card-body " style="padding: 0.25rem;">
    <div class="row">
                                <div class="col-md-4">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">


                                            <li class="nav-item">
                                                <a style="font-family: 'NotoKufi';" class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#user-detail" role="tab" aria-controls="user-detail" aria-selected="true"><i class="fa fa-edit mr-10"></i><?php echo e(trans('profile.Consultations')); ?></a>
                                            </li>

                                              <li class="nav-item">
                                                <a class="nav-link"style="font-family: 'NotoKufi';" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fa fa-plus mr-10"></i><?php echo e(trans('profile.Add Consultations')); ?></a>
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-md-8 col-sm-12" >
                                    <div class="tab-content account dashboard-content pt-10" >
                                        
                                         
                                       
                                      
                                       
                                        <div class="tab-pane fade active show"  style="font-family: 'NotoKufi';"id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6><?php echo e(trans('profile.Add Consultations')); ?></h6>
                                                </div>
                                                <div class="card-body" id="card_body1">
                                                   
                                                    <form method="post" action="<?php echo e(route('Add_consultation')); ?>" id="update_user">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Subject')); ?> <span class="required"></span></label>
                                                                <input required="" class="form-control" name="title"  type="text" />
                                                            </div>
                                                             <div class="form-group col-md-12">
                                                                <label> <?php echo e(trans('profile.Consultation')); ?> <span class="required"></span></label>

                                                               <textarea name="consultation" ></textarea>
                                                            </div>
                                                           
                                                          
                                                            <div class="col-md-12">
                                                                <button style="font-family: 'NotoKufi';" type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit"><?php echo e(trans('profile.Add Consultations')); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>






                                                            
                                            


                                        <div class="tab-pane fade " id="user-detail" role="tabpanel" aria-labelledby="user-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                <b><?php echo e(trans('profile.Consultations')); ?></b>                                                </div>
                                                <div class="card-body" id="card_body" style="background-color:#f0ebe3">
                                                   
                                                   <?php $__currentLoopData = $consultations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row text-center">
                                                          
                                                            <div class="form-group text-center col-md-12"
                                                            
                                                            <?php 
                                                            if($consultation->type==1){
                                                                ?>

style="background-color:#fff;border-radius: 10px;"
<?php
                                                            }else{
?>
style="background-color:#d9fdd3;border-radius: 10px;"

<?php

                                                            }
                                                            
                                                            ?>
                                                            >



                                                            <?php 
                                                            if($consultation->type==1){
                                                                ?>
                                                                
<span class="pull-left"><i class="fi-rs-user"></i></i><?php echo e(trans('messages.Admin')); ?></span>

<?php



                                                            }else{
?>
<span class="pull-right"><i class="fi-rs-user "></i><?php echo e(trans('messages.you')); ?></span>

<?php

                                                            }
                                                            
                                                            ?>


                                                                <b><?php echo e($consultation['title']); ?></b>
                                                                <br>
                                                                <span><?php echo e($consultation['consultation']); ?></span>
                                                                <div><?php echo e($consultation->created_at); ?></div>
                                                            </div>
                                                    
                                                        </div>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        $.validator.addMethod("alpha", function(value, element) {
   // return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    // --                                    or leave a space here ^^

    return this.optional(element) || value == value.match(/^(?:[a-zA\s@,A-ZA\s@,=%$#&_\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDCF\uFDF0-\uFDFF\uFE70-\uFEFF]|(?:\uD802[\uDE60-\uDE9F]|\uD83B[\uDE00-\uDEFF]))+$/);    
});


        $( "#update_user" ).validate( {
            rules: {
              
               
                title: {
                    required: true,
                   
              },
              
             
              consultation: {
                  required: true,
                 
                 
              },
              
          },
          messages: {
             
              
            title: {
                required: "<?php echo trans('register.This field is requiered');?> ",
                

              },
             
          
              consultation:{
      required:"<?php echo trans('register.This field is requiered');?> ",
     
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/consultation.blade.php ENDPATH**/ ?>