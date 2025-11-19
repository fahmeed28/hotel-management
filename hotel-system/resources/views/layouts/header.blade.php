<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Hotel System</title>
    {{-- css filse lik --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}


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
        
       /* Footer Full Styling */
.footer-section {
    background: #212529;
    color: #ddd;
    
}

.footer-title {
    color: #fff;
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 20px;
}

.footer-links,
.footer-contact {
    list-style: none;
    padding: 0;
}

.footer-links li,
.footer-contact li {
    margin-bottom: 8px;
}

.footer-links li a {
    color: #ddd;
    text-decoration: none;
    transition: 0.3s;
}

.footer-links li a:hover {
    color: #0d6efd;
}

.footer-contact li i {
    margin-right: 10px;
    color: #0d6efd;
}

.social-links a {
    color: #ddd;
    font-size: 20px;
    margin-right: 12px;
    transition: 0.3s;
}

.social-links a:hover {
    color: #0d6efd;
}

.footer-hr {
    border-top: 1px solid #444;
}

.footer-copy {
    font-size: 14px;
    color: #999;
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
    <div class="">
        @yield('content')
    </div>

    <!-- Footer -->
  <!-- Full Footer -->
<footer class="footer-section mt-5">
    <div class="container py-5">

        <div class="row">

            <!-- About Hotel -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">HotelSystem</h5>
                <p>
                    HotelSystem is a modern online platform where you can book rooms, view hotel details, and connect with customer support.
                </p>
                <div class="social-links mt-3">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ url('/rooms') }}">Rooms</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">Contact Us</h5>
                <ul class="footer-contact">
                    <li><i class="fa-solid fa-location-dot"></i> Lahore, Pakistan</li>
                    <li><i class="fa-solid fa-phone"></i> +92 300 1234567</li>
                    <li><i class="fa-solid fa-envelope"></i> support@hotelsystem.com</li>
                </ul>
            </div>
        </div>

        <hr class="footer-hr">

        <div class="text-center pt-2">
            <p class="footer-copy">
                &copy; {{ date('Y') }} HotelSystem. Designed by <strong>Fahmeed Shahzad</strong>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
