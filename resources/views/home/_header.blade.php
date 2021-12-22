<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('assets')}}/images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
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
                        <li><img src="{{asset('assets')}}/images/ti_call.png" alt="#"/>Call : +1234567890</li>
                        <li><img src="{{asset('assets')}}/images/ti_mail.png" alt="#"/><a href="Javascript:void(0)">
                                demo@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_midil">
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
            <div class="col-sm-9 col-md-8">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
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
                                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2  d_none">
                <ul class="email text_align_right">
                    @auth
                    <li><a href="/user/profile"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <div>{{Auth::user()->name}}</div>
                    @endauth
                    @guest
                        <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    @endguest
                    <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end header inner -->
<!-- end header -->
