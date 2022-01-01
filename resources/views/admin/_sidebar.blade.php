<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                @if(Auth::user()->profile_photo_path)
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" width="45px">
                @endif
            </div>
            <div class="admin-info">
                <div class="font-strong">
                    @auth<a href="#">{{Auth::user()->name}}</a>
                </div>
                <small><a href="{{route('logout')}}">Logout</a> </small>
                @endauth
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('admin_category')}}"><i class="sidebar-item-icon fa ti-layers-alt"></i>
                    <span class="nav-label">Category</span>
                </a>
            </li>
            <li>
                <a class="active" href="{{route('admin_content')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Content</span>
                </a>
            </li>
            <li>
                <a class="active" href="{{route('admin_setting')}}"><i class="sidebar-item-icon fa ti-settings"></i>
                    <span class="nav-label">Settings</span>
                </a>
            </li>
            <li>
                <a class="active" href="{{route('admin_message')}}"><i class="sidebar-item-icon fa ti-comment"></i>
                    <span class="nav-label">Contact Messages</span>
                </a>
            </li>
            <li>
                <a class="active" href="{{route('admin_faq')}}"><i class="sidebar-item-icon fa ti-help-alt"></i>
                    <span class="nav-label">Faq</span>
                </a>
            </li>
            <li>
                <a class="active" href="{{route('admin_users')}}"><i class="sidebar-item-icon fa ti-user"></i>
                    <span class="nav-label">Users</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
