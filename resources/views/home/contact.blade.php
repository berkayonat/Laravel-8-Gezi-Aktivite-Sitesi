@extends('layouts.home')

@section('title', 'Contact-'. $setting->title)

@section('keywords',$setting->keywords)

@section('description',){{$setting->description}} @endsection

@section('content')

    <div class="section">
        <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-7">
                    <div class="titlepage text_align_center">
                        <h2>Contact Information</h2>
                    </div>
                    {!!$setting->contact!!}
                </div>
                <div class="col-md-5">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            @include('home.message')
                            <form id="request" class="main_form" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <input class="cont_in" placeholder="Full Name" type="text" name="name">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="cont_in" placeholder="Your Email" type="email" name="email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="cont_in" placeholder="Phone Number" type="text" name="phone">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="cont_in" placeholder="Subject" type="text" name="subject">
                                    </div>
                                    <div class="col-md-12">
                            <textarea class="textarea2" style="color:#676767;" placeholder="Message" type="text" name="message"> </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="send_btnt">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
