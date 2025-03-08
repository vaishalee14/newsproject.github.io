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
User Account </h4>
<div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>

<form action="<?php echo e(route('user.profile.store')); ?>" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
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
User Name *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="text" name="username" value="<?php echo e($userData->username); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"  ></span>
</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
  Name *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="text" name="name" value="<?php echo e($userData->name); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"  ></span>
</div>
</div>



<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Email *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="email" name="email" value="<?php echo e($userData->email); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"  ></span>
</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Phone *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="text" name="phone" value="<?php echo e($userData->phone); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" ></span>
</div>
</div>


<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Photo *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="file" name="photo"   size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" id="image" ></span>
</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
 
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"> 
	<img id="showImage" src="<?php echo e((!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo): url('upload/no_image.jpg')); ?> " class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" style="width:100px; height:100px;"></span>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.home_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/user_dashboard.blade.php ENDPATH**/ ?>