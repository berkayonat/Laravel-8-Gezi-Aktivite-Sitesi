<!-- header -->
<div class="header">
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select_main">
                        <div class="sign">
                            <div class="niceCountryInputSelector se_flag" style="width: 200px;"
                                 data-selectedcountry="US" data-showspecial="false" data-showflags="true"
                                 data-i18nall="All selected"
                                 data-i18nnofilter="No selection" data-i18nfilter="Filter"
                                 data-onchangecallback="onChangeCallback"/>
                        </div>
                        <span> <a href="/register">Sign Up</a> </span>
                    </div>
                    <ul class="top_infomation">
                        <li>Call : {{$setting->phone}}</li>
                        <li><a href="#">{{$setting->email}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_midil bg-dark">
    <div class="container">
        <div class="row d_flex">
            <div class=" col-md-2 col-sm-3 logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/logo.png" alt="#"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-7">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-3  d_none">
                <ul class="email text_align_right">
                    @auth
                        <li class="dropdown dropdown-user">
                            <a class="nav-link dropdown-toggle link" data-toggle="dropdown" href="{{route('myprofile')}}">
                                <p style="color: white">{{Auth::user()->name}}</p>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-header">
                                <a class="dropdown-item" href="{{route('myprofile')}}">My Profile</a>
                                <a class="dropdown-item" href="profile.html">My Comments</a>
                                <li class="dropdown-divider"></li>
                                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{route('login')}}"></i><p style="color: white;">LOGIN</p></a></li>
                    @endguest
                    <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- end header inner -->
<!-- end header -->
