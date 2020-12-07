@section('nav')

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Deans</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <div class="dropdown  dropleft">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i> 
                @if (auth()->check()){{ auth()->user()->name }}
                @endif
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @if( auth()->check())
                        <a class="dropdown-item">Hi {{ auth()->user()->name }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"href="/logout">Log Out</a>
                    @else
                        <a class="dropdown-item" href="/login">Log In</a>
                        <a class="dropdown-item" href="/register">Register</a>
                    @endif
                </div>
          </div>
        
    </ul>
</nav>