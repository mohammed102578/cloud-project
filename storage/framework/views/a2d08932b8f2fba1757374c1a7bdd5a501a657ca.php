<?php $__env->startSection('content'); ?>

<style>
   
    
    a,h4,h5,span,h3,h6 {
      font-family: 'NotoKufi';
    }
           
 
   




.btn_favorite{

    margin-left: 279px;
padding: 13px;
  padding-right: 13px;
margin-top: 0px;
padding-right: 33px;
}
</style>


       

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                        <a href="<?php echo e(route('index')); ?>" rel="nofollow"><i class="fa fa-home mr-10"></i><?php echo e(trans('product.Home')); ?></a> 
                        <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a href=""><?php echo e($products->category->category_name); ?> </a> <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><?php echo e($products->product_name); ?>

                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50 mt-30">
                               



                                <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5" style="direction: ltr">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fa fa-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider" style="border:none">
                                        <?php if(isset($products->product_image)): ?>
                                            <?php $__currentLoopData = $products->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <figure class="border-radius-10">
                                                <img src="
                                                
                                                
                                                <?php
                                                if(!empty($product_image->image)){
                                                    echo $product_image->image;
                                                }else{
                                                    echo $product->image;
                                                }
                                                
                                                ?>
                                              
                                                
                                              
                                                
                                                " alt="product image" style="width:225px; height:225px" />     
                                            </figure>   
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <?php endif; ?>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <?php if(isset($products->product_image)): ?>
                                            <?php $__currentLoopData = $products->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                            <div><img src="<?php
                                                 if(!empty($product_image->image)){
                                                    echo $product_image->image;
                                                }else{
                                                    echo $product->image;
                                                }
                                                
                                                ?>" style="width:100px;height:100px;"alt="product image" /></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                          
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info pr-30 pl-30">
                                        <div class="product-detail-rating">
                                        <form method="post" id="add_favorite" action="<?php echo e(route('add_favorite')); ?>">
                                            <?php echo csrf_field(); ?>


                                            <input type="hidden" name="token" value="<?php echo e(Session::get('token')); ?>">
                                         
                                            <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>" >
                                           <div class="justify-content-center"> 
                                            <button type="submit" class="btn_favorite button button-add-to-favorite " style="padding: 13px 24px;"><i style="font-size:36px; " class="fa fa-heart"></i></button>
                                           </div>
                                        </form>
                                        

                                          
                                                    
                                                </div>
                                        <div class="clearfix product-price-cover">
                                            <h2 class="title-detail"><?php echo e($products->product_name); ?></h2>

                                            <div id="font-price" style="font-size: 20px; " class=" primary-color float-left">
                                                <span class="current-price text-brand" ><?php echo e($products->product_price); ?></span>
                                              
                                            </div>
                                        </div>
                                        <div class="short-desc mb-30">
                                            <p class="font-lg"><?php echo e($products->product_description); ?></p>
                                        </div>
                                      
                                        <div class="detail-extralink mb-50">

                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fa fa-angle-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fa fa-angle-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <form method="post" action="<?php echo e(route('add_cart')); ?>" id="cart_form">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="token" value="<?php echo e(Session::get('token')); ?>">
                                                    <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>" >
        
                                                 <input class="quan" value="1" type="hidden" id="quantity" class="form-control" name="quantity" placeholder="<?php echo e(trans('product.Quantity')); ?>" required>
                                                  
                                                <button type="submit" class="button button-add-to-cart" style="  font-family: 'NotoKufi';"><i class="fa fa-cart-plus fa-lg ml-1 mr-1"></i><?php echo e(trans('product.Add To cart')); ?></button>
                                                </form>                                   
                                            </div>
                                        </div>

                                       
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" ><?php echo e(trans('product.Description')); ?></a>
                                        </li>
                                        
                                     
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                                <div class="tab-pane fade show active" id="Description">
                                                    <div class="">
                                                        
                                                        <p><?php echo e($products->product_description); ?></p>
                                                       
                                                     
                                                    </div>
                                                </div>
                                     
                                     
                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                        <div class="col-md-12">
                                            <h4 class="section-title style-1 mb-30"><?php echo e(trans('product.Related products')); ?></h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
<?php $i=0?>
                                             
                                                   
                                                <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               

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
                    </div>
                </div>
            </div>
        </main>
       




      
<script type="text/javascript">
	

    $( document ).ready( function () {
        $( "#cart_form" ).validate( {
            rules: {
              
             
               
                quantity: {
                    required: true,
                    digits: true,
                },
               
            },
            messages: {
               
          
            
                quantity:{
        required:"<?php echo trans('register.This field is requiered');?> ",
        digits:"<?php echo trans('register.This field must contain number just');?> ",
      } ,

     
            },
            errorElement: "h5",
            errorPlacement: function ( error, element ) {
                // Add the `invalid-feedback` class to the error element
                error.addClass( "invalid-feedback" );

                
                if (element.is("select")) {
        error.insertAfter(element.parent());
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            }
        } );

    } );






$('.detail-qty').each(function () {
            var qtyval = parseInt($(this).find('.qty-val').text(), 10);
            var quantity = document.getElementById('quantity').value;

            $('.qty-up').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval + 1;
                quantity = qtyval ;
                console.log(quantity);
                document.getElementById('quantity').value=quantity;
                $(this).prev().text(qtyval);
               

            });
            $('.qty-down').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval - 1;
                quantity = qtyval ;
                console.log(quantity);
                document.getElementById('quantity').value=quantity;
                if (qtyval > 1) {
                    $(this).next().text(qtyval);
                   

                } else {
                    qtyval = 1;
                    $(this).next().text(qtyval);
                }
            });
        });

</script>

       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appnotauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/pages/product.blade.php ENDPATH**/ ?>