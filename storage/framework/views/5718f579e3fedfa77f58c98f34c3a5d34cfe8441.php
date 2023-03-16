<?php $__env->startSection('content'); ?>
<style>
    
  a,h6 ,span ,h1 {
      font-family: 'NotoKufi';
    }

    select.form-control:not([size]):not([multiple]) {
  height: calc(3.5rem + 2px);
}
   
 
            </style>
    <main class="main">



        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('Details.Home')); ?></a>
                    
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('Details.Order Details')); ?></a>
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10"><?php echo e(trans('Details.Your Order Details')); ?></h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body"><?php echo e(trans('Details.There are')); ?> <span class="text-brand"><?php echo count($orders_details)?></span> <?php echo e(trans('Details.products in your Order')); ?></h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th style=" font-family: 'NotoKufi';">
                                      #  <?php echo e(trans('Details.id')); ?>

                                    </th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.image')); ?></th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Product Name')); ?></th>
                                    
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Type')); ?></th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Price')); ?></th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Quantity')); ?></th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Subtotal')); ?></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
<?php $i=0; $total=0;?>

<?php $__currentLoopData = $orders_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++?>
                                <tr class="pt-30">
                                    <td class="custome-checkbox pl-30">
                                        <?php echo e($i); ?>

                                    </td>
                                    <td class="image product-thumbnail pt-40"><img src="

                                    <?php
                                    if($orders_detail['product']!==null){

                                        echo $orders_detail['product']['image'];
                                    }else{
                                       echo  $orders_detail['offer']['offer_image'];
                                    }
                                    
                                    ?>
                                    
                                    
                                    
                                    
                                    " alt="#"></td>
                                    <td class="product-des product-name">
                                        <h6 class="mb-1"><a class="product-name mb-1 text-heading" >
                                        <?php
                                    if($orders_detail['product']!==null){

                                        echo $orders_detail['product']['product_name'];
                                    }else{
                                       echo  $orders_detail['offer']['offer_title'];
                                    }
                                    
                                    ?>        
                                    
                                    </a></h6>
                                       
                                          
                                        </div>
                                    </td>
                                    
                                    <td class="product-des product-name" data-title="<?php echo e(trans('Details.Type')); ?>">
                                        <h6 class="mb-1"><a class="product-name mb-1 text-heading" >
                                          
                                        
                                        <?php
                                        
                                        if($orders_detail['Type']==0){
echo trans('Details.product');
                                        }else{

echo trans('Details.offer');
                                        }
                                        ?>
                                        
                                        </a></h6>
                                       
                                          
                                        </div>
                                    </td>

                                    <td class="price" data-title="<?php echo e(trans('Details.Price')); ?>">
                                        <h4 class="text-body">
                                            
                                    
                                        <?php
                                    if($orders_detail['product']!==null){

                                        echo $orders_detail['product']['product_price'];
                                    }else{
                                        echo $orders_detail['offer']['offer_price'];
                                    }
                                    
                                    ?>        
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </h4>
                                    </td>
                      
                                    <td class="text-center detail-info" data-title="<?php echo e(trans('Details.Quantity')); ?>">
                                        <div class="detail-extralink mr-15">
                                         
                                             
                                                <h6 class="text-brand">
                                                    
                                                    <?php
                                                    
                                                    $quantity=0;
                                                    if($orders_detail['quantity']!==null){
                                                        $quantity= $orders_detail['quantity'];
                                                    }else{
                                                        $quantity= 1;
                                                        
                                                    }
                                                    
                                                    
                                                    echo $quantity;?>   
                                                    </h6>
                                              
                                           
                                        </div>
                                    </td>
                                    
                                    
                                    <td class="price" data-title="<?php echo e(trans('Details.Subtotal')); ?>">
                                        <h4 class="text-brand">
                                            
                                        <?php
                                    if($orders_detail['product']!==null){

                                        echo $orders_detail['product']['product_price'] *  $quantity;
                                    }else{
                                       echo  $orders_detail['offer']['offer_price'] *  $quantity;
                                    }
                                    
                                    ?>        
                                        
                                        
                                        
                                </h4>
                                    </td>
                                   
                                </tr>
                                <?php
                                    if($orders_detail['product']!==null){

                                        $total+= $orders_detail['product']['product_price'] *  $quantity;
                                    }else{
                                        $total+= $orders_detail['offer']['offer_price'] *  $quantity;
                                    }
                                    
                                    ?>        
                                        
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e(trans('Details.Total')); ?></td><td></td><td></td><td></td><td></td><td></td>
                               
                                <td class="price" data-title="<?php echo e(trans('Details.Total')); ?>">
                                    <h4 class="text-body">SDG<?php echo e($total); ?></h4>
                                </td>
                            
                            
                            </tr>


                            </tbody>
                        </table>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/order_deatails.blade.php ENDPATH**/ ?>