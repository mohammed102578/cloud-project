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
                    <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('Details.Home')); ?></a>
                    
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a><?php echo e(trans('Details.Notifcations')); ?></a>
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40 col-lg-6 col-lg-offset-3 centered">
                    <h1 class="heading-2 mb-10"><?php echo e(trans('Details.Your Notifcations')); ?></h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body"><?php echo e(trans('Details.There are')); ?> <span class="text-brand"><?php 
                        if(isset($notifications)){
                           echo count($notifications);
                        }else{
echo "0";
                        }
                        ?></span> <?php echo e(trans('Details.Notifcations Found')); ?></h6>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead style="text-align: center;">
                                <tr class="main-heading">
                                    <th  style=" font-family: 'NotoKufi';">
                                        <?php echo e(trans('Details.id')); ?>

                                    </th>
                                    <th scope="col" style="text-align: center; font-family: 'NotoKufi';" ><?php echo e(trans('Details.Title')); ?></th>
                                    <th scope="col" colspan="3" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Notifcations')); ?></th>
                                    <th scope="col" style=" font-family: 'NotoKufi';"><?php echo e(trans('Details.Date')); ?></th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">

<?php $i=0;?>
<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++?>
                                <tr class="pt-30">
                                    <td class="pl-30">
                                        <?php echo e($i); ?>

                                    </td>
                                   
                                    <td>
                                        <h6 class="text-body"><?php echo e($notification->title); ?> </h6>
                                    </td>
                                    <td class="product-des product-name">
                                        <?php echo e($notification->notification); ?> 
                                       
                                          
                                       
                                    </td>
                                    
                                    
                                   
                                    <td class="text-center detail-info" data-title="">
                                        

                                        <?php 

$timestamp=date('Y-m-d',strtotime($notification->created_at));
echo $timestamp;


                                            
                                            ?>
                                              
                                           
                                    </td>
                                    
                                
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </tbody>
                        </table>
                    </div>
                    <div class="divider-2 mb-30"></div>
                   
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
   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/notifcation.blade.php ENDPATH**/ ?>