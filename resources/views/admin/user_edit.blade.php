@extends('layouts.admin')

@section('title', 'Edit User')


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Edit User</h3>
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
                        <div class="ibox-title">Edit User</div>
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
                        <form action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" value="{{$data->name}}" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" value="{{$data->email}}" name="email">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" value="{{$data->phone}}" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image">
                                @if($data->profile_photo_path)
                                    <img src="{{ Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                @endif
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
