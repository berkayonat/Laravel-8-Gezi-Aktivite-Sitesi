@extends('layouts.admin')

@section('title', 'Edit Content')

@section('javascript')
    <link rel="stylesheet" href="{{asset('assets')}}/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="{{asset('assets')}}/richtexteditor/rte.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/richtexteditor/plugins/all_plugins.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Edit Content</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Content</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card-body">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Content</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item">option 1</a>
                                <a class="dropdown-item">option 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_content_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2-close-mask" name="category_id" style="width: 100%;padding:2px">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif >{{$rs->title}}</option>
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
                                <input class="form-control" type="text" value="{{$data->description}}" name="description">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control select2" name="type" style="width: 100%;">
                                    <option selected="selected">{{$data->type}}</option>
                                    <option>Place</option>
                                    <option>Activity</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" type="text" value="{{$data->city}}" name="city">
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control" type="text" value="{{$data->country}}" name="country">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" type="text" value="{{$data->location}}" name="location">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="inp_editor1" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    var editor1 = new RichTextEditor("#inp_editor1");
                                    //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image">
                                @if($data->image)
                                    <img src="{{ Storage::url($data->image)}}" height="100" alt="">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" value="{{$data->slug}}" name="slug">
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
            <div class="card-footer">

            </div>

        </section>




@endsection
