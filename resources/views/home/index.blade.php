@extends('layouts.home')

@section('title',$setting->title)

@section('keywords',$setting->keywords)

@section('description',){{$setting->description}} @endsection

@section('content')

    @include('home._slider')

    <!-- our_packages -->
    <div class="our_packages">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <form id="table" class="table_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_left ">
                                    <h3>Our Packages</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Select Your Destination :</label>
                                <input class="contactus" placeholder="All Destinations" type="text" name="destinations">
                            </div>
                            <div class="col-md-4">
                                <label>Select Your Destination :</label>
                                <input type="text" class="contactus" id="my_date_picker" placeholder="mm-dd-yy">
                            </div>
                            <div class="col-md-4">
                                <label>Select Your Destination :</label>
                                <select id='seluser' class="contactus">
                                    <option value='0'>$1090</option>
                                    <option value='1'>$1100</option>
                                    <option value='2'>$1160</option>
                                    <option value='3'>$1190</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="filter_main">
                        <a class="read_more" href="javascript:void(0)"> <img src="{{asset('assets')}}/images/filter.png"
                                                                             alt="#"/> More Filters </a>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="typologies">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="typolo">
                                    <span>typologies :</span>
                                    <form>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio" checked> <span
                                                    class="label-text">Relax </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text">Cultural </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span class="label-text">Sport </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text">History </span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="typolo">
                              <span>Durations :
                              </span>
                                    <form>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio" checked> <span class="label-text"> 2 - 4 Days </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text"> 2 - 3 Days </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text"> 2 - 5 Days </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text"> 2 - 6 Days </span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="typolo">
                              <span>Difficulty :
                              </span>
                                    <form>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio" checked> <span
                                                    class="label-text">High  </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span class="label-text">Low  </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text">Medium </span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="typolo">
                              <span>Min Age :
                              </span>
                                    <form>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio" checked> <span class="label-text"> 10 Years  </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text"> 25 Years  </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="marg_bottom0">
                                                <input type="radio" name="radio"> <span
                                                    class="label-text"> 40 Years </span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our_packages -->
    <!-- packages -->
    <div class="packages">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Activity Contents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($home as $rs)
                <div class=" col-md-6">
                    <div id="ho_img" class="packages_box" data-aos={{$loop->iteration % 2 == 1 ? 'fade-right' : 'fade-left' }}>
                        <figure><img src="{{Storage::url($rs->image)}}" style="height: 342px" alt="#"/></figure>
                        <div class="tuscany">
                            <div class="tusc text_align_left">
                                <div class="italy">
                                    <h3>{{$rs->title}}</h3>
                                    <span><img src="{{asset('assets')}}/images/loca.png" alt="#"/>  {{$rs->city}}</span>
                                </div>
                            </div>
                            <p>Content here, content here', making it look like readable English. Many desktop
                                publishing packagesContent here, content here', making it look like readable English.
                                Many desktop publishing packages and web page editors now us</p>
                            <div class="tusc">
                                <a class="read_more" href="Javascript:void(0)">Read More</a>
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
    <!-- end packages -->

    @include('home._about')


@endsection
