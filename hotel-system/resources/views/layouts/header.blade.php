<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Hotel System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Correct Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
        }
        .navbar-brand {
            font-weight: 700;
            color: #fff !important;
            letter-spacing: 1px;
        }
        .navbar-brand i {
            margin-right: 8px;
        }
        .nav-link {
            color: #f8f9fa !important;
            margin-left: 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }

        /* Footer Styling */
        
        footer {
            background-color: #212529;
            color: #ddd;
            padding: 5px 0;
            text-align: center;
        }
        footer a {
            color: #ddd;
            margin: 0 10px;
            font-size: 20px;
            transition: 0.3s;
        }
        footer a:hover {
            color: #0d6efd;
        }
        footer p {
            margin-top: 15px;
            font-size: 14px;
            color: #aaa;
        }

        /* Page Container */
        .page-container {
            min-height: 80vh;
            padding-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa-solid fa-hotel"></i> Hotel<span style="color:#ffc107;">System</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><i class="fa-solid fa-circle-info"></i> About</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                    <li class="nav-item"><a href="{{ url('/rooms') }}" class="nav-link"><i class="fa-solid fa-bed"></i> Rooms</a></li>

                    <!-- Account Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container page-container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            {{-- <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div> --}}
            <p>&copy; {{ date('Y') }} | Designed by <strong>Fahmeed Shahzad</strong>. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
