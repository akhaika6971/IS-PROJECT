<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo">
        </div>
        <h1 class="h1">FeedMe</h1>
        <p class="slogan">Don't trash it, Share it</p>
    </header>

    <div class="container mt-5">
        <h2 class="mb-4">User Profile</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Username: {{ Auth::user()->name }}</h5>
                <p class="card-text">Email: {{ Auth::user()->email }}</p>
                <p class="card-text">Location: {{ Auth::user()->location }}</p>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <div class="footer-nav">
            <a href="#"><img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo"></a>
            <p>FeedMe</p>
            <p>Contact us</p>
            <p>About us</p>
            <div class="social-links">
                <a href="#"><img src="{{ asset('frontend/Images/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('frontend/Images/twitter.png') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ asset('frontend/Images/instagram.png') }}" alt="Instagram"></a>
            </div>
            <p>&copy;<span style="font-style: italic;">2024 FeedMe.</span></p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
