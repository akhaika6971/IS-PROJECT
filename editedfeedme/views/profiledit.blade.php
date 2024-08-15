<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
<header class="main-header">
    <div class="logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo">
    </div>
    <h1 class="h1">Update Profile</h1>
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

<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <label for="username">Username:</label>
    <input type="text" name="username" value="{{ old('username', $user->name) }}" required><br>

    <label for="location">Location:</label>
    <input type="text" name="location" value="{{ old('location', $user->location) }}" required><br>

    <button type="submit">Update Profile</button>
</form>
</body>
</html>
