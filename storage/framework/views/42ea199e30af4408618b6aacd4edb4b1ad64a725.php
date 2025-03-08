<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                            <li class="breadcrumb-item active">Edit Admin</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Admin</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
  
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         
    <form id="myForm" method="post" action="<?php echo e(route('admin.update')); ?>">
    	<?php echo csrf_field(); ?> 

        <input type="hidden" name="id" value="<?php echo e($adminuser->id); ?>">
    	
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">User Name </label>
                <input type="text" name="username" class="form-control" id="inputEmail4" value="<?php echo e($adminuser->username); ?>" >
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label"> Name </label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo e($adminuser->name); ?>" >
            </div>


             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" id="inputEmail4" value="<?php echo e($adminuser->email); ?>" >
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Phone </label>
                <input type="text" name="phone" class="form-control" id="inputEmail4" value="<?php echo e($adminuser->phone); ?>" >
            </div>

               <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Asign Roles </label>
               <select name="roles" class="form-select" id="example-select">
                    <option> Select One Roles </option>
                   <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>" <?php echo e($adminuser->hasRole($role->name) ? 'selected' : ''); ?> ><?php echo e($role->name); ?> </option> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

 
             
        </div>
 
                                          

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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                username: {
                    required : true,
                }, 
                name: {
                    required : true,
                }, 
                email: {
                    required : true,
                }, 
                phone: {
                    required : true,
                }, 
                password: {
                    required : true,
                }, 
            },
            messages :{
                username: {
                    required : 'Please Enter User Name',
                },
                name: {
                    required : 'Please Enter Your Name',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                phone: {
                    required : 'Please Enter Your Phone',
                },
                password: {
                    required : 'Please Enter Your Password',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/admin/edit_admin.blade.php ENDPATH**/ ?>