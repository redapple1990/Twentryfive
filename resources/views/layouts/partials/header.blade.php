
<!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style = "background:royalblue"> 
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="">
                    <span>@lang('app.app-name')</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- New Guest List Entry-->
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#newGuestList"><i class="material-icons m-r-10">playlist_add</i></a></li>
                    <!-- #END# New Guest List Entry-->
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#newContact"><i class="material-icons m-r-10">person_add</i></a></li>
                    <!-- New Evnet-->
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#newEvent"><i class="material-icons m-r-10">event</i></a></li>
                    <!-- #END# New Event -->
                    <!-- My calender-->
                    <li><a href="javascript:void(0);" class="datepicker" data-dtp="dtp_RAzlT"><i class="material-icons m-r-10">date_range</i></a></li>
                    <!-- #END# My Calender-->
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- User image -->
                    <li>
                        <div class="user-image" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('images',Auth::user()->profiles?Auth::user()->profiles->avatar:'user.png')}}" width="50" height="50" alt="User"/>
                        </div>
                        <ul class="dropdown-menu pull-right">
                            <li {{ Route::is('profile.index')? 'class=active':'' }}><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Profile</a></li>
                            <li>  
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# user image -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="newEvent" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #343A40;">
                <form id="form_validation" action="{{ url('events/store') }}" method="POST" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel" style="color: white;">NEW EVENT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name of Event</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="event_name" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Location</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="location" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Date</label></div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" name = "event_date" placeholder="Please choose date &amp; time..." data-dtp="dtp_WyOVl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Guest List Templete</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newGuestList" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #343A40;">
                <form id="form_validation" method="POST" action="{{ url('guest/store') }}" novalidate="novalidate">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel" style="color: white;">NEW GUEST LIST ENTRY</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Event</label></div>
                            <div class="col-md-9">
                                @php $events = Helper::getEvents(); @endphp
                                <select class="form-control bootstrap-select" name="eventname" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    @foreach($events as $key => $val)
                                        <option value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name of Guest</label>
                            </div>
                            <div class="col-md-9">
                                @php $events = Helper::getGuests(); @endphp
                                <select class="form-control bootstrap-select" name="guestname" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    @foreach($events as $key => $val)
                                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Number of Tickets</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="ticketnumber" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Affliation</label></div>
                            <div class="col-md-9">
                                @php $users = Helper::getUsers(); @endphp
                                <select class="form-control" data-live-search="true" name = "affliation" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    @foreach($users as $key => $val)
                                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>                                                                                                                                                                                                                                                                                                        
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Credential Type</label>
                            </div>
                            <div class="col-md-9">
                                @php $permissions = Helper::getPermissions(); @endphp
                                <select class="form-control" name="type" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    @foreach($permissions as $key => $val)
                                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Status</label></div>
                            <div class="col-md-9">
                                <select class="form-control" data-live-search="true" name="status" style="display: none;">
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                    <option value="declined">Declined</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newContact" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #343A40;">
                <form id="form_validation" action="{{ url('contacts/detailstore') }}" method="POST" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel" style="color: white;">NEW CONTACT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_name" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Email</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_email" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Phone</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_phone" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    