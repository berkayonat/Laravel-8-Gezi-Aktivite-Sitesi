@extends('layouts.home')

@section('title', 'About Us-'. $setting->title)

@section('keywords',$setting->keywords)

@section('description',){{$setting->description}} @endsection

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                {!!$setting->aboutus!!}
            </div>
        </div>
    </div>
@endsection
