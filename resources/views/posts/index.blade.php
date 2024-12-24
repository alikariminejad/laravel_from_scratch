<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Posts</title>
</head>
<body>
<h1>Posts</h1>
<li>
    @if($posts -> count()>0)
        @foreach($posts as $post)
            <li>
                <div>
                    <h3>{{ $post -> title }}</h3>
                    <p>{{ $post -> description }}</p>
                    <a href="{{ route('posts.edit', ['post'=>$post -> id]) }}">Edit</a>
                    <form method="post" action="{{ route('posts.destroy', ['post' => $post -> id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    @endif
</li>
</body>
</html>
