<nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto" name="fomr1">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" name="search1" id="search1" onchange="fom1.submit()" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                 
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
              
                <li class="dropdown ">
                    <a href="/"  class="nav-link  nav-link-lg beep"><i class="fa fa-home"></i></a>
                    
                </li>
                @auth
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{asset('storage/'.auth()->user()->image)}}" style="height: 30px !important; width: 30px !important;" class="rounded-circle mr-1 img-fluid">
                    <div class="d-sm-none d-lg-inline-block">Hi,{{auth()->user()->nom}} {{auth()->user()->prenom}}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="{{route('profileUser.show',auth()->user()->id)}}" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{Route('login.logout')}}" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>                    
                </li>
                @endauth
                @guest
                <li class="dropdown"><a href="{{route('login')}}" class="nav-link  nav-link-lg nav-link-user"><i class="fa fa-user mr-2"></i>login</a></li>
                @endguest
            </ul>
        </nav>