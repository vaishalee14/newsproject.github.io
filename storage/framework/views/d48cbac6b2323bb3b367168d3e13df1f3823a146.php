<?php

$breaking_news = App\Models\NewsPost::where('status',1)->where('breaking_news',1)->limit(7)->get();
?>

<div class="top-scroll-section5">
<div class="container">
<div class="alert" role="alert">
<div class="scroll-section5">
<div class="row">
<div class="col-md-12 top_scroll2">
<div class="scroll5-left">
<div id="scroll5-left">
<span> Breaking News :: </span>
</div>
</div>
<div class="scroll5-right">
<marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()">
<?php $__currentLoopData = $breaking_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href=" ">
<img src="<?php echo e(asset('frontend/assets/images/favicon.gif')); ?>" alt="Logo" title="Logo" width="30px" height="auto">

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</marquee>
</div>
<div class="scroolbar5">
<button data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/body/breaking_news.blade.php ENDPATH**/ ?>