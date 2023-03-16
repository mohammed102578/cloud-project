<?php $__env->startSection('content'); ?>

<style>
    
  a,h6 ,span ,h1 {
      font-family: 'NotoKufi';
    }


   
 
            </style>

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('cart.Home')); ?></a>
                <span></span><a><?php echo e(trans('cart.Shop')); ?></a>  <span></span><a> <?php echo e(trans('cart.Favorites')); ?></a>
            </div>
        </div>
    </div>
    <div class="container mb-30 mt-50">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <div class="mb-50">
                    <h1 class="heading-2 mb-10"><?php echo e(trans('cart.Your Favorites')); ?></h1>
                    <h6 class="text-body"><?php echo e(trans('cart.There are')); ?> <span class="text-brand">
                        <?php if(isset($favorite_products)){
                            
                            echo count($favorite_products);
                            
                        }else{
                            
                          echo 0;  
                        }?>
                        
                    </span><?php echo e(trans('cart.products in this list')); ?></h6>
                </div>
                <div class="table-responsive shopping-summery">
                    <table class="table table-wishlist">
                        <thead>
                            <tr class="main-heading">
                                <th style="font-family: 'NotoKufi';">
                                   <?php echo e(trans('cart.id')); ?>

                                </th>
                                <th scope="col"style="font-family: 'NotoKufi';"><?php echo e(trans('cart.image')); ?></th>

                                <th scope="col"style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Product')); ?></th>
                                <th scope="col"style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Price')); ?></th>
                                <th scope="col"style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Remove')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
<?php $i=0?>
<?php if(isset($favorite_products)): ?>
<?php $__currentLoopData = $favorite_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++;?>

                            <tr class="pt-30">
                                <td class="custome-checkbox pl-30">
                                    <?php echo e($i); ?>

                                </td>
                                <td class="image product-thumbnail pt-40"><img src="<?php echo e($favorite_product->product->image); ?>" alt="#" /></td>
                                <td class="product-des product-name" data-title="<?php echo e(trans('cart.Product')); ?>">
                                    <h6><a class="product-name mb-10" href="<?php echo e(route('product',$favorite_product->product_id)); ?>"><?php echo e($favorite_product->product->product_name); ?></a></h6>
                                  
                                </td>
                                <td class="price" data-title="<?php echo e(trans('cart.Price')); ?>">
                                    <h3 class="text-brand">$<?php echo e($favorite_product->product->product_price); ?></h3>
                                </td>
                                
                                <td class="action text-center" data-title="<?php echo e(trans('cart.Remove')); ?>">
                                    <a href="<?php echo e(route('delete_favorite',['id'=>$favorite_product->product_id])); ?>" class="text-body"><i class="fi-rs-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>







                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/favorite.blade.php ENDPATH**/ ?>