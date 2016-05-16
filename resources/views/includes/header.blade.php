<!--Navbar-->

    <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="{{ Route::currentRouteName()=='home' ? 'active' : '' }}"><a href="{{ Route('home') }}">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Department <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="{{ Route::currentRouteName()=='showepartments' ? 'active' : '' }}"><a href="{{ Route('showepartments') }}">Show All</a></li>
                        <li class="{{ Route::currentRouteName()=='getDepartment' ? 'active' : '' }}"><a href="{{ Route('getDepartment') }}">Add New</a></li>
                      </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                      <li class="{{ Route::currentRouteName()=='login' ? 'active' : '' }}"><a href="{{ Route('login') }}">Login</a></li>
                    @endif
                    @if(Auth::check())
                      <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> Logout</a>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!--Navbar End-->
