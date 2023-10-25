<nav class="navbar navbar-expand">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="header-left">

        </div>

        <ul class="navbar-nav header-right">
            <li class="nav-item dropdown header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                    <span class="mx-2">{{ auth()->user()->name }}</span>
                    <img src="{{asset(auth()->user()->photo)}}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}">
                        <i class="icon-key"></i>
                        <span class="ml-2">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
