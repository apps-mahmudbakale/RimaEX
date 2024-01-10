<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('app.dashboard')}}">
            <img src="{{ asset('img/logo-white.png') }}" alt="" width="220px">
        </a>
        <ul class="sidebar-nav">
            <div class="dropdown-divider"></div>
            <li class="sidebar-item {{ request()->routeIs('app.dashboard') ? 'active' : '' }}">
                <a  href="{{route('app.dashboard')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>
            @can('read-users')
            <li class="sidebar-item {{ request()->routeIs('app.users.*') ? 'active' : '' }}">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('app.users.*') ? 'show' : '' }} " data-bs-parent="#sidebar">
                    @can('read-roles')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.roles.index')}}">Roles</a></li>
                    @endcan
                    @can('create-users')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.users.index')}}">Users</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('read-commodities')
            <li class="sidebar-item {{ request()->routeIs('app.commodities.*') ? 'active' : '' }}">
                <a data-bs-target="#commodities" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Commodities</span>
                </a>
                <ul id="commodities" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('app.commodities.*') ? 'show' : '' }} " data-bs-parent="#sidebar">
                    @can('read-commodities')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.commodities.index')}}">Commodities</a></li>
                    @endcan
                    @can('read-warehouse')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.warehouses.index')}}">Ware Houses</a></li>
                    @endcan
                    @can('read-orders')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.orders.index')}}">Orders</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('read-commodities')
            <li class="sidebar-item {{ request()->routeIs('app.commodities.*') ? 'active' : '' }}">
                <a data-bs-target="#accounting" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Accounting</span>
                </a>
                <ul id="accounting" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('app.commodities.*') ? 'show' : '' }} " data-bs-parent="#sidebar">
                    @can('read-commodities')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.commodities.index')}}">Commodities</a></li>
                    @endcan
                    @can('read-warehouse')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.warehouses.index')}}">Ware Houses</a></li>
                    @endcan
                    @can('read-orders')
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app.orders.index')}}">Orders</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            {{-- @can('read-updates')
            <li class="sidebar-item {{ request()->routeIs('app.udates.*') ? 'active' : '' }}">
                <a  href="{{route('app.updates.index')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Updates</span>
                </a>
            </li>
            @endcan --}}
            <li class="sidebar-item {{ request()->routeIs('app.market.*') ? 'active' : '' }}">
                <a  href="{{route('app.market.index')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Market</span>
                </a>
            </li>
            @role('admin')
            <li class="sidebar-item {{ request()->routeIs('app.updates.*') ? 'active' : '' }}">
                <a  href="{{route('app.updates.index')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Updates/News</span>
                </a>
            </li>
            @else
            <li class="sidebar-item {{ request()->routeIs('app.portfolio.*') ? 'active' : '' }}">
                <a  href="{{route('app.portfolio.index')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Portfolio</span>
                </a>
            </li>
            @endrole
        </ul>
    </div>
</nav>
