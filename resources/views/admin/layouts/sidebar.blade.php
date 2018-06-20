
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/images/profile.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="@yield('Product') treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('pizza')"><a href="{{ route('products.index', ['category=pizza']) }}"><i class="fa fa-circle-o"></i> Pizza</a></li>
                    <li class="@yield('panzzaroti')"><a href="{{ route('products.index', ['category=panzzaroti']) }}"><i class="fa fa-circle-o"></i> Panzzaroti</a></li>
                    <li class="@yield('garlic_fingers')"><a href="{{ route('products.index', ['category=garlic_fingers']) }}"><i class="fa fa-circle-o"></i> Garlic Fingers</a></li>
                    <li class="@yield('poutine')"><a href="{{ route('products.index', ['category=poutine']) }}"><i class="fa fa-circle-o"></i> Poutine</a></li>
                    <li class="@yield('chicken')"><a href="{{ route('products.index', ['category=chicken']) }}"><i class="fa fa-circle-o"></i> Chicken</a></li>
                    <li class="@yield('subs_sandwiches')"><a href="{{ route('products.index', ['category=subs_sandwiches ']) }}"><i class="fa fa-circle-o"></i> Subs & Sandwiches </a></li>
                    <li class="@yield('donairs')"><a href="{{ route('products.index', ['category=donairs']) }}"><i class="fa fa-circle-o"></i> Donairs</a></li>
                    <li class="@yield('seafood')"><a href="{{ route('products.index', ['category=seafood']) }}"><i class="fa fa-circle-o"></i> Seafood</a></li>
                    <li class="@yield('burgers')"><a href="{{ route('products.index', ['category=burgers']) }}"><i class="fa fa-circle-o"></i> Burgers</a></li>
                    <li class="@yield('appetizers')"><a href="{{ route('products.index', ['category=appetizers']) }}"><i class="fa fa-circle-o"></i> Appetizers</a></li>
                </ul>
            </li>

            <li class="@yield('Special')"><a href="{{ route('specials.index') }}"><i class="fa fa-diamond"></i> <span>Specials</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>