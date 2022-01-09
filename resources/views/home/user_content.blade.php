@extends('layouts.home')

@section('title','My Contents')

@section('css')
    <link href="{{asset('assets')}}/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="background-color: whitesmoke">
                @include('home.usermenu')
            </div>
            <div class="col-md-10" style="margin-top: 20px">
                <div class="page-content fade-in-up">
                    <div class="ibox">@include('home.message')
                        <div class="ibox-head">
                            <a href="{{route('user_content_add')}}" type="button" class="btn btn-success">Add Content</a>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                        <td><a href="{{route('content',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></td>
                                        <td>{{$rs->type}}</td>
                                        <td>{{$rs->country}}</td>
                                        <td>{{$rs->city}}</td>
                                        <td>{{ date('d-m-Y H:i', strtotime($rs->datetime)) }}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('user_image_add',['content_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')"><i class="ti-gallery"></i></a></td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('user_content_edit',['id'=>$rs->id])}}"><i class="ti-pencil-alt"></i></a> </td>
                                        <td><a href="{{route('user_content_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
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
