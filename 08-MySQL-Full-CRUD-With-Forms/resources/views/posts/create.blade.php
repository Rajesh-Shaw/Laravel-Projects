<form method="POST" action="{{ route('posts.store')}}">
    @csrf
    <input type="text" name="title" placeholder="Title" > <br><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea> <br><br>
    <button type="submit">Save</button>
</form>