<?php
    $cdate = new DateTime();
?>


<header class="themesbazar_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">

                <div class="row">
                    <div class="col-md-6">

                        <div class="date">
                            <i class="lar la-calendar"></i>
                            <?php echo e($cdate->format('l d-m-Y')); ?>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <select class="form-select changeLang">
                            <option value="en" <?php echo e(session()->get('locale') == 'en' ? 'selected' : ''); ?>>English
                            </option>

                            <option value="bn" <?php echo e(session()->get('locale') == 'bn' ? 'selected' : ''); ?>>Bangla
                            </option>

                            <option value="hi" <?php echo e(session()->get('locale') == 'hi' ? 'selected' : ''); ?>>Hindi
                            </option>

                            <option value="fr" <?php echo e(session()->get('locale') == 'fr' ? 'selected' : ''); ?>>French
                            </option>

                        </select>

                    </div>

                </div>




            </div>





            <div class="col-lg-3 col-md-3">

                <form class="header-search" action="<?php echo e(route('news.search')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <input type="text" name="search" placeholder=" Search Here " required="">
                    <button type="submit" value="Search"> <i class="las la-search"></i> </button>
                </form>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="header-social">
                    <ul>
                        <li> <a href="https://www.facebook.com/" target="_blank" title="facebook"><i
                                    class="lab la-facebook-f"></i> </a> </li>
                        <li><a href="https://twitter.com/" target="_blank" title="twitter"><i class="lab la-twitter">
                                </i> </a></li>

                        <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(route('user.logout')); ?>"><b> Logout </b></a> </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('login')); ?>"><b> Login </b></a> </li>
                            <li> <a href="<?php echo e(route('register')); ?>"> <b>Register</b> </a> </li>
                        <?php endif; ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="logo-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="<?php echo e(url('/')); ?>" title="NewsFlash">
                            <img src="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" alt="NewsFlash"
                                title="NewsFlash">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="banner">
                        <a href=" " target="_blank">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>


<div class="menu_section sticky" id="myHeader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mobileLogo">
                    <a href=" " title="NewsFlash">
                        <img src="assets/images/footer_logo.gif" alt="Logo" title="Logo">
                    </a>
                </div>
                <div class="stellarnav dark desktop">
                    <a href="#" class="menu-toggle full">
                        <span class="bars">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="<?php echo e(url('/')); ?>" aria-current="page">
                                <i class="fa-solid fa-house-user"></i> HOME
                            </a>
                        </li>

                        <?php
                            $categories = App\Models\Category::orderBy('category_name', 'ASC')->limit(7)->get();
                        ?>

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="menu-item-<?php echo e($category->id); ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children has-sub">
                            <a href="<?php echo e(url('news/category/' . $category->id . '/' . $category->category_slug)); ?>">
                                <?php echo e($category->category_name); ?>

                            </a>

                            <?php
                                $subcategories = App\Models\Subcategory::where('category_id', $category->id)
                                    ->orderBy('subcategory_name', 'ASC')
                                    ->get();
                            ?>

                            <?php if($subcategories->isNotEmpty()): ?>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li id="menu-item-<?php echo e($subcategory->id); ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                    <a href="<?php echo e(url('news/subcategory/' . $subcategory->id . '/' . $subcategory->subcategory_slug)); ?>">
                                        <?php echo e($subcategory->subcategory_name); ?>

                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>

                            <a class="dd-toggle" href="#"><span class="icon-plus"></span></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <li id="menu-item-277" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                            <a href="#">ARCHIVE</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var url = "<?php echo e(route('changeLang')); ?>";
    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
<?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/frontend/body/header.blade.php ENDPATH**/ ?>