@extends('layouts.admin')

@section('title', 'Edit Setting')


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h3>Edit Setting</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card-body">
                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="ibox">
                                    <div class="ibox-body">

                                        <ul class="nav nav-tabs tabs-line">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#tab-7-1" data-toggle="tab">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-7-2" data-toggle="tab">Smtp Email</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-7-3" data-toggle="tab">Social Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-7-4" data-toggle="tab">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-7-5" data-toggle="tab">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-7-6" data-toggle="tab">References</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab-7-1">
                                                <input class="form-control" type="hidden" value="{{$data->id}}"
                                                       name="id">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input class="form-control" type="text" value="{{$data->title}}"
                                                           name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input class="form-control" type="text" value="{{$data->keywords}}"
                                                           name="keywords">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input class="form-control" type="text"
                                                           value="{{$data->description}}"
                                                           name="description">
                                                </div>
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <input class="form-control" type="text" value="{{$data->company}}"
                                                           name="company">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" type="text" value="{{$data->address}}"
                                                           name="address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="text" value="{{$data->phone}}"
                                                           name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input class="form-control" type="text" value="{{$data->fax}}"
                                                           name="fax">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" value="{{$data->email}}"
                                                           name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status"
                                                            style="width: 100%;">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>False</option>
                                                        <option>True</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-7-2">
                                                <div class="form-group">
                                                    <label>Smtp Server</label>
                                                    <input class="form-control" type="text"
                                                           value="{{$data->smtpserver}}" name="smtpserver">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Email</label>
                                                    <input class="form-control" type="text" value="{{$data->smtpemail}}"
                                                           name="smtpemail">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Password</label>
                                                    <input class="form-control" type="password"
                                                           value="{{$data->smtppassword}}"
                                                           name="smtppassword">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Port</label>
                                                    <input class="form-control" type="number"
                                                           value="{{$data->smtpport}}" name="smtpport">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-7-3">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input class="form-control" type="text" value="{{$data->facebook}}"
                                                           name="facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input class="form-control" type="text" value="{{$data->instagram}}"
                                                           name="instagram">
                                                </div>
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input class="form-control" type="text" value="{{$data->twitter}}"
                                                           name="twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input class="form-control" type="text" value="{{$data->youtube}}"
                                                           name="youtube">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-7-4">
                                                <div class="form-group">
                                                    <label>About Us</label>
                                                    <textarea id="summernote"
                                                              name="aboutus">{{$data->aboutus}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-7-5">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <textarea id="summernote2"
                                                              name="contact">{{$data->contact}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-7-6">
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <textarea id="summernote3"
                                                              name="references">{{$data->references}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update Setting</button>
                    </div>
                </form>
            </div>
        </section>


        <div class="card-footer">

        </div>


        @endsection
        @section('footer')
            <script type="text/javascript">
                $(function () {
                    $('#summernote').summernote({
                    });
                    $('#summernote2').summernote({
                    });
                    $('#summernote3').summernote({
                    });
                });
            </script>
@endsection
