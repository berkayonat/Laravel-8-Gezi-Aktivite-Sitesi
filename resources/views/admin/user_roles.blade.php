<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif"/>
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/niceCountryInput.css">
<link href="{{asset('assets')}}/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />

<section class="content">

    <div class="card-body">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title"><p style="font-size: 25px;font-weight: bold">User Roles</p></div>
            </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                           width="100%">

                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>

                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Are you sure ?')"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Add Role</td>
                            <td>
                                <form action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <select name="roleid" id="">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="submit">Add Role</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </form>
                @include('home.message')
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>

</section>
