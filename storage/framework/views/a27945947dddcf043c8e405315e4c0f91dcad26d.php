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

                                            <li class="breadcrumb-item active">Edit Live Tv</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Live Tv</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

    <form id="myForm" method="post" action="<?php echo e(route('update.live')); ?>" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?>

        <input type="hidden" name="id" value="<?php echo e($live->id); ?>">

        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Live Url</label>
                <input type="text" name="live_url" class="form-control" id="inputEmail4" value="<?php echo e($live->live_url); ?>" >
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Live Image </label>
                <input type="file" name="live_image" class="form-control"id="image"  >
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">  </label>
                <img id="showImage" src="<?php echo e(asset('upload/live/'.$live->live_image)); ?> " class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
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
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/video/live_tv.blade.php ENDPATH**/ ?>