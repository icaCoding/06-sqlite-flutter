<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GOMBAL | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" type="image/png" sizes="180x90" href="/img/logos.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'" rel="stylesheet">

    <!-- Styles -->
    <link href='https://unpkg.com/boxicons@2.1.1/dist/boxicons.js' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  fixed-top navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo1.png') }}" width="100" height="50">
                </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>
                    <ul class="navbar-nav me-5">
                        <a class="nav-link" aria-current="page" href="{{url('tempatAnda')}}"><h5>Tempat Anda</h5></a>
                    </ul>
                    <ul class="navbar-nav me-5">
                        <a class="nav-link" href="{{url('tambahTempat')}}"><h5>Tambah Tempat</h5></a>
                    </ul>
                    <ul class="navbar-nav me-5">
                        <a class="nav-link" href="{{url('transaksi')}}"><h5>Transaksi</h5></a>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-primary"  type="submit">
                                    {{ __('Register') }}</button></a>
                                </li>
                            @endif

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-primary"  type="submit">
                                        {{ __('Login') }}</button>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu  dropdown-menu-dark dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}      <i class='bx bx-power-off bx-xs'></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main style="padding-top:6rem !important">
            @yield('content')
        </main>

        <footer class="row row-cols-7 py-5 my-2 border-top bg-primary">
        <div class="col"></div>
        <div class="col">
        <a href="/" class="d-flex align-items-center mb-1 link-dark text-decoration-none">
            <img src="{{ asset('img/logos.png') }}" width="200" height="100">
        </a>
        </div>

        <div class="col"></div>

        <div class="col">
        <h4 class="text-white">Ikuti Kami</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                <i class='bx bxl-facebook-circle bx-xs'></i> Facebook</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                            <i class='bx bxl-instagram bx-xs' ></i> Instagram</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
                            <i class='bx bxl-twitter bx-xs' ></i> Twitter</a>
            </li>
        </ul>
        </div>

        <div class="col">
        <h4 class="text-white">Bantuan</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Syarat & Ketentuan</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kebijakan Privasi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Status</a></li>
        </ul>
        </div>

        <div class="col">
        <h4 class="text-white">Contact</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">
                    <i class='bx bxl-whatsapp bx-xs' ></i> 0812-4982-541
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="" class="nav-link p-0 text-muted">
                    <i class='bx bxl-instagram bx-xs' ></i> @gombal
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">
                    <i class='bx bxs-map bx-xs'></i> Probolinggo
                </a>
            </li>
        </ul>
        </div>
        <div class="col"></div>
        </footer>
    </div>
</body>
</html>
