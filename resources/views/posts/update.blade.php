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
<form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" maxlength="255" id="title" autofocus="autofocus" name="title" value="{{old('title', $post -> title)}}">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{old('description', $post->description)}}</textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>
