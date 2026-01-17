<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    @forelse ($posts as $post)
        <h3>{{ $post->title }}</h3>    

        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>

        <hr>
    @empty
        <p style="color:red;">
            No posts found. Please create a new post.
        </p>
    @endforelse


</body>
</html>