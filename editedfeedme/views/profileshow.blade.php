<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
<header class="main-header">
    <div class="logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo">
    </div>
    <h1 class="h1">User Details</h1>
    <p class="slogan">Don't trash it, Share it</p>
</header>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<div class="user-details">
    <p><strong>Username:</strong> {{ $user->userName }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Location:</strong> {{ $user->userlocation }}</p>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
</div>
</body>
</html>
