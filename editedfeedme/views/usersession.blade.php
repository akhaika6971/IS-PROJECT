<!DOCTYPE html>
<html>
<head>
    <title>User Session</title>
</head>
<body>
    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->userName }}!</p>
        <p>Your email: {{ Auth::user()->email }}</p>
    @else
        <p>You are not logged in.</p>
    @endif
</body>
</html>
