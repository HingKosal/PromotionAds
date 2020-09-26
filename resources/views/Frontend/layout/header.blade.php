<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('frontend/assets/images/flags/khmer.png')}}" alt="user-image" height="30">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset('frontend/assets/images/flags/khmer.png')}}" alt="user-image" class="mr-1" height="15"> <span class="align-middle">Khmer</span>
                    </a>

                    <!-- item -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset('frontend/assets/images/flags/english.png')}}" alt="user-image" class="mr-1" height="15"> <span class="align-middle">English</span>
                    </a>
                </div>
            </li>
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a href="../../Backend/templates/register.php" class="btn btn-outline-warning btn-rounded waves-effect waves-light" style="margin: 15px">Free Ads Post</a>
            </li>
        </ul>


        <!-- LOGO -->
        <div class="logo-box">
            <!--            <a href="../templates/home.php" class="logo logo-dark text-center">-->
            <!--                <span class="logo-sm">-->
            <!--                    <img src="{{asset('')}}assets/images/ADS-Logo_RGB.png" alt="" height="22">-->
            <!--                    &lt;!&ndash; <span class="logo-lg-text-light">UBold</span> &ndash;&gt;-->
            <!--                </span>-->
            <!--                <span class="logo-lg">-->
            <!--                    <img src="{{asset('')}}assets/images/ADS-Logo_RGB.png" alt="" height="20">-->
            <!--                    &lt;!&ndash; <span class="logo-lg-text-light">U</span> &ndash;&gt;-->
            <!--                </span>-->
            <!--            </a>-->

            <a href="../templates/index.php" class="logo logo-light text-center">
                <span>
                    <img src="{{asset('')}}../Backend/app-assets/images/logo/logo.png" alt="" height="50" >
                </span>
                <!--                <span class="logo-lg">-->
                <!--                    <img src="{{asset('')}}assets/images/ADS-Logo_RGB.png" alt="" height="100">-->
                <!--                </span>-->
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

        </ul>
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                <div class="collapse navbar-collapse active" id="topnav-menu-content">
                    <ul class="navbar-nav active">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{url('')}}" style="font-size: 20px; margin-top: -10px; color: white">
                                Home
                            </a>
                            <!--                            <div class="dropdown-menu active" aria-labelledby="topnav-dashboard">-->
                            <!--                                <a href="#" class="dropdown-item active">General Sales</a>-->
                            <!--                                <a href="dashboard-2.html" class="dropdown-item">Dashboard 2</a>-->
                            <!--                                <a href="dashboard-3.html" class="dropdown-item">Dashboard 3</a>-->
                            <!--                                <a href="dashboard-4.html" class="dropdown-item">Dashboard 4</a>-->
                            <!--                            </div>-->
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px; margin-top: -10px;color: white">
                                All Categories <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                <div class="dropdown">
                                    <a class="dropdown-item active" href="../templates/clothes.php">
                                        Clothes </a>
                                    <!--                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">-->
                                    <!--                                        <a href="#" class="dropdown-item active">Dashboard Clothes</a>-->
                                    <!--                                        <a href="../templates/clothes.php" class="dropdown-item active">Products</a>-->
                                    <!--                                        <a href="#" class="dropdown-item active">Checkout</a>-->
                                    <!--                                    </div>-->
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item active" href="../templates/shoes.php">
                                        Shoes </a>
                                    <!--                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">-->
                                    <!--                                        <a href="#" class="dropdown-item active">Dashboard Shoes</a>-->
                                    <!--                                        <a href="../templates/clothes.php" class="dropdown-item active">Products</a>-->
                                    <!--                                        <a href="#" class="dropdown-item active">Checkout</a>-->
                                    <!--                                    </div>-->
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item active" href="../templates/accessories.php">
                                        Accessories </a>
                                    <!--                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">-->
                                    <!--                                        <a href="#" class="dropdown-item active">Dashboard Accessorires</a>-->
                                    <!--                                        <a href="../templates/clothes.php" class="dropdown-item active">Products</a>-->
                                    <!--                                        <a href="#" class="dropdown-item active">Checkout</a>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{url('/frontend/about')}}" style="font-size: 20px; margin-top: -10px; color: white">
                                About
                            </a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{url('/frontend/contact')}}" style="font-size: 20px; margin-top: -10px; color: white">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
