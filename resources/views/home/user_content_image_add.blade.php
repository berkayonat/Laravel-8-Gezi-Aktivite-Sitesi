<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Content Image Gallery</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('assets')}}/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('assets')}}/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->

</head>
<body>

                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">{{$data->title}}</div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('user_image_store', ['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Add Image</button>
                            </div>
                        </form>
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_delete',['id'=>$rs->id,'content_id'=>$data->id])}}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


</body>
