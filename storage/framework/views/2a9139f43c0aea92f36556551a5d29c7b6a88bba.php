<?php $__env->startSection('content'); ?>
<style>
   
  


  @media  only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}


@media  only screen and (max-width: 480px) {

.popular-categories {
		.slider-btn.slider-prev {
			right: unset ;
			float: left ;
		}
	}
}
            </style>







<?php if(App::getLocale() == 'en'): ?>
            <link href="<?php echo e(URL::asset('css/ltr.css')); ?>" rel="stylesheet">
            <style>


@media  only screen and (max-width: 480px) {

            .product-cart-wrap .product-card-bottom .add-cart .add {
            padding: 8px;
             
            }}
            </style>
        <?php else: ?>
            <link href="<?php echo e(URL::asset('css/rtl.css')); ?>" rel="stylesheet">
            <style>

@media  only screen and (max-width: 480px) {

            .product-cart-wrap .product-card-bottom .add-cart .add {
                padding: 8px;

}



.product-cart-wrap .product-content-wrap .product-category {
  margin-bottom: 5px;

}




h2 {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 5px;

}





        }
       
            </style>
        <?php endif; ?>






        <!--End header-->
        <main class="main">
           
            <!--End hero slider-->


    



<?php if($offers): ?>
            <!--End category slider-->
            <section class="popular-categories section-padding">
                <div class="container wow animate__animated animate__fadeIn">
                    <div class="section-title">
                        <div class="title">
                            <?php if(isset($offers)): ?>
                           <?php endif; ?>
                        </div>
                    </div>
                    <div class="carausel-3-columns-cover position-relative" style="direction: ltr" style="direction: ltr">
                        <div class="carausel-3-columns" id="carausel-3-columns">
                           
                           
        

                            <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="card-2 mr-1 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="border-radius:0px">
                                <figure class="img-hover-scale overflow-hidden">
                                    <a href="<?php echo e(route('offers',$offer['id'])); ?>"> <div class="text-center">
                                        </div>  <img id="hove_image" src="<?php echo e($offer['offer_image']); ?>" alt="" style="  width: 1123px;border-radius:5px"/></a>
                                </figure>

                                                           
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <!--End category slider-->
            


                 <section class="popular-categories section-padding">
                <div class="container">
                    <div class="section-title">
                        <div class="title">
                            <h3><?php echo e(trans('index.Categories')); ?></h3>
                           
                        </div>
                        <div class="slider-arrow slider-arrow-2 flex-right carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                    </div>
                    <div class="carausel-4-columns-cover position-relative  style="direction: ltr" " style="direction: ltr">
                        <div class="carausel-4-columns " id="carausel-4-columns">
                     <?php $i=0?>
                                     <?php $__currentLoopData = $catigores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php $i++;
                                    
                                     ?>
                            <div class="card-1 mr-10 " style="

  position: relative;
  background: #fff;
    background-color: #fff;
  text-align: center;
  border-radius: 10px;
  padding: 28px 0px 28px 0px;
  margin-bottom: 5px;
  min-height: 70px;
  -webkit-transition: 0.2s;
  transition: 0.2s;
  box-shadow: 0px 0px 1px 1px #F5F8F9;
  height: 75px;
margin-top: 5px;

">
                                <h6>
                                    <a href="<?php echo e(route('category_page',$item['id'])); ?>"><?php echo e($item['category_name']); ?></a>
                                </h6>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </div>
                    </div>
                </div>
            </section>





















            <!--End category slider-->
          





        







                        <section class="popular-categories section-padding">
                <div class="container">
                    <div class="section-title">
                        <div class="title">
                        <h3><?php echo e(trans('index.Best Seller')); ?></h3>
                           </div>
                        </div>
                        <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
                    </div>
                   
                   
                   
                    <div class="carausel-10-columns-cover position-relative" style="direction: ltr">
                        <div class="carausel-10-columns" id="carausel-10-columns">
                    
                     <?php $i=0?>
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         


<div class="col-lg-1-5 col-md-3 col-12 col-sm-6" style="  width: 251px;">
    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"  style=" border:none;margin-top:2px;" data-wow-delay=".1s">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
            <a href="<?php echo e(route('product',['id'=>$Product['id']])); ?>">
                    <img class="default-img" style="width:225px; height:225px;" src="<?php echo e($Product['image']); ?>" alt="" />
                    <img class="hover-img" src="<?php echo e($Product['image']); ?>" alt="" />
                </a>
            </div>
            <div class="product-action-1">
<?php 
if(isset($Product['favorite'][0])){
    ?>
    <a aria-label="<?php echo e(trans('index.Added to favourites')); ?>" class="action-btn" href="<?php echo e(route('add_favorite',['product_id'=> $Product['id']])); ?>"><i style="font-size:36px; color:#a6d71c;"class="fa fa-heart"></i></a>

<?php
}else{
?>
  <a aria-label="<?php echo e(trans('index.Add To Wishlist')); ?>" class="action-btn" href="<?php echo e(route('add_favorite',['product_id'=> $Product['id']])); ?>"><i style="font-size:36px; color:#e2e2e2;"class="fa fa-heart"></i></a>

<?php
}

?>
            </div>
            <div class="product-badges product-badges-position product-badges-mrg">
              
            </div>
        </div>
        <div class="product-content-wrap">
            <div class="product-category">
            <a href="<?php echo e(route('category_page',['id'=>$Product['category_id']])); ?>"><?php echo e($Product['category']['category_name']); ?></a>
            <?php if(App::getLocale() == 'en'): ?>
        <?php if($Product['available']==1){
                echo "<span class='pull-right' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.available') ."</span>";
            }else{
                echo "<span class='pull-right' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.Un available') ."</span>";


            }
            
            ?>
            <?php else: ?>
            <?php if($Product['available']==1){
                echo "<span class='pull-left' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.available') ."</span>";
            }else{
                echo "<span class='pull-left' style='background-color: #deeeb1;border-radius: 5px;padding: 3px;'>". trans('index.Un available') ."</span>";


            }
            
            ?>
            <?php endif; ?>
            
        
        </div>
            <h2><a href="<?php echo e(route('product',['id'=>$Product['id']])); ?>"><?php echo e($Product['product_name']); ?></a> </h2>
         
            <div>
              
            </div>
            <div class="product-card-bottom d-flex  justify-content-between">
                <div class="product-price">
                    <span><?php echo e($Product['product_price']); ?></span>
                    <span class="old-price"><?php echo e($Product['product_price_old']); ?></span>
                </div>
                <div class="add-cart">
                    
                <a class="add" href="<?php echo e(route('add_cart',['product_id'=> $Product['id'],'quantity'=> 1])); ?>">
                    
                

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
                        </div>
                    </div>
                </div>
            </section>








  <!--End hero slider-->



                    </main>
                             <!--end product card-->

         <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/index.blade.php ENDPATH**/ ?>