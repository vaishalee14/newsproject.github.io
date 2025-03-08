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
                    <a href="<?php echo e(route('add.admin')); ?>" class="btn btn-blue waves-effect waves-light">Add Admin</a>
                </ol>
            </div>
                                    <h4 class="page-title">Admin All <span class="btn btn-danger"> <?php echo e(count($alladminuser)); ?> </span> </h4>
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
                    <th>Name </th>
                    <th>Email </th>
                    <th>Phone </th>
                    <th>Status </th>
                    <th>Role </th>
                    <th>Action </th>
                </tr>
            </thead>


            <tbody>
            	<?php $__currentLoopData = $alladminuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><img src="<?php echo e((!empty($item->photo)) ? url('upload/admin_images/'.$item->photo): url('upload/no_image.jpg')); ?> " style="width: :50px; height:50px;" ></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->phone); ?></td>


                    <td>
      <?php if($item->status == 'active'): ?>
      <span class="badge badge-pill bg-success">Active</span>

                        <?php else: ?>
     <span class="badge badge-pill bg-danger">InActive</span>
                        <?php endif; ?>
                    </td>


                     <td>
                        <?php $__currentLoopData = optional($item->roles) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <span class="badge badge-pill bg-danger"><?php echo e($role->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>


                    <td>
      <a href="<?php echo e(route('edit.admin',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

      <a href="<?php echo e(route('delete.admin',$item->id)); ?>" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>


      <?php if($item->status == 'active'): ?>
 <a href="<?php echo e(route('inactive.admin.user',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light" title="Inactive"><i class="fa-solid fa-thumbs-down"></i> </a>
      <?php else: ?>
 <a href="<?php echo e(route('active.admin.user',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light" title="Active"><i class="fa-solid fa-thumbs-up"></i></a>
      <?php endif; ?>

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




<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/admin/all_admin.blade.php ENDPATH**/ ?>