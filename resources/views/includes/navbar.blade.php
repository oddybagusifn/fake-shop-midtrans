<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><img src="{{asset('assets/ndesign.png')}}" class="pe-2" alt="Logo" width="160px"></a>
                </li>

            </ul>
            @auth
                <div class="dropdown">
                    <button class="btn1 dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('transactions') }}">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>

                    </ul>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn-outline-custom me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn-outline-custom">Register</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

