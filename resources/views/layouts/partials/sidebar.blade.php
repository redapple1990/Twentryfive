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

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">event</i>
                        <span>Events</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('events/index')? 'class=active': ''}}>
                            <a href="{{route('events/index')}}">List of Events</a>
                        </li>
                        <li {{Route::is('events/single')? 'class=active': ''}}>
                            <a href="{{route('events/single')}}">Single of Events</a>
                        </li> 
                    </ul>
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
                <li {{Route::is('helper')? 'class=active':''}}>
                    <a href="{{route('form')}}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">Admin dashboard</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.4
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
    <aside id="userightsidebar" class="right-sidebar">
        <div class="card">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="header">
                    <img src="../images/user.png" width="60" height="60" alt="User">
                    <button type="button" class="btn btn-danger">Remove</button>
                    <button type="button" class="btn btn-success">Update</button>
                </div>
                <div class="body">
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="Eventname" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Company</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Title</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="number" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                        </div>
                        <div class="col-md-8">
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
                        <div class="col-md-4">
                            <label class="form-label">note</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <textarea name="note" id="note" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Home</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="email" class="form-control" name="email" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-4">
                            <label class="form-label">Guest List Templete</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div>asdfasdfasd</div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>