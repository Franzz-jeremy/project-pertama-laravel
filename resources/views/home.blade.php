<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center;
        }
        .welcome-card {
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Selamat Datang di Website Kami</h1>
            <p class="lead">Ini adalah tampilan sederhana menggunakan Laravel Blade dan Bootstrap.</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 welcome-card">
                <h3>Informasi</h3>
                <p>Ini adalah contoh halaman home sederhana yang dibuat dengan Blade template.</p>
                <p>Waktu saat ini: {{ now()->format('d M Y H:i') }}</p>
                @if(auth()->check())
                    <p>Selamat datang, {{ auth()->user()->name }}!</p>
                @else
                    <p><a href="{{ route('login') }}" class="btn btn-primary">Login</a></p>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-5">
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>