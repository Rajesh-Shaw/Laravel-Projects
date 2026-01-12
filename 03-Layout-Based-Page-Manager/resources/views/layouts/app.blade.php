<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Page Manager')</title>
</head>
<body>
    <header>
        <h2>Page Manager System</h2>
        @include('partials.navbar')
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>