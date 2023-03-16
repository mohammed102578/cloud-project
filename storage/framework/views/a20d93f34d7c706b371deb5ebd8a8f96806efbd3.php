

<?php if(App::getLocale() == 'en'): ?>
<style>
  table.dataTable thead > tr > th{
    text-align: left;
  }
  #input_search{
    border-radius: 5px 0px 0px 5px;
  }
</style>   
 <?php else: ?>

 <style>
  table.dataTable thead > tr > th{
    text-align: right;
  }
  #input_search{
    border-radius: 0px 11px 11px 0px;
  }
  </style>
    <?php endif; ?>
<div class="container-fluid col-md-12">
<nav class="navbar navbar-expand-lg navbar-absolute  navbar-transparent" >
    
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
          
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

      
         
        

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
     
            <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search..." id="input_search">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
                </div>
            </form>
            <div class="dropdown" id="idropdownNavbar" style="top:-10px">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" style="background-color:#f4f3ef;border-color:#f4f3ef; margin-bottom:-6px; padding: 10px 6px;" aria-expanded="false">
             <h5 style="display: inline;   color:#66615b; font-family: 'NotoKufi';">
                <?php if(App::getLocale() == 'ar'): ?>
              <?php 
              if(LaravelLocalization::getCurrentLocaleName()=='Arabic'){
echo"العربية";
              } else{
                echo "English";
              }
              
               
              ?>
             </h5>
             <img src="<?php echo e(URL::asset('admin/flags/sudan.png')); ?>" style="width: 18px;height:18px" alt="">
              <?php else: ?>
              <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

              <img src="<?php echo e(URL::asset('admin/flags/US.png')); ?>" alt="">
              <?php endif; ?>
              </button>
            <div class="dropdown-menu">
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                        </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
            <ul class="navbar-nav">
                
                <li class="nav-item btn-rotate dropdown">
                <a class="nav-link" href="<?php echo e(route('Notifications')); ?>">
            <i class="material-icons">notifications</i>
            <span class="notification"style="top: 0px;position: absolute;"><?php echo e($notifications2 ?? ''); ?></span>
            <p class="d-lg-none d-md-block">
              <?php echo e(__('Some Actions')); ?>

            </p>
          </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                    </div>
                </li>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>
                            <span class="d-lg-none d-md-block"><?php echo e(__('Account')); ?></span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><?php echo e(__('Log out')); ?></a>
                            <a class="dropdown-item" href="<?php echo e(route('User.profile')); ?>"><?php echo e(__('My profile')); ?></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
  
</nav>
</div><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/app/layouts/navbars/navs/auth.blade.php ENDPATH**/ ?>