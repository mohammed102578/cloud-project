<?php $__env->startSection('content'); ?>


  <div class="row">
               <div class="col-md-12 mb-4 position-relative">
                  <h5 class="fw-bold mb-0">
                     العهد
                  </h5>
                  <nav style="--bs-breadcrumb-divider: '>';" class="my-bread mb-0" aria-label="breadcrumb">
                     <ol class="breadcrumb  mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">العهد                  </li>
                     </ol>
                  </nav>
               </div>
               <div class="col-md-12">
                  <div class="data_table bg-white mb-4 rounded-3 shadow ">
                     <div class=" d-flex justify-content-between">
                        <div class="">
                           <h5 class="m-3">
                              العهد
                           </h5>
                        </div>
                        <div class="m-3">
                           
                        <button type="button" class="btn btn_background filter accept  px-5" data-toggle="modal" data-target="#addmyModal" >

                           أضافة عهدة جديدة
                           </button>
                        </div>
                     </div>









<!--add modal-->
<div class="modal fade" id="addmyModal" role="dialog">
    <div class="modal-dialog">
    
    <div id="alert-danger" class="alert alert-danger" style="display:none"></div> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="breadcrumb btn_background">اضافة عهدة جديد</h4>
        </div>
        <div class="modal-body">
       
            <form id="add_custody_form" method="post" action="<?php echo e(route('store_custody')); ?>">
              <?php echo csrf_field(); ?>
                <div class="pl-lg-10">
                  <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="">اسم العهدة </label>
                        <input type="text"  name="name" class="form-control " placeholder=" اسم العهدة" value="" required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="nameError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label class="form-control-label" for="">نوع العهدة </label>
                        <input type="text"  name="custody_type" class="form-control " placeholder=" نوع العهدة" value="" required>
                        <?php $__errorArgs = ['custody_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="custody_typeError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الاستلام </label>
                        <input type="date"  name="received_date" class="form-control " placeholder=" تاريخ الاستلام " value="" required>
                        <?php $__errorArgs = ['received_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="received_dateError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الاخلاء </label>
                        <input type="date"  name="date_of_eviction" class="form-control " placeholder=" تاريخ الاخلاء " value="" required>
                        <?php $__errorArgs = ['date_of_eviction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="date_of_evictionError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> رقم المتسلسل </label>
                        <input type="number"  name="serial_number" class="form-control " placeholder="  رقم المتسلسل " value="" required>
                        <?php $__errorArgs = ['serial_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="serial_numberError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>


                    <div class="col-lg-6">
                    <div class="form-group">
                    <div class="col-12 pt-1">
						<p class="mb-4 pb-2">حالة العهدة </p>
					</div>
               <div class="col-xl-10 pb-5" style="margin-top: -23px;">
						<input class="checkbox-budget" type="radio" name="status" value="1" id="budget-1" checked="">
						<label class="for-checkbox-budget" for="budget-1">
							<span data-hover="مع الموظف">مع الموظف</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="status" value="0" id="budget-2">
						<label class="for-checkbox-budget" for="budget-2">							
							<span data-hover="تم الاستلام$">تم الاستلام</span>
						</label>
					
					
					</div>
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="statusError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>

                    <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label" for="">الوصف</label>
                    <textarea class="form-control "  rows="4" name="description" placeholder="الوصف"></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="descriptionError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                  </div>
                    </div>



         
                    </div>
                  </div>
                </div>
            
        <div class="modal-footer">
                    
                      
        <button type="submit" id="Add_user" class="btn btn_background filter accept  px-5" >
                                                   ارسال
                                                </button>
     
                                               
      <button type="button" class="btn  danger" data-dismiss="modal">
         
     الغاء
                                                </button>

     
                                             </div>
      </div>
    </form>
    </div>
  </div>
   








                     <table class="table   table-striped ">
                        <thead>
                           <tr>
                              <th scope="col">
                                 الاسم
                              </th>
                              <th scope="col"> نوع العهدة  </th>
                              <th scope="col">الرقم التسلسلي                      </th>
                              <th scope="col">تاريخ الإستلام                     </th>
                              <th scope="col">  تاريخ الإخلاء                      </th>
                              <th scope="col"> الحالة </th>
                              <th scope="col"> الوصف </th>
                              <th scope="col"> العمليات </th>

                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $custodies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custody): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



<!--edit modal-->
<div class="modal fade" id="edit_custody<?php echo e($custody->id); ?>" role="dialog">
    <div class="modal-dialog">
    
    <div id="alert-danger" class="alert alert-danger" style="display:none"></div> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="breadcrumb btn_background">تعديل العهدة </h4>
        </div>
        <div class="modal-body">
       
            <form id="add_custody_form" method="post" action="<?php echo e(route('update_custody')); ?>">
              <?php echo csrf_field(); ?>
                <div class="pl-lg-10">
                  <div class="row">
                     <input type="hidden" name="id" value="<?php echo e($custody->id); ?>">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="">اسم العهدة </label>
                        <input type="text"  name="name" class="form-control " placeholder=" اسم العهدة" value="<?php echo e($custody->name); ?>" required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="nameError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label class="form-control-label" for="">نوع العهدة </label>
                        <input type="text"  name="custody_type" class="form-control " placeholder=" نوع العهدة" value="<?php echo e($custody->custody_type); ?>" required>
                        <?php $__errorArgs = ['custody_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="custody_typeError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الاستلام </label>
                        <input type="date"  name="received_date" class="form-control " placeholder=" تاريخ الاستلام " value="<?php echo e($custody->received_date); ?>" required>
                        <?php $__errorArgs = ['received_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="received_dateError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الاخلاء </label>
                        <input type="date"  name="date_of_eviction" class="form-control " placeholder=" تاريخ الاخلاء " value="<?php echo e($custody->date_of_eviction); ?>" required>
                        <?php $__errorArgs = ['date_of_eviction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="date_of_evictionError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> رقم المتسلسل </label>
                        <input type="number"  name="serial_number" class="form-control " placeholder="  رقم المتسلسل " value="<?php echo e($custody->serial_number); ?>" required>
                        <?php $__errorArgs = ['serial_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="serial_numberError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>


                    <div class="col-lg-6">
                    <div class="form-group">
                    <div class="col-12 pt-1">
						<p class="mb-4 pb-2">حالة العهدة </p>
					</div>
               <div class="col-xl-10 pb-5" style="margin-top: -23px;">
              
						<input class="checkbox-budget" type="radio" name="status" value="1" id="budget-1"
                  <?php
                  if($custody->status==1){
                     echo  "checked";
                  }
                  ?>
                  >
						<label class="for-checkbox-budget" for="budget-1">
							<span data-hover="مع الموظف">مع الموظف</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="status" value="0" id="budget-2"
                  
                  <?php
                  if($custody->status==0){
                     echo  "checked";
                  }
                  ?>
                  >
						<label class="for-checkbox-budget" for="budget-2">							
							<span data-hover="تم الاستلام$">تم الاستلام</span>
						</label>
					
					
					</div>
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="statusError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                      </div>
                    </div>

                    <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label" for="">الوصف</label>
                    <textarea class="form-control "  rows="4" name="description" placeholder="الوصف" ><?php echo e($custody->description); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span id="descriptionError" class="text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                  </div>
                    </div>



         
                    </div>
                  </div>
                </div>
            
        <div class="modal-footer">
                    
                      
        <button type="submit" id="Add_user" class="btn btn_background filter accept  px-5" >
                                                   ارسال
                                                </button>
     
                                               
      <button type="button" class="btn  danger" data-dismiss="modal">
         
     الغاء
                                                </button>

     
                                             </div>
      </div>
    </form>
    </div>
  </div>
   



















                           <tr data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                              aria-controls="offcanvasExample">
                              <td data-label="الاسم"> <?php echo e($custody->name); ?>

                              </td>
                              <td data-label=" العهدة ">
                                <?php echo e($custody->custody_type); ?>

                              </td>
                              <td data-label="الرقم"><?php echo e($custody->serial_number); ?> </td>
                              <td data-label="الإستلام"><?php echo e($custody->received_date); ?>

                              </td>
                              <td data-label="الإخلاء"><?php echo e($custody->date_of_eviction); ?>

                              </td>
                              <td data-label="الحالة"> 
                                  <?php if($custody->status==1): ?>              
                                         <span class="wait mx-3  "> مع  الموظف </span>
                                         <?php else: ?>
                                         <span class="accept mx-3  ">   تم الأستلام </span>

                                 <?php endif; ?>
                              </td>
                              <td data-label="الوصف"><?php echo e($custody->description); ?>

                              </td>
                              <td data-label="العمليات"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                          role="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?php echo e(route('delete_custody',$custody->id)); ?>"> حذف </a></li>
                          <li><a class="dropdown-item" data-toggle="modal" data-target="#edit_custody<?php echo e($custody->id); ?>"> تعديل</a></li>
                        </ul>
                      </td>
                   
                           </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/traffic/resources/views/pages/custody.blade.php ENDPATH**/ ?>