@extends('layouts.home')

@section('title','Edit Content')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="background-color: whitesmoke">
                @include('home.usermenu')
            </div>
            <div class="card-body">
                <div class="col-md-10" style="margin-top: 20px">
                    <div class="ibox-body">
                        <form action="{{route('user_content_update', ['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2-close-mask" name="category_id"
                                        style="width: 100%;padding:2px">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"
                                                @if ($rs->id == $data->category_id) selected="selected" @endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{$data->title}}" name="title">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" value="{{$data->description}}"
                                       name="description">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control select2" name="type" style="width: 100%;">
                                    <option selected="selected">{{$data->type}}</option>
                                    <option>Activity</option>
                                    <option>Blog</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control" type="text" value="{{$data->country}}" name="country">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" type="text" value="{{$data->city}}" name="city">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" type="text" value="{{$data->location}}" name="location">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="datetime-local"
                                       value="{{ date('Y-m-d\TH:i', strtotime($data->datetime)) }}" name="datetime"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    CKEDITOR.replace('detail');
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image">
                                @if($data->image)
                                    <img src="{{ Storage::url($data->image)}}" height="20" alt="">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" value="{{$data->slug}}" name="slug" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Update Content</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

