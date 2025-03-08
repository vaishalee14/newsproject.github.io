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
                    <a href="<?php echo e(route('add.photo.gallery')); ?>" class="btn btn-blue waves-effect waves-light">Add Photo</a>
                </ol>
            </div>
                                    <h4 class="page-title">Photo Gallery All </h4>
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
                    <th>Image  </th>
                    <th>Date</th>
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	<?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><img src="<?php echo e(asset($item->photo_gallery )); ?>"  style="width:50px; height:50px;"> </td>
                    <td><?php echo e($item->post_date); ?></td>
                    <td>
      <a href="<?php echo e(route('edit.photo.gallery',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

      <a href="<?php echo e(route('delete.photo.gallery',$item->id)); ?>" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>

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




<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/photo/all_photo.blade.php ENDPATH**/ ?>