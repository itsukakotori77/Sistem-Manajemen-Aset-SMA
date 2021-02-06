
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if(Auth::user()->avatar === '')
                <img alt="image" src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}&background=ffff&color=00000" class="rounded-circle mr-1" style="width: 40px;">
            @else 
                <img alt="image" src="{{ asset('assets/img/foto-user/' . Auth::user()->avatar) }}" class="rounded-circle mr-1" style="width: 40px;">
            @endif 
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->username }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ url('/user/' . Auth::user()->id . '/profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" onclick="logout()" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>