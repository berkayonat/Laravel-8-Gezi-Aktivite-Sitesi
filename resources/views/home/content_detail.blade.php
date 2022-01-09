@extends('layouts.home')

@section('title',$data->title)

@section('keywords',$data->keywords)

@section('description'){{$data->description}} @endsection

@section('content')
    @include('home.message')
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
                                    <span>Type : {{$data->type}}</span>
                                    <span>Organizer : {{$data->user->name}}</span>
                                </div>
                                <div class="italy_right">
                                    <h3>Activity Date</h3>
                                    <span>{{ date('d-m-Y H:i', strtotime($data->datetime)) }}</span>
                                </div>
                            </div>
                            <p>{!! $data->detail !!}</p>
                            <div class="tusc">
                                <form action="{{route('user_participation_store',['id'=>$data->id])}}" method="post" class="read_more">
                                    @csrf
                                <button type="submit" class="read_more">Join</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h1>Participant List</h1><br><br>
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participants as $rs)
                        <tr>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->user->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
@section('footerjs')
    <script src="{{asset('assets')}}/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('assets')}}/admin/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
@endsection
