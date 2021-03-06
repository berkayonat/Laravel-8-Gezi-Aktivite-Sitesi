@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp
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
<div class="header_midil" style="background-color: #1d2124">
    <div class="container">
        <div class="row d_flex">

            <div class="col-sm-10 col-md-10">
                <nav class="navigation navbar navbar-expand-md navbar-dark">
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
                                <ul>
                                    <li class="dropdown dropdown-user">
                                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">Categories</a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            @foreach($parentCategories as $rs)
                                               <a class="dropdown-item"
                                                  href="{{route('categorycontents', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">{{$rs->title}}</a>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">Faq</a>
                            </li>
                            <li class="nav-item">
                                <ul>
                                    @auth
                                        <li class="dropdown dropdown-user">
                                            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                                                <p style="color: white;font-size:15px"> {{Auth::user()->name}} </p>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{route('userprofile')}}">My Profile</a>
                                                <a class="dropdown-item" href="{{route('user_content')}}">My Contents</a>
                                                <a class="dropdown-item" href="{{route('user_participation')}}">My Participations</a>
                                                <li class="dropdown-divider"></li>
                                                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                            </ul>
                                        </li>
                                    @endauth
                                    @guest
                                        <li><a class="nav-link" href="{{route('login')}}"></i><p style="color: white;">
                                                    LOGIN</p></a></li>
                                    @endguest
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 col-sm-2">
                <li class="nav-item">
                    <div class="search-container">
                        <form action="{{route('getcontent')}}" method="post">
                            @csrf
                            @livewire('search')

                            @livewireScripts
                        </form>
                    </div>
                </li>
            </div>
        </div>
    </div>
</div>


<!-- end header inner -->
<!-- end header -->
