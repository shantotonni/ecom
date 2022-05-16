<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-email"></i>
                        <span>Category <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('category.index') }}">Category List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-keg"></i>
                        <span>Product <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('product.list') }}">Product List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-keg"></i>
                        <span>Slider <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('slider.list') }}">Slider List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-keg"></i>
                        <span>Order <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('order.list') }}">Order List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-keg"></i>
                        <span>Contact <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('contact.list') }}">Contact List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
