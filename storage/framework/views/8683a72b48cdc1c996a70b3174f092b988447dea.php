<?php $__env->startSection('content'); ?>
<style>
  
  h3,h6,a,span,div{
  font-family: 'NotoKufi';
}
            </style>
    <main class="main">

 

        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('cart.Home')); ?></a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('cart.Shop')); ?></a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('cart.Cart')); ?></a>
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h6 class="heading-2 mb-10"><?php echo e(trans('cart.Your Cart')); ?></h6>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body"><?php echo e(trans('cart.There are')); ?> <span class="text-brand"><?php echo count($carts)?></span> <?php echo e(trans('cart.products in your cart')); ?></h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead style="">
                                <tr class="main-heading" >
                                    <th style="font-family: 'NotoKufi';" >
                                    #
                                    </th>
                                   
                                    
                                 
                                    <th colspan="2" style="font-family: 'NotoKufi'; padding-right:10px;"><?php echo e(trans('cart.Product')); ?></th>
                                    <th style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Unit Price')); ?></th>
                                    <th style="font-family: 'NotoKufi'; padding-right:10px;"><?php echo e(trans('cart.Quantity')); ?></th>
                                    <th style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Type')); ?></th>
                                    <th style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Remove')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
<?php $s=0; $total=0;?>

<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $s++?>
                                <tr class="pt-30">
                                    <td class="text-center m-10">
                                        <?php echo e($s); ?>

                                    </td>
                                    <td class="image product-thumbnail pt-40 pr-10">
                                    <a href="<?php echo e(route('product',['id'=>$cart->product->id])); ?>">
                                    <img style="width: 100px;height:100px;" src="
                                    
                                    <?php if($cart->product !==null){
                                            echo $cart->product->image;
     
                                            }else{
                                             echo $cart->offer->offer_image;
                                            }?>" alt="#"></a></td>
                                    <td class="product-des product-name">
                                        <h6 class="text-body mb-0 mr-10 ml-10">
                                        <a href="<?php echo e(route('product',['id'=>$cart->product->id])); ?>">
                                        <?php if($cart->product !==null){
                                            echo $cart->product->product_name;
     
                                            }else{
                                             echo $cart->offer->offer_title;
                                            }?> </a></h6>
                        
                                    </td>
                                    <td class="price" data-title="<?php echo e(trans('cart.Unit Price')); ?>">
                                        <h4 class="text-body mb-0"> <?php
                                        if($cart->product !==null){
                                            echo $cart->product->product_price;
     
                                            }else{
                                             echo $cart->offer->offer_price;
                                            } ?></h4>
                                    </td>




                                    <td class="text-center detail-info" data-title="<?php echo e(trans('cart.Quantity')); ?>">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                
                                                    <form action="<?php echo e(route('quantity')); ?>" method="post">
                                    
                                                        <?php echo csrf_field(); ?>

                                                        <?php 
                                                        if($cart->product_id==null){
                                                            ?>
                                                         
                                                       
                                                         <input type="hidden" name="offer_id" value="<?php echo e($cart->offer_id); ?>">
                                                         <?php
                                                        }else{
                                                            ?>
                                                         <input type="hidden" name="product_id" value="<?php echo e($cart->product_id); ?>">

                                                            <?php
                                                        }
                                                        
                                                        ?>
                                                     
                                                     <select name="quantity" style="width: 61px; margin-left: -15px;" onchange="this.form.submit()">
                                                        <?php
                                                            $i=0;
                                                            for($i=0;$i<=100;$i++){
                                                                ?>
                                                             <option value="<?php echo e($i); ?>"
                                                             
                                                             
                                                             




                                                             <?php
                                                    
                                                             $quantity=0;
                                                             if($cart->quantity!==null){
                                                                 $quantity= $cart->quantity;
                                                             }else{
                                                                 $quantity= 1;
                                                                 
                                                             }
                                                             
                                                             
                                                             if($quantity==$i){
                                                                echo "selected";
                                                                
                                                             }?> 


                                                             ><?php echo e($i); ?></option>
<?php

                                                            }
                                                            ?>

                                                        <select>
                                                    </form>
                                                  
                                             
                                            </div>
                                        </div>
                                    </td>



                                 
                                  
                                    <td class="price" data-title="<?php echo e(trans('cart.Type')); ?>">
                                        <h4 class="text-brand mb-0">
<?php if($cart->Type==0){
    echo trans('cart.Product');
}else{
    echo trans('cart.offer');
    
}?>

                                        </h4>
                                    </td>
                                    <td class="action text-center mb-0" data-title="<?php echo e(trans('cart.Remove')); ?>"><a href="<?php
                                       if($cart->product !==null){
                                       echo route('delete_product_cart',$cart->product->id);

                                       }else{
                                        echo route('delete_offer_cart',$cart->offer->id);
                                       }

                                            
                                            
                                            ?>" class="text-body"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                <?php 
                                                    
                                                    if($cart->product !==null){  
                    $total+= $cart->quantity * $cart->product->product_price;
                    
                                                    }else{

                    $total+= $cart->quantity * $cart->offer->offer_price;

                                                    }
                    
                    
                    ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </tbody>
                        </table>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="cart-action d-flex justify-content-between">
                        <a class="btn " href="<?php echo e(route('index')); ?>" style="font-family: 'NotoKufi';"><i class="fi-rs-arrow-left mr-10"></i><?php echo e(trans('cart.Continue Shopping')); ?></a>
                    
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-7">
                            <div class="calculate">
                             
                              
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-40">
                               
                                <form action="#" >
                                    <div class="d-flex justify-content-between">
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border p-md-4 cart-totals ml-30">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted"><?php echo e(trans('cart.Total')); ?></h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">SDG<?php echo e($total); ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <div class="divider-2 mt-10 mb-10"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="cart_total_label">
                                            <h6 class="text-muted"><?php echo e(trans('cart.Delivery  Available')); ?> ...?</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_amount">
                                            <a href="<?php echo e(route('get_deliveryCart')); ?>" class="btn mb-0 w-100 " style="font-family: 'NotoKufi';"><?php echo e(trans('cart.Delivery')); ?></a>
                                            <td class="cart_total_label">
                                                
                                                    <a  href="<?php echo e(route('add_order',['total_price'=>$total])); ?>" class="btn mb-0 w-100 pl-10 pr-1" style="  font-family: 'NotoKufi'; padding-left: 10px !important;padding-right: 1px;"><?php echo e(trans('cart.Without Delivery')); ?></a>

                                                

                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   <!-- a trigger modal -->

  
<script type="text/javascript">
	

    $( document ).ready( function () {
      function show () {
        $("#city").show()
      }
    });
      </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/cart.blade.php ENDPATH**/ ?>