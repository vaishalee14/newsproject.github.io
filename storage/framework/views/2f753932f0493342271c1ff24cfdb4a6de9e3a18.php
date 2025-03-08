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
                    <a href="<?php echo e(route('add.permission')); ?>" class="btn btn-blue waves-effect waves-light">Add Permission</a>
                </ol>
            </div>
                                    <h4 class="page-title">Permission All </h4>
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
                    <th>Permission Name </th>
                    <th>Group Name </th>
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($item->name); ?></td>
                     <td><?php echo e($item->group_name); ?></td>
                    <td>
      <a href="<?php echo e(route('edit.permission',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

      <a href="<?php echo e(route('delete.permission',$item->id)); ?>" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>

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




<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/pages/permission/all_permission.blade.php ENDPATH**/ ?>