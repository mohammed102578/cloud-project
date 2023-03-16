<?php $__env->startSection('content'); ?>
<?php $__env->startSection('content'); ?>
<style>
    
  
  
            </style>
        <!--End header-->
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('category.Home')); ?></a> 
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('category.Categories')); ?> </a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a> <?php if(count($categories->product)>0){
                            echo  $categories->category_name;
                             
                         }else{
                               echo trans("category.Categories");
                         }?></a>
                    </div>
                </div>
            </div>
            <div class="page-header mt-30 mb-50">
                <div class="container">
                    <div class="archive-header">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <h1 class="mb-15"><?php if(count($categories->product)>0){
                                   echo  $categories->category_name;
                                    
                                }else{
                                    echo trans("category.Categories");
                                }?></h1>
                                
                            </div>
                            <div class="col-xl-9 text-end d-none d-xl-block">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-lg-4-5">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p><?php echo e(trans('category.We found')); ?> <strong class="text-brand"><?php echo e(count($categories->product)); ?></strong> <?php echo e(trans('category.items for you!')); ?></p>
                            </div>
                           
                             
                                    
                            </div>
                        </div>
                        <div class="row product-grid">
                           <?php if(isset($categories)): ?>
                            <?php $__currentLoopData = $categories->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            

<div class="col-lg-1-5 col-md-3 col-12 col-sm-6" style="  width: 251px;">
    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"  style=" border:none;margin-top:2px;" data-wow-delay=".1s">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
            <a href="<?php echo e(route('product',['id'=>$category['id']])); ?>">
                    <img class="default-img" style="width:225px; height:225px;" src="<?php echo e($category['image']); ?>" alt="" />
                    <img class="hover-img" src="<?php echo e($category['image']); ?>" alt="" />
                </a>
            </div>
            <div class="product-action-1">
<?php 
if(isset($category['favorite'][0])){
    ?>
    <a aria-label="<?php echo e(trans('index.Added to favourites')); ?>" class="action-btn" href="<?php echo e(route('add_favorite',['product_id'=> $category['id']])); ?>"><i style="font-size:36px; color:#a6d71c;"class="fa fa-heart"></i></a>

<?php
}else{
?>
  <a aria-label="<?php echo e(trans('index.Add To Wishlist')); ?>" class="action-btn" href="<?php echo e(route('add_favorite',['product_id'=> $category['id']])); ?>"><i style="font-size:36px; color:#e2e2e2;"class="fa fa-heart"></i></a>

<?php
}

?>
            </div>
            <div class="product-badges product-badges-position product-badges-mrg">
              
            </div>
        </div>
        <div class="product-content-wrap">
            <div class="product-category">
            <a href="<?php echo e(route('category_page',['id'=>$category['category_id']])); ?>"><?php echo e($category['category']['category_name']); ?></a>
            <?php if(App::getLocale() == 'en'): ?>
        <?php if($category['available']==1){
                echo "<span class='pull-right' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.available') ."</span>";
            }else{
                echo "<span class='pull-right' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.Un available') ."</span>";


            }
            
            ?>
            <?php else: ?>
            <?php if($category['available']==1){
                echo "<span class='pull-left' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.available') ."</span>";
            }else{
                echo "<span class='pull-left' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.Un available') ."</span>";


            }
            
            ?>
            <?php endif; ?>
            
        
        </div>
            <h2><a href="<?php echo e(route('product',['id'=>$category['id']])); ?>"><?php echo e($category['product_name']); ?></a> </h2>
         
            <div>
              
            </div>
            <div class="product-card-bottom d-flex  justify-content-between">
                <div class="product-price">
                    <span><?php echo e($category['product_price']); ?></span>
                    <span class="old-price"><?php echo e($category['product_price_old']); ?></span>
                </div>
                <div class="add-cart">
                    
                <a class="add" href="<?php echo e(route('add_cart',['product_id'=> $category['id'],'quantity'=> 1])); ?>">
                    
                

<?php if(App::getLocale() == 'en'): ?>
<i class="fa fa-cart-plus fa-lg ml-1 mr-1"></i><?php echo e(trans('index.Add')); ?>


        <?php else: ?>
         
        <?php echo e(trans('index.Add')); ?><i class="fa fa-cart-plus fa-lg ml-1 mr-1"></i>
      
                
<?php endif; ?>            
            
            
            
            
            
            
            
            
            
            
            </a>
                </div>
            </div>
        </div>
    </div>
</div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </main>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/category.blade.php ENDPATH**/ ?>