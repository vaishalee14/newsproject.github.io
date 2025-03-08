<?php $__env->startSection('home'); ?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="container">


<div class="row">
	<div class="col-md-4">

		<div class="row">
<div class="col-lg-12 col-md-12">
<div class="contact-wrpp">
 

 <figure class="authorPage-image">
<img alt="" src="<?php echo e((!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo): url('upload/no_image.jpg')); ?>" class="avatar avatar-96 photo" height="96" width="96" loading="lazy"> </figure>
<h1 class="authorPage-name">
<a href=" "> <?php echo e($userData->name); ?> </a>
</h1>
<h6 class="authorPage-name">
 <?php echo e($userData->email); ?>

</h6>
  
 

<ul>
 <li><a href="<?php echo e(route('dashboard')); ?>"><b>🟢 Your Profile </b></a> </li>
 <li> <a href="<?php echo e(route('change.password')); ?>"> <b>🔵 Change Password </b> </a> </li> 
<li> <a href=""> <b>🟠 Read Later List </b> </a> </li> 
<li> <a href="<?php echo e(route('user.logout')); ?>"> <b>🟠 Logout </b> </a> </li> 
</ul>

</div>
</div>
</div>

		
	</div>

	<div class="col-md-8">


		<div class="row">
<div class="col-lg-12 col-md-12">
<div class="contact-wrpp">
<h4 class="contactAddess-title text-center">
Change Password  </h4>
<div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>

<form action="<?php echo e(route('user.change.password')); ?>" method="post" class="wpcf7-form init"  novalidate="novalidate" data-status="init">
<?php echo csrf_field(); ?>

<div style="display: none;">
 
</div>

<div class="main_section">
<div class="row">
 
  

    	 <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
        <?php elseif(session('error')): ?>
  <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?>

        </div> 
        <?php endif; ?>

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Old Password
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"> 
	<input type="password" name="old_password" class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="current_password" >
</span>
 <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
 New Password 
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"> 
	 <input type="password" name="new_password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="new_password"  >
</span>
 <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
</div>
</div>



<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Confirm New Password 
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"> 
	 <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"  >
</span>
</div>
</div>
  

 

</div>
 
 
 
 
<div class="row">
<div class="col-md-12">
<div class="contact-btn">
<input type="submit" value="Save Changes" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
</div>
</div>
</div>
</div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
</div>
</div>
</div>



		
	</div>
	
</div> <!--  // end row -->

 


</div>

 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.home_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/change_password.blade.php ENDPATH**/ ?>