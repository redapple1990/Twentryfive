	<div class="container-fluid">
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Inbox</h2>
                    </div>
                    <div class="body padding-0">
                        <div class="">
                            @php $guestlists = Helper::getGuestList(); @endphp
                            <table class="table table-hover dashboard-task-infos m-b-0">
                                <tbody>
                                @foreach($guestlists as $key => $data)
                                        <td>
                                            <div style="text-align: center;">
                                                <img src="images/user.png" alt="User" width="50" height="50" class="img-circle">
                                                <div style="font-weight: bold;padding-top: 5px;">{{$data->guest_name}}</div>
                                            </div>
                                        </td>
                                        <td>
                                            @php $event_ddd = Helper::getEventNameForID($data->event_name); @endphp
                                            <div style = "font-size: 16px;">{{ $event_ddd }}</div>
                                            @if($data->status == 'approved')
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                </div>
                                            </div>
                                            @endif
                                            @if($data->status == 'pending')
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                </div>
                                            </div>
                                            @endif
                                            @if($data->status == 'declined')
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                </div>
                                            </div>
                                            @endif
                                            @php $dateinfo = $data->created_at->format('M d, Y');@endphp
                                            <div class="text-left p-t-10" style = "font-style: italic">{{$dateinfo}}</div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="body padding-0">
                            <div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="home">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="https://lcafood2020.com/">13-16 Oct 2020, LCA Food 2020, Berlin, Germany (hosted by DIL)</a>
                                                        </h4>
                                                        350 members - 16 Oct 2020
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-content">
                                                        <img src="https://www.mypackfood.eu/wp-content/uploads/2019/11/lyfecycle.png" class="img-responsive" width="100%" height="360">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="https://operaandballet.com/month/2020-december/?sid=GLE_1&play_theatre=237&play_perfomance=3645&play_date_from=01-Dec-2020&play_date_to=31-Dec-2020">Tchaikovsky Concert Hall for 01 December 2020 - 31 December 2020</a>
                                                        </h4>
                                                        1003 members - 01 Dec 2020
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-content">
                                                        <iframe width="100%" height="556" src="https://www.youtube.com/embed/4I2ApQITQT8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="Marc K. Hammond" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="example@example.com" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in">
                                                    <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="change_password_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('extra-script')
    {{Html::script('bsbmd/plugins/jquery-countto/jquery.countTo.js')}}
    {{Html::script('bsbmd/plugins/raphael/raphael.min.js')}}
    {{Html::script('bsbmd/js/pages/index.js')}}
@endsection