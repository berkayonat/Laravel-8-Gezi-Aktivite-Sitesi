@extends('layouts.home')

@section('title',"Blog Page")


@section('content')
    <!-- contents -->
    <div class="packages">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($datalist as $rs)
                <div class=" col-md-6">
                    <div id="ho_img" class="packages_box" data-aos={{$loop->iteration % 2 == 1 ? 'fade-right' : 'fade-left' }}>
                        <figure><img src="{{Storage::url($rs->image)}}" style="height: 342px" alt="#"/></figure>
                        <div class="tuscany">
                            <div class="tusc text_align_left">
                                <div class="italy">
                                    <h3>{{$rs->title}}</h3>
                                    <span><img src="{{asset('assets')}}/images/loca.png" alt="#"/>  {{$rs->country}} / {{$rs->city}} / {{$rs->location}}</span>
                                </div>
                            </div><br>
                            <div class="tusc">
                                <a class="read_more" href="{{route('blogdetail',['id'=>$rs->id,'slug'=>$rs->slug])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    <a class="read_more" href="Javascript:void(0)">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end contents -->
@endsection
