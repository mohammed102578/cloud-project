  <style>




.card-2 figure img {
  border-radius: 10px;
  display: inline-block;
  max-width: 100%;
  height: 250px;
  
}

.card-2{
  border: #fff;
  background-color: #fff;
  
}

.header-action-2 .header-action-icon-2 span.lable {
  font-size: 15px;
  color: #253D4E;
  margin: 5px 0 0 10px;
}

.bg-9{
    background-color: #fff;
}
.card-1  {
 background-color: #fff;
 padding: 0px 0px 0px 0px;
}



.card-1 figure img {
  border-radius: 10px;
  display: inline-block;
  max-width: 250px;
}



.card-1 figure {
  margin-bottom: -15px;
}

.carausel-3-columns-cover .carausel-3-columns img {
  margin-right: 0px;
  margin-left: 0px;
}



.card-2:hover {
  background: #fff;
  border: 1px solid #fff;
  -webkit-box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 0px 0px #fff;
  -webkit-transition: 0.2s;
  transition: 0.2s;
}






    .search-style-2 form input {
        width: 100%;
max-width: 400px;
font-size: 14px;
padding-left: 17px;
padding-right: 47px;
height: 50px;
line-height: 50px;
font-size: 14px;
}

.logo.logo-width-1 {
  margin-right: 0px;
}

#logo {
    height:127px
}
.cart-dropdown-wrap.cart-dropdown-hm2 {
  right: -80px;
}



        

button.submit:hover, button[type="submit"]:hover {
  background-color: #a6d71c !important;
  color: aliceblue;
}


.cart-dropdown-wrap.cart-dropdown-hm2 {
  
}
.cart-dropdown-wrap.cart-dropdown-hm2 {
  right: -105px;
}

    </style>
  

























             <!-- Quick view -->
       
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap" style="height:70px">
                        <div class="logo logo-width-1">
                            <a href="<?php echo e(route('index')); ?>">                                   
                                 <img class="border-radius-15" id="logo" src="<?php echo e(URL::asset('image/logo.png')); ?>" alt="" />
</a>

                        </div>
                        <div class="header-right">
                            <div class="search-style-2">
                                <form action="<?php echo e(route('search')); ?>" method="post">
                                    
                                    <?php echo csrf_field(); ?>
                                    <input style=" " type="text" placeholder="<?php echo e(trans('navbar.Search for item')); ?>" name="search" />
                                </form>
                            </div>
                            <div class="header-action-right">
                                <div class="header-action-2">
                                    <div class="search-location">
                                        <form action="#">
                                           
                                        </form>
                                    </div>
                                  
                                    <div class="btn-group mb-1">
    <a type="button" class="btn btn-light btn-sm dropdown-toggle"  style="background-color:#fff;border-color:#fff; margin-bottom:-6px;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span style="font-size: 15px;margin: 5px 0 0 10px;color: #253D4E;">
       
     <i class="fa fa-list"></i>  <?php echo e(trans('navbar.Categories')); ?>

