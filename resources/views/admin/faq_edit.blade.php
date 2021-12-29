@extends('layouts.admin')

@section('title', 'Edit Content')


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Edit Faq</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Faq</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card-body">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Faq</div>
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
                        <form action="{{route('admin_faq_update', ['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Position</label>
                                <input class="form-control" type="number" name="position" value="{{$data->position}}">
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input class="form-control" type="text" name="question" value="{{$data->question}}">
                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="summernote" name="answer">{{$data->answer}}</textarea>
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
        @section('footer')
            <script type="text/javascript">
                $(function () {
                    $('#summernote').summernote({
                        height: 100
                    });
                });
            </script>
@endsection
