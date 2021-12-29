@extends('layouts.admin')

@section('title', 'Frequently Asked Questions List')



@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="page-heading">
                <h1 class="page-title">Faq</h1>

            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-success">Add Faq</a>
                        @include('home.message')
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Position</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->position}}</td>
                                <td>{{$rs->question}}</td>
                                <td>{!!$rs->answer!!}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><i class="ti-pencil-alt"></i></a> </td>
                                <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a></td>
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
