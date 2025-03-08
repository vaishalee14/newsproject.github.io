<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style type="text/css">
    .form-check-label {
        text-transform: capitalize;
    }
</style>

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">

                                            <li class="breadcrumb-item active">Edit Role In Permission</li>
                                        </ol>
                                    </div>
                                     <h4 class="page-title">Edit Role In Permission</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

    <form method="post" action="<?php echo e(route('role.permission.update',$role->id)); ?>">
    	<?php echo csrf_field(); ?>


  <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">All Roles </label>
                <h4><?php echo e($role->name); ?></h4>
            </div>

        </div>



        <div class="form-check mb-2 form-check-primary">
            <input class="form-check-input" type="checkbox" value="" id="customckeck15" >
            <label class="form-check-label" for="customckeck15">Permission All</label>
        </div>

      <hr>

      <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="row">
          <div class="col-3">

  <?php
$permissions = App\Models\User::getpermissionByGroupName($group->group_name);
 ?>

          <div class="form-check mb-2 form-check-primary">
 <input class="form-check-input" type="checkbox" value="" id="customckeck1" <?php echo e(App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''); ?> >
 <label class="form-check-label" for="customckeck1"><?php echo e($group->group_name); ?></label>
        </div>


          </div><!--  // End col 3  -->


           <div class="col-9">




            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                // Check if the role has the permission (avoid errors if permission does not exist)
                $hasPermission = $role->permissions()->where('name', $permission->name)->exists();
            ?>

            <div class="form-check mb-2 form-check-primary">
                <input class="form-check-input" name="permission[]"
                    <?php echo e($hasPermission ? 'checked' : ''); ?>

                    type="checkbox" value="<?php echo e($permission->id); ?>"
                    id="customckeck<?php echo e($permission->id); ?>"
                >
                <label class="form-check-label" for="customckeck<?php echo e($permission->id); ?>">
                    <?php echo e($permission->name); ?>

                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <br>

          </div><!--  // End col 9  -->

        </div>  <!-- // End Row  -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








   <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->


     <script type="text/javascript">
         $('#customckeck15').click(function(){
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked',true);
            }else{
                 $('input[type = checkbox]').prop('checked',false);
            }
         });

     </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/pages/roles/role_permission_edit.blade.php ENDPATH**/ ?>