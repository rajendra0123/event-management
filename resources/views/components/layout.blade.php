<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Set background color to white and text color to black for contrast */
        body {
            background-color: white;
            color: black;
        }

        /* Flex container for navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: black;
            font-size: 20px;
        }

        /* Logo styling */
        .logo img {
            width: 80px;
            height: auto;
        }

        /* Navigation link styling */
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0 10px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: gray;
        }

        /* Footer styling */
        .footer {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: red;
            font-size: 18px;
            text-align: center;
            padding: 15px;
            color: white;
        }
    </style>
</head>
<body class="font-sans">
    <!-- Navbar Section -->
    <div class="navbar">
        <!-- Logo on the left -->
        <div class="logo">
            <a href="/">
            <img src="{{ asset('images/eventlogo.jpg') }}" alt="Event Logo"/>
        </a>
        </div>
        <!-- Navigation links on the right -->
        <div class="nav-links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <!-- Content Section -->
    <div class="content">
        {{ $slot }}
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Event Management System &copy; 2024</p>
    </div>
</body>
</html>
