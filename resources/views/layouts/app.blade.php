<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Klinik</title>

    <!-- Styles -->

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top" style="text-align: center; margin-bottom: 5px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    <li><a href="/"><span class="fa fa-home"></span> Beranda</a></li>
                    @if (Auth::check())
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-users"></span> Pasien <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Pasien Baru</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-glass"></span> Apotik <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Penjualan Langsung</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-book"></span> Administrasi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Surat Sakit</a></li>
                    </ul>
                    </li>

                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-bar-chart"></span> Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Keuangan</a></li>
                    </ul>
                    </li>

                    @endif
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-briefcase"></span> Master Data<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="">Dokter</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="fa fa-wrench"></span> Setting <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">General</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="">About</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-user"></span> 
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Profil</a></li>
                                <li class="divider" role="separator"></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <footer>
        <div style="text-align: center;">
            {{config('app.name')}} V.{{config('app.version')}}
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/core.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
