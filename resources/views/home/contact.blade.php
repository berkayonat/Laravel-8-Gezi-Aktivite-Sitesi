@extends('layouts.home')

@section('title', 'Contact-'. $setting->title)

@section('keywords',$setting->keywords)

@section('description',){{$setting->description}} @endsection

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 style="font-size: 30px;margin-block: 30px">Contact Information</h6>
                {!!$setting->contact!!}
                </div>
                <div class="col-md-6">
                    <h4 style="font-size: 30px;margin-block: 30px">Contact Form</h4>
                    İletişim formu
                </div>
            </div>
        </div>
    </div>
@endsection
