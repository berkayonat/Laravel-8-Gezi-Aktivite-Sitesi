@extends('layouts.home')

@section('title','My Participations')

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
                    <div class="ibox">
                        @include('home.message')
                        <div class="ibox-body">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Content</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Location</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->content->category,$rs->content->category->title)}}</td>
                                        <td><a href="{{route('content',['id'=>$rs->content->id,'slug'=>$rs->content->slug])}}">{{$rs->content->title}}</a></td>
                                        <td>{{$rs->content->city}}</td>
                                        <td>{{$rs->content->country}}</td>
                                        <td>{{$rs->content->location}}</td>
                                        <td>
                                            @if($rs->content->image)
                                                <img src="{{ Storage::url($rs->content->image)}}" style="height: 30px" alt="">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('user_participation_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a></td>
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
