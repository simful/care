<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Simful Care</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/selectize/dist/css/selectize.bootstrap3.css">
    <link rel="stylesheet" href="/lib/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/lib/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/lib/moment/min/moment.min.js"></script>
    <script src="/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/lib/chart.js/dist/Chart.bundle.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.selectize-single').selectize();
            $('.datepicker').datetimepicker({
                format: 'YYYY-MM-DD'
            });
		});
	</script>
    @yield('scripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" id="main-menu">
            <div class="container">
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
                        <img src="/img/simfulcare-logo.png" class="brand">
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

                            <li>
                               <a href="{{ url('appointments') }}">
                                   <i class="fa fa-calendar"></i>
                                   Appointments
                               </a>
                           </li>


                            <li>
                               <a href="{{ url('patients') }}">
                                   <i class="fa fa-user"></i>
                                   Patients
                               </a>
                           </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-shopping-basket"></i>Store <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">Stock</li>

                                    <li>
                                        <a href="{{ url('products') }}">Products</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('stock') }}">Stock</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-money"></i>
                                    Accounting <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">Sales & Purchases</li>

                                    <li>
                                       <a href="{{ url('invoices') }}">
                                           <i class="fa fa-plane fa-icon"></i>
                                           Sales Invoices
                                       </a>
                                   </li>

                                    <li>
                                        <a href="{{ url('purchases') }}">
                                            <i class="fa fa-shopping-cart fa-icon"></i>
                                            Purchase Orders
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('expenses') }}">
                                            <i class="fa fa-credit-card fa-icon"></i>
                                            Expenses
                                        </a>
                                    </li>

                                    <li class="divider">

                                    <li>
                                        <a href="{{ url('contacts') }}">
                                            <i class="fa fa-address-book fa-icon"></i>
                                            Contacts
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('accounts') }}">
                                            <i class="fa fa-book fa-icon"></i>
                                            General Ledger
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('transactions') }}">
                                            <i class="fa fa-file-text-o fa-icon"></i>
                                            Journal
                                        </a>
                                    </li>

                                    <li class="divider">

                                    <li>
                                        <a href="{{ url('taxes') }}">
                                            <i class="fa fa-percent fa-icon"></i>
                                            Tax
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-line-chart"></i>
                                    Reports <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('reports/sales') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Sales Report
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/purchases') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Purchase Report
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/expenses') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Expense Report
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/stock') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Stock Report
                                        </a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{ url('reports/receivables') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Receivables Report
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/payables') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Payables Report
                                        </a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{ url('reports/income-statement') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Income Statement
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('reports/trial-balance') }}">
                                            <i class="fa fa-bar-chart fa-icon"></i>
                                            Balance Report
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                       <a href="{{ url('profile') }}">
                                           <i class="fa fa-user fa-icon"></i>
                                           Profile
                                       </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('settings') }}">
                                            <i class="fa fa-cog fa-icon"></i>
                                            Settings
                                        </a>
                                    </li>

                                    <li>
                                       <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out fa-icon"></i>
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

        @yield('content')
    </div>


</body>
</html>
