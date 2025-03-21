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
                                            
                                            <li class="breadcrumb-item active">Edit Multi Photo</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Multi Photo</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
  
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         
    <form id="myForm" method="post" action="<?php echo e(route('update.photo.gallery')); ?>" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?> 

        <input type="hidden" name="id" value="<?php echo e($photogallery->id); ?>">
    	
        <div class="row">
            <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Multi Photo Gallery </label>
  <input type="file" name="multi_image" class="form-control" id="multiImg" multiple="" > 

            </div>

              <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">  </label>
         <img src="<?php echo e(asset($photogallery->photo_gallery)); ?>" style="width:400px; height: 200px;">

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

 


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/photo/edit_photo.blade.php ENDPATH**/ ?>