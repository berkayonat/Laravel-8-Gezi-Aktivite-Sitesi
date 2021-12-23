@extends('layouts.home')

@section('title','User Profile')



@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('home.usermenu')
                </div>
                <div class="col-md-9">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
@endsection
