@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$setting->address}}
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{$setting->phone}}</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>{{$setting->email}}</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="follow text_align_left">
                        <h3>Follow Us</h3>
                        <ul class="social_icon ">
                            @if($setting->facebook != null)
                                <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"
                                                                        aria-hidden="true"></i></a></li>@endif
                            @if($setting->twitter != null)
                                <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"
                                                                        aria-hidden="true"></i></a></li>@endif
                            @if($setting->youtube != null)
                                <li><a href="{{$setting->youtube}}"><i class="fa fa-youtube"
                                                                        aria-hidden="true"></i></a></li>@endif
                            @if($setting->instagram != null)
                                <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"
                                                                        aria-hidden="true"></i></a></li>@endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2021 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->

<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-3.0.0.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<!-- sidebar -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('assets')}}/js/niceCountryInput.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>

<script>  AOS.init();</script>
