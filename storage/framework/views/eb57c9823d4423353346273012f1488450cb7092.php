<?php $__env->startSection('home'); ?> 

<?php $__env->startSection('title'); ?> 
<?php echo e($breadcat->category_name); ?> | Easy Online News 
<?php $__env->stopSection(); ?>

<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="archive-topAdd">
</div>
</div>
</div>
 <div class="row">
<div class="col-lg-8 col-md-8">
<div class="rachive-info-cats">
<a href=" "><i class="las la-home"></i> </a> <i class="las la-chevron-right"></i> <?php echo e($breadcat->category_name); ?>

</div>
<div class="row">

<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->index < 1 ): ?>
<div class="col-lg-8 col-md-8">
<div class="archive-shadow arch_margin">
<div class="archive1_image">
<a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($item->image)); ?>" ></a>
<div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
<?php echo e($item->created_at->format('l M d Y')); ?>

</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title"><a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><?php echo e($item->news_title); ?></a></div>
<div class="content-details">   <a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"> Read More </a>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="col-md-4 col-sm-4">
<div class="row">

<?php $__currentLoopData = $newstwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->index > 0 ): ?>
<div class="archive1-custom-col-12">
<div class="archive-item-wrpp2">
<div class="archive-shadow arch_margin">
<div class="archive1_image2">
<a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($item->image)); ?>"  ></a> <div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
<?php echo e($item->created_at->format('l M d Y')); ?>

</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title2"><a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><?php echo e($item->news_title); ?></a></div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 
</div>
</div>
</div>



<div class="row">

<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->index > 1 ): ?>
<div class="archive1-custom-col-3">
<div class="archive-item-wrpp2">
<div class="archive-shadow arch_margin">
<div class="archive1_image2">
<a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"><img class="lazyload" src="<?php echo e(asset($item->image)); ?>"  ></a>
<div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
<?php echo e($item->created_at->format('l M d Y')); ?>

</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title2"><a href="<?php echo e(url('news/details/'.$item->id.'/'.$item->news_title_slug)); ?>"> <?php echo e($item->news_title); ?> </a></div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 



</div>
<div class="archive1-margin">
<div class="archive-content">
<div class="row">
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href=" ">2</a>
<a class="next page-numbers" href=" ">Next »</a>
</div>
</div>

<br><br>

<div class="row">
<div class="col-lg-12 col-md-12"></div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="sitebar-fixd" style="position: sticky; top: 0;">
<div class="archivePopular">
<ul class="nav nav-pills" id="archivePopular-tab" role="tablist">
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





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.home_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/news/category_news.blade.php ENDPATH**/ ?>