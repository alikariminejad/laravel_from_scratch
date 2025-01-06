<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
</head>
<body>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div role="alert">
            <h4>Error!</h4>
            <div>
                {{ $error }}
            </div>
        </div>
@endif


<form action="{{ route('register') }}" method="post">
    @csrf
    <label>Your name</label>
    <input type="text" name="name" value="{{old('name')}}">

    <label>Your Email</label>
    <input type="email" name="email" value="{{old('email')}}">

    <label>Your Password</label>
    <input type="password" name="password">

    <label>Your Password again</label>
    <input type="password" name="password_confirmation">


    <button type="submit">Register</button>

</form>
</body>
</html>
