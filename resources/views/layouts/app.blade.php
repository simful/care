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
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" id="main-menu">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/simful-logo.png" class="brand">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @if (Auth::check())
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-md"></i>Dokter <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Jadwal Kunjungan Pasien</a>
                                    </li>

                                    <li>
                                        <a href="#">Assess Pasien</a>
                                    </li>

                                    <li>
                                        <a href="#">Resep</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-handshake-o"></i>
                                    Resepsionis <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Pendaftaran</a>
                                    </li>

                                    <li>
                                        <a href="#">Antrian Pasien</a>
                                    </li>

                                    <li>
                                        <a href="#">Surat Sakit</a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="#">Pengambilan Obat</a>
                                    </li>


                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-money"></i>
                                    Keuangan <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li class="dropdown-header">Transaksi</li>
                                    <li>
                                        <a href="#">Sales Invoices</a>
                                    </li>

                                    <li>
                                        <a href="#">Purchase Orders</a>
                                    </li>

                                    <li>
                                        <a href="#">Expenses</a>
                                    </li>

                                    <li class="divider"></li>
                                    <li class="dropdown-header">Accounting</li>
                                    <li>
                                        <a href="#">Buku Besar</a>
                                    </li>

                                    <li>
                                        <a href="#">Jurnal</a>
                                    </li>

                                    <li>
                                        <a href="#">Pajak</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-archive"></i>
                                    Data & Inventaris <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Data Pasien</a>
                                    </li>

                                    <li>
                                        <a href="#">Data Dokter & Staff</a>
                                    </li>

                                    <li>
                                        <a href="#">Data Obat</a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="#">Stok Obat</a>
                                    </li>

                                    <li>
                                        <a href="#">Stok Alat Kesehatan</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-line-chart"></i>
                                    Laporan <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('reports/sales') }}">Sales Report</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/purchases') }}">Purchase Report</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/expenses') }}">Expense Report</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/stock') }}">Stock Report</a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{ url('reports/receivables') }}">Receivables Report</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/payables') }}">Payables Report</a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{ url('reports/income-statement') }}">Income Statement</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/trial-balance') }}">Balance Report</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-cog"></i>
                                    Pengaturan
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('profile') }}">Profil</a>
                                    </li>

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
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>

    </div>
    <footer>
        <div style="text-align: center;">
            {{config('app.name')}} V.{{config('app.version')}}
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
