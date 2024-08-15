
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedMe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/styles.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="{{ asset('/js/dropdown.js') }}"></script>
</head>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo">
        </div>
        <h1 class="h1">FeedMe</h1>
        <p class="slogan">Don't trash it, Share it</p>
        <div class="user-auth">
            <input type="text" placeholder="Search">
            <button>Search</button>
            <a href="{{ route('donations.create') }}">Donate</a>
            <!-- Logout button -->
<!-- Dropdown menu with logout button -->
 <img src="{{ asset('frontend/Images/user.png') }}" alt="">
<div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
            {{ optional(Auth::user())->userName }}

    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    <a class="dropdown-item" href="{{ route ('profile.show') }}">View Profile</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </div>
</div>
        </div>
    </header>
    <div class="image-container">
        <div class="image-text">
        <a href="{{ url ('donations.index') }}">View All Donations</a>

           
    <img id="household" src="{{ asset('frontend/Images/households.jpg') }}" alt="Households" width="400" height="400">

        </div>
        <div class="image-text">
        <p><a href="{{ url('/grocerydonations') }}">Grocery store</a></p>
            <img id = 'grocery-store'src="{{ asset('frontend/Images/grocery stores2.jpg') }}" alt="Grocery stores" width="400px" height="400px">
        </div>
        <div class="image-text">
        <p><a href="{{ url('/hospitalitydonations') }}">Hospitality Establishment</a></p>
            <img id = 'hospitality-establishment'src="{{ asset('frontend/Images/hotel.jpg') }}" alt="Hospitality establishments" width="400px" height="400px">
        </div>
    </div>

    <div class="educational-info">
        <p>Food waste reduction should be an aspect that every individual aims to incorporate in their lifestyle.
           Most people waste food without even realizing the impact it has on the environment and how much help it could be to the hungry population of the world.
           At FeedMe we aim to encourage individuals to reduce food waste by donating or giving surplus food to those in need. Together we will contribute to the betterment of society and fighting hunger.</p>
    </div>
   
    <footer>
        <ul>
        <div class="footer-nav">
            <a href="#"><img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo"></a>
            <p>FeedMe</p>
            <div class='footer-links'>
            <a href="{{ route ('about') }}">About Us</a>

            <p>Contact us</p>
        </div>
        <ul>
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
    
    <!--script src="{{ asset('/js/donations.js') }}"></script-->
</body>
</html>
