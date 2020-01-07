<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">ARTIST/ACT</li>
                <li {{Route::is('dashboard')? 'class=active':''}}>
                    <a href="{{route('dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li {{Route::is('events/index')? 'class=active':''}}>
                    <a href="{{route('events/index')}}">
                        <i class="material-icons">event</i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">people</i>
                        <span>Contacts</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('contacts/index')? 'class=active': ''}}>
                            <a href="{{route('contacts/index')}}">Contacts Detail</a>
                        </li>
                        {{-- <li {{Route::is('single')? 'class=active': ''}}>
                            <a href="{{route('single')}}">Single of Events</a>
                        </li>  --}}
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                    <ul class="ml-menu">
                        @role('admin') 
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">face</i>
                                    <span>Manage Users</span>
                                </a>
                                <ul class="ml-menu">                            
                                    <li  {{Route::is('admins.index')||Route::is('admins.create')||Route::is('admins.edit')? 'class=active':''}}>
                                        <a href="{{route('admins.index')}}">Admins</a>
                                    </li>
                                    <li {{Route::is('ungrouped.index')||Route::is('ungrouped.create')||Route::is('ungrouped.edit')? 'class=active':''}}>
                                        <a href="{{ route('ungrouped.index') }}">Ungrouped</a>
                                    </li>
                                    <li {{Route::is('regularusers.index')||Route::is('regularusers.create')||Route::is('regularusers.edit')? 'class=active':''}}>
                                        <a href="{{ route('regularusers.index') }}">Regular Users</a>
                                    </li>
                                    <li {{Route::is('externalusers.index')||Route::is('externalusers.create')||Route::is('externalusers.edit')? 'class=active':''}}>
                                        <a href="{{ route('externalusers.index') }}">External Users</a>
                                    </li>
                                    {{-- <li {{Route::is('add-items.index')||Route::is('add-items.create')||Route::is('add-items.edit')? 'class=active':''}}>
                                        <a href="{{route('add-items.index')}}">
                                            <i class="material-icons">add-box</i>
                                            <span>Add Items</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                        @endrole
                            
                        <li>
                            <a href="">Email Settings</a>
                        </li>
                        {{-- <li {{Route::is('setting/ungrouped')? 'class=active': ''}}>
                            <a href="{{route('setting/ungrouped')}}">ungrouped</a>
                        </li>
                        <li {{Route::is('setting/ungrouped')? 'class=active': ''}}>
                            <a href="">Regular Users</a>
                        </li> 
                        <li {{Route::is('setting/ungrouped')? 'class=active': ''}}>
                            <a href="">External Users</a>
                        </li> --}}
                    </ul>
                </li>
            </ul> 
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 <a href="javascript:void(0);">Jordan Loyd</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <aside id="userightsidebar" class="right-sidebar" style="overflow: scroll;">
        <div class="card margin-0 masked-input">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="header">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Photo</label>
                        </div>
                        <div class="col-md-9">
                            <img src="../images/user.png" width="60" height="60" alt="User" class="img-circle">
                            <button type="button" class="btn btn-danger m-l-50">Remove</button>
                            <button type="button" class="btn btn-success m-l-20">Update</button>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">First Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="Eventname" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Company</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line" id="bs_datepicker_container">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="fo
                            rm-label">Gender</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="radio" name="Gender" id="unspecified" class="with-gap">
                                <label for="unspecified">Unspecified</label>
    
                                <input type="radio" name="Gender" id="male" class="with-gap">
                                <label for="male" class="m-l-20">male</label>

                                <input type="radio" name="Gender" id="female" class="with-gap">
                                <label for="female" class="m-l-20">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">note</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <textarea name="note" id="note" cols="50" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Home</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">email</i>  
                                <input type="text" class="form-control email" name="email" placeholder="Ex: example@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">moblie</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone_iphone</i>
                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">work</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone</i>
                                <input type="text" class="form-control mobile-phone-number" name="guestemplete" placeholder="Ex: +00 (000) 000-00-00" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Adress</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">place</i>
                                <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a href="" class=" d-flex align-items-center">
                        <i class="material-icons m-r-10">add_box</i>
                        Add Field 
                    </a>
                </div>
            </form>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>