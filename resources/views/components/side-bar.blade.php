<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route('homepage')}}"> Showcase </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i> toggler</a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active ">
                    <a href="{{route('dashboard.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('dashboard.home_page_settings')}}" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Home Page settings</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Projects</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('projects.index')}}">All Projects</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-alert.html">Create Project</a>
                        </li>

                    </ul>
                </li>
               @if (auth()->user()->userHasRole("admin"))

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>User Managments</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item ">
                            <a href="{{route('user_managment.index')}}">All Users</a>
                        </li>
                    </ul>
                </li>
                 @endif



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
