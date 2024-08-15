<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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

    <form class="signup-form" action="{{ route('signup.register') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="userName" value="{{ old('username') }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>


        <label for="location">Location:</label>
        <input type="text" name="userlocation" value="{{ old('location') }}" required><br>
       
        <div class= "role">
        <label for="role" class="role-label">Role:</label>
        <select name="userRole" required >
            <option value="" disabled selected>Select your role</option>
            <option value="hospitality_establishment">Hospitality Establishment</option>
            <option value="user">User</option>
            <option value="grocery_store">Grocery Store</option>
            <option value="household">Household</option>
        </select><br>
        </div>
        <p class="login-link">Already have an account? <a href='/login'>Log in</a></p>
        <button type="submit" class="signup-button">Sign Up</button>
    </form>
</body>
</html>
