@extends('layouts.home')

@section('title',$data->title)

@section('keywords',$data->keywords)

@section('description'){{$data->description}} @endsection

@section('content')

    <div class="packages">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="container">
                        <div class="mySlides">

                            <img src="{{Storage::url($data->image)}}" style="width:100%">
                        </div>
                        @foreach($datalist as $rs)
                            <div class="mySlides">

                                <img src="{{Storage::url($rs->image)}}" style="width:100%">
                            </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        @php
                            $i = 2
                        @endphp
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="{{Storage::url($data->image)}}" style="width:100%"
                                     onclick="currentSlide(1)">
                            </div>
                            @foreach($datalist as $rs)
                                <div class="column">
                                    <img class="demo cursor" src="{{Storage::url($rs->image)}}" style="width:100%"
                                         onclick="currentSlide({{$i}})">
                                </div>
                                @php
                                    $i++
                                @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="ho_img" class="packages_box" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tuscany">
                            <div class="tusc text_align_left">
                                <div class="italy">
                                    <h3>{{$data->title}}</h3><br>
                                    <span><img src="{{asset('assets')}}/images/loca.png" alt="#"/> {{$data->country}} / {{$data->city}} / {{$data->location}}</span>
                                    <p>Type : {{$data->type}}</p>
                                    <p>Category : {{$category->title}}</p>
                                </div>
                            </div>
                            <p>{!! $data->detail !!}</p>
                            <div class="tusc">
                                <a class="read_more" href="#">Join</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
