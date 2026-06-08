@props([
    'title' => 'Laracast',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>{{ $title }}</title>
    <style>
        .NewStile {
            max-width: 300px;
        }
        .card {
            background: #e3e3; 
            padding: 1rem; 
            text-align: center;
        }
    </style>
</head>
<body class="bg-gray-900 text-white"> <nav class="p-4 bg-gray-800 flex gap-4">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    
    <div class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        {{ $slot }}
    </div>
</body>
</html>