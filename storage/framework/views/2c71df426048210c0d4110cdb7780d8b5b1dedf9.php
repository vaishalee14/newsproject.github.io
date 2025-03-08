<?php $__env->startSection('home'); ?>

<?php $__env->startSection('title'); ?>
<?php echo e($news->news_title); ?> | Easy Online News
<?php $__env->stopSection(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">

<div class="single-add">
</div>

<div class="single-cat-info">
<div class="single-home">
<i class="la la-home"> </i><a href=" "> HOME </a>
</div>
<div class="single-cats">
<i class="la la-bars"></i> <a href=" " rel="category tag"><?php echo e($news['category']['category_name']); ?></a>,

<?php if($news->subcategory_id == NULL): ?>
<a href=" " rel="category tag"> </a>
<?php else: ?>
<a href=" " rel="category tag"><?php echo e($news['subcategory']['subcategory_name']); ?></a>
<?php endif; ?>
 </div>
</div>

<h1 class="single-page-title">
<?php echo e($news->news_title); ?> </h1>
<div class="row g-2">
<div class="col-lg-1 col-md-2 ">
<div class="reportar-image">
<img src="<?php echo e((!empty(asset('upload/user_images/'.$news->user->photo))) ? url(asset('upload/user_images/'.$news->user->photo)): url('upload/no_image.jpg')); ?>">
</div>
</div>
<div class="col-lg-11 col-md-10">
<div class="reportar-title">
Posted By <a href="<?php echo e(route('reporter.all.news',$news->user_id)); ?>"><?php echo e($news['user']['name']); ?> </a>
</div>
<div class="viwe-count">
<ul>
<li><i class="la la-clock-o"></i> Updated
<?php echo e($news->created_at->format('l M d Y')); ?>

</li>
<li> / <i class="la la-eye"></i>
<?php echo e($news->view_count); ?>

Read
</li>
</ul>
</div>
</div>
</div>

<div class="single-image">
<a href=" "><img class="lazyload" src="<?php echo e(asset($news->image)); ?>"  ></a>
<h2 class="single-caption2">
<?php echo e($news->news_title); ?>

</h2>
</div>

<div class="single-page-add2">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>

<button id="inc">A+</button>
<button id="dec">A-</button>

<news-font>
<div class="single-details">
<p> <?php echo $news->news_details; ?> </p>
</div>
</news-font>


<div class="singlePage2-tag">
<span> Tags : </span>

<?php $__currentLoopData = $tags_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href=" " rel="tag"><?php echo e(ucwords($tag)); ?></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>

<div class="single-add">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>

<h3 class="single-social-title">
Share News </h3>
<div class="single-page-social">
<a href=" " target="_blank" title="Facebook"><i class="lab la-facebook-f"></i></a><a href=" " target="_blank"><i class="lab la-twitter"></i></a><a href=" " target="_blank"><i class="lab la-linkedin-in"></i></a><a href=" " target="_blank"><i class="lab la-digg"></i></a><a href=" " target="_blank"><i class="lab la-pinterest-p"></i></a><a onclick="printFunction()" target="_blank"><i class="las la-print"></i> <script>
					function printFunction() {
						window.print();
					}
					</script> </a>
</div>


<?php
$review = App\Models\Review::where('news_id',$news->id)->latest()->limit(5)->get();
?>


 <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php if($item->status == 0): ?>

 <?php else: ?>


 <div class="author2">
<div class="author-content2">
<h6 class="author-caption2">
<span> COMMENTS </span>
</h6>
<div class="author-image2">
<img alt="" src="<?php echo e((!empty($item->user->photo)) ? url('upload/user_images/'.$item->user->photo): url('upload/no_image.jpg')); ?> "   class="avatar avatar-96 photo" height="96" width="96" loading="lazy"> </div>
<div class="authorContent">
<h1 class="author-name2">
<a href=" "> <?php echo e($item->user->name); ?> </a>
</h1>
<p> <?php echo e(Carbon\Carbon::parse($item->created_at)->diffForHumans()); ?> </p>
<div class="author-details"><?php echo e($item->comment); ?></div>
</div>

</div>
</div>
 <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <hr>

 <?php if(auth()->guard()->guest()): ?>

 <p><b> For Add Product Review. You Need To Login First <a href="<?php echo e(route('login')); ?>"> Login Page</a> </b> </p>

 <?php else: ?>

<form action="<?php echo e(route('store.review')); ?>" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
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


<input type="hidden" name="news_id" value="<?php echo e($news->id); ?>">

<div style="display: none;">

</div>
<div class="main_section">


<div class="row">
<div class="col-lg-12">
<div class="contact-title">
Comments *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap news_details">

	<textarea name="comment" cols="20" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="News Details...."></textarea></span>
</div>
</div>
</div>



</div>

<div class="row">
<div class="col-md-12">
<div class="contact-btn">
<input type="submit" value="Submit Comments" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
</div>
</div>
</div>

<div class="wpcf7-response-output" aria-hidden="true"></div></form>


 <?php endif; ?>




<div class="single_relatedCat">
<a href=" ">Related News </a>
</div>
<div class="row">

<?php $__currentLoopData = $relatedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($item->image)); ?>"  ></a>
</div>
<h4 class="related-title">
<a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><?php echo e($item->news_title); ?> </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
<?php echo e($news->created_at->format('l M d Y')); ?>

</a>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>











</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="sitebar-fixd" style="position: sticky; top: 0;">
<div class="siteber-add">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>
<div class="singlePopular">
<ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent" role="tab" aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular" role="tab" aria-controls="archivePopulars" aria-selected="false"> POPULAR </div>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContentarchive">
<div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel" aria-labelledby="archiveRecent">

<div class="archiveTab-sibearNews">

<?php $__currentLoopData = $newnewspost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $newsitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href="<?php echo e(url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($newsitem->image)); ?>"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href="<?php echo e(url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug)); ?>"><?php echo e($newsitem->news_title); ?> </a>
</h4>
<div class="archive-conut">
<?php echo e($key+1); ?>

</div>

</div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>
<div class="tab-pane fade" id="archiveTab_popular" role="tabpanel" aria-labelledby="archivePopulars">
<div class="archiveTab-sibearNews">


<?php $__currentLoopData = $newspopular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $newsitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href="<?php echo e(url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($newsitem->image)); ?>"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href="<?php echo e(url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug)); ?>"><?php echo e($newsitem->news_title); ?> </a>
</h4>
<div class="archive-conut">
<?php echo e($key+1); ?>

</div>

</div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




</div>
</div>
</div>
<div class="siteber-add2">
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
	var size = 16;

	function setFontSize(s){
		size = s;
		$('news-font').css('font-size','' + size + 'px');
	}

	function increaseFontSize(){
		setFontSize(size + 5);
	}

	function decreaseFontSize(){
		if (size > 5)
			setFontSize(size - 5);
		}

	$('#inc').click(increaseFontSize);
    $('#dec').click(decreaseFontSize);
	setFontSize(size);



</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/news/news_details.blade.php ENDPATH**/ ?>