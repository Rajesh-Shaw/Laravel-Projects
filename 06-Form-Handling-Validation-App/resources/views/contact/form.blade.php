<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>

    @if($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('contact.submit')}}">
        @csrf

        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br><br>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br><br>
        <textarea name="message" placeholder="Message" id="" cols="30" rows="10">{{ old('message') }}</textarea><br><br>
        <button type="submit">Send</button>

    </form>
</body>
</html>