<style>

</style>
<?php if(App::getLocale() == 'en'): ?>
<style>
    
#elfateh{
   
    color: #5e5c59;
font-size: 16px;
line-height: 1.4em;
}
#logo{
    float: right;  
}

  h6{
    color: #5e5c59;
font-size: 16px;
line-height: 1.4em;
}

</style>  
  <?php else: ?>
<style>
h6{
    font-family: 'NotoKufi';
    font-size: 19px;
line-height: 1.4em;
}
</style>   
 <?php endif; ?>

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a id="logo" href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-larg">
                <img src="<?php echo e(asset('admin/assets/img/lifestyle.jpg')); ?>" style="width:150px;height:50px;">
            </div>
            
        </a>
        <a  id="elfateh" class="simple-text logo-normal">
        <?php echo e(__('messages.lifestyle')); ?>

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php  if(Route::currentRouteName() == 'Dashboard'){ echo"active";}?>">
                
                <a  href="<?php echo e(route('Dashboard')); ?>">
                    
                    <h6><i class="nc-icon nc-bank"></i><?php echo e(__('messages.Dashboard')); ?></h6>
                    
                </a>
            </li>
           
            <li class="<?php  if(Route::currentRouteName() == 'order.index'){ echo"active";}?>">
                <a href="<?php echo e(route('order.index')); ?>">
               
                    <h6> <i class="nc-icon nc-shop"></i> <?php echo e(__('messages.Orders')); ?></h6>
                </a>
            </li>
            <li class="<?php  if(Route::currentRouteName() == 'Notifications'){ echo"active";}?>">
                <a href="<?php echo e(route('Notifications')); ?>">
            
                     <h6>      <i class="nc-icon nc-bell-55"></i><?php echo e(__('messages.Notifications')); ?></h6>
               
                </a>
            </li>
            <li class="<?php  if(Route::currentRouteName() == 'reports'){ echo"active";}?>">
                <a href="<?php echo e(route('reports')); ?>">
               
                    <h6> <i class="nc-icon nc-paper"></i><?php echo e(__('messages.Reports')); ?></h6>
                </a>
            </li>

            <li class="<?php  if(Route::currentRouteName() == 'Product'){ echo"active";}?>">
                <a href="<?php echo e(route('Product')); ?>">
                
            
                    <h6><i class="nc-icon nc-world-2"></i><?php echo e(__('messages.Product')); ?></h6>
                </a>
            </li>
          



            <li class="<?php  if(Route::currentRouteName() == 'category'){ echo"active";}?>">
                <a href="<?php echo e(route('category')); ?>">
                
                    <h6> <i class="material-icons">
                    category</i><?php echo e(__('messages.Categorie')); ?></h6>
                </a>
            </li>


            



            <li class="<?php  if(Route::currentRouteName() == 'user.index'){ echo"active";}?>">
                <a href="<?php echo e(route('user.index')); ?>">
                
                    <h6><i class="material-icons">UM</i><?php echo e(__('messages.UserManagement')); ?></h6>
                </a>
            </li>
           


            <li class="<?php  if(Route::currentRouteName() == 'Settings'){ echo"active";}?>">
                <a href="<?php echo e(route('Settings')); ?>">
                
                    <h6><i class="nc-icon nc-settings-gear-65"></i><?php echo e(__('messages.Settings')); ?></h6>
                </a>
            </li>
           
        </ul>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/app/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>