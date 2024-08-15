<!DOCTYPE html>
<html>
<head>
    <title>Add Donation</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
<header class="main-header">
    <div class="logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo">
    </div>
    <h1 class="h1">Add Donation</h1>
    <p class="slogan">Don't trash it, Share it</p>
</header>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<form class="signup-form" action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="donationImagepath">Image:</label>
    <input type="file" name="donationImagepath"><br>

    <label for="donationItemname">Item Name:</label>
    <input type="text" name="donationItemname" value="{{ old('donationItemname') }}" required><br>

    <label for="donationQuantity">Quantity:</label>
    <input type="number" name="donationQuantity" value="{{ old('donationQuantity') }}" required><br>

    <label for="donationUnit">Unit:</label>
    <input type="text" name="donationUnit" value="{{ old('donationUnit') }}" required><br>

    <label for="donationExpirydate">Expiry Date:</label>
    <input type="date" name="donationExpirydate" value="{{ old('donationExpirydate') }}" required><br>

    <label for="donationLocation">Location:</label>
    <input type="text" name="donationLocation" value="{{ old('donationLocation') }}" required><br>
    <select name="userRole" required>
            <option value="" disabled selected>Select your role</option>
            <option value="hospitality_establishment">Hospitality Establishment</option>
            <option value="user">User</option>
            <option value="grocery_store">Grocery Store</option>
            <option value="household">Household</option>
        </select><br>

    <button type="submit" class="signup-button">Add Donation</button>
</form>
</body>
</html>