</span>
     
    <div class="dropdown-menu">
        <?php $__currentLoopData = $Categories_global; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories_globals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item" rel="alternate" href="<?php echo e(route('category_page',$Categories_globals->id)); ?>" >
                <img src="<?php echo e($Categories_globals->icon); ?>" style="width: 18px;height:18px" alt="">

                  <?php echo e($Categories_globals->category_name); ?>

                </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>





                              

                                        
                                        
                                           
                                            <div class="btn-group mb-1">
                                                <a type="button" class="btn btn-light btn-sm dropdown-toggle"  style=" font-size: 15px;color: #253D4E;  background-color:#fff;border-color:#fff; margin-bottom:-6px;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               
                                                    <?php if(App::getLocale() == 'ar'): ?>
                                             <span style="font-size: 15px;margin: 5px 0 0 10px;color: #253D4E;">                                                  <?php 
                                                  if(LaravelLocalization::getCurrentLocaleName()=='Arabic'){
                                                echo"العربية";
                                                  } else{
                                                    echo "English";
                                                  }
                                                  
                                                  
                                                  ?>
                                                 </span>
                                                 <img src="<?php echo e(URL::asset('image/flags/sudan.png')); ?>" style="width: 18px;height:18px" alt="">
                                                  <?php else: ?>
                                                  <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                                                  <img src="<?php echo e(URL::asset('image/flags/US.png')); ?>" alt="">
                                                  <?php endif; ?>
                                                  </a>
                                                <div class="dropdown-menu">
                                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                                                <?php echo e($properties['native']); ?>

                                                            </a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                    
                                      
                                       
                                    <div class="header-action-icon-2">

                                     

                                        <a href="<?php echo e(route('notification')); ?>">


                                            <img class="svgInject" src="<?php echo e(URL::asset('material/assets/imgs/theme/icons/icon-heart.svg')); ?>" />
                                            <span class="pro-count blue">
                                                
                                                <?php 
                                                    
                                                    if(isset($count)){
                                                        echo $count;
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?>
                                               
                                           
                                            
                                            </span>
                                        </a>
                                        <a href="<?php echo e(route('notification')); ?>"><span class="lable"><?php echo e(trans('navbar.Notifcation')); ?></span></a>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a class="mini-cart-icon" href="<?php echo e(route('get_cart')); ?>">
                                            <img alt="Nest" src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/icon-cart.svg" />
                                            <span class="pro-count blue"><?php if(isset($carts)){
                                                echo count($carts);
                                            }else{
                                                echo "0";
                                            }?></span>
                                        </a>
                                        <a href="<?php echo e(route('get_cart')); ?>"><span class="lable"><?php echo e(trans('navbar.Cart')); ?></span></a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <ul>




                                                <?php if(isset($carts)): ?>
                                                <?php $i=0; $total=0;?>
                                                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <div class="shopping-cart-img">
                                               <a href="<?php
                                       if($cart->product !==null){
                                       echo route('product',$cart->product->id);

                                       }else{
                                        echo route('offers',$cart->offer_id);
                                       }

                                            
                                            
                                            ?>">  
                                             <img class="svgInject" src="
                                             <?php
                                       if($cart->product !==null){
                                       echo $cart->product->image;

                                       }else{
                                        echo $cart->offer->offer_image;
                                       }

                                            ?>
                                             " style="width:50px;height:50px;"/>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="
                                                        <?php
                                       if($cart->product !==null){
                                       echo route('product',$cart->product->id);

                                       }else{
                                        echo route('offers',$cart->offer_id);
                                       }

                                            
                                            
                                            ?>"> <?php
                                            if($cart->product !==null){
                                            echo $cart->product->product_name;
     
                                            }else{
                                             echo $cart->offer->offer_title;
                                            }
     
                                                 ?></a></h4>
                                                        <h4><span><?php echo e($cart->quantity); ?> × </span>
                                                        <?php
                                       if($cart->product !==null){
                                       echo $cart->product->product_price;

                                       }else{
                                        echo $cart->offer->offer_price;
                                       }

                                            ?>
                                                    </h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="
                                                        <?php
                                       if($cart->product !==null){
                                       echo route('delete_product_cart',$cart->product->id);

                                       }else{
                                        echo route('delete_offer_cart',$cart->offer->id);
                                       }

                                            
                                            
                                            ?>
                                                        "><i class="fi-rs-cross-small"></i></a>
                                                    </div>

                                                    <?php 
                                                    
                                                    if($cart->product !==null){  
                    $total+= $cart->quantity * $cart->product->product_price;
                    
                                                    }else{

                    $total+= $cart->quantity * $cart->offer->offer_price;

                                                    }
                    
                    
                    ?>

                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               


 
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total justify-content-between">
                                                    <h4  style=" " class="pull-right"><?php echo e(trans('navbar.Total')); ?> </h4><span class="pull-left">$<?php echo e($total); ?></span>
                                                </div>
                                                <?php endif; ?>
                                                <div class="shopping-cart-button">
                                                    <a href="<?php echo e(route('get_cart')); ?>"  style=" " class="outline"><?php echo e(trans('navbar.View cart')); ?></a>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                 <?php if(auth()->guard()->check()): ?>
                                    <div class="header-action-icon-2 ">
                                        <a href="<?php echo e(route('profile')); ?>">

                                                      <img class="svgInject" src="<?php echo e(URL::asset('material/assets/imgs/theme/icons/icon-user.svg')); ?>" />
                                        </a>
                                        <a href="<?php echo e(route('profile')); ?>"><span class="lable ml-0"><?php echo e(trans('navbar.Account')); ?></span></a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown" style="margin-right: 40px">
                                            <ul>
                                    <li>
                                        <a href="<?php echo e(route('profile')); ?>"><i class="fa fa-user mr-10"></i><?php echo e(trans('navbar.My Account')); ?></a>
                                    </li>
                                 
                                    <li>
                                        <a href="<?php echo e(route('consultation')); ?>"><i class="fa fa-edit mr-10"></i><?php echo e(trans('navbar.consultations')); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('get_order')); ?>"><i class="fa fa-send mr-10"></i><?php echo e(trans('navbar.My Orders')); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('get_favorite')); ?>"><i class="fa fa-heart mr-10"></i><?php echo e(trans('navbar.Favorite')); ?></a>
                                    </li>
                                   
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out mr-10"></i><?php echo e(trans('navbar.Sign out')); ?></a>
                                    </li>
                                   
                                </ul>
                            </div>
                             
                        </div>
                      <?php endif; ?>
                      <?php if(auth()->guard()->guest()): ?>

                   
                        <a href="<?php echo e(route('login')); ?>" style="color: #253D4E;margin-left: 10px;font-size: 15px;margin-top: 8px;"><span class="lable mt-2"><?php echo e(trans('navbar.Log In')); ?></span> </a>
                        
                        <a href="<?php echo e(route('register')); ?>" style="color: #253D4E;font-size: 15px;margin-top: 8px;">&nbsp;&nbsp;|<span class="lable mt-2"><?php echo e(trans('navbar.Sign Up')); ?></span></a>     
                    </div>
                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-bg-color sticky-bar">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="logo logo-width-1 d-block d-lg-none">
