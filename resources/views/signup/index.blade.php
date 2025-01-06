<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
</head>
<body>
<form action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{old('name')}}">
    <label>Your name</label>

    <input type="email" name="email" value="{{old('email')}}">
    <label>Your Email</label>

    <input type="password" name="password">
    <label>Your Password</label>

    <input type="password" name="password_confirmation">
    <label>Your Password again</label>

    <button type="submit">Register</button>

</form>
</body>
</html>
