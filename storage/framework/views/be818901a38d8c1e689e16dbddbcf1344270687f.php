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
                                            
                                            <li class="breadcrumb-item active">Seo Update</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Seo Update</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
  
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         
    <form id="myForm" method="post" action="<?php echo e(route('update.seo.setting')); ?>">
    	<?php echo csrf_field(); ?> 

        <input type="hidden" name="id" value="<?php echo e($seo->id); ?>">
    	
        <div class="row">
            <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Meta Title  </label>
                <input type="text" name="meta_title" class="form-control" id="inputEmail4" value="<?php echo e($seo->meta_title); ?>" >
            </div>

             <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label"> Meta Author </label>
                <input type="text" name="meta_author" class="form-control" id="inputEmail4" value="<?php echo e($seo->meta_author); ?>" >
            </div>


             <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Meta Keyword </label>
              <input type="text" name="meta_keyword" class="selectize-close-btn" value="<?php echo e($seo->meta_keyword); ?>">
            </div>

             <div class="form-group col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Meta Description </label>
                <input type="text" name="meta_description" class="form-control" id="inputEmail4" value="<?php echo e($seo->meta_description); ?>" >
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
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/seo/seo_data.blade.php ENDPATH**/ ?>