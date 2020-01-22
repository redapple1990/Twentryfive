<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
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
                <li {{Route::is('contacts/index')? 'class=active': ''}}>
                    <a href="{{route('contacts/index')}}">
                        <i class="material-icons">people</i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                    <ul class="ml-menu">
                        <!-- @role('admin')  -->
                            <li  {{Route::is('admins.index')||Route::is('admins.create')||Route::is('admins.edit')? 'class=active':''}}>
                                <a href="{{route('admins.index')}}">User Setting</a>
                            </li>
                            <li  {{Route::is('ungrouped.index')||Route::is('ungrouped.create')||Route::is('ungrouped.edit')? 'class=active':''}}>
                                <a href="{{route('ungrouped.index')}}">Guest List Setting</a>
                            </li>
                        <!-- @endrole -->
                    </ul>
                </li>
            </ul> 
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>