</a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categories-button-active" href="#">
                             
                                                                  </a>
                                <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                            </li>
                                        </ul>
                                        <ul >
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more_slide_open" style="display: none">
                                        <div class="d-flex categori-dropdown-inner">
                                            <ul>
                                                <li>
                                                    <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                                </li>
                                            </ul>
                                            <ul >
                                                <li>
                                                    <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-right.html"> <img src="<?php echo e(asset('assets')); ?>/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                                </div>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                              
                            </div>
                        </div>
                      
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
















                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">
                                


                               
                                    <div class="header-action-icon-2">
                                      
                                        <div class="btn-group mb-1">
                                                <a type="button" class="btn btn-light btn-sm dropdown-toggle"  style=" font-size: 15px;color: #253D4E;  background-color:#fff;border-color:#fff; margin-bottom:-6px;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span>                                                <?php if(App::getLocale() == 'ar'): ?>
                                              <?php 
                                              if(LaravelLocalization::getCurrentLocaleName()=='Arabic'){
echo"العربية";
                                              } else{
                                                echo "English";
                                              }
                                              
                                              
                                              ?>
                                             </span>
                                             <img src="<?php echo e(URL::asset('image/flags/sudan.png')); ?>" style="width: 18px;height:18px" alt="">
                                              <?php else: ?>
                                              <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                                              <img src="<?php echo e(URL::asset('image/flags/US.png')); ?>" alt="">
                                              <?php endif; ?>
                                              </a>
                                            <div class="dropdown-menu">
                                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                                            <?php echo e($properties['native']); ?>

                                                        </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        </div>
     



                                <div class="header-action-icon-2">
                                    <a href="<?php echo e(route('notification')); ?>">


                                        <img class="svgInject" src="<?php echo e(URL::asset('material/assets/imgs/theme/icons/icon-heart.svg')); ?>" />
                                        <span class="pro-count blue"><?php if(isset($notifications)){
                                            echo count($notifications);
                                        }else{
                                            echo "0";
                                        }?></span>
                                    </a>
                                    <a href="<?php echo e(route('notification')); ?>"><span class="lable"><?php echo e(trans('navbar.Notifcation')); ?></span></a>
                                </div>




                               

                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="<?php echo e(route('get_cart')); ?>">
<img class="svgInject" src="<?php echo e(URL::asset('material/assets/imgs/theme/icons/icon-cart.svg')); ?>" />
                                     
                                        <span class="pro-count blue"><?php if(isset($carts)){
                                            echo count($carts);
                                        }else{
                                            echo "0";
                                        }?></span>
                                    </a>
                                    <a href="<?php echo e(route('get_cart')); ?>"><span class="lable"><?php echo e(trans('navbar.Cart')); ?></span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2" id="mobile_cart" style="overflow: scroll;height: 400px;">
                                        <ul class="cetnter">
                                            <?php if(isset($carts)): ?>
                                            <?php $i=0; $total=0;?>
                                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                    <div class="shopping-cart-img">
                                               <a href="<?php
                                       if($cart->product !==null){
                                       echo route('product',$cart->product->id);

                                       }else{
                                        echo route('offers',$cart->offer_id);
                                       }

                                            
                                            
                                            ?>">  
                                             <img class="svgInject" src="
                                             <?php
                                       if($cart->product !==null){
                                       echo $cart->product->image;

                                       }else{
                                        echo $cart->offer->offer_image;
                                       }

                                            ?>
                                             " style="width:50px;height:50px;"/>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="
                                                        <?php
                                       if($cart->product !==null){
                                       echo route('product',$cart->product->id);

                                       }else{
                                        echo route('offers',$cart->offer_id);
                                       }

                                            
                                            
                                            ?>"> <?php
                                            if($cart->product !==null){
                                            echo $cart->product->product_name;
     
                                            }else{
                                             echo $cart->offer->offer_title;
                                            }
     
                                                 ?></a></h4>
                                                        <h4><span><?php echo e($cart->quantity); ?> × </span>
                                                        <?php
                                       if($cart->product !==null){
                                       echo $cart->product->product_price;

                                       }else{
                                        echo $cart->offer->offer_price;
                                       }

                                            ?>
                                                    </h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="
                                                        <?php
                                       if($cart->product !==null){
                                        echo route('delete_product_cart',$cart->product->id);
 
                                        }else{
                                         echo route('delete_offer_cart',$cart->offer->id);
                                        }

                                            
                                            
                                            ?>
                                                        "><i class="fi-rs-cross-small"></i></a>
                                                    </div>

                                                    <?php 
                                                    
                                                    if($cart->product !==null){  
                    $total+= $cart->quantity * $cart->product->product_price;
                    
                                                    }else{

                    $total+= $cart->quantity * $cart->offer->offer_price;

                                                    }
                    
                    
                    ?>
                                               
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                           
                                          
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4 class="pull-right"><?php echo e(trans('navbar.Total')); ?> </h4><span class="pull-left">$<?php echo e($total); ?></span>
                                            </div>
                                            <?php endif; ?>
                                            <div class="shopping-cart-button">
                                                <a href="<?php echo e(route('get_cart')); ?>" class="outline"><?php echo e(trans('navbar.View cart')); ?></a>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>
                        </div>












                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="<?php echo e(route('index')); ?>">                                    <img class="border-radius-15" id="logo" src="<?php echo e(URL::asset('image/lifestyle.jpg')); ?>" alt="" />
