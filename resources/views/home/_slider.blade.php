
<!-- slider -->
<div class="full_bg">
    <div class="slider_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- carousel code -->
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($slider as $rs)
                            <!-- first slide -->
                            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : '  ' }}">
                                <div class="carousel-caption relative">
                                    <div class="row">
                                        <div  class="col-md-10 offset-md-1">
                                            <div class="board">
                                                <h1>{{$rs->title}}</h1>
                                                <span>{{ date('d-m-Y H:i', strtotime($rs->datetime)) }}</span>
                                                <p>{{$rs->country}} / {{$rs->city}} / {{$rs->location}}</p>
                                                <a class="read_more" href="{{route('content',['id'=>$rs->id,'slug'=>$rs->slug])}}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>

                        <!-- controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end banner -->
