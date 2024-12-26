<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    {!! $description !!}
    {!! $comment !!}
<br/>
<br/>
<br/>
<br/>
@for($loop = 1; $loop <=10;$loop++)
    Hello, this loop is running {{ $loop }} times. <br/>
    <br/>
@endfor

</body>
</html>