</a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="<?php echo e(route('search')); ?>" method="post">
                                    
                            <?php echo csrf_field(); ?>
                            <input  style=" " type="text" placeholder="<?php echo e(trans('navbar.Search for item')); ?>" name="search" />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                      
                    </div>
                    <div class="mobile-header-info-wrap">
                                    <div class="btn-group mb-1">
       <a type="button" class="btn btn-light btn-sm dropdown-toggle"  style=" font-size: 15px;color: #253D4E;  background-color:#fff;border-color:#fff; margin-bottom:-6px;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span style="display: inline;  ">
       
     <i class="fa fa-list"></i> <?php echo e(trans('navbar.Categories')); ?>

     </span>
     
      </a>
      <div class="dropdown-menu  " data-popper-placement="bottom-end">
        <?php $__currentLoopData = $Categories_global; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories_globals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item" rel="alternate" href="<?php echo e(route('category_page',$Categories_globals->id)); ?>" >
                <img src="<?php echo e($Categories_globals->icon); ?>" style="width: 18px;height:18px" alt="">

                  <?php echo e($Categories_globals->category_name); ?>

                </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


</div>  



                      
           
<?php if(auth()->guard()->check()): ?>

<div class="mobile-header-info-wrap">
                                    <div class="btn-group mb-1">
                                    <a href="<?php echo e(route('consultation')); ?>">      <h6 style="display: inline;   margin: 17px;">
       
     <i class="fa fa-edit"></i> <?php echo e(trans('navbar.consultations')); ?>

     </h6>
                                                </a>
   
</div>


</div>  

<?php endif; ?>


                    <div class="mobile-header-info-wrap">
                    <?php if(auth()->guard()->check()): ?>
                        <div class="single-mobile-header-info">
                            <a href="<?php echo e(route('get_order')); ?>"><i class="fa fa-send mr-10"></i><?php echo e(trans('navbar.My Orders')); ?></a>

                        </div>
                      
                        <div class="single-mobile-header-info">
                            <a href="<?php echo e(route('get_favorite')); ?>"><i class="fa fa-heart mr-10"></i><?php echo e(trans('navbar.Favorite')); ?></a>

                        </div>
                       
                        <div class="single-mobile-header-info">
                        
                            <a href="<?php echo e(route('profile')); ?>"><i class="fa fa-user mr-10"></i><?php echo e(trans('navbar.Profile')); ?> </a>
                          
                          
                          
                          
                            <?php endif; ?>
                           <?php if(auth()->guard()->guest()): ?>
                           <div class="header-action-icon-2 mt-2 pl-10 " style="font-size: 15px; color:#a6d71c">
                            <a href="<?php echo e(route('login')); ?>" style="display: inline;"><span class="lable" ><?php echo e(trans('navbar.Log In')); ?></span> </a>
                            
                            <a href="<?php echo e(route('register')); ?>" style="display: inline;">&nbsp;&nbsp;|<span class="lable"><?php echo e(trans('navbar.Sign Up')); ?></span></a>     
                        </div>

                           <?php endif; ?>
                        </div>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="single-mobile-header-info">
                            <a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out mr-10"></i></i><?php echo e(trans('navbar.Sign out')); ?></a>

                        </div>
                        <?php endif; ?>
                    </div>
                  
                     
                </div>
            </div>
        </div><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/includes/navbar.blade.php ENDPATH**/ ?>