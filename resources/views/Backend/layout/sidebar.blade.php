<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a class="menu-item" href="{{url('/dashboard')}}" data-i18n="nav.dash.ecommerce">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">Dashboard</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('category')}}">
                    <i class="la la-folder-o"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">Categories</span>
                </a>
            </li>
            <li class=" nav-item"><a href="{{route('product')}}"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.templates.main">
                        Manage Promotion</span></a></li>
            <li class=" nav-item"><a href="#"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.dash.main">Configuration</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('company')}}" data-i18n="nav.dash.ecommerce">Company</a></li>
                    <li><a class="menu-item" href="{{route('brand')}}" data-i18n="nav.dash.ecommerce">Brand</a></li>
                    <li><a class="menu-item" href="{{route('size')}}" data-i18n="nav.dash.ecommerce">Size</a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('user')}}"><i class="la la-folder-o"></i><span class="menu-title" data-i18n="nav.templates.main">
                        Manage User</span></a></li>
        </ul>
    </div>
</div>
