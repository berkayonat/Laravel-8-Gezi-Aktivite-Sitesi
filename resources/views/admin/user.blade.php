@extends('layouts.admin')

@section('title', 'User List')



@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="page-heading">
                <h1 class="page-title">Users</h1>
                @include('home.message')
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Roles</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>@if($rs->profile_photo_path)
                                        <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius:10px">
                                    @endif
                                </td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>@foreach($rs->roles as $row)
                                        {{$row->name}},
                                    @endforeach
                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')"><i class="ti-plus"></i></a>
                                </td>
                                <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><i class="ti-pencil-alt"></i></a> </td>
                                <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection

@section('footer')
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
