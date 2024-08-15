<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<body>
<header>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="FeedMe Logo" class="logo">
        </div>
        <h1 class="h1">FeedMe</h1>
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

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form class="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit" class="login-button">Login</button>
    </form>
</body>
</html>

