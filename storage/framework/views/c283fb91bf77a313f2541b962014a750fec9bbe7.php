
<?php $__env->startSection('content'); ?>
<style>
  .form-group input {
  background: #fff;
  border: 1px solid #ececec;
  height: 64px;
  -webkit-box-shadow: none;
  box-shadow: none;
  padding-left: 20px;
  font-size: 16px;
  width: 100%;
}
textarea {
  border: 1px solid #ececec;
  border-radius: 10px;
  height: 50px;
  -webkit-box-shadow: none;
  box-shadow: none;
  padding: 10px 10px 10px 20px;
  font-size: 16px;
  width: 100%;
  min-height: 200px;
}
.card-header:first-child {
  border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card .card-header {
  padding: 1rem;
  margin-bottom: 0;
  background-color: #f7f8f9;
  border-bottom: 1px solid #ececec;
}

#card_body1{
padding-left: 3.25rem;
  padding-right: 3.25rem;
}
.card{
border-radius: 0;
  border: 0;
  -webkit-box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
  position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 1px solid rgba(0, 0, 0, 0.125);
border-radius: .25rem;
}






.dashboard-menu ul li {
  position: relative;
  border-radius: 10px;
  border: 1px solid #ececec;
  border-radius: 10px;
  margin-bottom: 10px;
}

.dashboard-menu ul li a {
  font-size: 16px;
  color: #7E7E7E;
  padding: 15px 30px;
  font-family: 'NotoKufi';
 font-weight: 700;
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
#card{
        width: 1000px;
        padding-right: 3.25rem;

}
}


button.submit, button[type="submit"] {
  font-size: 16px;
  font-weight: 500;
  padding: 15px 40px;
  color: #ffffff;
  border: none;
  font-family: 'NotoKufi';

  background-color: #a6d71c;
  border: 1px solid #a6d71c;
  border-radius: 10px;
}

          </style>


<div class="content">
<div class="page-content pt-150 pb-150">
                <div class="container">







                   
                        <div class="col-lg-12 m-auto">
                            <div class="row" id="row">


<div class="card" class="col-lg-12 col-md-12 col-sm-12 m-auto" id="card" style="height: auto">
    <div class="card-header">
        <h4 class="text-body pull-left"><?php echo e(auth('admin')->user()->name); ?></h4>

        <img src="<?php echo e(auth('admin')->user()->image); ?>" class="rounded-circle pull-right" alt="Cinque Terre" style="  width: 68px; height: 78px;"> 
    </div>

    <div class="card-body col-lg-12 " style="padding: 0.25rem;">
    <div class="row">
                                <div class="col-md-4 mt-10">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">


                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#user-detail" role="tab" aria-controls="user-detail" aria-selected="true"><?php echo e(trans('profile.Consultations')); ?></a>
                                            </li>

                                              <li class="nav-item">
                                                <a class="nav-link"id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-users mr-10"></i><?php echo e(trans('messages.Respond to the Consultation')); ?></a>
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-md-8 col-sm-12" >
                                    <div class="tab-content account dashboard-content pt-10" >
                                        
                                         
                                       
                                      
                                       
                                        <div class="tab-pane fade active show"  style="font-family: 'NotoKufi';"id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6><?php echo e(trans('messages.Respond to the Consultation')); ?></h6>
                                                </div>
                                                <div class="card-body" id="card_body1">
                                                   
                                                    <form method="post" action="<?php echo e(route('consultation.store')); ?>" id="update_user">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="user_id" value="<?php echo e($consultations[0]->user_id); ?>">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label style="font-family: 'NotoKufi';"> <?php echo e(trans('profile.Subject')); ?> <span class="required"></span></label>
                                                                <input required="" class="form-control" name="title"  type="text" />
                                                            </div>
                                                             <div class="form-group col-md-12">
                                                                <label  style="font-family: 'NotoKufi';"> <?php echo e(trans('profile.Consultation')); ?> <span class="required"></span></label>

                                                               <textarea name="consultation" ></textarea>
                                                            </div>
                                                           
                                                          
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit"><?php echo e(trans('messages.Respond to the Consultation')); ?></button>
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
                                                            if($consultation->type==0){
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
                                                            if($consultation->type==0){
                                                                ?>
                                                                
<span class="pull-left"><?php echo e($consultation->user->name); ?></span>

<?php



                                                            }else{
?>
<span class="pull-right"><?php echo e(trans('messages.Admin')); ?></span>

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
                </div> </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   

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
     
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/user_consultation.blade.php ENDPATH**/ ?>