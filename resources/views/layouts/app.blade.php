<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Navbar Section -->
    <div class="navbar" style="display: flex; align-items: center; justify-content: space-between; padding: 10px 20px; background-color: black; font-size: 20px; color: white;">
        <!-- Logo on the left -->
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/eventlogo.jpg') }}" alt="Event Logo" style="width: 80px; height: auto;" />
            </a>
        </div>
        <!-- Navigation links on the right -->
        <div class="nav-links">
            @if (Route::has('login'))
            @auth
            <div class="dropdown">
                <a href="#" 
                   class="dropdown-toggle" 
                   style="color: white; text-decoration: none; padding: 0 10px;" 
                   data-bs-toggle="dropdown" 
                   aria-expanded="false">
                    Hello! {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <!-- Logout option -->
                    <li>
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                           class="dropdown-item">
                            Logout
                        </a>
                        <!-- Hidden form for logout -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @else
                    <a href="{{ route('login') }}" style="color: white; text-decoration: none; padding: 0 10px;">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="color: white; text-decoration: none; padding: 0 10px;">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <!-- Main Content Section -->
    <main class="flex-grow py-4">
        @yield('content') <!-- This section will be populated with page-specific content -->
    </main>

    {{-- <!-- Footer Section -->
    <div class="footer" style="background-color: red; color: white; text-align: center; padding: 15px; font-size:18px; font-family:Gill Sans, 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
        <p>Event Management System &copy; 2024</p>
    </div> --}}

</body>
</html>
