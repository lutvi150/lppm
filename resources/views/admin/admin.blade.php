<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')- LPPM admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('styleassets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    @yield('style')
</head>
<body>

    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>

   <!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">LPPM</a>
                <a class="navbar-brand hidden" href="./">L</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt "></i><span class="ml-4"> Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Penelitian</h3><!-- /.menu-title -->
                    <li class="{{ request()->is('penelitian') ? 'active' : '' }}">
                        <a href="{{ route('penelitian') }}"><i class="fa fa-search"></i> <span class="ml-4"> Data Penelitian</span></a>
                    </li>
                    <h3 class="menu-title">Data Pengabdian</h3><!-- /.menu-title -->
                    <li class="{{ request()->is('pengabdian') ? 'active' : '' }}">
                        <a href="{{ route('pengabdian') }}"><i class="fa fa-search"></i> <span class="ml-4"> Data Pengabdian</span></a>
                    </li>
                    <h3 class="menu-title">Majalah</h3><!-- /.menu-title -->
                    <li class="{{ request()->is('majalahinternal') ? 'active' : '' }}">
                        <a href="{{ route('majalahinternal') }}"><i class="fa fa-book"></i> <span class="ml-4"> Majalah Internal</span></a>
                    <li class="{{ request()->is('majalaheksternal') ? 'active' : '' }}">
                        <a href="{{ route('majalaheksternal') }}"><i class="fa fa-book"></i> <span class="ml-4"> Majalah Eksternal</span></a>
                    </li>

                    <h3 class="menu-title">PROSIDING & TUGAS AKHIR</h3><!-- /.menu-title -->
                    <li class="{{ request()->is('prosiding') ? 'active' : '' }}">
                        <a href="{{ route('prosiding') }}"><i class="fa fa-scroll"></i> <span class="ml-4"> Prosiding</span></a>
                    </li>
                    <li class="{{ request()->is('tugas_akhir') ? 'active' : '' }}">
                        <a href="{{ route('tugas_akhir') }}"><i class="fa fa-scroll"></i> <span class="ml-4"> Tugas Akhir</span></a>
                    </li>
                    <h3 class="menu-title">ACCOUNT</h3><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('logout') }}"><i class="fa fa-user"></i> <span class="ml-4"> Logout</span></a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>

                        </div>

        </div>
    </div>
</div>
  <!-- /header -->
@yield('breadcrumbs')
@yield('content')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
@stack('js')
</html>
