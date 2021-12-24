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


<section class="content">

    <div class="card-body">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title"><p style="font-size: 25px;font-weight: bold">Message Details</p></div>
            </div>
                <div class="ibox-body">
                    <form action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
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
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td><textarea id="note" name="note">{{$data->note}}</textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update Message</button>
                                    </div>
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





