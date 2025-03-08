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
                                            
                                            <li class="breadcrumb-item active">Add Role In Permission</li>
                                        </ol>
                                    </div>
                                     <h4 class="page-title">Add Role In Permission</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
  
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         
    <form id="myForm" method="post" action="<?php echo e(route('role.permission.store')); ?>">
    	<?php echo csrf_field(); ?> 


  <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">All Roles </label>
                <select name="role_id" class="form-select" id="example-select">
                    <option> Select One Roles </option>
                   <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?> </option> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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

          <div class="form-check mb-2 form-check-primary">
            <input class="form-check-input" type="checkbox" value="" id="customckeck1" >
            <label class="form-check-label" for="customckeck1"><?php echo e($group->group_name); ?></label>
        </div>

              
          </div><!--  // End col 3  -->


           <div class="col-9">
 
 <?php
$permissions = App\Models\User::getpermissionByGroupName($group->group_name);
 ?>


            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="form-check mb-2 form-check-primary">
      <input class="form-check-input" name="permission[]" type="checkbox" value="<?php echo e($permission->id); ?>" id="customckeck<?php echo e($permission->id); ?>"  >
            <label class="form-check-label" for="customckeck1"><?php echo e($permission->name); ?></label>
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
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/pages/roles/add_roles_permission.blade.php ENDPATH**/ ?>