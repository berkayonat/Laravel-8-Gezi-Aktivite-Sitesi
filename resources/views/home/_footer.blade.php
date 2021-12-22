@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="letter text_align_left">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="cont_in" placeholder="Full Name" type="type" name=" Name">
                            </div>
                            <div class="col-md-12">
                                <input class="cont_in" placeholder="Your Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="cont_in" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <input class="cont_in" placeholder="Your Words" type="type" name="Words">
                            </div>
                            <div class="col-md-12">
                                <button class="send_btnt">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                <div class="col-md-12">
                    <div class="follow letter text_align_left">
                        <h3>Newsletter</h3>
                        <form class="form_subscri">
                            <input class="newsl" placeholder="Email" type="text" name="Email">
                            <button class="subsci_btn">subscribe</button>
                        </form>
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
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-3.0.0.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<!-- sidebar -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('assets')}}/js/niceCountryInput.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
<script>  AOS.init();</script>
