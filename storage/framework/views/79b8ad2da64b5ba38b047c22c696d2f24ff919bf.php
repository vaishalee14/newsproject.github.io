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
                     
                </ol>
            </div>
                                    <h4 class="page-title">All Roles Permission</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
 

        <table class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Roles Name </th> 
                    <th>Permissions </th> 
                    <th width="18%">Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($item->name); ?></td> 

                     <td>
                         <?php $__currentLoopData = $item->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <span class="badge rounded-pill bg-danger"><?php echo e($perm->name); ?></span>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </td> 


                    <td width="18%">
      <a href="<?php echo e(route('admin.edit.roles',$item->id)); ?>" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

      <a href="<?php echo e(route('admin.delete.roles',$item->id)); ?>" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>

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




<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/pages/roles/all_roles_permission.blade.php ENDPATH**/ ?>