<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FeedMe</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/styles.css') }}">
    <style>
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .about-container h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .about-container p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #333;
        }
    </style>
</head>
<body>
<header class="main-header">
        <div class="logo">
        <a href="#"><img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo"></a>
        </div>
        <h1 class="h1">FeedMe</h1>
        <p class="slogan">Don't trash it, Share it</p>
       
    </header>
    <div class="about-container">
        <h1>About Us</h1>
        <p>Welcome to FeedMe! Our mission is to reduce food waste and help those in need by connecting individuals and organizations with surplus food to those who can use it. We believe in a sustainable future where no food goes to waste and everyone has access to nutritious meals.</p>
        <p>Join us in our journey to make a positive impact on the environment and society. Together, we can make a difference!</p>
    </div>
</body>
</html>
