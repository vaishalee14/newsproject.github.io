<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <!-- Search Bar -->
            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>
                        </div>
                    </div>
                </form>
            </li>

            <!-- Fullscreen Toggle -->
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>

            <!-- Notifications -->
            <?php
                $reviewCount = 1;
            ?>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge"><?php echo e($reviewCount); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="javascript:void(0);" class="text-dark"><small>Clear All</small></a>
                            </span>
                            Notifications
                        </h5>
                    </div>
                    <div class="noti-scroll" data-simplebar>
                        <?php
                            $user = Auth::user();

                        ?>

                        
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>
                </div>
            </li>

            <!-- User Profile -->
            <?php
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            ?>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?php echo e(!empty($adminData->photo) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg')); ?>" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        <?php echo e($adminData->name); ?> <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="<?php echo e(route('admin.profile')); ?>" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>
                    <a href="<?php echo e(route('admin.change.password')); ?>" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Change Password</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('admin.logout')); ?>" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>

        <!-- Logo -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="<?php echo e(asset('backend/assets/images/logo-sm.png')); ?>" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo e(asset('backend/assets/images/logo-dark.png')); ?>" alt="" height="20">
                </span>
            </a>
            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="<?php echo e(asset('backend/assets/images/logo-sm.png')); ?>" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo e(asset('backend/assets/images/logo-light.png')); ?>" alt="" height="20">
                </span>
            </a>
        </div>

        <!-- Hamburger Menu -->
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
            <li>
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<?php /**PATH C:\Users\user1\Downloads\laravel-advanced-news-project-master\resources\views/admin/body/header.blade.php ENDPATH**/ ?>