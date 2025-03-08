<?php $__env->startSection('admin'); ?> 

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <a href="<?php echo e(route('add.admin')); ?>" class="btn btn-blue waves-effect waves-light">Pending Review </a>
                </ol>
            </div>
                                    <h4 class="page-title">Pending Review <span class="btn btn-danger"> <?php echo e(count($review)); ?> </span> </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
 

        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Image </th>
                    <th>News </th>
                    <th>User </th>
                    <th>Comment </th>
                    <th>Status </th> 
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	<?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><img src="<?php echo e(asset($item['news']['image'])); ?> " style="width: :50px; height:50px;" ></td>
                    <td><?php echo e($item['news']['news_title']); ?></td>
                    <td><?php echo e($item['user']['name']); ?></td>
                    <td><?php echo e(Str::limit($item->comment ,25)); ?></td>
                    <td>
      <?php if($item->status == 0): ?>
      <span class="badge badge-pill bg-danger">Pending</span>

                        <?php else: ?>
     <span class="badge badge-pill bg-success">Publish</span>
                        <?php endif; ?>
                        

                    </td> 
                    <td>
      <a href="<?php echo e(route('review.approve',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light">Approve</a>
  
                    </td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
            </tbody>
        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/review/pending_review.blade.php ENDPATH**/ ?>