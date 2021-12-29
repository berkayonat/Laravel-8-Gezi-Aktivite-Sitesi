@extends('layouts.home')

@section('title','Frequently Asked Questions')
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
@endsection

@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div id="accordion">
                @foreach($datalist as $rs)

                    <h3>{{$rs->question}}</h3>
                    <div>
                        <p> {!!$rs->answer!!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection

