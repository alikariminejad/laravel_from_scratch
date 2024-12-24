<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
</head>
<body>
@if($errors -> any())
    <ul>
    @foreach($errors -> all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
<form method="post" action="{{ route('posts.store') }}">
@csrf
<div>
    <label for="title">Title</label>
    <input type="text" maxlength="255" id="title" autofocus="autofocus" name="title">
</div>
<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="5"></textarea>
</div>
<div>
    <button type="submit">Submit</button>
</div>
</form>
</body>
</html>
