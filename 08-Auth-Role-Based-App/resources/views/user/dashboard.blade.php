
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>User Dashboard</h1>

    <p>Welcome, {{ auth()->user()->name }}</p>

    <a href="/profile">Edit Profile</a><br><br>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
