@extends('layouts.admin')

@section('title', 'Edit Category')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card-body">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Category</div>
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
                        <form action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2-close-mask" name="parent_id" style="width: 100%;padding:2px">
                                    <option value="0">Main Category</option>
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >{{$rs->title}}</option>
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
                                <button class="btn btn-primary" type="submit">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>

        </section>




@endsection
