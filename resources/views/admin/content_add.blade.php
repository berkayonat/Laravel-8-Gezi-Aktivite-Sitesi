@extends('layouts.admin')

@section('title', 'Add Content')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Add Content</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Content</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card-body">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Content</div>
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
                        <form action="{{route('admin_content_store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2-close-mask" name="category_id" style="width: 100%;padding:2px">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
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
                                    <option selected="selected">Place</option>
                                    <option>Activity</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" type="text" name="city">
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control" type="text" name="country">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" type="text" name="location">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <input class="form-control" type="text" name="detail">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" name="slug">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>

        </section>




@endsection
