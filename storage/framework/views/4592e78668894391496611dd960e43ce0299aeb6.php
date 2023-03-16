<?php $__env->startSection('content'); ?>
<style>
    
  a {
      font-family: 'NotoKufi';
    }
            </style>

        <!--End header-->
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('offer.Home')); ?></a> 
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a> <?php echo e(trans('offer.Offers')); ?> </a><i class="fa fa-angle-right ml-1 mr-1 mt-1"></i> <a><?php if(count($offers)>0){
                            echo  $offers[0]->offer->offer_title;
                             
                         }else{
echo "Offers";
                         }?>
                         </a>
                    </div>
                </div>
            </div>
            <div class="page-header mt-30 mb-50">
                <div class="container">
                    <div class="archive-header">
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                
                                <h1 id="offer_name" class="mb-15 " style="display: inline-block;"><?php if(count($offers)>0){
                                    echo  $offers[0]->offer->offer_title;
                                     ?>
                                 </h1>
   
       <form id="offer_btn" method="post" action="<?php echo e(route('add_offer_cart')); ?>" style="display: inline-block;">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="offer_id" value="<?php echo e($offers[0]->offer_id); ?>" >
        <input type="hidden" name="quantity" value="1" >


      

    <div class="product-extra-link2">
        <button type="submit"  style="font-family: 'NotoKufi';"class="kofi button button-add-to-cart"><i class="fa fa-cart-plus fa-lg ml-1 mr-1"></i><span><?php echo e(trans('product.Add')); ?></span></button>
    </form>
        
      
                                        







<?php
                                }else{
echo "Offers";
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
                                <p><?php echo e(trans('offer.We found')); ?> <strong class="text-brand"><?php echo e(count($offers)); ?></strong> <?php echo e(trans('offer.items for you!')); ?></p>

                            </div>
                           
                             
                                    
                            </div>
                        </div>
                        <div class="row product-grid">

                            <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
    <form method="post" id="add_cartt" action="<?php echo e(route('add_cart')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="product_id" value="<?php echo e($offer->product->id); ?>" >
        <input type="hidden" name="quantity" value="1" >

                                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?php echo e(route('product',$offer->product->id)); ?>">
                                                    <img class="default-img h-200" src="<?php echo e($offer->product->image); ?>" alt="" style="height: 250px; width:250px;" sty/>
                                                    <img class="hover-img h-200" src="<?php echo e($offer->product->image); ?>" alt=""  style="height: 250px; width:250px;"/>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                           
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                              
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-Offers">
                                                <a href="shop-grid-right.html"><?php echo e($offer->offer->offer_title); ?></a>
                                            </div>
                                            <h2><a href="<?php echo e(route('product',$offer->id)); ?>"> <?php echo e($offer->product->product_name); ?></h2>
                                         
                                            <div>
                                              
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span></span>
                                                    <span class="old-price"></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </form>
                                </div>
                                <!--end product card-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
                            </main>
                                <!--end product card-->
                           <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/offers.blade.php ENDPATH**/ ?>