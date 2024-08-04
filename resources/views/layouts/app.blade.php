{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                        <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</body>

</html> --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>

</head>


<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg"
        style="background: url('back/assets/images/bg-3.jpg');background-size: cover;background-position: center;">
    </div>

    <div class="wrapper-page account-page-full">

     @yield('content')

        <div class="m-t-40 text-center">
            <p class="account-copyright">2018 - 2019 © Highdmin. <span class="d-none d-sm-inline-block"> -
                    Coderthemes.com</span></p>
        </div>

    </div>



    <!-- jQuery  -->
    <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/waves.js') }}"></script>
    <script src="{{ asset('back/assets/js/jquery.slimscroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('back/assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('back/assets/js/jquery.app.js') }}"></script>

</body>

</html>