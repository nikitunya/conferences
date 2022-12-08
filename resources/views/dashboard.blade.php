<html>
<head>
    <title>Conferences</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    @guest()
        <h1 class="mt-4 mb-5 text-center">Conferences Management System</h1>
        @yield('content')
    @else
        <h1 class="mt-4 mb-5 text-center">Conferences Management System</h1>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Conferences</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Welcome, {{Auth::user()->email}}</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row flex-nowrap h-100">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </ul>
                    <ul class="nav flex-column">
                        <a class="nav-link" href="{{route('conference')}}">Conference</a>
                    </ul>
                    <ul class="nav flex-column">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    @endguest
    <script src="{{ asset('js/bootstrap.js')}}" ></script>
</body>
</html>
