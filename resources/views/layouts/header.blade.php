<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="/"><img src="{{URL::asset('favicon/favicon.png')}}" class="header-img" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/relogreat">Relogreat+</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <div class="dropdown">
                        <button class="btn dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li><button class="dropdown-item @if (Auth::user()->ispremium == 0)
                                disabled
                            @endif" type="button" data-bs-toggle="modal"
                                    data-bs-target="#reloCommunityModal">Relogreat+ Community</button></li>
                            <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                    data-bs-target="#modalStatus">Change Status</button></li>
                            <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                    data-bs-target="#userModal">Change Profile</button></li>
                        </ul>
                    </div>
                    @if(Str::endsWith(Auth::user()->email, '@relocate.com'))
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item" type="button" href="/admin-city">City List</a></li>
                                <li><a class="dropdown-item" type="button" href="/admin-transaction">Transaction List</a></li>
                            </ul>
                        </div>
                    @endif
                @endguest

            </ul>
            <form class="d-flex" method="GET" action="/search">
                <input class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search" name="city">
                <button class="btn btn-search" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    @guest
    @else
    <!-- Modal Relogreat Community -->
    @include('layouts.relogreatmodal')

    <!-- Modal Status -->
    @include('layouts.statusmodal')

    @include('layouts.usermodal')
    @endguest


</nav>

