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
                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('order.Home')); ?></a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('order.Shop')); ?></a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('order.Orders')); ?></a>
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10"><?php echo e(trans('order.Your Orders')); ?></h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body"><?php echo e(trans('order.There are')); ?> <span class="text-brand"><?php echo count($orders)?></span><?php echo e(trans('order.orders')); ?></h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th style="font-family: 'NotoKufi';">
                                      #  <?php echo e(trans('order.id')); ?>

                                    </th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Trans Cost')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Products Cost')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Order Cost')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Order Date')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.place of delivery')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Order Status')); ?></th>
                                    <th scope="col" style="font-family: 'NotoKufi';"><?php echo e(trans('order.Details')); ?></th>

                                </tr>
                            </thead>
                            <tbody>
<?php $i=0; $total=0;?>

<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++?>
                                <tr class="pt-30">
                                    <td class="custome-checkbox pl-30">
                                        <?php echo e($i); ?>

                                    </td>
                                 
                                    <td class="price" data-title="<?php echo e(trans('order.Trans Cost')); ?>">
                                        <h4 class="text-body"><?php echo e($order->transportation_cost); ?> </h4>
                                    </td>
                                    <td class="price" data-title="<?php echo e(trans('order.Products Cost')); ?>">
                                        <h4 class="text-body"><?php echo e($order->total_price); ?> </h4>
                                    </td>
                                    <td class="price" data-title="<?php echo e(trans('order.Order Cost')); ?>">
                                        <h4 class="text-body"><?php echo e($order->transportation_cost + $order->total_price); ?> </h4>
                                    </td>
                                    <td class="price" data-title="<?php echo e(trans('order.Order Date')); ?>">
                                        <h4 class="text-body">
                                            <?php
                                            
                                            $timestamp=date('Y-m-d',strtotime($order->created_at));
                                            echo $timestamp;
                                                
                                                
                                                ?>
                                            
                                            </h4>
                                    </td>
                                
                                    
                                    <td style="font-family: 'NotoKufi';" class="action text-center" data-title="<?php echo e(trans('order.place of delivery')); ?>" >
                                    <?php
                                    
                                    if($order->transportation_cost==0){
                                        echo trans('order.From Store');
                                    }else{
                                        echo $order->prominent_place."-".$order->unit_name;
                                    }
                                    
                                    
                                    ?>
                                    
                                
                                </td>
                                
                                <td style="font-family: 'NotoKufi';" class="action text-center" data-title="<?php echo e(trans('order.Order Status')); ?>" >
                            <?php
                             if($order->active==0){
                                echo trans('order.Not received');
                            }else{
                                echo trans('order.It was received');
                            }
                            
                            
                            ?>
                            </td>
  
                                <td style="font-family: 'NotoKufi';" class="action text-center" data-title="<?php echo e(trans('order.Details')); ?>" ><a style="font-family: 'NotoKufi';" href="<?php echo e(route('get_details_order',['order_id'=>$order->id])); ?>" class="btn btn-brush-1"><?php echo e(trans('order.Details')); ?></a></td>
                                </tr>
                                
                                
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </tbody>
                        </table>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="order-action d-flex justify-content-between">
                        <a class="btn " href="<?php echo e(route('index')); ?>" style="font-family: 'NotoKufi';"><i class="fi-rs-arrow-left mr-10"></i><?php echo e(trans('order.Continue Shopping')); ?></a>
                    
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
              
            </div>
        </div>
    </main>
   <!-- a trigger modal -->

  
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/order.blade.php ENDPATH**/ ?>