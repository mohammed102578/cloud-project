
<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title "><?php echo e(trans('messages.About')); ?></h4>
         
            </div>
            <div class="card-body">
                     
              <div class="table-responsive">
              <div class="container-fluid">
 

       <div class="col-sm-12">  
        <form method="post" action="<?php echo e(route('about.store')); ?> " enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
            <div class="card-footer ml-auto mr-auto">
            <h3 class="mb-1 mb-3"> <i class="fa fa-info-circle"></i> <?php echo e(__('messages.About')); ?> </h3>
             </div>
           <div >
                     
                
           <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.Stor_name')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                   
                      <input class="form-control" name="about" id="input-name" type="text"  value="<?php echo e($setting->about); ?>" placeholder="<?php echo e(__('About Campane')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('About Campane')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('About Campane')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                   
            
                 
               
            
         <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.about_company')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                    <textarea  class="mt-3 form-control" name="about_company" value="<?php echo e($setting->about_company); ?>"><?php echo e($setting->about_company ?? ''); ?></textarea>
            
                      
                    </div>
                   </div>
                  </div>
                  
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.phone')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="phone"  type="number" value="<?php echo e($setting->phone); ?>"  placeholder="<?php echo e(__('phone')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('phone')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('phone')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('messages.watsapphone')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="watsapphone"  type="number"value="<?php echo e($setting->watsapphone); ?>"   placeholder="<?php echo e(__('watsap phone')); ?>"  required="true" aria-required="true"/>
                      <?php if($errors->has('watsap phone')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('watsapphone')); ?></span>
                      <?php endif; ?>
                    </div>
                   </div>
                  </div>
                  
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label">  <?php echo e(__('messages.image')); ?> </label>
                  <div class="col-sm-7 ">
                   
                    <input type="file" class="form-control"
                       name="company_image" 
                      >
                       <img src="<?php echo e($setting->company_image); ?>" value="<?php echo e($setting->company_image); ?>" alt="<?php echo e($setting->company_image); ?>" id="category-img-tag" width="200px" />   
                      
                   
                   </div>
                   <?php if($errors->has('company_image')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('company_image')); ?></span>
                      <?php endif; ?>
                  </div>
              </div>
              <button type="submit" class="mt-2 col-sm-3 btn  btn-block btn-flat" style="background:#a6d71d; color:#fff"> <?php echo e(__('messages.Save')); ?></button>
          
       </div>
    </div>
              </div>
            </div>
          </div>
          
          </form>
      </div>
    </div>
  </div>
</div>

   
         <script>
            CKEDITOR.replace( 'about' );
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/pages/about.blade.php ENDPATH**/ ?>