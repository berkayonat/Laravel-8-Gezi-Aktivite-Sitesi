@extends('layouts.home')

@section('title','User Profile')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="background-color: whitesmoke">
                @include('home.usermenu')
            </div>
            <div class="col-md-10">
                @include('profile.show')
            </div>
        </div>
    </div>


@endsection
