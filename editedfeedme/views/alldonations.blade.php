<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Donations - FeedMe</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> <!-- Example CSS file -->
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('frontend/Images/logo.png') }}" alt="FeedMe Logo" class="logo">
        </div>
        <h1>FeedMe</h1>
        <p class="slogan">Don't trash it, Share it</p>
        <div class="user-auth">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
    </header>

    <div class="container">
        <h1>All Donations</h1>

        <!-- Check if there are any donations -->
        @if($donations->isEmpty())
            <p>No donations found.</p>
        @else
            <ul>
                @foreach($donations as $donation)
                    <li>
                        <strong>Item Name:</strong> {{ $donation->donationItemName }}<br>
                        <strong>Quantity:</strong> {{ $donation->donationQuantity }} {{ $donation->donationUnit }}<br>
                        <strong>Expiry Date:</strong> {{ $donation->donationExpiryDate }}<br>
                        <strong>Location:</strong> {{ $donation->donationLocation }}<br>
                    </li>
                    <hr> <!-- Add a horizontal line to separate donations -->
                @endforeach
            </ul>
        @endif
    </div>

    <footer class="main-footer">
        <p>&copy; 2024 FeedMe. All rights reserved.</p>
    </footer>
</body>
</html>
