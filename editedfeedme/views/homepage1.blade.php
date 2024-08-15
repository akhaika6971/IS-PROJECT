
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedMe</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo">
        </div>
        <h1 class="h1">FeedMe</h1>
        <p class="slogan">Don't trash it, Share it</p>

        <div class="user-auth">
           
            <a href="{{ url('login') }}" class='custom-button'>Login</a>
            <a href="{{ url('signup') }}" class='custom-button'>Sign Up</a>
        </div>
    </header>

    <div class="homepage">
        <div class="homeimage">
            <img src="{{ asset('frontend/images/dontwaste.jpg') }}" alt="Food Waste" class="foodwaste">
        </div>

        <div class="educational-info1">
            <p>Food waste reduction should be an aspect that every individual aims to incorporate in their lifestyle.
                 Most people waste food without even realizing the impact it has on the environment and how much help it could be to the hungry population of the world.
                At FeedMe, we aim to encourage individuals to reduce food waste by donating or giving surplus food to those in need. Together we will contribute to the betterment of society and join hands to eradicate hunger.</p>
        </div>
    </div>

    <footer>
        <div class="footer-nav">
            <a href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo"></a>
            <p>FeedMe</p>
            <p>Contact us</p>
            <p>About us</p>
            <div class="social-links">
            <a href="#"><img src="{{ asset('frontend/Images/facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('frontend/Images/twitter.png') }}" alt="Twitter"></a>
            <a href="#"><img src="{{ asset('frontend/Images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <p>&copy; <span style="font-style: italic;">2024 FeedMe.</span></p>
        </div>

        
    </footer>
</body>
</html>

