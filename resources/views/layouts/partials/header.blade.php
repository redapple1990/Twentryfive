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
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <span><i class="material-icons">home</i></span>
                    <span>@lang('app.app-name')</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- New Guest List Entry-->
                    <li><a href="javascript:void(0);"><i class="material-icons m-r-10">add_box</i>New Guest List Entry</a></li>
                    <!-- #END# New Guest List Entry-->
                    <!-- New Evnet-->
                    <li><a href="javascript:void(0);"><i class="material-icons m-r-10">add_box</i>New Event</a></li>
                    <!-- #END# New Event -->
                    <!-- My calender-->
                    <li><a href="javascript:void(0);"><i class="material-icons m-r-10">date_range</i>My Calender</a></li>
                    <!-- #END# My Calender-->
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- User image -->
                    <li>
                        <div class="user-image" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('images',Auth::user()->profiles?Auth::user()->profiles->avatar:'user.png')}}" width="60" height="60" alt="User" />
                        </div>
                        <ul class="dropdown-menu pull-right">
                            <li {{ Route::is('profile.index')? 'class=active':'' }}><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
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
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>