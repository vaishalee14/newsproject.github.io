<?php $__env->startSection('home'); ?> 

<div class="container">

<div class="row">
<div class="col-lg-6 col-md-12">
<div class="contact-wrpp">
<h4 class="contactAddess-title text-center">
Login </h4>
<div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>


<form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

          <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
        <?php elseif(session('error')): ?>
  <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?>

        </div> 
        <?php endif; ?>
            
<div style="display: none;">
 
</div>

<div class="main_section">
<div class="row">
 



<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Email *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title">
    <input type="email" name="email" id="email" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Email"></span>
</div>
</div>


<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Password *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title">
    <input type="password" id="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Password"></span>
</div>
</div>


 
</div>
 
 
 
 
<div class="row">
<div class="col-md-12">
<div class="contact-btn">
<input type="submit" value="Login Now" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
</div>
</div>
</div>
</div>
 </form>


</div>
</div>
</div>
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.home_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/auth/login.blade.php ENDPATH**/ ?>