<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

<h2>Edit Post</h2>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="title"
        value="{{ $post->title }}"
        placeholder="Title"
    >

    <br><br>

    <textarea name="content" rows="5">{{ $post->content }}</textarea>

    <br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('posts.index') }}">Back</a>

</body>
</html>
