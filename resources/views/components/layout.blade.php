@props([
    'title' => 'Laracast',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <div class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        {{ $slot }}
    </div>
</body>
</html>