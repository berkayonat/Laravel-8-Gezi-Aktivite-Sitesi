@extends('layouts.home')

@section('title','Add Content')

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
                    <div class="ibox">
                        <div class="ibox-body">
                            <form action="{{route('user_content_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2-close-mask" name="category_id"
                                            style="width: 100%;padding:2px">
                                        @foreach($datalist as $rs)
                                            <option
                                                value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description">
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control select2" name="type" style="width: 100%;">
                                        <option>Activity</option>
                                        <option>Blog</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="form-control" type="text" name="country">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" type="text" name="city">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input class="form-control" type="text" name="location">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input class="form-control" type="datetime-local" name="datetime" required>
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="detail" name="detail"></textarea>
                                    <script>
                                        CKEDITOR.replace('detail');
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="form-control" type="text" name="slug" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Add Content</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

