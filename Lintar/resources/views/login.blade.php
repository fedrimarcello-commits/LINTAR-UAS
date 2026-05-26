<!DOCTYPE html>
<html>
<head>
    <title>Login Lintar</title>
</head>
    <body>
    <h1>Login</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('Error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf 
        Email: <br>
        <input type="email" name="email" required><br><br>
        Password: <br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Masuk</button>
    </form>
    
    </body>
</html>