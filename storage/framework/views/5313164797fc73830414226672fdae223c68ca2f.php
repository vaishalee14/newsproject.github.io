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
                                            
                                            <li class="breadcrumb-item active">Add News Post</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add News Post</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
  
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         
    <form id="myForm" method="post" action="<?php echo e(route('store.news.post')); ?>" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?> 
    	
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Category Name </label>
               <select name="category_id" class="form-select" id="example-select">
                <option>Select Category </option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label"> Sub Category </label>
               <select name="subcategory_id" class="form-select" id="example-select">
                <option> </option>
                
            </select>
            </div>


             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Writer  </label>
                <select name="user_id" class="form-select" id="example-select">
                <option>Select Writer </option>
                <?php $__currentLoopData = $adminuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>


             <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">News Title  </label>
                <input type="text" name="news_title" class="form-control" id="inputEmail4" >
            </div>

             <div class="form-group col-md-6 mb-3">
          <label for="example-fileinput" class="form-label">News Post Photo</label>
        <input type="file" name="image" id="image" class="form-control">
            </div>

             <div class="form-group col-md-6 mb-3">
                <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage" src="<?php echo e(url('upload/no_image.jpg')); ?> " class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
            </div>



 <div class="col-12 mb-3">
     <label for="inputEmail4" class="form-label">News Details  </label>
            <textarea name="news_details"></textarea>    
            </div>


 <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Tags  </label>
                <input type="text" name="tags" class="selectize-close-btn" value="awesome">
            </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-check mb-2 form-check-primary">
                <input class="form-check-input" type="checkbox" name="breaking_news" value="1" id="customckeck1"  >
                <label class="form-check-label" for="customckeck1">Breaking News</label>
            </div>

            <div class="form-check mb-2 form-check-primary">
                <input class="form-check-input" type="checkbox" name="top_slider" value="1" id="customckeck2"  >
                <label class="form-check-label" for="customckeck2">Top Slider</label>
            </div>
            
        </div>




             <div class="col-lg-6">
           <div class="form-check mb-2 form-check-danger">
            <input class="form-check-input" name="first_section_three" type="checkbox" value="1" id="customckeck3"  >
            <label class="form-check-label" for="customckeck3">First Section Three</label>
        </div>

            <div class="form-check mb-2 form-check-danger">
            <input class="form-check-input"  name="first_section_nine" type="checkbox" value="1" id="customckeck4" >
            <label class="form-check-label" for="customckeck4">First Section Nine</label>
        </div>
            
        </div>
        
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
                news_title: {
                    required : true,
                }, 
            },
            messages :{
                news_title: {
                    required : 'Please Enter News Title',
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

 
    <script type="text/javascript">

        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "<?php echo e(url('/subcategory/ajax')); ?>/"+category_id,
                        type: "GET",  
                        dataType: "json", 
                        success:function(data){
                            $('select[name="subcategory_id"]').html('');
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'"> ' + value.subcategory_name + '</option>');
                            });
                        },
                    });
                } else{
                    alert('danger');
                }
            });
        });
        


    </script>




<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/backend/news/add_news_post.blade.php ENDPATH**/ ?>