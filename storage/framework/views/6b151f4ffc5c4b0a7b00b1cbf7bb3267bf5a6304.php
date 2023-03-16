

<?php if(App::getLocale() == 'en'): ?>
<style>
  
  .footer {
    width: 1058px;
}
</style>   
 <?php else: ?>

 <style>
  .footer {
    width: 1058px;
}
  </style>
    <?php endif; ?>

<footer class="footer footer-black  footer-white col-md-12 text-center ">
        <div class="row align-items-center text-center">
            <div class="col-md-6">
                
                    <a href="https://www.EtooPlay.com">
              <?php echo e(__('messages.Take tech')); ?>

          </a>  
</div>
<div class="col-md-6">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script><?php echo e(__( 'messages.power')); ?><i class="fa fa-heart heart"></i>_<?php echo e(__('messages.by')); ?> __<a href="https://www.EtooPlay.com" target="_blank"><?php echo e(__('messages.Take tech')); ?></a> 
                </span>
            </div>
    </div>
</footer><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/app/layouts/footer.blade.php ENDPATH**/ ?>